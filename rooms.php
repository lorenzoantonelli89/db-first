<?php
    function getConnection( $db_host = "localhost",
                            $db_user = "root",
                            $db_password = "root",
                            $db_db = "dbhotel") {
        $conn = new mysqli($db_host, $db_user, $db_password, $db_db);
        if ($conn && $conn->connect_error) {
            echo "Connection failed: " . $conn->connect_error;
        }
        return $conn;
    }
    function closeConn($conn, $stmt) {
        $stmt -> close();
        $conn -> close();
    }
    function getRooms() {
        return " SELECT stanze.id, stanze.room_number
            FROM stanze
        ";
    }

    function getDetailsRoom()
    {
        return " SELECT 
                    stanze.id, stanze.room_number, stanze.floor, stanze.beds, 
                    stanze.created_at
                 FROM stanze
                 WHERE id = ?
            ";
    }
?>