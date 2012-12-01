<?php // $Id:$

// serendipity_event_verify.php,v 1.08 2012/12/01 13:57:00 ian Exp 

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

// Probe for a language include with constants. Still include defines later on, if some constants were missing
$probelang = dirname(__FILE__) . '/' . $serendipity['charset'] . 'lang_' . $serendipity['lang'] . '.inc.php';
if (file_exists($probelang)) {
    include $probelang;
}

include dirname(__FILE__) . '/lang_en.inc.php';

class serendipity_event_verify extends serendipity_event
{
    function introspect(&$propbag) {
        global $serendipity;

        $propbag->add('name',          PLUGIN_VERIFY_NAME);
        $propbag->add('description',   PLUGIN_VERIFY_DESCRIPTION);
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Ian (Timbalu)');
        $propbag->add('version',       '1.08');
        $propbag->add('requirements',  array(
            'serendipity' => '0.8',
            'smarty'      => '2.6.7',
            'php'         => '5.1.0'
        ));
        $propbag->add('event_hooks',
            array(
                'backend_sidebar_entries' => true,
                'backend_sidebar_entries_event_display_verify' => true,
                'css_backend' => true
            )
        );

        $propbag->add('groups', array('BACKEND_FEATURES'));
    }

    function generate_content(&$title) { 
        $title = PLUGIN_VERIFY_ADMIN_NAME;
    }
    
