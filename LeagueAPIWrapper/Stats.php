<?php
	/**
	 * Wrapper class for stats-v1.2
	 * 
	 */ 
	class Stats
	{
		function getPlayerSummary($id) {
			$url = $GLOBALS['baseurl'].'api/lol/'.$GLOBALS['region'].'/v1.2/stats/by-summoner/'.$id.'/summary';
			$params = '?api_key='.$GLOBALS['key'];
			
			return json_decode(file_get_contents($url.$params), true);
		}
		
		function getRankedStats($id) {
			$url = $GLOBALS['baseurl'].'api/lol/'.$GLOBALS['region'].'/v1.2/stats/by-summoner/'.$id.'/ranked';
			$params = '?api_key='.$GLOBALS['key'];
			
			return json_decode(file_get_contents($url.$params), true);
		}
	}
?>
