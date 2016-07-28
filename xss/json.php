<?php
    session_start();

    $mysqli = new mysqli('localhost', 'xss', 'xss', 'xss');

    $checked = "";

    if($stmt = $mysqli->prepare("SELECT state FROM xss_json WHERE session=? ORDER BY ID desc LIMIT 0, 1")){

        $stmt->bind_param("s", session_id());
        $stmt->execute();

        $stmt->bind_result($state);
        $stmt->fetch();

        if($state != "") {
            $checked = "checked";
        }

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

    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/css/theme.css" rel="stylesheet">
    <link href="../dist/css/bootstrap-switch.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../dist/js/jquery-3.1.0.min.js"></script>
    <script src="../dist/js/bootstrap-switch.min.js"></script>


    <script>
        $(function() {
            $("input[type=\"checkbox\"]").not("[data-switch-no-init]").bootstrapSwitch();

            $("input[type=\"checkbox\"]").on('switchChange.bootstrapSwitch', function(event, state) {

                var data = new Object();
                data.name = "switch";
                data.state = state;

                var dataJson = JSON.stringify(data);

                $.ajax({
                    url : 'json_api.php',
                    type : 'POST',
                    data : "switch="+dataJson,
                    dataType:'json'
                });

            });
        })

    </script>

</head>
<body>
<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">XSS in JSON</h3>
    </div>

    <div class="row">
        <div class="col-sm-12 mg-b20">
            <div>
                전등 스위치 <input id="switch-state" type="checkbox" data-size="mini" <?php echo $checked;?>>
            </div>
            <div>
                방으로 들어가기 <a target="_blank" href="json_check.php">GO!</a>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2016 Nisam, Inc.</p>
    </footer>
</div>

</body>
</html>