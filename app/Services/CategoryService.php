<?php

namespace App\Services;

class CategoryService{

	public function makeSlug($str){

		
        $str1 = strtolower($str);
        $slug = str_replace(" ","-",$str1);

	}
}