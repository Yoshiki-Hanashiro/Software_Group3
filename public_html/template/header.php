<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>課題攻略サイト</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="ja" />
    <meta name="viewport" id="iphone-viewport" content="width=480, user-scalable=yes, maximum-scale=0.6667" />
    <meta name=”viewport” content=”width=device-width,initial-scale=1.0″>
    <link rel = "stylesheet" type = "text/css" href = "../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script Langage="JavaScript">
      function client_resizeTo(520, 480) {
      　　if (document.layers) {
      　　　　window.resizeTo(width, height);
      　　　　window.resizeTo(width, height);
      　　} else if (document.body.clientWidth) {
      　　　　window.resizeTo(width*2, height*2);
      　　　　var client_width = document.body.clientWidth;
      　　　　var client_height = document.body.clientHeight;
      　　　　window.resizeTo(width*3-client_width, height*3-client_height);
      　　}
      }
    </script>
  </head>
  <body onload="createImageLayer();">
    <a name="top"></a>
    <div class="header">
        <div class = "element">
            <div class="header-logo">
                <h1><font size="10">課題攻略サイト</font><font size = "5"></font></h1>
            </div>
        </div>
    </div>
<div class="drawer_menu">
	<div class="drawer_bg"></div>
	<button type="button" class="drawer_button">
		<span class="drawer_bar drawer_bar1"></span>
		<span class="drawer_bar drawer_bar2"></span>
		<span class="drawer_bar drawer_bar3"></span>
		<span class="drawer_menu_text drawer_text">MENU</span>
		<span class="drawer_close drawer_text">CLOSE</span>
	</button>
	<nav class="drawer_nav_wrapper">
		<ul class="drawer_nav">
			<li>
				<a href = "../pages/mypage.php">マイページ</a>
			</li>
			<li>
			    <a href="../pages/report.php">記事一覧</a>
				<span class="touch-btn"><i class="fa fa-chevron-down"></i></span>
				<ul class="second-level">
					<li>
						<a href="">サブメニュー1</a>
					</li>
					<li>
						<a href="">サブメニュー2</a>
					</li>
					<li>
						<a href="">サブメニュー3</a>
					</li>
				</ul>
			</li>
			<li>
				<a href = "../pages/post.php">記事投稿</a>
			</li>
			<li>
				<a href="../pages/subject.php">授業一覧</a>
			</li>
			<li>
				<a href="../pages/main.php">ホーム</a>
			</li>
		</ul>
	</nav>
</div>


<script src="https://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
<script>
$(function () {
	$('.drawer_button').click(function () {
		$(this).toggleClass('active');
		$('.drawer_bg').fadeToggle();
		$('nav').toggleClass('open');
	})
	$('.drawer_bg').click(function () {
		$(this).fadeOut();
		$('.drawer_button').removeClass('active');
		$('nav').removeClass('open');
	});
	$(".touch-btn").on("click", function () {
		$(this).next().slideToggle();
	});
})
</script>
