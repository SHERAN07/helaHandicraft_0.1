function toggleForms() {
    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');
    const loginImg = document.getElementById('login-img-tag');

    if (loginForm.style.display === 'none') {
        loginForm.style.display = 'block';
        signupForm.style.display = 'none';
        loginImg.src = "./resources/login.jpg";
    } else {
        loginForm.style.display = 'none';
        signupForm.style.display = 'block';
        loginImg.src = "./resources/signup.jpg";
    }
}

function signUp() {

    var f = document.getElementById("fname");
    var l = document.getElementById("lname");
    var e = document.getElementById("email");
    var p = document.getElementById("password");
    var m = document.getElementById("mobile");
    var g = document.getElementById("gender");

    var form = new FormData();
    form.append("f", f.value);
    form.append("l", l.value);
    form.append("e", e.value);
    form.append("p", p.value);
    form.append("m", m.value);
    form.append("g", g.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "success") {
                Swal.fire({
                    icon: 'success',
                    title: 'successfully!',
                    text: t,
                    confirmButtonText: 'Okey',
                    confirmButtonColor: "#000000",
                });
                toggleForms();
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'warning!',
                    text: t,
                    confirmButtonText: 'Okey',
                    confirmButtonColor: "#000000",
                });
            }


        }
    }

    r.open("POST", "./authentication/signUpProcess.php", true);
    r.send(form);

}

function checkCookies() {
    alert(getCookie("password"));
}

function getCookie(name) {
    const cookies = document.cookie.split('; ');
    for (let i = 0; i < cookies.length; i++) {
        const [cookieName, cookieValue] = cookies[i].split('=');
        if (cookieName === name) {
            return decodeURIComponent(cookieValue);
        }
    }
    return null; // Return null if cookie not found
}

function signIn() {

    var email = document.getElementById("signInEmail");
    var password = document.getElementById("signInPassword");
    var rememberme = document.getElementById("rememberme");

    var f = new FormData();
    f.append("e", email.value);
    f.append("p", password.value);
    f.append("r", rememberme.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            if (r.status == 200) {
                var t = r.responseText;
                if (t == "success") {
                    window.location = "./index.php";
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'warning!',
                        text: t,
                        confirmButtonText: 'Okey',
                        confirmButtonColor: "#000000",
                    });
                }
            } else {
                alert("Error: " + r.statusText);
            }

        }
    }

    r.open("POST", "./authentication/signInProcess.php", true);
    r.send(f);

}

var bm;
function forgotPassword() {

    var fp = document.getElementById("fp");
    var sp = document.getElementById("sp");

    sp.classList.remove("d-none");
    fp.classList.add("d-none");

    var email = document.getElementById("signInEmail");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            if (t == "success") {
                fp.classList.remove("d-none");
                sp.classList.add("d-none");
                var fga = document.getElementById("fga");
                var fgat = document.getElementById("fgat");
                fga.classList.remove("d-none");
                fgat.innerHTML = "Verification code has sent to your Email. Please check your inbox";
                // alert("Verification code has sent to your Email. Please check your inbox");
                var m = document.getElementById("fpmodal");
                bm = new bootstrap.Modal(m);
                bm.show();

            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'warning!',
                    text: t,
                    confirmButtonText: 'Okey',
                    confirmButtonColor: "#000000",
                });
                fp.classList.remove("d-none");
                sp.classList.add("d-none");
            }

        }
    }

    r.open("GET", "./authentication/forgotPasswordProcess.php?e=" + email.value, true);
    r.send();

}

function showpasswordicon() {
    var textfiled = document.getElementById("signInPassword");
    var butn_icon = document.getElementById("passicon");

    if (textfiled.type == "password") {
        textfiled.type = "text";
        butn_icon.innerHTML = '<i class="fa-solid fa-eye"></i>';
    } else {
        textfiled.type = "password";
        butn_icon.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
    }
}

function showpasswordicon2() {
    var textfiled = document.getElementById("np");
    var butn_icon = document.getElementById("passicon2");

    if (textfiled.type == "password") {
        textfiled.type = "text";
        butn_icon.innerHTML = '<i class="fa-solid fa-eye"></i>';
    } else {
        textfiled.type = "password";
        butn_icon.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
    }
}

function showpasswordicon3() {
    var textfiled = document.getElementById("rnp");
    var butn_icon = document.getElementById("passicon3");

    if (textfiled.type == "password") {
        textfiled.type = "text";
        butn_icon.innerHTML = '<i class="fa-solid fa-eye"></i>';
    } else {
        textfiled.type = "password";
        butn_icon.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
    }
}

function showpasswordicon4() {
    var textfiled = document.getElementById("pw1");
    var butn_icon = document.getElementById("passicon4");

    if (textfiled.type == "password") {
        textfiled.type = "text";
        butn_icon.innerHTML = '<i class="fa-solid fa-eye"></i>';
    } else {
        textfiled.type = "password";
        butn_icon.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
    }
}

function resetPassword() {

    var np = document.getElementById("np");
    var rnp = document.getElementById("rnp");
    var vcode = document.getElementById("vc");
    var email = document.getElementById("signInEmail");

    var f = new FormData();
    f.append("np", np.value);
    f.append("rnp", rnp.value);
    f.append("vc", vcode.value);
    f.append("e", email.value);
    var r = new XMLHttpRequest();
    r.onreadystatechange  = function () {
        if (r.readyState ==  4 && r.status == 200) {
            var t = r.responseText;
            if (t == "success") {
                Swal.fire({
                    icon: 'success',
                    title: 'successfully!',
                    text: t,
                    confirmButtonText: 'Okey',
                    confirmButtonColor: "#000000",
                });
                bm.hide();
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'warning!',
                    text: t,
                    confirmButtonText: 'Okey',
                    confirmButtonColor: "#000000",
                });
            }
        }
    }
    r.open("POST", "./authentication/resetPasswordProcess.php", true);
    r.send(f);

}

function signout() {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "index.php";
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: t,
                });
            }
        }
    };

    r.open("GET", "authentication/signoutProcess.php", true);
    r.send();

}

function loadDistrict() {
    // alert("OK");
    var pr = document.getElementById("province");
    var f = new FormData();
    f.append("dload", pr.value);
    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);

            document.getElementById("district").innerHTML = t;

        }
    };

    r.open("POST", "loadDistrictProcess.php", true);
    r.send(f);
}

function loadCity() {
    // alert("OK");
    var cr = document.getElementById("district");
    var f = new FormData();
    f.append("cload", cr.value);
    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);

            document.getElementById("city").innerHTML = t;

        }
    };

    r.open("POST", "loadCityProcess.php", true);
    r.send(f);
}