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
    <script src="../dist/js/jquery-3.1.0.min.js"></script>


    <script>
        $(function() {
            if (<?php echo $_GET['alert'];?>) {
                $('.alert').show()
            } else {
                $('.alert').hide();
            }
        });
    </script>

</head>
<body>
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">XSS in JavaScript</h3>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <strong>Wow!</strong> 자바스크립트에 의해 경고창이 나타났습니다.
                </div>
            </div>
            <div class="col-sm-12 text-center mg-b20">
                <div class="btn-group btn-group" role="group" aria-label="Large button group">
                    <a href="javascript.php?alert=false" class="btn btn-danger" role="button">숨기기</a>
                    <a href="javascript.php?alert=true" class="btn btn-success" role="button">펼치기</a>
                </div>
            </div>
        </div>

        <footer class="footer">
            <p>&copy; 2016 Nisam, Inc.</p>
        </footer>
    </div>

</body>
</html>