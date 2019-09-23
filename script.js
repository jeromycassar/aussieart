function validateform() {
    var x = document.forms["login"]["usernamel"].value;
    var y = document.forms["login"]["passwordl"].value;
    if (x == "") {
        alert("User name or password cannot be empty");
        return false;
    }
    if (y == "") {
        alert("User name or password cannot be empty");
        return false;
    }
}
function CheckPassword() {
    password = document.getElementById('password').value;
    if (password.length < 6) {
        document.getElementById('submit').disabled = true;
        document.getElementById('submit').innerHTML = "Register";
    } else {
        document.getElementById('submit').disabled = false;
        document.getElementById('submit').innerHTML = "Register";
    }
}
function validateform() {
    var x = document.forms["register"]["username"].value;
    if (x == "") {
        alert("User name or password cannot be empty");
        return false;
    }
}
