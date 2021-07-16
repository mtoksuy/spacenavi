var page = require("webpage").create();
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




page.open("https://signal.locarise.com/#/widget/RAqbcvvXtvz694oNbSFPR3", function(status) {
        console.log(status);
    if (status === "success") {
        console.log(status);
        console.log(page.content);
    }
    phantom.exit();
});