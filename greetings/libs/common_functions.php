<?php

/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebook https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */

function debugResults($var, $strict = false) {
    if ($var != NULL) {
        if ($strict == false) {

            if (is_array($var) || is_object($var)) {
                echo "<pre>";
                print_r($var);
                echo "</pre>";
            } else {
                echo $var;
            }
        } else {

            if (is_array($var) || is_object($var)) {
                echo "<pre>";
                var_dump($var);
                echo "</pre>";
            } else {
                var_dump($var);
            }
        }
    } else {
        var_dump($var);
    }
}

function db_prepare_input($string) {
    return trim(addslashes($string));
}

function errorMessage($str) {
    return '<div style="width:50%; margin:0 auto; border:2px solid #F00;padding:2px; color:#000; margin-top:10px; text-align:center;">' . $str . '</div>';
}

function successMessage($str) {
    return '<div style="width:50%; margin:0 auto; border:2px solid #06C;padding:2px; color:#000; margin-top:10px; text-align:center;">' . $str . '</div>';
}

function simple_redirect($url) {
    echo "<script language=\"JavaScript\">\n";
    echo "<!-- hide from old browser\n\n";
    echo "window.location = \"" . $url . "\";\n";
    echo "-->\n";
    echo "</script>\n";

    return true;
}

?>