<?php
session_start();

$mysqli = new mysqli('localhost', 'xss', 'xss', 'xss');

$checked = "";

if($stmt = $mysqli->prepare("SELECT state FROM xss_json WHERE session=? ORDER BY ID desc LIMIT 0, 1")){

    $stmt->bind_param("s", session_id());
    $stmt->execute();

    $stmt->bind_result($state);
    $stmt->fetch();

    $stmt->close();
}

$mysqli->close();

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ni5am">

</head>
<body>
지금 방에 불이 켜져 있나요 ? 컴퓨터 : <?php echo $state;?>
</body
</html>
