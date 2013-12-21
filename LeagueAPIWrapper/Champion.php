<?php
	/**
	 * Wrapper class for champion-v1.1
	 * 
	 */
	class Champion
	{
		/**
		 * Return champion list data transfer object
		 * 
		 */
		function getChampions() {
			$url = $GLOBALS['baseurl'].'api/lol/'.$GLOBALS['region'].'/v1.1/champion';
			$params = '?api_key='.$GLOBALS['key'];
			
			return json_decode(file_get_contents($url.$params), true);
		}
	}
?>
