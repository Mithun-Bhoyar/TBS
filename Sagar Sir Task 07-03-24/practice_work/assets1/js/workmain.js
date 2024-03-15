function myalert(){
    alert("hello,\nhow are you today?");
}

function myconfirm(){
    var conf = confirm("press any key");
    //alert(conf) to check the true false value
    if(conf==true)
    {
       // $("#conn").val("user press confirm button");
        document.getElementById("conn").innerHTML="user press confirm button";
    }
    else{
        document.getElementById("conn").innerHTML="user press cancel button";
    }
}

function myprompt() {
    var prom = prompt("plz provide your name");

    if (prom == null) {
        document.getElementById("pro").innerHTML = "User pressed cancel button.";
    } else if (prom == "") {
        document.getElementById("pro").innerHTML = "plz enter your name";
    } else {
        document.getElementById("pro").innerHTML = "welcome "+prom;
    }
}

function myparameterfunction(name,design,sal){
    document.getElementById("details").innerHTML="Welcome "+name+" ,your designation is "+design+" and your salary will be "+sal;
}

function getval1(){
    document.getElementById("second_val").value = document.getElementById("first_val").value;
    document.getElementById("Third_val").value = document.getElementById("first_val").value;
}

function getva2(){
    document.getElementById("five_val").value = document.getElementById("four_val").value;
}

function getval3(){
    document.getElementById("seven_val").value = document.getElementById("six_val").value;
}

function getvals(oper)
{
    var val1=document.getElementById("v1").value;
    var val2=document.getElementById("v2").value;
    if(val1=="" || val2=="")
    {
        alert("please enter values");
    }else{
        document.getElementById("operator").innerHTML=oper;
        switch(oper)
        {
            case "+":
                document.getElementById("result").innerHTML = "="+(parseInt(val1)+parseInt(val2));
            break;
            case "-":
                document.getElementById("result").innerHTML = "="+(parseInt(val1)-parseInt(val2));
            break;
            case "*":
                document.getElementById("result").innerHTML = "="+(parseInt(val1)*parseInt(val2));
            break;
            case "/":
                document.getElementById("result").innerHTML = "="+(parseInt(val1)/parseInt(val2));
            break;
            case "%":
                document.getElementById("result").innerHTML = "="+((parseInt(val1)/parseInt(val2))*100);
            break;

            default:
                document.getElementById("v1").value = '';
                document.getElementById("v2").value = '';
                document.getElementById("result").innerHTML = '';
                document.getElementById("operator").innerHTML = '';

        }
    }
}





document.getElementById('table').innerHTML='<h2>Multiplication Table</h2>';



var tb="<table border='1' cellpadding='15px' cellspacing='0px' aligm='center' width='80%'>";

tb +="<tr>";
for(let i = 1; i <= 10; i++){
    tb +="<td>"+i+"</td>";

}

tb += "</tr>";
tb +="</table>";

document.getElementById('table').innerHTML += tb+"<br>";

let tb1 = "<table border='1' cellpadding='15px' cellspacing='0px' align='center' width='80%'>";

for (let i = 1; i <=10; i++){
    tb1 += "<tr>";
    for(let j = 1; j <= 10; j++) {
        tb1 += "<td>"+j+" X "+i+" = "+i*j+"</td>";

    }
    tb1 += "</tr>";
}
tb1 += "</table>";
document.getElementById('table').innerHTML += tb1;



