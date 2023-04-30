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
        <link href="css/payment-method.css" rel="stylesheet" type="text/css"/>
        <title>GRC Cinema</title>
    </head>
    <body>        
        <h1>Purchase Method</h1>
        <div class="flex-container">
            <div class="buyDetails" onclick="toggleArrow(); dropdownActive()">
                Purchase Details <span class="arrow"></span>
            </div>   
            <div class="dropdown">
                <table class="table"> 
                    <tr>
                        <td colspan="3">TICKETS</td>
                    </tr>
                    <tr>
                        <td>Adults</td>
                        <td>(RM 19.00 x 2)</td>
                        <td>RM 38.00</td>
                    </tr>
                    <tr>                       
                        <td>Kids</td>
                        <td>(RM 13.00 x 1)</td>
                        <td>RM 13.00</td>
                    </tr>
                    <tr>
                        <td colspan="3"><hr></td>
                    </tr>           
                    <tr>
                        <td colspan="2">Sub Total</td>
                        <td>RM 51.00</td>
                    </tr>
                    <tr>
                        <td colspan="3"><hr></td>
                    </tr>
                    <tr>
                        <td colspan="2">Processing Fee</td>
                        <td>RM 0.50</td>
                    </tr>
                    <tr>
                        <td colspan="2">Total</td>
                        <td>RM 51.50</td>
                    </tr>
                </table> 
            </div>
               
            <div class="button-container">
                <button type="button" value="Paypal" name="paypal" class="paypal" onclick="location='paypal-payment.php'">
                    <img src="images/paypal-logo.png" alt="paypal" width="120px" height="43px" />
                </button>
                
                <button type="submit" value="Debit or Credit Card" name="card" class="card" onclick="location='stripe-payment.php'">
                    <img src="images/credit2.png" alt="credit" class="credit" />
                    <img src="images/debit-logo.png" alt="debit" class="debit" />
                    <span class="text">Debit or Credit Card</span>                   
                </button>              
            </div>
            </div>
<!--            <div>
                <button type="submit" value="Debit or Credit Card" name="card" class="card">
                    <img src="images/card-logo.png" alt="card"/>
                    <span>Debit or Credit Card</span>
                </button>
            </div>-->
            
        </div>
            
        <script>
            function toggleArrow(){
                var arrow = document.querySelector(".arrow");
                arrow.classList.toggle("active");          
            }
        
            function dropdownActive(){
                var dropdown = document.querySelector(".dropdown");
                dropdown.classList.toggle("dropdown-active");          
            }  
        </script>
    </body>
</html>
