<?php
    session_start();

    $mysqli = new mysqli('localhost', 'xss', 'xss', 'xss');

    $json = json_decode($_POST['switch']);

    if($stmt = $mysqli->prepare("INSERT INTO xss_json (session, state) VALUES (?, ?)")){

        $stmt->bind_param("ss", session_id(), $json->state);
        $stmt->execute();

        $stmt->close();
    }

?>

