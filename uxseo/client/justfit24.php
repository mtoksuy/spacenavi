<?php
	// http
	$http = 'https://www.justfit24.com/';
	// path
	$path = '/home/justfit24/www/';
	// 関数読み込み
	require_once($path.'ux/class/function.php');
	// 作成先
	$directory_array =array (
		'index', 
		'about', 
		'price', 
		'gymlist/gym-imaizumimachi', 
		'gymlist/gym-nishiguchi', 
		'gymlist/gym-wakamatsubara', 
		'gymlist/gym-flow', 
		'faq', 
		'guidance', 
		'webentry', 
		'inquiry', 
		'2018/11/30/recruit', 
		'gym-terms', 
		'privacypolicy', 
		'notice', 
		'webentry', 
		'2020/05/12/corona-news513', 
		'2020/06/03/penalty', 
		'2020/04/10/corona-news410', 
		'grouplesson', 
		'2019/02/15/nishiguchi-wear', 
	);

	// ux
	foreach($directory_array as $key => $value) {
		// トップページの場合
		if($value == 'index') {
			// 絶対パス
			$directory_path = $path;
			// 削除
			unlink($path.'index.html');
			unlink($path.'index.html.gz');
			// html抽出
			$gzip_article_html   = file_get_contents($http);
		}
			// 複数の階層がある場合
			else if(  preg_match('/\//', $value)   ) {
				// 絶対パス
				$directory_path = $path.$value.'/';
				//削除
				removeDir($directory_path);
				// html抽出
				$gzip_article_html   = file_get_contents($http.$value);
				// ディレクトリカウント(後で使うかも)
				$directory_count = substr_count($value, '/');
				$directory_count++;
				// ディレクトリ切り分け
				$directory_explode = explode('/', $value);
				// 最後のディレクトリ名取得
				foreach($directory_explode as $last_key => $last_value) {
					$last_directory = $last_value;
				}
				// マルチディレクトリ作成
				multiple_directory_create($path, $directory_explode);
			}
				// 単発ディレクトリの場合
				else {
					// 絶対パス
					$directory_path = $path.$value.'/';
					//削除
					removeDir($directory_path);
					// html抽出
					$gzip_article_html   = file_get_contents($http.$value);
					// ディレクトリ作成
					dir_create($directory_path);
				}
		//コメントアウトを削除 一旦外し
//		$gzip_article_html = preg_replace('/<!--[\s\S]*?-->/s', '', $gzip_article_html);
		// CSSインライン化
		$gzip_article_html = css_inline($http, $gzip_article_html);
		//HTML圧縮 一旦外し
//		$gzip_article_html = html_comp($gzip_article_html);
		// htmlファイルとgzipファイルを生成
		html_gzip_create($gzip_article_html, $directory_path);
	}
?>