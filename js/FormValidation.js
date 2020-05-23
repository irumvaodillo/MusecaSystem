var flag = true;

function emptyField(val, lbl) {
    val1 = val.value;
    label = document.getElementById('' + lbl);
    if (val1 == "") {
        label.innerHTML = "Please enter " + lbl;
        flag = false;
    } else {
        label.innerHTML = "";
        flag = true;
    }
}

function confirm(val1, val2, lbl) {
    label = document.getElementById('' + lbl);
    txt1 = document.getElementById('' + val2).value;
    txt2 = val1.value;
    if (txt1 != txt2) {
        label.innerHTML = "Password and " + lbl + " mismatch";
        flag = false
    } else {
        label.innerHTML = "";
        flag = true;
    }
}

function validateForm() {
    if (flag == false)
        return false;
}