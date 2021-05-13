<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link my css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="container">
        <ul>
            <li>
                <h1>
                    Details Room
                </h1>
            </li>
            <?php
            require_once "rooms.php";

            $id = $_GET['id'];
            $conn = getConnection();
            $sql = getDetailsRoom();
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->bind_result($id, $room_num, $floor, $beds, $booking);
            $stmt->fetch();
            echo
            '<li> Room ID : ' . $id . '</li>
                      <li> Room Number : ' . $room_num . '</li>
                      <li> Room Floor : ' . $floor . '</li>
                      <li> N° Beds : ' . $beds . '</li>';
            ?>
        </ul>
    </div>
</body>

</html>