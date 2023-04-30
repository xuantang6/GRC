<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="css/stripe.css" rel="stylesheet" type="text/css"/>
        <title>Payment</title>
    </head>
    <body>       
<!--        <img class="background" src="../image/signup_background.png" alt=""/>-->
        <div class="container"> 
            <h2>Pay by Credit / Debit Card<hr><div class="checkout">Checkout</div><br></h2>            
            <div class="flex1">   
                <form action="./stripe-charge.php" method="POST" id="payment-form">                                   
                    <table class="table1">                           
                        <tr>
                            <td colspan="3" class="name">Cardholder Name</td>
                        </tr>
                        <tr>
                            <td colspan="3"><input type="text" id="cardHolderName" name="cardHolderName" class="StripeElement StripeElement--empty" placeholder="Enter Name" required></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="e-mail"><br><br>Email Address</td>
                        </tr>
                        <tr>
                            <td colspan="3"><input type="email" id="email" name="email" class="StripeElement StripeElement--empty" placeholder="Email Address" required></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="cardNo"><br><br>Card Number</td>
                        </tr>
                        <tr>
                            <td colspan="3"><div id="cardNumber"></div></td>
                        </tr>
                        <tr>
                            <td colspan="3"><div id="cardNumber-errors" role="alert"></div></td>
                        </tr>           
                        <tr class="footTable">
                            <td class="expiryDate"><br><br>Expiration Date</td>
                            <td></td>
                            <td class="cvcNo"><br><br>CVC/CVC2 Number</td>
                        </tr>
                        <tr class="footTable">
                            <td><div id="cardExpiry"></div></td>
                            <td></td>
                            <td><div id="cardCVC"></div></td>
                        </tr>
                        <tr class="footTable">
                            <td><div id="cardExpiry-errors" role="alert"></div></td>
                            <td></td>
                            <td><div id="cardCVC-errors" role="alert"></div></td>
                        </tr>              
                        <tr>
                            <td colspan="3"><br><button type="submit">Make Payment</button></td>
                        </tr>
                    </table>     
                
                    <?php 
                    session_start();
                    $total = isset($_POST['total']) ? $_POST['total']:1900; 
                    $_SESSION['total'] = $total;
                    ?>
                </form>
            </div>
                     
            <div class='flex2'>
                <table class="table2">
                    <tr>
                        <th colspan="2">$ Payment Details</th>
                    </tr>
                    <tr class="space">
                        <td>Order ID</td> 
                        <td>
                            <?php 
                            date_default_timezone_set('Asia/Kuala_Lumpur'); 
                            $date = date("Ymd");
                            $rand = mt_rand(10000000,99999999);
                            $orderID = $date.$rand;
                            echo $orderID;
                            ?>
                        </td>
                    </tr>
                    <tr class="space">
                        <td>Payment ID</td>
                        <td><?php $paymentID = $orderID; echo $paymentID; ?></td>
                    </tr>
                    <tr class="space">
                        <td>Payment Description</td>
                        <td>Des</td>
                    </tr>
                    <tr class="space">
                        <td>Total</td> 
                        <td>MYR <?php echo $total ?></td>
                    </tr>
                </table>               
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="stripe-charge.js"></script>
    </body>
</html>
