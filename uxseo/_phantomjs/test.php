
<?php
    $html = 'https://signal.locarise.com/#/widget/RAqbcvvXtvz694oNbSFPR3';
//    $html = 'https://uxseo.jp/';


	$get_js = 'var page = require("webpage").create();
var system = require("system");

page.settings.userAgent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.6 Safari/537.11";

page.onError = function(msg, trace) {
    var msgStack = ["ERROR: " + msg];
    if (trace && trace.length) {
        msgStack.Push("TRACE:");
        trace.forEach(function(t) {




        });
    }
    // uncomment to log into the console 
    // console.error(msgStack.join("\n"));
}; 




page.open("'.$html.'", function(status) {
        console.log(status);
    if (status === "success") {
        console.log(status);
        console.log(page.content);
    }
    phantom.exit();
});';
	// ファイル書き込み
	file_put_contents("/var/www/html/uxseo/phantomjs/get.js", $get_js);
	// phantomjs実行
	exec("phantomjs /var/www/html/uxseo/phantomjs/get.js", $output, $status);

	file_put_contents('/var/www/html/uxseo/phantomjs/get.html', $output);
	$g_html = file_get_contents('/var/www/html/uxseo/phantomjs/get.html');

var_dump($g_html);

//var_dump('<br><br>');

//var_dump($status);



?>

