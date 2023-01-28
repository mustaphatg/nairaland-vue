<?php
namespace App\Services;
use App\Services\ScrapeRequest;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Facades\Log;

class Utility {


	function __construct() {
		$this->scrapeRequest = new ScrapeRequest();
	}


	public function homePage() {
		$crawl = $this->scrapeRequest->get("");
		$links = $crawl->filter(".featured.w a");

		$results = [];

		foreach ($links as $node) {

			$data = [
				"href" => str_replace('https://www.nairaland.com', '', $node->getAttribute("href")),
				"text" => $node->nodeValue,
			];

			$results[] = $data;
		}
		
		return $results;
	}
	
	
	// nairaland category
	public function category($name){
		 $crawl = $this->scrapeRequest->get($name);
		
		// file_put_contents("category.html", $crawl->html());
		
		// $crawl = new Crawler(file_get_contents("category.html"));
	
		$tables = $crawl->filter("table");
		
		$table_count = $tables->count();
		Log::debug($table_count);
		
		if($tables->count() < 2){
			return null;
		}
		
		
		// determine which table to scrape
			switch ($table_count) {
				case 3:
					$table_number = 1;
					break;
				case 4:
					$table_number = 2;
					break;
				
				default:
					break;
			}
		
		
		$table = $tables->eq($table_number);
	
		
		$tr = $table->filter("tr");
		
		$results = [];
		
		foreach($tr as $k => $value){
			
			if($k == 0) { continue; }
			
			$el = new Crawler($value);
			
			
			$a = $el->filter("a")->eq(1);
			
			// topic
			$tp = new \stdClass();
			$tp->text = $a->text();
			$tp->href = $a->attr("href");
			$tp->new_post = false;
			
			
			// new post
				$tt = $el->html();

				if(preg_match("/new.gif/", $tt)){
					$tp->new_post = true;
				}
				
			// creator span tag
			$span = $el->filter(".s");
			
			// user link
			$user_link = $span->filter("a")->eq(0);
			$tp->creator = $user_link->text();
			
			
			// replies , views and time
			$all_b_tags = $span->filter("b");
			
			//replies
				$replies = $all_b_tags->eq(1)->text();
				$tp->replies = $replies;
			
			//views
				$views = $all_b_tags->eq(2)->text();
				$tp->views = $views;
				
			// time
				$time = $all_b_tags->eq(3)->text();
				$tp->time = $time;
				
			$results[] = $tp;
		}
		
		
		return $results;
    }
	
	
	
	public function section(){
		$crawl = new Crawler(file_get_contents("sub.html"));
	
		$table = $crawl->filter("table.boards");
		
		$tr = $table->filter("tr");
		$links = [];
		
		// general
			$ge = $tr->eq(1);
			$ge_links = $ge->filter("a");
			
			$links["general"] = [];
			
			foreach($ge_links as $gl){
				$v = new \stdClass();
				$v->href = $gl->getAttribute("href");
				$v->title = $gl->getAttribute("title");
				$v->text = $gl->nodeValue;
				
				$links["general"][] = $v;
			}
		
		// entertainment
			$ge = $tr->eq(2);
			$ge_links = $ge->filter("a");
			
			$links["entertainment"] = [];
			
			foreach($ge_links as $gl){
				$v = new \stdClass();
				$v->href = $gl->getAttribute("href");
				$v->title = $gl->getAttribute("title");
				$v->text = $gl->nodeValue;
				
				$links["entertainment"][] = $v;
			}
			
		
		// technology
			$ge = $tr->eq(3);
			$ge_links = $ge->filter("a");
			
			$links["science"] = [];
			
			foreach($ge_links as $gl){
				$v = new \stdClass();
				$v->href = $gl->getAttribute("href");
				$v->title = $gl->getAttribute("title");
				$v->text = $gl->nodeValue;
				
				$links["science"][] = $v;
			}
			
		
	    return $links;
		
    }
    
    
    
    
    
	
	private function formatReply($user, $post, $tr){
		$reply = new \stdClass();
		
		// user
			$re = new Crawler($user);
			// Log::debug($re->html());
			$user = $re->filter(".user");
			
			if($user->count() > 0 ){
				$reply->user =  $user->text();
				$time = $re->filter("span.s");
				$reply->time = $time->text();
			}else{
				// the end
				return null;
			}

		
        // blockquote in body
            $bd = $post;
            $block_quote = $bd->filter('blockquote');


            if($block_quote->count()){
                $block_quote = $block_quote->eq(0);

                // remote the link userame
                    $p = preg_replace("/<a .+>.+<\/a>\:(\<br\>)?/", "", $block_quote->html());

                // author of blockquote
                    $block_quote_author = $block_quote->filter('a')->eq(0);

                    try {
                        $block_quote_author = $block_quote_author->text();
                    }catch(\Throwable $e){ 
                        $block_quote_author = '__';
                    }

                // blockquote object
                    $o = (object)[
                        'author' => $block_quote_author,
                        'quote' => $p
                    ];
                
                // remove blockquote from body 
                    $bd->filter('blockquote')->each(function($crawler){
                        foreach($crawler as $node) {  
                            $node->parentNode->removeChild($node);
                        }
                    });    


                // add to reply object
                $reply->blockquote = $o;
            }



		// body
			//$bq = $bd->filter(".narrow");
			$reply->body = $bd->filter('.narrow')->html();


        

        // reply images
            $img = $bd->filter('p img');
            // Log::debug("ther are ".$img->count(). " images in this reply");

            $img_array = [];
				
            if($img->count() > 0){
                foreach($img as $el){
                    $img_array[] = $el->getAttribute("src");     
                }
            }

            $reply->images = $img_array;


		
		return $reply;
	}

	
	
	public function topic($slug){

        try {

        
            $crawl = $this->scrapeRequest->get($slug);
            
            // $crawl = new Crawler(file_get_contents("to.html"));
            
            $table = $crawl->filter("table[summary=posts]");      
            
            $object = new \stdClass();
            
            if($table->count() > 0){
                $tr = $table->filter("tr");
                
                // get topic and creator
                    $topic = $tr->eq(0);
                    
                    // title 
                        $links = $topic->filter("a");
                        $title = $links->eq(3);
                        $object->title = $title->text();
                        
                    // creator 
                    $creator = $links->eq(4);
                    $object->creator = $creator->text();
                
                
                // post body
                    $body = $tr->eq(1);
                    $post = $body->filter(".narrow");
                    $object->body = $post->html();
                
                // post images
                    $img = $body->filter("p img");
                    $img_array = [];
                    
                    if($img->count() > 0){
                        foreach($img as $el){
                            $img_array[] = $el->getAttribute("src");     
                        }
                    }
                    // assign image
                    $object->images = $img_array;
                    
                    
                //replies
                $replies = [];
                    foreach($tr as $key => $value){
                        
                        if($key == 1 || $key ==0){
                            continue;
                        }
                        
                        if(($key % 2) != 0){
                            continue;
                        }
                        
                        
                        $current_row = $value;
                        $next_row = $tr->eq($key + 1);
                            
                        $reply = $this->formatReply($current_row , $next_row , $tr);      		
                        
                        if($reply != null){
                            $replies[] = $reply;
                        }
                    }

                
                //assign replies
                $object->replies = $replies;
                    
                return $object;
            }
            else
            {
                echo 88;
            }
		
        }catch(\Exception $e){
            return false;
        }

    }
	
	
	

}


?>