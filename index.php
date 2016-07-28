<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ni5am">

    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./dist/css/theme.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active"><a href="index.php">Home</a></li>
                <li role="presentation"><a target="_blank" href="https://github.com/ni5am/sg4d">Github</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">XSS</h3>
    </div>

    <div class="row">
        <div class='col-sm-4'>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class='panel-title'>XSS in JavaScript</h4>
                </div>
                <div class="panel-body">
                    <p>
                        자바스크립트 영역에 출력되어 실행되는 XSS의 예제입니다.
                    </p>
                </div>
                <div class='panel-footer'>
                    <a class='btn btn-default' target="_blank" href='xss/javascript.php?alert=true'>실습하기</a>
                </div>
            </div>
        </div>

        <div class='col-sm-4'>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class='panel-title'>XSS in Request Header</h4>
                </div>
                <div class="panel-body">
                    <p>
                        스크립트가 Requset Header에 삽입되어 실행되는 XSS의 예제입니다.
                    </p>
                </div>
                <div class='panel-footer'>
                    <a class='btn btn-default' target="_blank" href='xss/header.php'>실습하기</a>
                </div>
            </div>
        </div>

        <div class='col-sm-4'>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class='panel-title'>XSS in Response Header</h4>
                </div>
                <div class="panel-body">
                    <p>
                        스크립트가 Response Header 영역에 출력되어 실행되는 XSS의 예제입니다.
                    </p>
                </div>
                <div class='panel-footer'>
                    <a class='btn btn-danger disabled' href='#'>개발중</a>
                </div>
            </div>
        </div>

        <div class='col-sm-4'>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class='panel-title'>XSS in JSON</h4>
                </div>
                <div class="panel-body">
                    <p>
                        JSON을 통해 전송되어 실행되는 XSS의 예제입니다.
                    </p>
                </div>
                <div class='panel-footer'>
                    <a class='btn btn-default' target="_blank" href='xss/json.php'>실습하기</a>
                </div>
            </div>
        </div>

        <div class='col-sm-4'>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class='panel-title'>XSS in Event Handler</h4>
                </div>
                <div class="panel-body">
                    <p>
                        XSS가 tag의 Event Handler에 삽입되는 예제입니다.
                    </p>
                </div>
                <div class='panel-footer'>
                    <a class='btn btn-default' target="_blank" href='xss/after_ajax.php'>실습하기</a>
                </div>
            </div>
        </div>

    </div>

    <footer class="footer">
        <p>&copy; 2016 Nisam, Inc.</p>
    </footer>
</div>

</body>
</html>