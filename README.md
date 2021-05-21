# Blood Bank Management System

It is a beginner level dynamic website for online donating and borrowing blood. It contains services like login option, feedback, tips for blood donation, information regarding blood donation camps etc. Technology Stack Used: HTML, CSS, PHP, JS, Bootstrap, MYSQL.

Software Needed: Xampp, Visual Studio Code(any IDE of your choice)

How to run the project:
1. Go to folder xampp/htdocs
2. Clone the github repository here
3. Open Xampp and start Apache and MySQL servers
4. Open browser goto localhost/dashboard to check if the server has started
5. Once the server is up goto localhost/blood-bank-manangment-system/, the application should be open in front of you :)

SQL Queries:

Donor table

CREATE TABLE donors
(
fullname varchar(255),
email varchar(255),
address varchar(255),
gender varchar(255),
mobileno bigint,
weight int,
state varchar(255),
city varchar(255),
bloodgroup varchar(255),
ldate varchar(255),
bdate varchar(255),
PRIMARY KEY(email)
);

Feedback table

CREATE TABLE feedback
(
fullname varchar(255),
email varchar(255),
rating varchar(255),
suggestions varchar(255),
comments varchar(255)
);

        

        

        

