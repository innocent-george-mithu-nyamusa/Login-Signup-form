<?php

function connect()
    {
        $host = "localhost";
        $dbName = "assignment";
        $user = "root";
        $pwd = "";

        try {
            $dsn = 'mysql:host=' . $host . ';dbname=' . $dbName;
            $pdo = new PDO($dsn, $user, $pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }catch (PDOException $exception){
            echo $exception->getMessage();
            return null;
        }

    }


// function addCoordinates(lat, lon): void {
//     echo lat, lon;
// }

