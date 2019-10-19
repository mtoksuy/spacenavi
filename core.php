<?php 
// エラー回避
error_reporting(0);
ini_set('display_errors', 1);

// エラー表示
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 開発
error_reporting(E_ALL & ~E_NOTICE);

/***************
タイムゾーン指定
***************/
date_default_timezone_set('Asia/Tokyo');
/*******
独自関数
*******/
// プレヴァーダンプ
function pre_var_dump($data = '') {
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}
/********************************
 * ローカルと本番環境のpathを吸収
 *******************************/
// ローカル環境
if(preg_match('/localhost/',$_SERVER["HTTP_HOST"])) {
	// デフォルト変数生成
	define('HTTP', 'http://localhost/spacenavi/');
	define('PATH', dirname(__FILE__).'/');
	define('TITLE', 'スペースナビ株式会社');
	define('META_KEYWORDS', 'Spacenavi,スペースナビ,営業進捗サービス,マイニング,マイニングリグ');
	define('META_DESCRIPTION', 'スペースナビ株式会社の公式ホームページ。サービス設計・作成、サーバー作成、メディア運営、マイニング、マイニングリグ販売を手がける株式会社です。');
	define('TWITTER_ID', '');
}
	// 本番環境
	else {
		// デフォルト変数生成
		define('HTTP', 'https://'.$_SERVER["HTTP_HOST"].'/');
		define('PATH', $_SERVER["DOCUMENT_ROOT"].'/');
		define('TITLE', 'スペースナビ株式会社');
		define('META_KEYWORDS', 'Spacenavi,スペースナビ,営業進捗サービス,マイニング,マイニングリグ');
		define('META_DESCRIPTION', 'スペースナビ株式会社の公式ホームページ。サービス設計・作成、サーバー作成、メディア運営、マイニング、マイニングリグ販売を手がける株式会社です。');
		define('TWITTER_ID', '');
	}
/**********

**********/
session_start();
/***********
DBコンフィグ
***********/
//require_once(PATH.'classes/config/db.php');
/*******
モデルDB
*******/
//require_once(PATH.'classes/model/db/basis.php');
//$model_db = new model_db();
/************
モデルarticle
************/
//require_once(PATH.'classes/model/article/basis.php');
//require_once(PATH.'classes/model/article/html.php');
//$model_article_basis = new model_article_basis();
//$model_article_html = new model_article_html();
/*********
モデルinfo
*********/
//require_once(PATH.'classes/model/info/basis.php');
//$model_info_basis = new model_info_basis();
/**********
モデルlogin
**********/
//require_once(PATH.'classes/model/login/basis.php');
//$model_login_basis = new model_login_basis();
/*************
モデルsecurity
*************/
//require_once(PATH.'classes/library/security/basis.php');
//$library_security_basis = new library_security_basis();
/*********
モデルgzip
*********/
require_once(PATH.'classes/model/gzip/basis.php');
require_once(PATH.'classes/model/gzip/html.php');
$model_gzip_basis = new model_gzip_basis();
$model_gzip_html = new model_gzip_html();
