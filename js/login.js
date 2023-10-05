
var form = document.forms["login"]
var usernameInput = form["username"];
var passwordInput = form["password"];

var sublitBTN = form["Submit"];
var request = new XMLHttpRequest();
request.onload = ()=>{
    alert(request.responseText);
}

sublitBTN.onclick = ()=>{
    var userName = usernameInput.value;
    var password = passwordInput.value;
    //alert("Username: "+ userName + "\nPassword: "+password);
    request.open("POST", "Api.php");
    //request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send(JSON.stringify({
        "username":userName,
        "password":password
    }));
}

