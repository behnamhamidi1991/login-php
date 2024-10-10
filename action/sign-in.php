<?php

require_once('../config/loader.php');


if (isset($_POST['signin'])) {
    try {
        $key = $_POST['key'];
        $password = $_POST['password'];

        // sql 
        $query = "SELECT * FROM `users` WHERE (username = ? OR mobile = ? OR email = ?) AND (password = ?)";

        // stmt
        $stmt = $conn->prepare($query);

        // bind
        $stmt->bindValue(1, $username);
        $stmt->bindValue(2, $password);
        $stmt->bindValue(3, $mobile);
        $stmt->bindValue(4, $email);

        $stmt->execute();

    } catch (PDOException $e) {
        echo "Process failed:" . $e->getMessage();
    }
}