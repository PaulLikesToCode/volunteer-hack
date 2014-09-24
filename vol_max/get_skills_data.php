<?php
	 /*require VolunteerMatchAPI;
	 VolunteerMatchAPI::init('http://odca.stage.volunteermatch.org',
								'a483313bf90678ae438c397171a5e00f',
								'odca_site_1');
	 $data = VolunteerMatchAPI::testing();
	 print "$data";
	 print "Hello</br>";*/
	 
	$skills_array = getSkillsFromFile("category_skills.txt");
	 
	 //print_r($skills_array);
	 echo json_encode($skills_array);
	 
	 function getSkillsFromFile ($file){
		$file_handle = fopen($file, "r") or die("Unable to open file $file!");
		$skills = array();
		// Output one line until end-of-file
		while(!feof($file_handle)) {
			$line = fgets($file_handle);
			if (!(preg_match('/^Category/',$line))) {
				array_push($skills,$line);
			} 
		}
		fclose($file);
		return $skills;
	 }
//?>