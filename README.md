lolapiwrapper
=============
Author: Anthony Schott Date Created: 12/10/2013

A very simple PHP wrapper package for the official Riot League of Legends API. Each possible URL request is encapsulated in a method for each class. The JSON returned from each URL request is returned as an associative array. 

Installation Instructions:
--------------
- Add the LeagueAPIWrapper folder to the desired directory in your document root. 
- Include 'WrapperLibrary.php' in the file(s) you want to use the framework. 
- As seen in the index.php test file, the sample directory I am using is called LolKing. You must replace that with the directory in **YOUR** document root.

NOTE: There is a limit to the number of requests you can perform so try refreshing the page if your query doesn't work.
