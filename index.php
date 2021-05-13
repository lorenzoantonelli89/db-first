<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizi PHP</title>
    <!-- link my css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="container">
        <table>
            <tr>
                <th>
                    ID ROOM
                </th>
                <th>
                    ROOM NUMBER
                </th>
            </tr>
            <?php
            require_once "rooms.php";

            $conn = getConnection();
            $sql = getRooms();
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $stmt->bind_result($id, $room_num);


            while ($stmt->fetch()) {

                echo '<tr>
                        <td>'
                    . $id .
                    '</td>  
                        <td>
                            <a href="details_room.php">' . $room_num . '</a>
                        </td>    
                        </tr>';
            }
            closeConn($conn, $stmt);


            ?>
        </table>
    </div>
</body>

</html>