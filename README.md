READ ME
- the web app was developped using symfony2 framework
- all the features of the project are not complete :
		-we maneged to get the login facebook-login a g+ loging working
		-the application is responsive (bootstrap)
		-the database is generated alongside the associations between the entities
		-the google map bundle is set the map is rendered with markers for the existing tarffic jams in the database 
		-we started the back office using sonata bundle but still not complete yet
		-the foresquare and solr bundles are not configured.
		
- to view the source on github : https://github.com/younesnait/easyroad
-to test the web app :
  unfortunately the source on github is not complete the vendors are not all there
	Solution 1(the painful one):
		- in order to use that source on github : composer must be installed ( https://getcomposer.org/doc/00-intro.md then follow the Installation guide)
			and when finished the commande ' composer update ' must be executed
	Solution 2(the one we recommand):
	
		-unzip the file Embouteillage.zip at https://www.dropbox.com/sh/h588hf5lq4whc35/AAAr2gELj_PVf9kdA6E0MvFoa?lst
		 in www folder on your localhost
		
-when above is done to verify the database configuration go into the file app/config/parameters.yml and edit if pasword isnt correct.
-the database script symfony.sql is within the project files it is also in the dropbox folder (use it so as to get the inserted values in database)

-test the link http://localhost/Embouteillage/web/app_dev.php/hello 



