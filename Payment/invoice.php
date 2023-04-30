<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/invoice.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>GRC Cinema</title>
</head>
<body>
    <h1>Successful Payment !</h1>    
    <form action="invoice.php" method="POST">        
        <div class="invoice-container">
            <div id="container" class="flex">
                <table class="invoice">
                    <thead>
                        <tr class="header">
                            <td colspan="3">TAX INVOICE</td>                
                        </tr>
                        <tr>
                            <td colspan="3">
                                <hr>
                            </td>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td class="logo" colspan="3"><img src="images/GRC logo.png" alt="" width="150px" id='img' /></td>
                        </tr>
                        <tr>
                            <td class="logo" colspan="3" style="padding-bottom: 50px;">GOLDEN REEL CINEMA</td>
                        </tr>
                        <tr>                            
                            <td class="title">Invoice number</td>
                            <td class="colon">:</td>
                            <td class="details">10341350554808</td>
                        </tr>
                        <tr>
                            <td class="title">Booking ID</td>
                            <td class="colon">:</td>
                            <td class="details">14564523121564</td>
                        </tr>
                        <tr>
                            <td class="title">Payment ID</td>
                            <td class="colon">:</td>
                            <td class="details">14564523121564</td>
                        </tr>
                        <tr>
                            <td class="title">Movie Title</td>
                            <td class="colon">:</td>
                            <td class="details">SPECTRE</td>
                        </tr>
                        <tr>
                            <td class="title">Cinema</td>
                            <td class="colon">:</td>
                            <td class="details" id="detail">Petaling Jaya-1 Utama(New Wing)</td>
                        </tr>
                        <tr>
                            <td class="title">Hall</td>
                            <td class="colon">:</td>
                            <td class="details">2</td>
                        </tr>
                        <tr>
                            <td class="title">Movie Date</td>
                            <td class="colon">:</td>
                            <td class="details">05 Nov 2022</td>                            
                        </tr>
                        <tr>
                            <td class="title">Movie Time</td>
                            <td class="colon">:</td>
                            <td class="details">8:00PM</td>
                        </tr>
                        <tr>
                            <td class="title">Seat No.</td>
                            <td class="colon">:</td>
                            <td class="details">D15, D16</td>
                        </tr>
                        <tr>
                            <td class="title">Tickets</td>
                            <td class="colon">:</td>
                            <td class="details">Adult: 2</td>
                        </tr>
                        <tr class="bottom">
                            <td class="title">Payment Type</td>
                            <td class="colon">:</td>
                            <td class="details">Paypal</td>
                        </tr>               
                    </tbody>
                    
                    <tfoot class="table">
                        <tr>
                            <td style="text-align: center;">Type</td>
                            <td>Amount(RM)</td>
                        </tr>
                        <tr>
                            <td>Child Ticket Price (x2)</td>                            
                            <td>26.00</td>
                        </tr>
                        <tr>
                            <td>Adult Ticket Price (x1)</td>                           
                            <td>19.00</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>45.00</td>
                        </tr>    
                        <tr>
                            <td>Processing Fee</td>
                            <td>1.00</td> 
                        </tr>
                        <tr>
                            <td>Total Payable</td>
                            <td>46.00</td>
                        </tr>   
                    </tfoot>                                                    
                </table>
                
                <div class="terms-container">
                    <ul class="terms1">
                        <li><h4>Terms & Conditions</h4></li>
                        <li>SelfPrint ticket must be printed out and presented at the checkpoint (where applicable) to gain admission to GRC hall for the movie screening.</li>
                        <li>Alternatively, you can collect the movie tickets purchased at the selected cinema by producing the Confirmation ID of the transaction at GRC Reservation or Gold Class counter.</li>
                        <li>SelfPrint ticket will be scanned and its validity verified before you can proceed to your seats in the cinema hall.</li>
                        <li>If you opt to scan with Confirmation Bar code in the SelfPrint ticket, GRC will only admit one(1) time entry per transaction.</li>
                        <li>In the event that multiple copies of SelfPrint ticket are presented or if you fail to produce the Confirmation ID, GRC reserves the right to refuse entry to All ticket holders.</li>
                    </ul>
                    <ul class="terms2">
                        <li>For payment made via Credit Card, customers must bring along their credit card for verification purpose. GRC reserves the right to refuse entry or not to issue the ticket(s) if the authorized credit card or identification card is not presented to GRC Staff.</li>
                        <li>For identification purposes, students/senior citizens must present their student ID/identify card at checkpoint/upon collecting the tickets at the Cinema Box Office.</li>
                        <li>For the digital 3D movies, a surcharge of RM5.00 per ticket applies.</li>
                        <li>Please note that all E-Payment purchases are confirmed purchases and any request for refunds, exchange or cancellations will not be entertained.</li>
                        <li>Please refer to the full list of Terms & Conditions on </li>
                    </ul>   
                </div>          
            </div>      
        </div>
        
        <div class="button-container">
            <button type="submit" id="print" name="print"><i class="fa fa-print"></i> &nbsp; Print</button>
            <button type="button" id="viewTicket" onclick="location='ticket.php'">VIEW TICKET</button>
        </div>
    </form>
    
    <?php 
        if (isset($_POST['print'])){ ?>
        <style>
            @media print {
                @page {
                    size: auto;
                    margin-top: 0; 
                    margin-bottom: 0;
                }
    
                html, body {
                    position: relative;
                    height: 100%;
                    width: 100%;                    
                }
                
                body * {
                    color: black;
                }
                
                #container, #container * {
                    visibility: visible;
                    color: black;
                    border-color: black;
                    font-size: 10px;
                    width: 100%;                    
                }
                
                table {
                    padding-bottom: 5px;
                }
                
                #img {
                    width: 15%;
                }
                
                .title, .colon, .details {
                    width: 100%;
                    top: -30px;
                }
                
                .colon {
                    position: relative;
                    left: -25%;
                }
                
                .details {
                    position: relative;
                    left: -35%;
                }
                
                #detail {
                    white-space: nowrap;
                }
                
                tfoot, tfoot * {
                    position: relative;
                    left: 5.5%;
                    top: -15px;
                }
                
                .terms1, terms2 {
                    font-size: 8px;
                    width: 100%;
                    position: relative;
                    left: -5%;
                }
                
                .terms2 li {
                    padding-left: 0;
                    position: relative;
                    left: -10%;
                }
                
                .button-container, .button-container * {
                    visibility: hidden;
                }
            }
        </style>
        <script>
            window.print();       
        </script>
    <?php } ?>
