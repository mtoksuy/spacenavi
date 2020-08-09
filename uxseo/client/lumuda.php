<?php
	// http
	$http = 'https://lamuda.co/';
	// path
	$path = '/home/lamuda-messi/www/lamuda.co/';
	$function_data = file_get_contents('https://spacenavi.jp/uxseo/class/function.min.txt');

	file_put_contents($path.'uxseo/class/function.php', $function_data);

	// 関数読み込み
	require_once($path.'uxseo/class/function.php');

	// 作成先
	$directory_array =array (
		'index', 
		'course', 
		'faq', 
		'access', 
		'recruit', 
		'contact',
		'ladies-plan',
		'personalfood',
		'privacy',
		'agreement',

/*
info
info/20200410
info/20200420
info/20200612
info/20191101
info/20191101-2
info/20190719
info/20190618-2
info/20190618

trainer
trainer/kawamura
trainer/ochiai
trainer/yamagishi
trainer/kuramochi

blog
blog/ochiai
blog/staff
blog/kawamura
blog/yamagishi
blog/kuramochi

blog/ochiai/20200617-2
blog/staff/20200624-2
blog/kawamura/20200610-2
blog/staff/20200603-2
blog/staff/20200513-2
blog/kawamura/20200520-2
blog/ochiai/20200527-2
blog/yamagishi/20200429-2
blog/ochiai/20200422-2
blog/kawamura/20200415-2
blog/kawamura/20200311-2
blog/ochiai/20200325-2
blog/ochiai/20200219-2
blog/ochiai/20200129-2
blog/ochiai/20200108-2
blog/ochiai/20191204-2
blog/ochiai/20191106-2
blog/ochiai/20191016-2
blog/staff/20200408-2
blog/staff/20200318-2
blog/staff/20200304-2
blog/staff/20200212-2
blog/staff/20200122-2
blog/staff/20191225-2
blog/staff/20191218-2
blog/yamagishi/20200401-2
blog/yamagishi/20200226-2
blog/yamagishi/20200205-2
blog/yamagishi/20200115-2
blog/yamagishi/20191211-2
blog/yamagishi/20191113-2
blog/yamagishi/20191023-2
blog/yamagishi/20191002-2
blog/yamagishi/20190911-2
blog/staff/20191127-2
blog/staff/20191120-2
blog/staff/20191030-2
blog/staff/20191009-2
blog/ochiai/20190925-2
blog/staff/20190918-2
blog/ochiai/20190904-2
blog/staff/20190828-2
blog/staff/20190821-2
blog/yamagishi/20190807-2
blog/ochiai/20190731-2
blog/staff/20190724-2
blog/staff/20190717-2
blog/yamagishi/20190710-2
blog/ochiai/20190703-2
blog/staff/20190626-2
blog/staff/20180829-2
blog/staff/20180822-2
blog/staff/20180808-2
blog/staff/20180801-2
blog/kuramochi/20180725-2
blog/ochiai/20180718-2
blog/staff/20180711-2
blog/staff/20180704-2
blog/staff/20180627-2
blog/staff/20180620-2
blog/staff/%e7%ad%8b%e8%82%89%e3%81%a8%e8%84%82%e8%82%aa%e3%81%ae%e9%81%95%e3%81%84
blog/staff/%e3%83%97%e3%83%a9%e3%82%a4%e3%83%99%e3%83%bc%e3%83%88%e3%82%b8%e3%83%a0%e3%81%ae%e7%89%b9%e5%be%b4
blog/staff/%e3%81%97%e3%81%a3%e3%81%8b%e3%82%8a%e9%a3%9f%e3%81%b9%e3%82%8b%e3%83%80%e3%82%a4%e3%82%a8%e3%83%83%e3%83%88
blog/staff/%e3%83%80%e3%82%a4%e3%82%a8%e3%83%83%e3%83%88%e3%82%92%e6%88%90%e5%8a%9f%e3%81%95%e3%81%9b%e3%82%8b%e7%a7%98%e8%a8%a3
blog/staff/lamuda-%e3%83%96%e3%83%ad%e3%82%b0%e3%82%92%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f
blog/ochiai/20161003-2
blog/staff/20160926-2
blog/staff/20160923-2
blog/staff/20160912-2
blog/staff/20160905-2
blog/ochiai/20160808-2
blog/staff/20160803-2
blog/staff/20160801-2
blog/staff/20160730-2
blog/staff/20160711-2
blog/ochiai/20190605-2
blog/ochiai/20190508-2
blog/ochiai/20190403-2
blog/ochiai/20190306-2
blog/ochiai/20181226-2
blog/ochiai/20190206-2
blog/ochiai/20180905-2
blog/ochiai/20181121-2
blog/ochiai/20180606-2
blog/ochiai/20180418-2
blog/ochiai/20180314-2
blog/ochiai/20180207-2
blog/ochiai/20171213-2
blog/ochiai/20171108-2
blog/ochiai/20171004-2
blog/ochiai/20170823-2
blog/ochiai/20170711-2
blog/ochiai/20170530-2
blog/ochiai/20170509-2
blog/ochiai/20170411-2
blog/ochiai/20170321-2
blog/ochiai/20170227-2
blog/ochiai/20170118-2
blog/ochiai/20170206-2
blog/ochiai/20161226-2
blog/ochiai/20161205-2
blog/ochiai/20161107-2
blog/ochiai/20160704-2
blog/ochiai/20160530-2
blog/ochiai/20160425-2
blog/ochiai/20160321-2
blog/staff/20171227-2
blog/staff/20180124-2
blog/staff/20190123-2
blog/staff/20190116-2
blog/staff/20181219-2
blog/staff/20181212-2
blog/staff/20181205-2
blog/staff/20181114-2
blog/staff/20181031-2
blog/staff/20181107-2
blog/staff/20181017-2
blog/staff/20181010-2
blog/staff/20190619-2
blog/staff/20190529-2
blog/staff/20190522-2
blog/staff/20190424-2
blog/staff/20190417-2
blog/staff/20190327-2
blog/staff/20190320-2
blog/staff/20190227-2
blog/staff/20190220-2
blog/staff/20190130-2
blog/staff/20181003-2
blog/staff/20180926-2
blog/staff/20180919-2
blog/staff/20170418-2
blog/staff/20170404-2
blog/staff/20170329-2
blog/staff/20170314-2
blog/staff/20170307-2
blog/staff/20170213-2
blog/staff/20170220-2
blog/staff/20170130-2
blog/staff/20170123-2
blog/staff/20170109-2
blog/yamagishi/20190612-2
blog/yamagishi/20190515-2
blog/yamagishi/20190410-2
blog/kuramochi/20190313-2
blog/kuramochi/20190213-2
blog/kuramochi/20190109-2
blog/kuramochi/20181128-2
blog/kuramochi/20181024-2
blog/kuramochi/20180912-2
blog/kuramochi/20180613-2
blog/kuramochi/20180425-2
blog/kuramochi/20180321-2
blog/staff/20180601-2
blog/staff/20180523-2
blog/staff/20180516-2
blog/staff/20180502-2
blog/staff/20180413-2
blog/staff/20180404-2
blog/staff/20180328-2
blog/staff/20180307-2
blog/staff/20180228-2
blog/staff/20180221-2
blog/kuramochi/20180214-2
blog/staff/20180131-2
blog/staff/%e3%80%8c%e6%9c%88%e5%88%8a%e3%82%bf%e3%82%a6%e3%83%b3%e6%83%85%e5%a0%b1%e3%82%82%e3%82%93%e3%81%bf%e3%82%84%e3%80%8d2016%e5%b9%b44%e6%9c%88%e5%8f%b7%e3%81%ae%e6%8e%b2%e8%bc%89%e5%86%85%e5%ae%b9
blog/staff/20160324-2
blog/staff/20160314-2
blog/staff/20160219-2
blog/staff/%e4%bd%93%e8%b3%aa%e6%94%b9%e5%96%84%e3%81%a7%e3%83%80%e3%82%a4%e3%82%a8%e3%83%83%e3%83%88%e5%8a%b9%e6%9e%9c%e3%82%92%e3%82%a2%e3%83%83%e3%83%97%ef%bc%81
blog/staff/%e5%a4%aa%e3%82%8b%e7%94%9f%e6%b4%bb%e7%bf%92%e6%85%a3%e3%82%92%e8%a6%8b%e7%9b%b4%e3%81%9d%e3%81%86
blog/staff/%e7%ad%8b%e3%83%88%e3%83%ac%e3%81%ae%e5%8a%b9%e6%9e%9c%e3%82%92%e3%82%a2%e3%83%83%e3%83%97%e3%81%95%e3%81%9b%e3%82%8b%e3%83%9d%e3%82%a4%e3%83%b3%e3%83%88
blog/staff/%e7%ad%8b%e5%8a%9b%e3%83%88%e3%83%ac%e3%83%bc%e3%83%8b%e3%83%b3%e3%82%b0%e3%81%a7%e4%bd%93%e8%b3%aa%e6%94%b9%e5%96%84%e3%82%92
blog/staff/%e7%ad%8b%e8%82%89%e3%83%88%e3%83%ac%e3%83%bc%e3%83%8b%e3%83%b3%e3%82%b0%e3%81%ae%e5%9f%ba%e6%9c%ac
blog/staff/20160628-2
blog/staff/20160627-2
blog/staff/20160620-2
blog/staff/20160615-2
blog/staff/20160609-2
blog/staff/20160606-2
blog/staff/20160602-2
blog/staff/20160601-2
blog/staff/20160526-2
blog/staff/20160516-2
blog/staff/20160512-2
blog/staff/20160428-2
blog/staff/20160418-2
blog/staff/20160422-2
blog/staff/20160414-2
blog/staff/20160411-2
blog/staff/20160407-2
blog/staff/20160404-2
blog/staff/%e3%82%82%e3%82%93%e3%81%bf%e3%82%842014%e5%b9%b412%e6%9c%88%e5%8f%b7%e6%8e%b2%e8%bc%89%e8%a8%98%e4%ba%8b
blog/staff/%e3%82%82%e3%82%93%e3%81%bf%e3%82%842014%e5%b9%b411%e6%9c%88%e5%8f%b7%e6%8e%b2%e8%bc%89%e8%a8%98%e4%ba%8b
blog/staff/%e3%82%82%e3%82%93%e3%81%bf%e3%82%842014%e5%b9%b49%e6%9c%88%e5%8f%b7%e6%8e%b2%e8%bc%89%e8%a8%98%e4%ba%8b
blog/staff/%e3%82%82%e3%82%93%e3%81%bf%e3%82%842014%e5%b9%b410%e6%9c%88%e5%8f%b7%e6%8e%b2%e8%bc%89%e8%a8%98%e4%ba%8b
blog/staff/%e3%82%82%e3%82%93%e3%81%bf%e3%82%842014%e5%b9%b47%e6%9c%88%e5%8f%b7%e6%8e%b2%e8%bc%89%e8%a8%98%e4%ba%8b
blog/staff/%e3%82%82%e3%82%93%e3%81%bf%e3%82%842014%e5%b9%b48%e6%9c%88%e5%8f%b7%e6%8e%b2%e8%bc%89%e8%a8%98%e4%ba%8b
blog/staff/%e3%82%82%e3%82%93%e3%81%bf%e3%82%842014%e5%b9%b46%e6%9c%88%e5%8f%b7%e6%8e%b2%e8%bc%89%e8%a8%98%e4%ba%8b
blog/staff/20160331-2
blog/staff/20160328-2
blog/staff/20161128-2
blog/staff/20161121-2
blog/staff/20161108-2
blog/staff/20161114-2
blog/staff/20161031-2
blog/staff/20161024-2
blog/staff/20161010-2
blog/staff/20161017-2
blog/staff/20161004-2
blog/staff/20170102-2
blog/staff/20161219-2
blog/staff/20161212-2
blog/staff/20180110-2
blog/staff/20180117-2
blog/staff/20171206-2
blog/staff/20171129-2
blog/staff/20171122-2
blog/staff/20171101-2
blog/staff/20170809-2
blog/staff/20170802-2
blog/staff/20170726-2
blog/staff/20170704-2
blog/staff/20170629-2
blog/staff/20170621-2
blog/staff/20170606-2
blog/staff/20170524-2
blog/staff/20170518-2
blog/staff/20170425-2
blog/staff/20171025-2
blog/staff/20171018-2
blog/staff/%e3%83%80%e3%82%a4%e3%82%a8%e3%83%83%e3%83%88%e3%81%ae%e9%a3%9f%e4%ba%8b%e5%88%b6%e9%99%90%e3%81%af%e9%9b%a3%e3%81%97%e3%81%84%ef%bc%81%e9%a3%9f%e4%ba%8b%e7%ae%a1%e7%90%86%e3%82%a2%e3%83%89%e3%83%90
blog/staff/%e3%83%80%e3%82%a4%e3%82%a8%e3%83%83%e3%83%88%e3%82%92%e3%81%97%e3%81%9f%e3%81%84%e5%a5%b3%e6%80%a7%e5%bf%85%e8%a6%8b%e3%83%80%e3%82%a4%e3%82%a8%e3%83%83%e3%83%88%e6%88%90%e5%8a%9f%e8%80%85%e3%81%a8
blog/staff/%e6%9c%89%e9%85%b8%e7%b4%a0%e9%81%8b%e5%8b%95%e3%81%9f%e3%82%99%e3%81%91%e3%81%a6%e3%82%99%e3%81%af%e3%82%bf%e3%82%99%e3%83%a1%ef%bc%81%e3%82%bf%e3%82%99%e3%82%a4%e3%82%a8%e3%83%83%e3%83%88%e3%81%ab
blog/staff/20170927-2
blog/staff/%e9%a3%9f%e4%ba%8b%e3%81%a7%e7%ad%8b%e3%83%88%e3%83%ac%e3%82%92%e3%82%b5%e3%83%9d%e3%83%bc%e3%83%88%ef%bc%81%e7%ad%8b%e8%82%89%e3%82%92%e5%a2%97%e3%82%84%e3%81%99%e3%81%9f%e3%82%81%e3%81%ab%e5%a4%a7
blog/staff/20170920-2
blog/staff/20170913-2
blog/staff/20170906-2
blog/kuramochi/20171115-2
blog/kuramochi/20171220-2
blog/kuramochi/20171011-2
blog/kuramochi/20170719-2
blog/kuramochi/20170830-2
blog/kuramochi/20170613-2
blog/staff/page/2
blog/staff/page/4
blog/staff/page/3
blog/staff/page/5
blog/staff/page/10
blog/staff/page/17
blog/yamagishi/page/2
blog/kuramochi/page/2
*/

	);
	// arrayの中身をデコードして返す
	$directory_array  = array_decode($directory_array);

	// uxseo
	foreach($directory_array as $key => $value) {
		// トップページの場合
		if($value == 'index') {
			pre_var_dump($value);
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
				pre_var_dump($directory_path);
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


		// LAMUDA専用
		if($value == 'index' || $value == 'course' || $value == 'faq' || $value == 'access' || $value == 'recruit' || $value == 'contact' || $value == 'ladies-plan' || $value == 'personalfood' || $value == 'privacy' || $value == 'agreement') {
		//コメントアウトを削除 一旦外し
//		$gzip_article_html = preg_replace('/<!--[\s\S]*?-->/s', '', $gzip_article_html);
		// CSSインライン化
		$gzip_article_html = css_inline($http, $gzip_article_html);
		//HTML圧縮 一旦外し
//		$gzip_article_html = html_comp($gzip_article_html);
		} //LAMUDA専用
		// htmlファイルとgzipファイルを生成
		html_gzip_create($gzip_article_html, $directory_path);
	}
	// 削除
	unlink($path.'uxseo/class/function.php');

?>