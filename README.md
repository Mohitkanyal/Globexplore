# Globexplore
Welcome to the Globexplore repository! This project is a travel website that offers information on various travel packages and events. Follow the instructions below to set up the project on your local machine using XAMPP and phpMyAdmin.

#Prerequisites
XAMPP installed on your machine.
A web browser to access phpMyAdmin and view the website.
Installation
1. Clone the Repository
First, clone this repository to your local machine:
git clone https://github.com/Mohitkanyal/Globexplore.git
2. Move to the XAMPP Directory
Move the cloned repository to the htdocs directory of your XAMPP installation. This directory is usually found in C:\xampp\htdocs on Windows or /Applications/XAMPP/htdocs on macOS.
mv Globexplore /path/to/xampp/htdocs/
3. Start XAMPP
Open the XAMPP Control Panel and start the following services:
Apache
MySQL
4. Import the Database
Open your web browser and navigate to phpMyAdmin.
Create a new database named globexplore.
Import the provided SQL file to set up the database schema and data:
Click on the globexplore database you created.
Go to the Import tab.
Click Choose File and select the globexplore.sql file from the repository.
Click Go to import the database.
5. Configure Database Connection
Ensure your database connection settings in the PHP files are correct. Typically, this involves editing a configuration file like config.php or similar.
6. Access the Website
Open your web browser and navigate to:
http://localhost/index.php
#Usage
Once you have the website set up and running, you can explore various features:

Homepage
The homepage provides an introduction to Globexplore and highlights upcoming events and popular travel packages.

Events
The Upcoming Events section showcases exciting travel opportunities, including details about Everest Camp Trek, Lakshadweep, and Sahara Desert. Clicking on the "All Details" button will navigate you to a detailed page for each event.

Packages
The Packages section highlights various travel packages such as Goa, Kerala, and Thailand. Clicking on the images or links will take you to detailed information about each package.

About Us
The About Us section provides information about Globexplore and its mission to create unforgettable travel experiences.

Contact Us
At the bottom of the page, you'll find the Contact Us section where users can find ways to get in touch with Globexplore for more information or support.
License
This project is open-source and available under the MIT License.
