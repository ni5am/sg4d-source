<?php
// 데이터베이스에서 꺼내온 값의 예시
$id = 1;
$comment = '댓글입니다. ");alert("XSS Attack!';

?>
<div class="well">
    <?php echo htmlspecialchars($comment);?>. <a href="#" onclick='deleteComment("<?php echo $id;?>","<?php echo htmlspecialchars($comment);?>");'>삭제</a>
</div>