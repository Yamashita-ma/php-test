<!doctype html>
<html lang="ja">
	
<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<header>
		<img src="4eachblog_logo.jpg" alt="">
		<li>
			<ul>トップ</ul>
			<ul>プロフィール</ul>
			<ul>4eachについて</ul>
			<ul>登録フォーム</ul>
			<ul>問い合わせ</ul>
			<ul>その他</ul>
		</li>
	</header>
	<main>
	  <div class="left">
		<h1>プログラミングに役立つ掲示板</h1>
		  
		<form method="post" action="insert.php">
			<p class="entry">入力フォーム
			</p>
		<p>ハンドルネーム
			<br>
			<input type="text" name="handlename" class="text">
		</p>
		<p>タイトル
			<br>
			<input type="text" name="title" class="text">
		</p>
		<p>コメント
			<br>
			<textarea name="comments" rows="4" cols="20"></textarea>
		</p>

			<input type="submit" class="button1" value="確認する"/>

		</form>
		  <?php
	mb_internal_encoding("utf8");
	$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
	$stmt=$pdo->query("select*from 4each_keijiban");
	
	while($row=$stmt->fetch()){
		echo "<div class='kiji'>";
		echo "<h3>".$row['title']."</h3>";
		echo "<div class='contents'>";
		echo $row['comments'];
		echo "<div clas='handlename'>posted by".$row['handlename']."</div>";
		echo "</div>";
		echo "</div>";
	}
	?>
		</div>
			
		<div class="right">
			<div class="contents">
				<h2>人気の記事</h2>
				<ul>
					<li>PHPオススメ本</li>
					<li>PHP MyAdminの使い方</li>
					<li>今人気のエディタ Top5</li>
					<li>HTMLの基礎</li>
				</ul>
			</div>
			<div class="contents">
				<h2>オススメリンク</h2>
				<ul>
					<li>インターノウス株式会社</li>
					<li>XAMPPのダウンロード</li>
					<li>Eclipseのダウンロード</li>
					<li>Bracketsのダウンロード</li>
				</ul>
			</div>
			<div class="contents">
				<h2>カテゴリ</h2>
				<ul>
					<li>HTML</li>
					<li>PHP</li>
					<li>MySQL</li>
					<li>JavaScript</li>
				</ul>
			</div>
		</div>
		<footer>
			<p>
				copyright © internous|4each blog the which provides A to Z about programming
			</p>
		</footer>
	</main>
</body>
</html>