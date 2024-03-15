function myalert(){
    alert("How  R U /n lets go for Ride");
}

function myconfirm(){
    var conf = confirm("press any key");
    if(conf == true)
    {
        document.getElementById("Confirm").innerHTML="user press the confirm button";
    }
    else{
        document.getElementById("Confirm").innerHTML="user press the cancel button";
    }
}

function mylogin(){
    var logn = prompt("plz login");
    if(logn == null){
        document.getElementById("log").innerHTML="user press cancle button"
    }
    else if (logn == ""){
        document.getElementById("log").innerHTML="plz login"
    }
    else{
        document.getElementById("log").innerHTML="wel-come  "+logn;
    }
}