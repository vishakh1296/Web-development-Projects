// register-form
function storeInfo() {
    debugger;
    // register-form data
    var uname = document.getElementById('fname');
    var email= document.getElementById('email');
    var pw = document.getElementById('pw');
    var cpw = document.getElementById('cpw');
    var mobile = document.getElementById('mobile');
    var birthdate = document.getElementById('birthdate');
    var streetno = document.getElementById('streetno');
    var streetname = document.getElementById('streetname');
    var complement = document.getElementById('complement');
    var city = document.getElementById('city');
    var state = document.getElementById('state');
    var country = document.getElementById('country');
    var postalcode = document.getElementById('postalcode');
    var regNew = new Object();
    regNew.fullname = uname.value;
    regNew.email = email.value;
    regNew.password = pw.value;
    regNew.confirmpassword = cpw.value;
    regNew.mobile = mobile.value;
    regNew.birthdate = birthdate.value;
    regNew.streetno = streetno.value;
    regNew.streetname = streetname.value;
    regNew.complement = complement.value;
    regNew.city = city.value;
    regNew.state = state.value;
    regNew.country = country.value;
    regNew.postalcode = postalcode.value;

    $.ajax({
        url : "http://localhost:8012/api/register",
        type: "POST",
        contentType: 'application/json',
        data : JSON.stringify(regNew),
        success: function(data, textStatus, jqXHR)
        {
            alert("Registered successfully");
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Registration failed');
        }
    });
}

// login-form
function check() {
    // entered data from the login-form
    var userName = document.getElementById('userName').value;
    var userPw = document.getElementById('userPw').value;

    var objectNew = new Object();
    objectNew.email = userName;
    objectNew.password = userPw;

    $.ajax({
        url : "http://localhost:8012/api/authenticate",
        contentType: 'application/json',
        type: "POST",
        data : JSON.stringify(objectNew),
        success: function(data, textStatus, jqXHR)
        {
            localStorage.setItem('loggedin', 'true');
            localStorage.setItem('name', userName);
            document.getElementById('welcomenote').innerText = "Welcome, "+userName+" to the foreigner"+"'"+"s guide";
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            localStorage.setItem('loggedin', 'false');
            alert('User name or Password is not correct');
        }
    });
}
