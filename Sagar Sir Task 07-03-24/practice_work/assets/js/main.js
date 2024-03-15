// function getvals(oper)
// {
//     var val1=document.getElementById("value1").value;
//     var val2=document.getElementById("value2").value;
//     //alert(typeof parseInt(val1));
//     //console.log(typeof parseInt(val1));
//     if(val1=="" || val2=="")
//     {
//         alert("please enter values");
//     }else{
//         document.getElementById("operator").innerHTML=oper;
//         switch(oper)
//         {
//             case "+":
//                 document.getElementById("result").innerHTML = "="+(parseInt(val1)+parseInt(val2));
//             break;
//             case "-":
//                 document.getElementById("result").innerHTML = "="+(parseInt(val1)-parseInt(val2));
//             break;
//             case "*":
//                 document.getElementById("result").innerHTML = "="+(parseInt(val1)*parseInt(val2));
//             break;
//             case "/":
//                 document.getElementById("result").innerHTML = "="+(parseInt(val1)/parseInt(val2));
//             break;
//             case "%":
//                 document.getElementById("result").innerHTML = "="+((parseInt(val1)/parseInt(val2))*100);
//             break;

//             default:
//                 document.getElementById("value1").value = '';
//                 document.getElementById("value2").value = '';
//                 document.getElementById("result").innerHTML = '';
//                 document.getElementById("operator").innerHTML = '';
//             break;
//         }
//     }
// }

function getvals(oper){
    var v1=document.getElementById(num1).value;
    var v2=document.getElementById(num2).value;
    if(v1=="" || v2=="")
    {
        alert("please enter value");
    }else{
        document.getElementById("operator").innerHTML=oper;
        switch(oper)   
     {
        case "+":
            document.getElementById("result").innerHTML ="="+(parseInt(v1)/parseInt(v2));
        break;

        default:
            document.getElementById("num1").value ='';
            document.getElementById("num2").value='';
            document.getElementById("result").value='';
            document.getElementById("operator").innerHTML='';

     }
    }
}

