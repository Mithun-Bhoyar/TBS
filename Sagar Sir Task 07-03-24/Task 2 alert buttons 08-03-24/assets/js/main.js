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