<?php 

	function confirm_query($result){
		if(!($result)){
    		die("Database query failed");
		}
	}

	function setPageTitle($title){
		  switch ($title) {
		    case 'techEngineering':
		      $title = "TECH & ENGINEERING";//
		      break;
		    case 'food':
		      $title = "FOOD";//
		      break;  
		    case 'politics':
		      $title = "POLITICS";//
		      break;  
		    case 'auto':
		      $title = "AUTO";//
		      break;  
		    case 'religion':
		      $title = "RELIGION";//
		      break;  
		    case 'social':
		      $title = "SOCIAL";//
		      break;
		    case 'musicEntertainment':
		      $title = "MUSIC & ENTERTAINMENT";//
		      break;
		    case 'environmentNature':
		      $title = "ENVIRONMENT & NATURE";//
		      break;
		    case 'sports':
		      $title = "SPORTS";//
		      break;
		    case 'personal':
		      $title = "PERSONAL";//
		      break;
		    case 'fashion':
		      $title = "FASHION";//
		      break;
		    case 'healthBeauty':
		      $title = "HEALTH & BEAUTY";
		      break;
		    case 'weirdones':
		      $title = "WEIRD ONE'S";
		      break;
		     case 'education':
		      $title = "EDUCATION";
		      break;
		    case 'world':
		      $title = "WORLD";
		      break;
		    default:
		      # code...
		      $title = "NO TITLE IS SET FOR THIS PAGE";
		      break;
		  }

  		return $title;
	}

	function voteInPercentage($num, $denom_1, $denom_2, $denom_3, $denom_4){

		$percentage = round(100 * ($num / ($denom_1 + $denom_2 + $denom_3 + $denom_4)));
		return $percentage;
	}

?>