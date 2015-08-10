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

	function checkEmailValidity($email_inserted){
		$email_pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";

		if (!filter_var($email_inserted, FILTER_VALIDATE_EMAIL) || !preg_match($email_pattern, $email_inserted)) {
	  		return false;
		}
		else
			return true;
	}

	function random_salt($salt_length){

		//returns 32 character
		$random_string = md5(uniqid(mt_rand(), true));

		//valid character for salt using base64_encode 
		//modify to be valid base64 encoding
		$base64_random_string = str_replace('+', '.',(base64_encode($random_string)));
		//modify to be valid base64 encoding

		//cut salt length based on $salt_length parameter
		$random_salt = substr($base64_random_string, 0, $salt_length);

		return $random_salt;

	}

	function encryt_email($email_inserted){

		$hash_format = "$2y$10$";
		$salt_length = 25;
		$salt = random_salt($salt_length);
		$format_and_salt = $hash_format.$salt;
		//echo strlen($format_and_salt)."<br>";
		$hash = crypt($email_inserted,$format_and_salt);

		return $hash;
	}



?>