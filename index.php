<!DOCTYPE html>
<html>
	<head>
		<title>LolKing 2.0</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Welcome to the new and improved LolKing!</h1>
		<form name ="search" method="post">
			<input type="text" name="summoner">
			<input type="submit" name="search" value="Search">
		</form>
		<?php
			// Include wrapper library
			require_once $_SERVER['DOCUMENT_ROOT'].'/LolKing/LeagueAPIWrapper/WrapperLibrary.php';

			// Displays some simple information about queried summoner
			if (isset($_REQUEST['summoner'])) {
				// Strip tags from query (XSS defense)
				$summoner = new Summoner(strip_tags($_REQUEST['summoner']));
				$league = new League();
				$leagueData = $league->getLeague($summoner->getID());

				echo '<p>';
				echo $summoner->printSummoner().'<br>';

				if ($leagueData == NULL) {
					echo 'Summoner is unranked.';
				} else {
					$leagueName = $leagueData[$summoner->getID()]['name'];
					echo 'League Name: '.$leagueName.'<br>';

					$players = $leagueData[$summoner->getID()]['entries'];

					foreach ($players as $player) {
						if (!strcmp($player['playerOrTeamId'], $summoner->getID())) {
							echo 'Tier: '.$player['tier'].'<br>';
							echo 'Rank: '.$player['rank'].'<br>';
							echo 'League Points: '.$player['leaguePoints'];
							break;
						}
					}
				}
				echo '</p>';
			}
		?>
	</body>
</html>
