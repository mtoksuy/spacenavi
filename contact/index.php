<?php
// core読み込み
require_once('../core.php');
if($_POST['submit'] == '確認') {
		// テンプレート読み込み
		require_once(PATH.'view/contact/confirm_template.php');
}
	else if($_POST['submit'] == '修正する') {
		// テンプレート読み込み
		require_once(PATH.'view/contact/template.php');
	}
		else if($_POST['submit'] == '送信') {
			// 送信



			// テンプレート読み込み
		require_once(PATH.'view/contact/submit_template.php');
		}
			else {
				// テンプレート読み込み
				require_once(PATH.'view/contact/template.php');
			}




?>