<?php
	 require VolunteerMatchAPI;
	 VolunteerMatchAPI::init('http://odca.stage.volunteermatch.org',
								'a483313bf90678ae438c397171a5e00f',
								'odca_site_1');
	 $data = VolunteerMatchAPI::testing();
	 print "$data";
//?>