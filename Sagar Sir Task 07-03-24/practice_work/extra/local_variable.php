<?php
//$capital="";
function mytest(){
    $capital="DELHI";
    echo"capital of india is:".$capital;
}
mytest();
 echo $capital;
?>
    <script>
        function getdata(params){
            //alert(params)
            for ( params; params < 12; params++){
                //code block to be executed
                var date = parseInt(params)+1;
                document.getElementById('v'+ date).value = document.getElementById('v'+ params).value;
            }
            calculateTotal();
        } 

        function calculateTotal() {
            var total = 0;
                for (var i = 1; i <= 12; i++) {
                    total += parseInt(document.getElementById('v' + i).value);
                }

            document.getElementById('total').value = total;
            //var average = parsefloat(total/12);
            //document.getElementById('avg').value=average;
        }

         function calculateavg() {
            var average = parsefloat(total/12);
            document.getElementById('avg').value=average;
         }

        
    </script>