function validate() {
    console.log("Validate function!");
    let errors = [];

    if (!validQuantities()) {
        errors.push("All Product Quantities must be 0 or positive integers!");
    }
    if (!validEmail()) {
        errors.push("Email must be in the form of 'example@gmail.com'!");
    }
    if (!validPassword()) {
        errors.push("Password must not be blank!");
    }
    if (!validShipping()) {
        errors.push("At least one shipping option must be selected!");
    }

    if (errors.length > 0) {
        err = errors.join(" ");
        alert("Form errors: " + err);
        return false;
    } else {
        return true;
    }
}

function validQuantities() {
    let bookNum = document.getElementById("bookNum").value;
    let basketballNum = document.getElementById("basketballNum").value;
    let backpackNum = document.getElementById("backpackNum").value;

    // trim whitespace
    bookNum = bookNum.trim();
    basketballNum = basketballNum.trim();
    backpackNum = backpackNum.trim();

    // check if empty
    if (bookNum == "") {return false;}
    if (basketballNum == "") {return false;}
    if (backpackNum == "") {return false;}

    // check if not a number
    if (isNaN(bookNum)) {return false;}
    if (isNaN(basketballNum)) {return false;}
    if (isNaN(backpackNum)) {return false;}

    // convert to int and check if not negative
    if (parseInt(bookNum) < 0) {return false;}
    if (parseInt(basketballNum) < 0) {return false;}
    if (parseInt(backpackNum) < 0) {return false;}

    return true;
}

function validEmail() {
    let email = document.getElementById("email").value;
    let re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function validPassword() {
    let pwd = document.getElementById("password").value;
    return (pwd != "" || pwd.length != 0);
}

function validShipping() {
    if (document.getElementById("s1").checked) {return true;}
    else if (document.getElementById("s2").checked) {return true;}
    else if (document.getElementById("s3").checked) {return true;}
    else {return false;}
}