function validate_form()
{
    var name = document.myform.name.value;// "myform" is the name given to the form tag and it is used to pick the value of input data within the form.
    var email = document.myform.email.value;
    var mobile = document.myform.mobile.value;
    var address = document.myform.address.value;
    var gender = document.myform.gender.value;
    var city = document.myform.city.value;
    var photo = document.myform.photo.value;

    var pattern_name= /^[a-zA-Z]+$/;

    var pattern_email=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    var pattern_mobile=/^[6-9]\d{9}$/;
 

    if(name.trim()==""){
        document.getElementById("errname").innerHTML = "<div class='error'>please provide your name</div>";
        setTimeout(function(){
            document.getElementById("errname").innerHTML="";
        }, 2000)
         document.myform.name.focus();
        return false;
    }else if(!(pattern_name).test(name)) // test keyword is used to check the pattern with the name
    {
        document.getElementById("errname").innerHTML = "<div class='error'>please provide valid name</div>";
        setTimeout(function(){
            document.getElementById("errname").innerHTML="";
        }, 2000)
         document.myform.name.focus();
        return false;
    }


    if(email.trim()==""){
        document.getElementById("erremail").innerHTML = "<div class='error'>please provide your email</div>";
        setTimeout(function(){
            document.getElementById("erremail").innerHTML="";
        }, 2000)
         document.myform.email.focus();
        return false;
    }else if(!(pattern_email).test(email)) {
        document.getElementById("erremail").innerHTML = "<div class='error'>please provide valid email</div>";
        setTimeout(function(){
            document.getElementById("erremail").innerHTML="";
        }, 2000)
         document.myform.email.focus();
        return false;
    }
    if(address.trim()==""){
    document.getElementById("erraddress").innerHTML = "<div class='error'>please provide valid address</div>";
    setTimeout(function(){
        document.getElementById("erraddressl").innerHTML="";
    }, 2000)
    document.myform.address.focus();
     return false;
    }

    if(mobile.trim()=="") {
    document.getElementById("errmobile").innerHTML = "<div class='error'>please provide your mobile</div>";
    setTimeout(function(){
            document.getElementById("errmobile").innerHTML="";
    }, 2000)
         document.myform.mobile.focus();
         return false;
    }else if(!(pattern_mobile).test(mobile)) {
        document.getElementById("errmobile").innerHTML = "<div class='error'>please provide valid mobile</div>";
        setTimeout(function(){
         document.getElementById("errmobile").innerHTML="";
        }, 2000)
        document.myform.mobile.focus();
        return false;
    }

    if(gender==""){
        document.getElementById("errgender").innerHTML = "<div class='error'>please select your gender</div>";
        setTimeout(function(){
            document.getElementById("errgender").innerHTML="";
        }, 2000);
        return false;
    }
     
    if(city ==""){
        document.getElementById("errcity").innerHTML = "<div class='error'>please select a city</div>";
        setTimeout(function(){
         document.getElementById("errcity").innerHTML="";
        }, 2000);
         return false;
        }

    if(photo ==""){
        document.getElementById("errphoto").innerHTML = "<div class='error'>please upload a photo</div>";
        setTimeout(function(){
        document.getElementById("errphoto").innerHTML="";
        }, 2000);
         return false;
     }
}



   



/////////////////////////////////

function validation_form() {
    var name = document.myform.name.value;
    var email = document.myform.email.value;
    var address = document.myform.address.value;
    var mobile = document.myform.mobile.value;
    var gender = document.querySelector('input[name="gender"]:checked');
    var city = document.getElementById("citySelect").value;
    var photo = document.querySelector('input[type="file"]').value;

    var pattern_name = /^[a-zA-Z]+$/;
    var pattern_email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regular expression for email validation
    var pattern_mobile = /^\d{10}$/; // Regular expression for mobile number validation (10 digits)

    if (name.trim() == "") {
        document.getElementById("errname").innerHTML = "<div class='error'>Please provide your name</div>";
        setTimeout(function () {
            document.getElementById("errname").innerHTML = "";
        }, 2000);
        document.myform.name.focus();
        return false;
    } else if (!pattern_name.test(name)) {
        document.getElementById("errname").innerHTML = "<div class='error'>Please provide a valid name</div>";
        setTimeout(function () {
            document.getElementById("errname").innerHTML = "";
        }, 2000);
        document.myform.name.focus();
        return false;
    }

    if (email.trim() == "") {
        document.getElementById("erremail").innerHTML = "<div class='error'>Please provide your email</div>";
        setTimeout(function () {
            document.getElementById("erremail").innerHTML = "";
        }, 2000);
        document.myform.email.focus();
        return false;
    } else if (!pattern_email.test(email)) {
        document.getElementById("erremail").innerHTML = "<div class='error'>Please provide a valid email</div>";
        setTimeout(function () {
            document.getElementById("erremail").innerHTML = "";
        }, 2000);
        document.myform.email.focus();
        return false;
    }

    if (address.trim() == "") {
        document.getElementById("erradd").innerHTML = "<div class='error'>Please provide your address</div>";
        setTimeout(function () {
            document.getElementById("erradd").innerHTML = "";
        }, 2000);
        document.myform.address.focus();
        return false;
    }

    if (mobile.trim() == "") {
        document.getElementById("errmob").innerHTML = "<div class='error'>Please provide your mobile number</div>";
        setTimeout(function () {
            document.getElementById("errmob").innerHTML = "";
        }, 2000);
        document.myform.mobile.focus();
        return false;
    } else if (!pattern_mobile.test(mobile)) {
        document.getElementById("errmob").innerHTML = "<div class='error'>Please provide a valid 10-digit mobile number</div>";
        setTimeout(function () {
            document.getElementById("errmob").innerHTML = "";
        }, 2000);
        document.myform.mobile.focus();
        return false;
    }

    if (gender == null) {
        document.getElementById("errgen").innerHTML = "<div class='error'>Please select your gender</div>";
        setTimeout(function () {
            document.getElementById("errgen").innerHTML = "";
        }, 2000);
        return false;
    }

    if (city == "") {
        document.getElementById("errcity").innerHTML = "<div class='error'>Please select a city</div>";
        setTimeout(function () {
            document.getElementById("errcity").innerHTML = "";
        }, 2000);
        return false;
    }

    if (photo.trim() == "") {
        document.getElementById("errphoto").innerHTML = "<div class='error'>Please upload a photo</div>";
        setTimeout(function () {
            document.getElementById("errphoto").innerHTML = "";
        }, 2000);
        return false;
    }

    return true; // If all validations pass
}
