    function event_hook($event, &$bag, &$eventData, $addData = null) {
        global $serendipity;

        $hooks = &$bag->get('event_hooks');
        
        $serendipity['plugin_verify_version'] = &$bag->get('version');
        
        if (isset($hooks[$event])) {
            switch($event) {
                case 'backend_sidebar_entries':
                    
                    // forbid sidebar link if user is not in admin group level
                    if ($serendipity['serendipityUserlevel'] < USERLEVEL_ADMIN) {
                        return false;
                    }
                    echo '<li class="serendipitySideBarMenuLink serendipitySideBarMenuEntryLinks"><a href="?serendipity[adminModule]=event_display&serendipity[adminAction]=verify">' . PLUGIN_VERIFY_ADMIN_NAME . '</a></li>';
                    
                    return true;
                    break;

                case 'backend_sidebar_entries_event_display_verify':
                    
                    // forbid entry access if user is not in admin group level
                    if ($serendipity['serendipityUserlevel'] < USERLEVEL_ADMIN) {
                        return false;
                    }
                    /* show backend administration menu */
                    $this->backend_verify_menu();
                    
                    return true;
                    break;

                case 'css_backend':
                    if (stristr($eventData, '#backend_verify_wrapper')) {
                        // class exists in CSS, so a user has customized it and we don't need default
                        return true;
                    }
?>

      #backend_verify_wrapper {
        margin: 5px auto 5px auto;
        font: 500 11px/16px Verdana,Arial,Helvetica,sans-serif; 
        border: 0 none; background: 0 none;
        text-align: left;
      }
      #backend_verify_wrapper h4,
      #backend_verify_wrapper .serendipity_admin_title {
        margin-top: 80px;
        text-decoration: underline;
      }
      #backend_verify_wrapper .serendipity_admin_title {
        /* sets the checksumtitle to be as h4 */
        font-size: 125%;
        font-weight: bold;
      }
      #backend_verify_wrapper .serendipityAdminMsgError {
        text-align: left;
      }
      .backend_verify_blue { font-weight: normal; }
      div.backend_verify_nav { float: right; background-color: #EEEEEE; background: -moz-linear-gradient(top, #EEEEEE, #5792d8); width: 24em; margin: 1em auto; border: solid; }
      div.backend_verify_nav ul li#active { border-bottom: 1px solid #888; background-color: #FFD700; background: -moz-linear-gradient(left 20deg, #E0E0E0, #D5BFC0); }
      div.backend_verify_menu { background-color: #F0F0F0; background: -moz-linear-gradient(left 20deg, #F0F0F0, #5792d8); border: 1px solid #777; padding: 0 0 0 20px; }
      div.backend_verify_head { background-color:#D5BFC0; background: -moz-linear-gradient(left 20deg, #D5BFC0, #F0F0F0); border:1px solid red; margin:20px 0 0 0px; padding: 4px 20px; float:left; }
      img.backend_attention { width: 22px; height: 22px; border: 0 none; padding-right: 4px; vertical-align: middle; }
      
<?php
                    return true;
                    break;

                default:
                   return false;
           }
        }
    }


    /**
     * main admin backend function
     * 
     * switch to selected navigation parts of $serendipity['GET']['verifycategory']
     * parts: view core, view additional files, possible infected files
     *
     **/
    function backend_verify_menu() { 
        global $serendipity;
        
        // increase memory limit
        @ini_set('memory_limit', '128M');

        // no time limit
        @set_time_limit(0);

        $attention  = '<img class="backend_attention" src="' . $serendipity['serendipityHTTPPath'] . 'templates/default/admin/img/admin_msg_note.png" alt="" />';
        $verifycat  = !empty($serendipity['GET']['verifycategory']) ? $serendipity['GET']['verifycategory'] : $serendipity['POST']['verifycategory'];
        
        echo "\n<div id='backend_verify_wrapper'>\n\n";
        
        echo '<div class="backend_verify_menu"><h3>'. sprintf(PLUGIN_VERIFY_ADMIN_NAME_MENU,  $serendipity['plugin_verify_version']) .'</h3></div>'."\n";

        if (!isset($serendipity['POST']['verifyadmin'])) { 
            echo '
<div class="backend_verify_nav">
<ul>
<li '.(@$serendipity['GET']['verifycategory'] == 'core' ? 'id="active"' : '').'><a href="'.$serendipity['serendipityHTTPPath'].'serendipity_admin.php?serendipity[adminModule]=event_display&amp;serendipity[adminAction]=verify&amp;serendipity[verifycategory]=core">'.PLUGIN_VERIFY_ADMIN_NAV_CORE.'</a></li>
';
            echo '
<li '.(((@$serendipity['GET']['verifycategory'] == 'exfiles' || @$serendipity['POST']['verifycategory'] == 'exfiles') && @$serendipity['POST']['verify_category'] != 'exfiles') ? 'id="active"' : '').'><a href="'.$serendipity['serendipityHTTPPath'].'serendipity_admin.php?serendipity[adminModule]=event_display&amp;serendipity[adminAction]=verify&amp;serendipity[verifycategory]=exfiles">'.PLUGIN_VERIFY_ADMIN_NAV_EXFILES.'</a></li>
<li '.(((@$serendipity['GET']['verifycategory'] == 'infiles' || @$serendipity['POST']['verifycategory'] == 'infiles') && @$serendipity['POST']['verify_category'] != 'infiles') ? 'id="active"' : '').'><a href="'.$serendipity['serendipityHTTPPath'].'serendipity_admin.php?serendipity[adminModule]=event_display&amp;serendipity[adminAction]=verify&amp;serendipity[verifycategory]=infiles">'.PLUGIN_VERIFY_ADMIN_NAV_INFILES.'</a></li>
</ul>
</div>
            '."\n";
        }
        
        if(!$verifycat && empty($verifycat) ) { 
            echo '<br />
<span class="serendipityAdminMsgNote">' . PLUGIN_VERIFY_ADMIN_TIME_DESC . '</span>
            '."\n";
        }
        
       
        /* check for REQUESTS, integrity check core files, missing core files, added none core files, infected php files */
        switch($verifycat) { 
        
            case 'core':
            
                echo '<div class="backend_verify_head"><h3>' . PLUGIN_VERIFY_ADMIN_CORE . '</h3></div><br />'."\n";
                
                /* view core checksum files */
                if(false === $this->verifyChecksumsFiles($attention)) { 
                    echo '<span class="serendipityAdminMsgNote">' . $attention . ' ' . PLUGIN_VERIFY_ADMIN_CHECKSUMS_EMPTY . '</span>';
                }
                
                return true;
                break;

            case 'exfiles':

                echo '<div class="backend_verify_head"><h3>' . sprintf(PLUGIN_VERIFY_ADMIN_EXFILES, $serendipity['version']) . '</h3></div><br />'."\n";
                
                /* view additional files core vs this installation files */
                if(false === $this->verifyExFiles($attention)) { 
                    echo '<div class="serendipity_admin_title">' . INTEGRITY . '</div>';
                    if (!is_readable(S9Y_INCLUDE_PATH . 'checksums.inc.php')) {
                        echo '<span class="serendipityAdminMsgNote">' . $attention . ' ' . CHECKSUMS_NOT_FOUND . '</span>';
                        return;
                    }
                    echo '<span class="serendipityAdminMsgNote">' . $attention . ' ' . PLUGIN_VERIFY_ADMIN_CHECKSUMS_EMPTY . '</span>';
                }
                
                return true;
                break;
                
            case 'infiles':

                echo '<div class="backend_verify_head"><h3>' . sprintf(PLUGIN_VERIFY_ADMIN_INFILES, $serendipity['version']) . '</h3></div><br />'."\n";
                
                /* view additional *.php files core vs this installation files including badsums array and find infected strings in content */
                if(false === $this->verifyExFiles($attention, true)) { 
                    echo '<div class="serendipity_admin_title">' . INTEGRITY . '</div>';
                    if (!is_readable(S9Y_INCLUDE_PATH . 'checksums.inc.php')) {
                        echo '<span class="serendipityAdminMsgNote">' . $attention . ' ' . CHECKSUMS_NOT_FOUND . '</span>';
                        return;
                    }
                    echo '<span class="serendipityAdminMsgNote">' . $attention . ' ' . PLUGIN_VERIFY_ADMIN_CHECKSUMS_EMPTY . '</span>';
                }
                
                return true;
                break;
                
            default:
               return false;
        }
        echo "\n</div>\n\n";
    }
    
    function verifyExFiles($attention='', $infected=false) {
        global $serendipity;

        // Load the checksums
        $f = S9Y_INCLUDE_PATH . 'checksums.inc.php';
    
        if (!file_exists($f) || filesize($f) < 1) {
            return false;
        }

        require_once $f;

        if (!is_array($serendipity['checksums_' . $serendipity['version']])) {
            return false;
        }

        $dir   = (string)$serendipity['serendipityPath'];
        $diff  = $this->verifyAllFiles($dir, $dir);
        $trans = array_flip($diff);
        
        if($infected) { 
            // get the bad checksum file array to include to the output array
            $chgdcores = array();
            if(function_exists('serendipity_verifyFTPChecksums')) $chgdcores = serendipity_verifyFTPChecksums();
            
            $files = array_diff_key($trans, $serendipity['checksums_' . $serendipity['version']]);
            
            // merge the wrong checksum core files into array
            $exfiles = array_merge($chgdcores, $files);

            // partial string to search for
            $eval_str = array('<iframe', 'fpassthru', 'exec(', 'eval(', 'eval(base64_decode');

            $badfiles = $this->verifyHackedFiles( $exfiles, $eval_str );
            if(is_array($badfiles)) $badfiles = @array_flip($badfiles);
            
            if (is_array($badfiles) && !empty($badfiles)) { 
                echo '<h4>' . PLUGIN_VERIFY_ADMIN_ADD_HEAD_INFECTED . '</h4>';
                $this->show_verified_files($badfiles, $dir);
                echo "<span class='serendipityAdminMsgError'>" . $attention . ' ' . sprintf(PLUGIN_VERIFY_ADMIN_ADD_DESC_INFECTED, implode(' <em style="color:red">'.PLUGIN_VERIFY_OR.'</em> ',str_replace('<', '&lt;',$eval_str)) ) ."</span>\n";
                echo '<br />[ ' . PLUGIN_VERIFY_ADMIN_ADD_EXCEPTIONS . ' ]';
            } else { 
                echo '<h4>' . PLUGIN_VERIFY_ADMIN_ADD_HEAD_INFECTED . '</h4>';
                echo sprintf('<span class="serendipityAdminMsgNote">' . $attention . ' ' . PLUGIN_VERIFY_ADMIN_ADD_NONE_INFECTED.'</span>', implode(' <em style="color:red">'.PLUGIN_VERIFY_OR.'</em> ',str_replace('<', '&lt;',$eval_str)) ); 
                echo '<br />[ ' . PLUGIN_VERIFY_ADMIN_ADD_EXCEPTIONS . ' ]';
            }
        } else {
            #$result = array_diff_key($serendipity['checksums_' . $serendipity['version']], $trans) + array_diff_key($trans, $serendipity['checksums_' . $serendipity['version']]);
            
            echo '<h4>' . PLUGIN_VERIFY_ADMIN_ADD_HEAD_CORE . '</h4>';
            $result1 = array_diff_key($serendipity['checksums_' . $serendipity['version']], $trans);
            $this->show_verified_files($result1, $dir);
        
            echo '<h4>' . PLUGIN_VERIFY_ADMIN_ADD_HEAD_EX . '</h4>';
            $result2 = array_diff_key($trans, $serendipity['checksums_' . $serendipity['version']]);
            $this->show_verified_files($result2, $dir, false);
        } 
    }
    
    /* ToDo: have some sort of newline break after a dir - any idea? */
    function show_verified_files($filearray, $dir, $show=true) { 
        if(is_array($filearray) && !empty($filearray) ) { 
            echo "<ul>\n";
            foreach($filearray AS $k => $v) { 
                if (($file = file_exists($dir . $k)) !== false) {
                    echo "<li>filename: <strong>$k</strong> : <br />
                    filetype: <span class='backend_verify_blue'>" . @filetype($dir . $k) . "</span>, was last modified: 
                    <span class='serendipityAdminMsgError'>" . date ("F d Y H:i:s.", @filemtime($dir . $k)) . "</span></li>\n";
                } else {
                    if($show) echo "<li><span class='backend_verify_blue'>Missing file</span>: <strong>$k</strong></li>\n";
                }
            }
            echo "</ul>\n";
        }
    }

    function verifyAllFiles($dir, $startdir) { 
        $files = array();
        $file_tmp = glob($dir."{*,.htaccess}", GLOB_BRACE | GLOB_MARK | GLOB_NOSORT);
        
        if(empty($file_tmp)) return (string)$file_tmp;
        
        if(!is_array($file_tmp)) { 
            echo "Please use PHP 5.1 and up to use this service!";
            return;
        } 
        foreach((array)$file_tmp as $item) { 
            if(substr($item,-1) != DIRECTORY_SEPARATOR) { 
                $item = rtrim(str_replace("\\", "/", $item), '/');
                $files[] = str_replace($startdir, '', $item);
            } else {
                $files = array_merge($files, (array)$this->verifyAllFiles($item, $startdir));
            }
        }
        return $files;
    }


    function verifyChecksumsFiles($attention) { 
        global $serendipity;
        $badsums = array();
        
        if(function_exists('serendipity_verifyFTPChecksums')) $badsums = serendipity_verifyFTPChecksums();
        
        echo '<div class="serendipity_admin_title">' . INTEGRITY . '</div>';
        
        if (!is_readable(S9Y_INCLUDE_PATH . 'checksums.inc.php')) {
            echo '<span class="serendipityAdminMsgNote">' . $attention . ' ' . CHECKSUMS_NOT_FOUND . '</span>';
            return;
        }
        if ( @filesize(S9Y_INCLUDE_PATH . 'checksums.inc.php') < 1 || !is_array($serendipity['checksums_' . $serendipity['version']]) ) { 
            return false;
        }
        
        if (count($badsums) == 0) {
            echo '<span class="serendipityAdminMsgSuccess">' . CHECKSUMS_PASS . '</span>';
        } else {
            echo '<ul>';
            foreach ($badsums as $rpath => $calcsum) {
                echo '<li class="serendipityAdminMsgError">' . sprintf('<span class="backend_verify_blue">'.CHECKSUM_FAILED.'</span>', '<strong>'.$rpath.'</strong>') . '</li>';
            }
            echo '</ul><br />';
            echo '<span class="serendipityAdminMsgNote">' . $attention . ' ' . CHECKSUM_FAILED_ABOUT . '</span>';
        }
    }
    
    /* functionize strpos needles array to string */
    function strpos_array($haystack, $needles) {
        foreach ($needles as $str) {
            if(($pos = stripos($haystack, $str, 0) !== false ) ) return $pos; // works case-insensitive
        }
    }
    
    function verifyHackedFiles( $ifiles, $needle ) {
        static $exclude_files = null;
        if($exclude_files === null) {
            $exclude_files = array( 
                                'plugins/serendipity_event_autotitle/serendipity_event_autotitle.php',
                                'plugins/serendipity_event_autoupdate/serendipity_event_autoupdate.php',
                                'plugins/serendipity_event_babelfish/serendipity_event_babelfish.php',
                                'plugins/serendipity_event_dashboard/serendipity_event_dashboard.php',
                                'plugins/serendipity_event_galleryimage/serendipity_event_galleryimage.php',
                                'plugins/serendipity_event_geshi/geshi/php.php',
                                'plugins/serendipity_event_gravatar/serendipity_event_gravatar.php',
                                'plugins/serendipity_event_ljupdate/serendipity_event_ljupdate.php',
                                'plugins/serendipity_event_mimetex/latexrender/class.latexrender.php',
                                'plugins/serendipity_event_mobile_output/wurfl/wurfl_parser.php',
                                'plugins/serendipity_event_motm/serendipity_event_motm.php',
                                'plugins/serendipity_event_openid/PHP-openid/Services/Yadis/ParanoidHTTPFetcher.php',
                                'plugins/serendipity_event_openid/PHP-openid/Services/Yadis/XML.php',
                                'plugins/serendipity_event_phoneblogz/xmlrpc.inc'.
                                'plugins/serendipity_event_plogpdf/gif.php',
                                'plugins/serendipity_event_recaptcha/recaptcha/recaptchalib.php',
                                'plugins/serendipity_event_spamblock_bayes/serendipity_event_spamblock_bayes.php',
                                'plugins/serendipity_event_spamblock_bee/json/JSON.php',
                                'plugins/serendipity_event_spartacus/serendipity_event_spartacus.php',
                                'plugins/serendipity_event_template_editor/serendipity_event_template_editor.php',
                                'plugins/serendipity_event_verify/serendipity_event_verify.php',
                                'plugins/serendipity_event_wrapurl/serendipity_event_wrapurl.php',
                                'plugins/serendipity_event_xmlrpc/PEAR/XML/RPC.php',
                                'plugins/serendipity_plugin_flickr/phpFlickr/PEAR/PEAR.php',
                                'plugins/serendipity_plugin_flickr/phpFlickr/PEAR/DB/pgsql.php',
                                'plugins/serendipity_plugin_heavyrotation/lib/coverfetcher.php',
                                'plugins/serendipity_plugin_heavyrotation/lib/helper/aws_signed_request.php',
                                'plugins/serendipity_plugin_smiletag/serendipity_plugin_smiletag.php',
                                'plugins/serendipity_plugin_twitter/serendipity_event_twitter.php',
                                'plugins/serendipity_plugin_twitter/twitteroauth/twitteroauth.php',
                                'include/functions_images.inc.php',
                                /*unstable*/'tests/coverage/phpunit_coverage.php');
        }
        foreach ($ifiles AS $file => $key) { 
            if( (substr($file, -4) == '.php' || substr($file, -4) == '.htm') && is_writable($file) && false === in_array($file, $exclude_files)) { 
                $haystack = file_get_contents($file);
                $haystack = str_replace(array("\r\n", "\r", "\n", "\t", "\s", " "), '', $haystack);
                if($this->strpos_array($haystack, $needle)) { 
                    $files[] = $file;
                }
            }
        }
        return $files;
    }
}
