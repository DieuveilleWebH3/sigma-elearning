# Introduction #
This document provides the instructions for using (or making) the Sigma E-Learning Application developed by Dieuveille BOUSSA ELLENGA. 
The Sigma E-Learning App is a PHP / Laravel-based Software (web application) for e-learning, the platform allows multiple type users management (2), gives access to visitors to learn from the available courses, and if they feel like sharing their knowledge, a visitor can fill a form to become an instructor on the platform and create courses.  
The Sigma E-Learning Application is based on the CRUD user interface convention, with restrictions depending on users and/or non users.  



# Document #

## Target audience ##

This document is targeted (but not limited) to technical individual with a Web Development (PHP) background 


## Definition ##

The Sigma E-Learning is based on the CRUD user interface convention.  

Create: Specific users (Admin or instructor) can add new course instances 


Read: Everyone can access the content of the platform, … 

Update: A course can be updated or modified under some conditions / restrictions, ...  

Delete: A course can be deleted under some conditions / restrictions, ...   



# Application components #

The Sigma E-Learning is comprised of a user management module (mostly for the admin) and a course module (with sub component like categories, chapters for each course, levels, ...) for everyone.
Yet, it is a small and simple implementation of an e-learning platform and can be considered as a module itself, a module to further improve and / or to integrate into another. 

There are two ways to use this module:  

Starting a fresh new project and following this as an example ( and go further )     

Using the project as base and add other modules in it   


## 3.1 Starting New Project ##   

As a complementary module, the Account Module must be integrated in another project / website. 
    


## 3.2 Cloning this project ## 

We clone the specific repository or download the compressed project; the project contains the 
We open our project directory
We first install composer by running  composer install
We copy the  .env.example and rename it to  .env 
We then run  php artisan key:generate 
Finally we run  php artisan migrate. and  php artisan db:seed
And we can launch our project now with  php artisan serve.




