<?php 

//$user = 'root'; //jjj
//$pass = '';
//$db = 'cts';

//$mysqli = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
//
//if($mysqli->connect_errno){
//    echo "Sorry, this website is experiencing problems.";
//    echo "Error: Failed to make a MySQL connection, here is why:\n";
//    echo "Error: ".$mysqli->connect_errno."\n";
//    echo "Error: ".$mysqli->connect_errno."\n";
//    exit;
//}   
//
//$sql = "SELECT * FROM seat_booking";
//
//if(!$result = $mysqli->query($sql)){
//    echo "Sorry, this website is experiencing problems.";
//    echo "Error: Failed to make a MySQL connection, here is why:\n";
//    echo "Error: ".$mysqli->connect_errno."\n";
//    echo "Error: ".$mysqli->connect_errno."\n";
//    exit;
//}



//$data = array();
//while($order = $result->fetch_assoc()){
//    $data[] = $order;
//}
//
//$json_order = json_encode($data);
//mysqli_close($mysqli);

?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="booking.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h2>Seat Selection</h2>

        <!-- Trigger/Open The Modal -->
        <button id="ctn" onclick="jumpout()">Continue</button>

        <!-- The Modal -->
        <div id="modalBox" class="modal">

        <!-- Modal content -->
        <span class="close">&times;</span>
            <div class="flex-container">                
                <div class="classic" onclick="toggleArrow(); dropdownActive()">
                    Classic <span class="arrow"></span>
                </div>       
                    <form id="booking" name="booking" action="../Payment/payment-method.php" method="POST"> 
                    <div class="dropdown">                        
                        <div class="content">                                                
                            <div class="flex1 pos1">                    
                                Adult<br/><span id="adultPrice" data-value="19.00" style="color: red; font-size: 15px;">RM 19.00</span>
                            </div>
                    
                            <div class="flex2 pos2">
                                <div class="ticketQty">
                                    <div class="flex3"><input type="button" class="button1" value="-" onclick="adultDecrementQty()" /></div>
                                    <div class="flex4"><input type="text" id="adultQty" name="adultQty" value="0" size="1" disabled /></div>
                                    <div class="flex5"><input type="button" class="button2" value="+" onclick="adultIncrementQty()" /></div>
                                </div>
                            </div>                                     
                        </div> 
                
                        <div class="content">
                            <div class="flex1 pos1">   
                                Child<br/><span id="childPrice" data-value="13.00" style="color: red; font-size: 15px;">RM 13.00</span>  
                            </div>
                    
                            <div class="flex2 pos2">
                                <div class="ticketQty">
                                    <div class="flex3"><input type="button" class="button1" value="-" onclick="childDecrementQty()" /></div>
                                    <div class="flex4"><input type="text" id="childQty" name="childQty" value="0" size="1" disabled /></div>
                                    <div class="flex5"><input type="button" class="button2" value="+" onclick="childIncrementQty()" /></div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="foot-container">
                        <div class="totalPrice">Total <b>RM</b><input type="text" id="total" name="total" value="0.00" size="2" disabled onchange="calculateTotal()" /></div>
                        <div style="background-color: rgba(0,0,0,0)" ><input type="button" value="CONTINUE" id="continue" name="continue" onclick="location='../Payment/payment-method.php'" /></div>
                    </div>
                </form>                     
            </div>        
        </div>
    </body>

    <script>
        var modal = document.getElementById("modalBox");
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        function jumpout() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };
        
        function toggleArrow(){
            var arrow = document.querySelector(".arrow");
            arrow.classList.toggle("active");          
        }
        
        function dropdownActive(){
            var dropdown = document.querySelector(".dropdown");
            dropdown.classList.toggle("dropdown-active");          
        }  
        
        function calculateTotal() {
            var adultPrice = parseFloat(document.getElementById("adultPrice").getAttribute("data-value"));
            var adultQty = parseInt(document.getElementById("adultQty").value);
            var childPrice = parseFloat(document.getElementById("childPrice").getAttribute("data-value"));
            var childQty = parseInt(document.getElementById("childQty").value);
            var total = (adultPrice * adultQty) + (childPrice * childQty);
            document.getElementById("total").value = total.toFixed(2);
	}

        function adultIncrementQty() {
            var adultQty = parseInt(document.getElementById("adultQty").value);          
            document.getElementById("adultQty").value = adultQty + 1;           
            calculateTotal();
	}

	function adultDecrementQty() {
            var adultQty = parseInt(document.getElementById("adultQty").value);          
            if (adultQty > 0) {
		document.getElementById("adultQty").value = adultQty - 1;
		calculateTotal();
            }
	}
        
        function childIncrementQty(){
            var childQty = parseInt(document.getElementById("childQty").value);
            document.getElementById("childQty").value = childQty + 1;
            calculateTotal();
        }
        
        function childDecrementQty(){
            var childQty = parseInt(document.getElementById("childQty").value);
            if(childQty > 0){
                document.getElementById("childQty").value = childQty - 1;
                calculateTotal();
            }
        }
        
//        function submitForm(){   
//            document.getElementById("continue").addEventListener("submit", function(event){
//                event.preventDefault();
//                window.location.href = "./Payment/payment-method.php";
//            });            
//        }
        
        $(document).ready(function(){
            $('#continue').click(function(){
                $('#total').removeAttr('disabled');
            });
        });
    </script>
    
</html>

        

