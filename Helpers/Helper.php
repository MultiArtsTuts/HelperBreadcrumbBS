<?php

namespace App\Helpers;

use Request;
use Illuminate\Support\Str;

class Helper
{
	/**
	* Breadcrumb for Bootstrap V4
	*
	* $path BreadcrumbBS4('/'), isso irá retirar o link Home da página inicial, caso a função seja declarada global.
	*/
	public static function BreadcrumbBS4($path)
	{
		$link = url('/');
		if (Request::path() != $path){
			$html = "<nav class='breadcrumb'>";
			$html .= "<a class='breadcrumb-item' href=".$link.">Home</a>";			

			for ($i = 1; $i <= count(Request::segments()); $i++) { 
				if ($i < count(Request::segments()) & $i > 0) {
					$link .= "/" . Request::segment($i);
					$html .= "<a class='breadcrumb-item' href='".$link."'>".Str::ucfirst(str_replace(['-', '_'], ' ', Request::segment($i)))."</a>";
				}
				else
				{
					$html .= "<span class='breadcrumb-item active'>".Str::ucfirst(str_replace(['-', '_'], ' ', Request::segment($i)))."</span>";
				}
			}

			$html .= "</nav>";
			return $html;
		}
	}

	/**
	* Breadcrumb for Bootstrap V3
	*
	* $path BreadcrumbBS3('/'), isso irá retirar o link Home da página inicial, caso a função seja declarada global.
	*/
	public static function BreadcrumbBS3($path)
	{
		$link = url('/');
		if (Request::path() != $path) {
			$html = "<ol class='breadcrumb'>";
			$html .= "<li><a href='".$link."'>Home</a></li>";

			for ($i=1; $i <= count(Request::segments()); $i++) { 
				if ($i < count(Request::segments()) & $i > 0) {
					$link .= "/" . Request::segment($i);
					$html .= "<li><a href='".$link."'>".Str::ucfirst(str_replace(['-', '_'], ' ', Request::segment($i)))."</a></li>";
				}
				else
				{
					$html .= "<li class='active'>".Str::ucfirst(str_replace(['-', '_'], ' ', Request::segment($i)))."</li>";
				}
			}
			
			$html .= "</ol>";
			return $html;
		}
	}	
}
