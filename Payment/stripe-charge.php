<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'vendor/autoload.php';
        require_once 'C:\xampp\htdocs\GRC\lib\db_connection.php';
        require_once './Payment Data/customer.php';
        //require_once '../Booking/booking.php';
        session_start();
        
        \Stripe\Stripe::setApiKey('sk_test_51MkK28LVFpC4e2xLKyOXhFYXLSuNsq09s3Xe9jlND5s962q9Pbz7e7bzRgolCdwykFg6eoi9YcgpVOoYLp5biAl900D4JVXM3J');
        
//        $stmt = $dbh->query("SELECT * FROM booking");
//        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//        foreach($rows as $row){
//            $ticketPrice = $row['price'];
//        }
        
        $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
        
        $cardHolderName = $POST['cardHolderName'];
        $email = $POST['email'];
        $token = $POST['stripeToken'];
        $total = $_SESSION['total'];
        $total = (int)round($total) * 100;
        
        // Create Customer In Stripe
        $customer = \Stripe\Customer::create(array(
            "email" => $email,
            "source" => $token
        ));
           
        $charge = \Stripe\Charge::create(array(
            "amount" => $total,
            "currency" => "myr",
            "description" => "Suzume|10.00am|Gurney_Plazza",
            "customer" => $customer->id
        ));
        
        // Customer Data
        $customerData = [
            'id' => $charge->customer,
            'cardHolderName' => $cardHolderName,
            'email' => $email
        ];
        
        // Instantiate Customer
        $cust = new Customer;
        
        // Add Customer To DB
        $cust->addCustomer($customerData);
        
        // print_r($charge);
        // Redirect to success
        header('Location: invoice.php?trans_id='.$charge->id.'&product='.$charge->description);
        ?>
    </body>
</html>
