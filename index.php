<?php
	$https           = 'https://';
	$https_HTTP_HOST = $https.$_SERVER["HTTP_HOST"].'/';
	$REQUEST_URI     = $_SERVER['REQUEST_URI'];
	$url             = $https_HTTP_HOST.$REQUEST_URI;

if( preg_match("/^www\./", $_SERVER["HTTP_HOST"]) ) {
    $https_HTTP_HOST = $https.preg_replace("/^www\./", "", $_SERVER["HTTP_HOST"]);
		$url = $https_HTTP_HOST.$REQUEST_URI;
    header("Location: $url", true, 301);
    exit;
}
if( preg_match("/index\.php|index\.html/", $_SERVER['REQUEST_URI']) ) {
	 $REQUEST_URI = preg_replace("/index\.php|index\.html/", "", $_SERVER["REQUEST_URI"]);
	 $url = $https_HTTP_HOST.$REQUEST_URI;
    header("Location: $url", true, 301);
    exit;
}
// ルート
if( preg_match("/^\/$/", $_SERVER['REQUEST_URI']) ) {

}
	// ルート以外
	else if( preg_match("/\/\//", $_SERVER['REQUEST_URI']) ) {
		 $REQUEST_URI = preg_replace("/\//", "", $REQUEST_URI);
		 $REQUEST_URI = $REQUEST_URI;
		 $url = $https_HTTP_HOST.$REQUEST_URI;
	    header("Location: $url", true, 301);
	    exit;
	}
if($_SERVER['HTTPS'] == null) {
	$https           = 'https://';
	$https_HTTP_HOST = $https.$_SERVER["HTTP_HOST"];
	$REQUEST_URI     = $_SERVER['REQUEST_URI'];
	$url             = $https_HTTP_HOST.$REQUEST_URI;
	header("Location: $url", true, 301);
	exit;
}






/*
if( preg_match("/^www\./", $_SERVER["HTTP_HOST"]) ) {
    $url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . preg_replace("/^www\./", "", $_SERVER["HTTP_HOST"]) . $_SERVER["REQUEST_URI"];
    header("Location: $url", true, 301);
    exit;
}
// indexでアクセスが来た場合リダイレクトする
if( preg_match("/\/index\.php\/|\/index\.html\//", $_SERVER['REQUEST_URI']) ) {
    $url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . preg_replace("/\/index\.php\/|\/index\.html\//", "", $_SERVER["REQUEST_URI"]);
    header("Location: $url", true, 301);
    exit;
}
// 最期に/が無い場合に付け足してリダイレクト（なお、ファイルを使う場合は改修が必要）
if(! preg_match("/\/$/", $_SERVER['REQUEST_URI']) ) {
    $url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"].'/';
//		var_dump($url);
//    header("Location: $url", true, 301);
//    exit;
}
// 
if(preg_match("/\/$/", $_SERVER['REQUEST_URI']) ) {
    $url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"].'/';
//		var_dump($url);
//    header("Location: $url", true, 301);
//    exit;
}

*/




?>

<!DOCTYPE html>
<html>
	<head>
		<title>スペースナビ</title>
		<meta name="description" content="スペースナビの公式ホームページ。営業進捗サービス運営、メディア運営、マイニング、マイニングリグ販売を手がける株式会社です。">
		<meta name="keywords" content="Spacenavi,スペースナビ,営業進捗サービス,マイニング,マイニングリグ">
		<meta property="og:title" content="スペースナビ">
		<meta property="og:type" content="website">
		<meta property="og:description" content="スペースナビの公式ホームページ。営業進捗サービス運営、メディア運営、マイニング、マイニングリグ販売を手がける株式会社です。">
		<meta property="og:url" content="https://spacenavi.jp/">
	</head>
	<body>
		<!-- wrapper -->
		<div class="wrapper">
			<!-- main -->
			<div class="main clearfix">
				<!-- main_inner -->
				<div class="main_inner clearfix">					
					<div class="logo">
						<h1>
							<a href="https://spacenavi/jp/"><img width="114" height="56" title="スペースナビ" alt="スペースナビ" src="https://spacenavi.jp/assets/img/logo/logo_1.png"></a>
						</h1>
					</div>
					<p>スペースナビの公式ホームページ。営業進捗サービス運営、メディア運営、マイニング、マイニングリグ販売を手がける株式会社です。</p>

					<div class="section_block">
						<h2>企業情報</h2>
						<p>宇宙をナビゲーションする会社に―</p>
						<p>人類が地球離れをする際に宇宙を案内し可能性を広げられる会社へ</p>
						<p>永い時間軸で地球と人類を俯瞰すると目指すべきは地球の外にある事は間違いありません。求めらる前に一足先に宇宙を探索し、人類を最適化し幸せに暮らせるように貢献いたします。</p>
					</div>

					<div class="section_block">
						<h2>松岡宗谷 代表挨拶</h2>
						<p>制作中</p>
					</div>



					<div class="section_block">
						<h2>経営理念・ビジョン・バリュー</h2>
						<h3>経営理念</h3>
						<p>制作中</p>
						<h3>ビジョン</h3>
						<p>制作中</p>
						<h3>バリュー</h3>
						<p>制作中</p>
					</div>






					<div class="section_block">
						<h2>運営サービス一覧</h2>
						<p style="margin: 0px;">営業の進捗をサポート。営業における生産性を最適化するなら[Salesfllow]</p>
						<p style="margin: 0 0 15px;"><a href="https://salesfllow.cloud/">https://salesfllow.cloud/</a></p>


						<p style="margin: 0px;">Sharetube - シェアしたくなるコンテンツが集まる、集まる。</p>
						<p style="margin: 0 0 15px;"><a href="http://sharetube.jp/">http://sharetube.jp/</a></p>

						<p style="margin: 0px;">モグラMINE - 全ての人にマイニングを。</p>
						<p style="margin: 0 0 15px;"><a href="https://mogramine.com/">https://mogramine.com/</a></p>
					</div>





					<div class="section_block">
						<h2>会社概要</h2>
						<style>
						table th {
						    text-align: left;
						    vertical-align: top;
						}
						</style>

						<table>
							<colgroup>
								<col class="w-30">
								<col class="w-70">
							</colgroup>
							<tbody>
								<tr>
									<th>社名（商号）</th>
									<td>スペースナビ株式会社<br>
								（英文社名）Spacenavi Corp.</td>
								</tr>
								<tr>
									<th>設立年月日</th>
									<td>2018年06月31日</td>
								</tr>
								<tr>
									<th>本社所在地</th>
									<td>〒175-0083 東京都板橋区徳丸3-41-31 清春荘202<br>
								</td>
								</tr>
								<tr>
									<th>代表者</th>
									<td>松岡 宗谷</td>
								</tr>
								<tr>
									<th>資本金</th>
									<td>8万円</td>
								</tr>
								<tr>
									<th>事業内容</th>
									<td>営業進捗サービス運営、メディア運営、マイニング、マイニングリグ販売</td>
								</tr>
							</tbody>
						</table>
					</div> <!-- section_block -->
				</div> <!-- main_inner -->
			</div> <!-- main -->
		</div> <!-- wrapper -->
	</body>
</html>
