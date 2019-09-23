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
