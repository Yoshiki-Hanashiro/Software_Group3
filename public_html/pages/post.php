<?php
    include("../template/header.php");  //echo the default Header entries
?>
<div class="contact-form">
        <h2 class="section-title">投稿フォーム</h2>
        <form action="confirm.php" method="post" > 
        <input name="userid" placeholder="ユーザーID">
        </p>
        <textarea name="article" rows="10" placeholder="本文"></textarea>
        </p>
        <input class="contact-submit" type="submit" value="送信" name="btn">
</div>
<?php
    include("../template/footer.php");  //echo the default Header entries
?>