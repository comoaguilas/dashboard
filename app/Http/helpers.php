<?php
if ( ! function_exists('str_to_link'))
{
	function str_to_link($string) {
    return urlencode($string);
	}
}
if ( ! function_exists('js_redirect_to'))
{
	function js_redirect_to($url) {
    echo '<script type="text/javascript">'
       , 'window.location.replace("'.$url.'");'
       , '</script>';
	}
}

if ( ! function_exists('getCurrentURL'))
{
	function getCurrentURL() {
		$currentURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
		$currentURL .= $_SERVER["SERVER_NAME"];
		if($_SERVER["SERVER_PORT"] != "80" && $_SERVER["SERVER_PORT"] != "443")
		{
				$currentURL .= ":".$_SERVER["SERVER_PORT"];
		}
				$currentURL .= '/#!'.$_SERVER["REQUEST_URI"];
		return $currentURL;
	}
}
