======================================================================================================================================================================
The "home page" includes the header and the footer, which are included on every page. The main purpose is to make an animation slider with the help of CSS, which is the most focused area on this page.
Also, there is an email section in the footer area that opens the OS's default email program to send an email to a predetermined email written in the HTML code.
======================================================================================================================================================================
We will have a section called the "breadcrumb section," where the major change will be where we explain or use some quotes.
======================================================================================================================================================================
On the "About" page,
The focus is to redirect users to the team member's GitHub pages by clicking on the button.
Also, we used a: hover on the button to style it with a color that matches the color pattern we used.
======================================================================================================================================================================
The "Contact us" page includes a <form> where users can input their information to send a form to the Database server. The form includes a submit button that is supposed to forward the form inputs to the server.
We also alerted the user when the Email was already taken and registered in the database.
But if the Email is available, the app will accept the form and send it to the database.
======================================================================================================================================================================
On the "Item Gallery" page, we used the HXR to fetch the data and parse it with JSON to get the images URL dynamically instead of typing it in the code.
On this page, our concern is to display the images and give a description to the user for every item we have in the table.
======================================================================================================================================================================
The Cart page is considered the main page where we use AJAX and PHP and mainly rely on the connection to the database; we use the AJAX API to read the whole object then we fetch and parse it to the local variable in the JavaScript file, so we can display the current "inStock" for each product. Therefore, the maximum quantity that the user can purchase will be the same as the one in the stock.
The total for the quantity of each item will be calculated and displayed automatically, as well as the total of all items together + the shipping fee to get the final total price.
In Addition to that, again, we used the Imgur API to fetch the data and display the image for its product.

And because the free service takes forever to display the data, we've provided an extra page for you to examine the table in the database instead of connecting to the SQL Server. Note that we opted to share that only for the purpose of displaying the data and not to all users.

please visit this link https://game-overflow.herokuapp.com/database_dataTable.php
Or if you want to login to the phpmyadmin page to see all the tables and messages. visit this link https://phpmyadmin.co/
Server: sql11.freemysqlhosting.net
Username: sql11495962
Password: Hj4c75TUDS
======================================================================================================================================================================
