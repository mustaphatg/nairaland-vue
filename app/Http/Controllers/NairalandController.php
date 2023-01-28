<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Utility;


class NairalandController extends Controller{
	
	
	function __construct(Utility $utility){      
		$this->utility =$utility;
	}
	
	
	public function index() {
		$result = $this->utility->homePage();
		return response()->json($result);
	}
	
	
	// nairaland subscatehory
	public function category(Request $re){      
		$result = $this->utility->category($re->name);
		return response()->json($result);
	}
	
	
	public function a(Request $re){
		$d = file_get_contents("https://www.nairaland.com/crime");    
		file_put_contents("category.html", $d);
		echo 899;
    }
	
	
	// nairaland topic
	public function topic(Request $re){   
	
		if($re->topic_url)
		{
			$topic_url = $re->topic_url;
		}
		else
		{
			return response()->json([
				"message" => "Topic url is compulsory"
			], 404);
		}
		
		$result = $this->utility->topic($topic_url);
		return response()->json($result);
	}
	
	
	
	// nairaland section links
	public function section(Request $re){      
		$result = $this->utility->section();
		return response()->json($result);
	}
	
}