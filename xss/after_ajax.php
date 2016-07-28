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
        function callComment() {
            $.ajax({
                url : 'ajax_api.php',
                type : 'GET',
                success : function (data) {
                    $('#commentBox').append(data);
                }
            });
        }

        function deleteComment(id, username) {
            alert(username+"을 삭제하였습니다.");
            //삭제는 구현안함
        }
    </script>

</head>
<body>
<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">XSS in Event Handler</h3>
    </div>

    <div class="row">
        <div class="col-sm-12" id="commentBox">

        </div>
        <div class="col-sm-12 text-center mg-b20">
            <div class="btn-group btn-group" role="group" aria-label="Large button group">
                <a href="javascript:callComment()" class="btn btn-default" role="button">댓글을 가져와</a>
        </div>
    </div>

</div>

    <footer class="footer">
        <p>&copy; 2016 Nisam, Inc.</p>
    </footer>
</body>
</html>