<?php
   // WARNING: DO NOT CHECK database.ini into git! USE ENVIRONMENT VARIABLES, INSTEAD!
   
    // read database access parameters in the database configuration file
    // $params = parse_ini_file("database.ini");
    // if ($params === false) {
    //     throw new \Exception("Error while reading database configuration file");
    // }
   
    $connection = mysqli_connect("sql11.freemysqlhosting.net", "sql11495962", "Hj4c75TUDS", "sql11495962");
    if(!$connection) {
        die("Database connection failed");
    }

//    $connection = sprintf("pgsql:host=%s;port=%d;dbname=%s",
//                    $params['host'],
//                    $params['port'],
//                    $params['database'],
//                    );
   
//    try{
//        $conn = new PDO($connection, $params["username"], $params["password"], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
//        // throw exception upon errors
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    }
//    catch (PDOException $e) {
//        die('Could not connect: ' . $e->getMessage());
//    }
   

    ?>