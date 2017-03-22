# php-keyword-search
Basic keyword search using php and mysql


This is a very basic PHP based search where you enter links tied with keywords and can search by keyword (3 keywords per link).  This was only created for my home server to store various links to my services/websites.

This is stored in a MYSQL database

# MYSQL database setup:

Create a db with one table (Currently MUST be called "Links" because it is currently hard coded), then enter all of the relevant information into db-connection.php. Data format is IP ADDRESS//USER//PASSWORD//DATABASE

!!!Warning!!! Repeat after me:  USER INPUT IS NOT SANATIZED, so please don't use this on forward facing websites unless you want a Bobby Tables incident. 

If you want to view ALL of the entered links, just search "ALL" and it will display them all.

You can add and edit links directly from the webpage fairly quickly.

