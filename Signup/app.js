let x = document.getElementById('login');
let y = document.getElementById('register');
let z = document.getElementById('btn');

function register() {
    x.style.left='-400px';
    y.style.left='50px';
    z.style.left='110px';
}

function login() {
    x.style.left='50px';
    y.style.left='450px';
    z.style.left='0px';
}

function validateReg() {
    let psw = document.getElementById("psw");
    let pswconfirm = document.getElementById("pswconfirm");
    if (psw.value != pswconfirm.value) {
        alert("Error: Passwords do not match.");
        return false;
    } else {
        return true;
    }
}