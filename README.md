# RatingApp

### - **Project Description**

> RatingApp is a mobile application developed for Android that allows company employees to submit and sync their ratings for the company. The app securely connects to a server-based database for storing and managing employee ratings.

> Employees can use the app to rate their experiences with the company, providing valuable feedback to help improve the work environment.

> The mobile app is built using Java, utilizing an SQLite database for local storage, and communicates with a PHP-based web service that interacts with a MySQL database on the server.

### - **Modules/Functionalities**

> The modules and functionalities of RatingApp include:

> - Rating Submission Module: Employees can submit their ratings for the company.

> - SQLite Database Module: Local storage for employee ratings.

> - User Authentication Module: Employees can create accounts to securely submit and sync their ratings.

> - Online Synchronization Module: Ratings are sent to the server for storage and retrieval.

### - **Libraries Used**

> The app employs the **Volley** library for communication with the web service, with the dependency included in the Gradle build file.

### - **Development Environment Setup**

> The RatingApp project consists of two parts: the mobile app and the web service. The mobile app is developed in **Android Studio**, so you'll need the required SDKs.

> The web service requires a server with **PHP** and **MySQL** support. To set up the web service, execute the SQL file provided in the WebService folder to set up the MySQL database.

> Edit the **model/connection.php** file to configure the database host, username, password, and database name. On Windows, **XAMPP** is recommended for server deployment.

> Update the **URL** in the following files: **MainActivity.java**, **LoginActivity.java**, and **RegisterActivity.java** to match the actual server hostname where the web service is hosted.

### - **Screenshots**

> Add screenshots of the RatingApp interface here.
