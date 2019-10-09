<?php
class model_gzip_html {
	//------------------------
	//gzipファイルの中身を生成
	//-------------------------
	public static function gzip_article_html_create($article_data_array) {
//	pre_var_dump($article_data_array);
		$core_css   = file_get_contents(PATH.'assets/css/core.css');
		$common_css = file_get_contents(PATH.'assets/css/common/common.css');
		$matome_css = file_get_contents(PATH.'assets/css/matome/common.css');
		$css = $core_css.$common_css.$matome_css;
		// 開発環境のみ最新css読み込み
		if(preg_match('/localhost/',$_SERVER["HTTP_HOST"])) {
			$development_css = '
			  <link rel="stylesheet" href="'.HTTP.'assets/css/core.css?'.date('Y-m-d-H-i-s').'" type="text/css">
			  <link rel="stylesheet" href="'.HTTP.'assets/css/common/common.css?'.date('Y-m-d-H-i-s').'" type="text/css">
			  <link rel="stylesheet" href="'.HTTP.'assets/css/matome/common.css?'.date('Y-m-d-H-i-s').'" type="text/css">';
		}

	// css圧縮
	$css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
	//$css = preg_replace('!/*[^*]**+([^/][^*]**+)*/!', '', $css); 
	// コロンの後の空白を削除する
	$css = str_replace(': ', ':', $css); 
	// タブ、スペース、改行などを削除する
	$css = str_replace( array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css);

		$gzip_article_html = 
'<!DOCTYPE html>
<html>
		<head>
	  <title>'.$article_data_array['article_title'].'｜'.TITLE.'</title>
	  <!-- meta -->
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	  <!-- icon -->
	  <link rel="shortcut icon" href="'.HTTP.'assets/img/icon/favicon_1.ico" type="image/vnd.microsoft.icon">
	  <link rel="apple-touch-icon" href="'.HTTP.'assets/img/icon/apple_touch_icon_1.png" />
	  <link rel="apple-touch-icon-precomposed" href="'.HTTP.'assets/img/icon/apple_touch_icon_1.png" />
	  <!-- css -->
	<style>
		'.$css.'
	</style>
		'.$development_css.'
	</head>
	<body>
		<!-- wrapper -->
		<div class="wrapper">
				
	<!-- header -->
	<header class="header" class="clearfix">
		<div class="header_inner clearfix">
		<!-- logo -->
			<div class="logo">
				<h1>
					<a class="o_8" href="'.HTTP.'/"><img src="'.HTTP.'assets/img/logo/logo_3.png" width="85" height="32" alt="ジャッジ" title="ジャッジ"></a>
				</h1>
		</div>
	</header>
			<!-- main -->
			<div class="main clearfix">
				<!-- main_inner -->
				<div class="main_inner clearfix">
					'.$article_data_array['article_html'].'
				</div>
			</div> <!-- main -->
			
			<!-- footer -->
			<footer class="footer clear">
				<!-- footer_contents -->
				<div class="footer_contents clearfix">
					<!--  -->
					<div class="footer_contents_box clearfix">
						<h5>judgeについて</h5>
						<ul>
							<li><a href="'.HTTP.'about/">judgeについて</a></li>
							<li><a href="'.HTTP.'contact/">お問い合わせ</a></li>
						</ul>
					</div> <!--  -->
				</div> <!-- footer_contents -->
				<!-- footer_bottom -->
				<div class="footer_bottom">
					<div class="footer_bottom_contents">
						<!-- コピーライト -->
						<section id="copy">
							<p class="m_0">&copy; '.date('Y').' <a href="'.HTTP.'">judge</a></p>
						</section>
					</div>
				</div>
			</footer>  <!-- footer -->
		</div> <!-- wrapper -->
	</body>
</html>';

	// HTML圧縮
	$search = array(
		'/\>[^\S ]+/s',  // strip whitespaces after tags, except space
		'/[^\S ]+\</s',  // strip whitespaces before tags, except space
		'/(\s)+/s'       // shorten multiple whitespace sequences
	);
	$replace = array(
		'>',
		'<',
		'\\1'
	);
	$gzip_article_html = preg_replace($search, $replace, $gzip_article_html);

	return $gzip_article_html;
	}





}