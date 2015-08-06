<?php
	// This file is the place to store all basic functions
	
	function confirm_query($result_set) {
		global $connection;
		if (!$result_set) {
			die("Database query failed: " . mysqli_error($connection));
		}
	}
	
	function get_lang($lang){
		if($lang == 'es'){
			$lang = 'es';
		}
		else{
			$lang = 'en';
		}
		return $lang;
	}
	
	function get_all_subjects($lang) {
		global $connection;
		$lang = get_lang($lang);
		$query = "SELECT * 
				FROM pages 
				WHERE position > '0' AND lang = '$lang' 
				ORDER BY position ASC";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		return $subject_set;
	}
	
/*	function get_all_slides($lang) {
		global $connection;
		$lang = get_lang($lang);
		$query = "SELECT * 
				FROM homeslider 
				WHERE active = '1' AND lang = '$lang' 
				ORDER BY position ASC";
		$slide_set = mysqli_query($connection, $query);
		confirm_query($slide_set);
		return $slide_set;
	}*/
	
	function page_general_query($lang, $page){
		global $connection;
		$lang = get_lang($lang);
		$query = "SELECT * 
				FROM pages 
				WHERE '$page' = subject_id AND lang = '$lang'";
		$response = mysqli_query($connection, $query);
		confirm_query($response);
		return $response;
	}
	
	function get_page_title($lang, $page) {
		$page_title = page_general_query($lang, $page);
		$title = mysqli_fetch_array($page_title);
		return $title["meta-title"];
	}
	
	function get_page_description($lang, $page) {
		$page_description = page_general_query($lang, $page);
		$description = mysqli_fetch_array($page_description);
		return $description["meta-description"];
	}
	
	function get_page_keywords($lang, $page) {
		$page_keywords = page_general_query($lang, $page);
		$keywords = mysqli_fetch_array($page_keywords);
		return $keywords["meta-keywords"];
	}
	
/*	function home_handler($lang){
		global $connection;
		$lang = get_lang($lang);
		$query = "SELECT * 
				FROM homecontent 
				WHERE lang = '$lang'";
		$content_set = mysqli_query($connection, $query);
		confirm_query($content_set);
		$content = mysqli_fetch_array($content_set);
		echo "<div class=\"section group\">";
			echo "<h2>".$content["home-title"]."</h2>";
		echo "</div>";
		echo "<div class=\"section group\">";
			echo "<p>".$content["content"]."</p>";
		echo "</div>";
	}
	
	function get_page_content($lang, $page){
		echo "<div id=\"maincontentcontainer\">";
			echo "<div class=\"standardcontainer\" id=\"example\">";
				echo "<div class=\"maincontent\">";		
					switch($page){
						case 0:
							home_handler($lang);
							break;
						case 1:
							$content = page_general_query($lang, $page);
							break;
					}
				echo "</div>";			
			echo "</div>";	
		echo "</div>";
	}*/

	//LANG = 0 = SPA -- LANG = 1 = ENG
	function set_menu($lang){
		$replace = array('/',' ', '&Iacute;');
		$subject_set = get_all_subjects($lang);
		echo "<ul>";
		while ($subject = mysqli_fetch_array($subject_set)) {
			echo "<li><a href=".strtolower(str_replace($replace, '', $subject["url"])).".php>".strtoupper($subject["menu_name"])."</a></li>";
		}
		echo "</ul>";
	}
	
	//LANG = 0 = SPA -- LANG = 1 = ENG
	function set_slider($lang){
		$slide_set = get_all_slides($lang);
		echo "<div class=\"banner\">";
		echo "<ul>";
		while ($slide = mysqli_fetch_array($slide_set)) {
			echo "<li id=\"".$slide["css"]."\"><img src=\"".$slide["img"]."\" width=\"60%\"><p>".strtoupper($slide["legend"])."</p></li>";
		}
		echo "</ul>";
		echo "</div>";
	}
?>