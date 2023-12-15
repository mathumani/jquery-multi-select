# AJAX POPULATING SECOND SELECT OPTION BASED ON THE FIRST SELECT BY FETCHING DATA FROM THE DATABASE

This is the simple webased application using php and mariadb database demostrating how to population the second select option of class Names based on the first select option of Level

## PROCEDURE ON HOW TO DEPLOY THE PORJECT
1. Download the project to the webserver
1. Create the database in the mariadb or mysql server named school
1. Import the database dump located at db/school.sql to the above created database
1. Create user and assign priveleges to the above created database
1. Modify the database credentials from the controller/StudentClass.php file to match your above created database
1. Launch the browser the imported projected webserver URL and select the Level Select Option then the Class Selection will reflect the selected level
