<?php
	/**
	 * Wrapper class for team-v2.2
	 * 
	 */
	class Team
	{
		/**
		 * Return team by summoner ID
		 * 
		 */
		function getTeam($id) {
			$url = $GLOBALS['baseurl'].'api/lol/'.$GLOBALS['region'].'/v2.2/team/by-summoner/'.$id;
			$params = '?api_key='.$GLOBALS['key'];
			
			return json_decode(file_get_contents($url.$params), true);
		}
	}
?>
