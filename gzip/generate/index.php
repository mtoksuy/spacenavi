<?php
/**************************************************

	GZIPファイルを作成する



**************************************************/

// core読み込み
require_once('../../core.php');

// テンプレート読み込み
//require_once(PATH.'view/root/template.php');

//$html = file_get_contents('https://spacenavi.jp/');










// rootファイル生成
file_put_contents(PATH.'index.html', $html);
	$file_org  = PATH.'index.html';
	$file_gzip = $file_org.'.gz';
	// 元ファイルの内容を読み込む
	$code = file_get_contents($file_org);
	// gzip圧縮処理して同一フォルダにファイルを作成
	$gzip = gzopen($file_gzip ,'w9');
	gzwrite($gzip ,$code);
	gzclose($gzip);
