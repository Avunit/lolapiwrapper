<?php
	/**
	 * Wrapper class for game-v1.2
	 * 
	 */
	class Game
	{
		/**
		 * Return recent games for summoner by ID
		 *
		 */
		function getRecentGames($id) {
			$url = $GLOBALS['baseurl'].'api/lol/'.$GLOBALS['region'].'/v1.2/game/by-summoner/'.$id.'/recent';
			$params = '?api_key='.$GLOBALS['key'];
			
			return json_decode(file_get_contents($url.$params), true);
		}
	}
?>
