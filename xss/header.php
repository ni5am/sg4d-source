<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ni5am">

    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/css/theme.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">XSS in HTTP Header</h3>
    </div>

    <div class="row">
        <div class="col-sm-12 mg-b20">
            <p>
                접속하신 브라우저는 : <?php echo $_SERVER['HTTP_USER_AGENT']; ?> 입니다.
            </p>
            <p>
                접속하신 경로는 : <?php echo $_SERVER['HTTP_REFERER']; ?> 입니다.
            </p>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2016 Nisam, Inc.</p>
    </footer>
</div>

</body>
</html>