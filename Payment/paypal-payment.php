<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/paypal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container"> 
            <h2>Pay by Paypal<hr><div class="checkout">Checkout</div><br></h2>            
            <div class="flex1">   
                <form action="invoice.php" method="POST" id="payment-form">                                   
                    <table class="table1">                           
                        <tr>
                            <td class="name">Name</td>
                        </tr>
                        <tr>
                            <td><input type="text" id="name" name="name" class="basicInfo" placeholder="Enter Name" required></td>
                        </tr>
                        <tr>
                            <td class="e-mail"><br><br>Email Address</td>
                        </tr>
                        <tr>
                            <td><input type="email" id="email" name="email" class="basicInfo" placeholder="Email Address" required></td>
                        </tr>
                        <tr>
                            <td>
                                <script src="https://www.paypal.com/sdk/js?client-id=AfB6EwcVCjunhlsWwD8V9wc0LEIHsT8SxaX00EA0edi_ORJ9W_8ARaTU2-zAu-cuAWi7vpFK5TZp16w-&disable-funding=card"></script>
                                
                                <!-- Set up a container element for the button -->
                                <div id="paypal-button-container"></div>
                            </td>
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
               

    <script>
        paypal.Buttons({
            style: {
                label: 'paypal', // Change the text on the button
                layout: 'horizontal',
                color: 'gold',
                shape: 'pill'
            },
          
            // Order is created on the server and the order id is returned
            createOrder(data, actions){
                return actions.order.create({
                        purchase_units: [{                                                       
                            amount: {                           
                                value: '10.00'
                            }
                        }]
                });
            },
        
            // Finalize the transaction on the server after payer approval
            onApprove(data, actions){
                return actions.order.capture().then(function(orderData){
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    const transaction = orderData.purchase_units[0].payments.captures[0];
                    alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`); 
                    window.location.href = 'invoice.php';
                });
            }
        }).render('#paypal-button-container');
    </script>
  </body>
</html>
