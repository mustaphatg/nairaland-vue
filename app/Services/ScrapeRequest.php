<?php
namespace App\Services;
use Goutte\Client;
use Illuminate\Support\Facades\Log;


	class ScrapeRequest {
		
		public $name = "how are you";
		
		public function get($uri){
			
			$client = new Client();
			
			try{
				$uri = str_replace("https://www.nairaland.com/", "", $uri);
				
				Log::debug($uri);
				
				$crawler = $client->request("GET", "https://www.nairaland.com/$uri");                         
				return $crawler;
				
			}catch(\Exception $e){
				dd($e);
			}
			
    	}
	
	}
    

?>