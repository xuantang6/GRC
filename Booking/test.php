<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Booking</title>
        <link href="test.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
        <div class="classic flex-container"" onclick="toggleArrow(); dropdownActive()">
            Classic <span class="arrow"></span>
        </div>       
        
        <form id="booking" name="booking" action="payment.php" method="POST"> 
            <div class="dropdown">
                <div class="flex-container">                                                
                    <div class="flex1 pos1">                    
                        Adult<br/><span style="color: red; font-size: 15px;">RM 19.00</span>
                    </div>
                    
                    <div class="flex2 pos2">
                        <div class="flex-container2">
                            <div class="flex3"><input type="button" class="button1" value="-" onclick="decreament()" /></div>
                            <div class="flex4"><input type="text" id="adultQty" name="adultQty" value="0" size="1" disabled onchange="increament()"/></div>
                            <div class="flex5"><input type="button" class="button2" value="+" onclick="increament()" /></div>
                        </div>
                    </div>                                     
                </div> 
                
                <div class="flex-container">
                    <div class="flex1 pos1">   
                        Child<br/><span style="color: red; font-size: 15px;">RM 13.00</span>  
                    </div>
                    
                    <div class="flex2 pos2">
                        <div class="flex-container2">
                            <div class="flex3"><input type="button" class="button1" value="-" /></div>
                            <div class="flex4"><input type="text" id="childQty" name="childQty" value="1" size="1" disabled /></div>
                            <div class="flex5"><input type="button" class="button2" value="+" /></div>
                        </div>
                    </div>  
                </div>
            </div>
        </form> 
       
         </div>

</div>
    </body>
    
    <script>
        var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
        
        function toggleArrow(){
            var arrow = document.querySelector(".arrow");
            arrow.classList.toggle("active");          
        }
        
        function dropdownActive(){
            var dropdown = document.querySelector(".dropdown");
            dropdown.classList.toggle("dropdown-active");          
        }  

    </script>
    
</html>


