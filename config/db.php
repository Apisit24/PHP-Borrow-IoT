<?php
    // $servername = "tcp:cpe301.database.windows.net,1433";
    // $username = "cpe301";
    // $password = "cpe_301-";

//     try {
//         $conn = new PDO("sqlsrv:server = $servername; Database = cpe301" , $username, $password);
//         // set the PDO error mode to exception
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     }
//     catch (PDOException $e) {
//     print("Error connecting to SQL Server.");
//     die(print_r($e));
// }

    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=cpe301", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>