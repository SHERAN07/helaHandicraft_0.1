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

    var email = document.getElementById("signInEmail");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            if (t == "success") {
                Swal.fire({
                    icon: 'success',
                    title: 'success!',
                    text: 'Verification code has sent to your Email. Please check your inbox',
                    confirmButtonText: 'Okey',
                    confirmButtonColor: "#000000",
                });
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
        butn_icon.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
    } else {
        textfiled.type = "password";
        butn_icon.innerHTML = '<i class="fa-solid fa-eye"></i>';
    }
}

function showpasswordicon2() {
    var textfiled = document.getElementById("password");
    var butn_icon = document.getElementById("passicon2");

    if (textfiled.type == "password") {
        textfiled.type = "text";
        butn_icon.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
    } else {
        textfiled.type = "password";
        butn_icon.innerHTML = '<i class="fa-solid fa-eye"></i>';
    }
}

function showpasswordicon3() {
    var textfiled = document.getElementById("password3");
    var butn_icon = document.getElementById("passicon3");

    if (textfiled.type == "password") {
        textfiled.type = "text";
        butn_icon.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
    } else {
        textfiled.type = "password";
        butn_icon.innerHTML = '<i class="fa-solid fa-eye"></i>';
    }
}

function showPassword() {

    var np = document.getElementById("np");
    var npb = document.getElementById("npb");

    if (np.type == "password") {

        np.type = "text";
        npb.innerHTML = "Hide";

    } else {

        np.type = "password";
        npb.innerHTML = "Show";

    }

}

function showPassword2() {

    var rnp = document.getElementById("rnp");
    var rnpb = document.getElementById("rnpb");

    if (rnp.type == "password") {

        rnp.type = "text";
        rnpb.innerHTML = "Hide";

    } else {

        rnp.type = "password";
        rnpb.innerHTML = "Show";

    }

}

function resetPassword() {

    var email = document.getElementById("email2");
    var np = document.getElementById("np");
    var rnp = document.getElementById("rnp");
    var vcode = document.getElementById("vc");

    var f = new FormData();
    f.append("e", email.value);
    f.append("n", np.value);
    f.append("r", rnp.value);
    f.append("v", vcode.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "success") {
                alert("Your Password Updated");
                bm.hide();
            } else {
                alert(t);
            }
        }
    };

    r.open("POST", "auth/resetPasswordProcess.php", true);
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