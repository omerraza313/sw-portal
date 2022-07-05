<?php


if (!function_exists('makeSlug')) {
	
	function makeSlug($str){


        $str1 = strtolower($str);
        $slug = str_replace(" ","-",$str1);

        return $slug;

	}
}