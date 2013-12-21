<?php
	/**
	 * Wrapper class for league-v2.2
	 * 
	 */
	class League
	{
		/**
		 * Return leagues data for summoner by ID
		 * 
		 */
		function getLeague($id) {
			$url = $GLOBALS['baseurl'].'api/lol/'.$GLOBALS['region'].'/v2.2/league/by-summoner/'.$id;
			$params = '?api_key='.$GLOBALS['key'];
			
			$response = json_decode(file_get_contents($url.$params), true);
			
			// Returns NULL if summoner is unranked.
			if (empty($response)) {
				return NULL;
			} else {
				return $response;
			}
		}
	}
?>
