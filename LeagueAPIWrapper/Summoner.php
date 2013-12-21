<?php
	/**
	 * Wrapper class for summoner-v1.2
	 * 
	 */
	class Summoner
	{
		private $name;
		private $id;
		
		/**
		 * Accepts either summoner ID or name and initializes class
		 * variables accordingly
		 * 
		 */		
		function __construct($summoner) {
			// Check if ID or name was passed
			if (is_numeric($summoner)) {
				$this->name = $this->getSummonerById($summoner)['name'];
				$this->id = $summoner;
			} else {
				$this->name = $summoner;
				$this->id = $this->getSummonerByName($summoner)['id'];
			}
		}
		
		/**
		 * Return summoner data transfer object by name
		 * 
		 */
		function getSummonerByName($name) {
			$url = $GLOBALS['baseurl'].'api/lol/'.$GLOBALS['region'].'/v1.2/summoner/by-name/'.$name;
			$params = '?api_key='.$GLOBALS['key'];
			
			return json_decode(file_get_contents($url.$params), true);
		}
		
		/**
		 * Return summoner data transfer object by ID
		 * 
		 */
		function getSummonerById($id) {
			$url = $GLOBALS['baseurl'].'api/lol/'.$GLOBALS['region'].'/v1.2/summoner/'.$id;
			$params = '?api_key='.$GLOBALS['key'];
			
			return json_decode(file_get_contents($url.$params), true);
		}
		
		/**
		 * Return summoner rune pages
		 * 
		 */
		function getSummonerRunes() {
			$url = $GLOBALS['baseurl'].'api/lol/'.$GLOBALS['region'].'/v1.2/summoner/'.$this->id.'/runes';
			$params = '?api_key='.$GLOBALS['key'];
			
			return json_decode(file_get_contents($url.$params), true);
		}
		
		/**
		 * Return summoner mastery pages
		 * 
		 */
		function getSummonerMasteries() {
			$url = $GLOBALS['baseurl'].'api/lol/'.$GLOBALS['region'].'/v1.2/summoner/'.$this->id.'/masteries';
			$params = '?api_key='.$GLOBALS['key'];
			
			return json_decode(file_get_contents($url.$params), true);
		}
		
		/**
		 * Return summoner name
		 * 
		 */
		function getName() {
			return $this->name;
		}
		
		/**
		 * Return summoner ID
		 * 
		 */
		function getID() {
			return $this->id;
		}
		
		/**
		 * Output formatted information about summoner
		 * 
		 */
		function printSummoner() {
			echo 'Name: '.$this->name.'<br>'.'ID: '.$this->id;
		}
	}
?>
