<!--<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="payment.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">	
        <title>Pay Page</title>
    </head>
    <body>
        <div class="container">            
            <h2 class="my-4 text-center">Intro to React Course [$50]</h2>
         Display a payment form 
            <form action="./charge.php" method="post" id="payment-form">
                <div class="form-row">
                    <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
                    <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
                    <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
                    <label for="card-element">
                        Credit or debit card
                    </label>
                  
                    <div id="card-element" class="form-control">
                        Stripe.js injects the Payment Element
                    </div> 
                    <div id="card-errors" role="alert"></div>          
                </div>
              
                <button class="btn btn-primary btn-block mt-4">Submit Payment</button>      
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="charge.js"></script>
    </body>
   
</html>-->

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="payment.css" rel="stylesheet" type="text/css"/>     
        <title>Payment</title>
    </head>
    <body>
        <div class="container"> 
            <form action="./charge.php" method="post" id="payment-form">
                <h2>Pay by Credit / Debit Card<hr><div class="checkout">Checkout</div><br></h2>                       
                <table>                           
                    <tr>
                        <td class="info1">Cardholder Name</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="cardHolderName" name="cardHolderName" class="StripeElement StripeElement--empty" placeholder="Enter Name" required></td>
                    </tr>
                    <tr>
                        <td class="info1"><br><br>Email Address</td>
                    </tr>
                    <tr>
                        <td><input type="email" id="email" name="email" class="StripeElement StripeElement--empty" placeholder="Email Address" required></td>
                    </tr>
                    <tr>
                        <td class="info1"><br><br>Card Number</td>
                    </tr>
                    <tr>
                        <td><div id="cardNumber"></div></td>
                    </tr>
                    <tr>
                        <td><div id="cardNumber-errors" role="alert"></div></td>
                    </tr>
                    <tr>
                        <td class="info1"><br><br>Expiration Date</td>
                        <td class="cvc info1"><br><br>CVC/CVC2 Number</td>
                    </tr>
                    <tr>
                        <div class="container">
                        <td><div id="cardExpiry" class="info3"></div></td>
                        <td><div id="cardCVC" class="cvcInput"></div></td>
                        </div>
                    </tr>
                    <tr>
                        <td><div id="cardExpiry-errors" role="alert"></div></td>
                        <td><div id="cardCVC-errors" role="alert"></div></td>
                    </tr>
                    <tr>
                        <td><br><button type="submit">Make Payment</button></td>
                    </tr>
                </table>                                                                   
            </form>
        </div>
        
        <div class="invoice #">
            <div><h2>Invoice</h2></div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="charge.js"></script>
    </body>
   
</html>