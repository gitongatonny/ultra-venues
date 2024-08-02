<?php
// M-Pesa API credentials
$consumerKey = 'YOUR_CONSUMER_KEY';
$consumerSecret = 'YOUR_CONSUMER_SECRET';
$shortCode = 'YOUR_SHORT_CODE';
$passKey = 'YOUR_PASS_KEY';
$errmsg = '';

// Function to generate M-Pesa STK Push
function lipaNaMpesa($phoneNumber, $amount, $shortCode, $passKey, $consumerKey, $consumerSecret) {
    $timestamp = date('YmdHis');
    $password = base64_encode($shortCode . $passKey . $timestamp);

    // Get access token
    $accessTokenUrl = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
    $ch = curl_init($accessTokenUrl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Basic ' . base64_encode($consumerKey . ':' . $consumerSecret)]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $result = json_decode($response);
    $accessToken = $result->access_token;

    // Initiate payment
    $stkPushUrl = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    $ch = curl_init($stkPushUrl);
    $curl_post_data = [
        'BusinessShortCode' => $shortCode,
        'Password' => $password,
        'Timestamp' => $timestamp,
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount' => $amount,
        'PartyA' => $phoneNumber,
        'PartyB' => $shortCode,
        'PhoneNumber' => $phoneNumber,
        'CallBackURL' => 'https://yourdomain.com/callback.php', // Update with your actual callback URL
        'AccountReference' => 'Ref001',
        'TransactionDesc' => 'Payment for order'
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Authorization: Bearer ' . $accessToken]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($curl_post_data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $amount = $_POST['amount'];
    $phoneNumber = $_POST['phone_number'];
    $response = lipaNaMpesa($phoneNumber, $amount, $shortCode, $passKey, $consumerKey, $consumerSecret);

    if ($response->ResponseCode == "0") {
        // Payment initiated successfully
        $transactionID = $response->CheckoutRequestID;
        $authCode = $response->MerchantRequestID;

        echo json_encode(['success' => true, 'transactionID' => $transactionID, 'authCode' => $authCode]);
        exit();
    } else {
        $errmsg = $response->errorMessage;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900);
        @import url(https://fonts.googleapis.com/css?family=Source+Code+Pro:400,200,300,500,600,700,900);
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
        }
        * {
            box-sizing: border-box;
        }
        html {
            font-family: 'Lato', sans-serif;
        }
        .price h1 {
            font-weight: 300;
            color: #18C2C0;
            letter-spacing: 2px;
            text-align: center;
        }
        .card {
            margin-top: 30px;
            margin-bottom: 30px;
            width: 520px;
        }
        .card .row {
            width: 100%;
            padding: 1rem 0;
            border-bottom: 1.2px solid #292C58;
        }
        .card .row.number {
            background-color: #242852;
        }
        .cardholder .info, .number .info {
            position: relative;
            margin-left: 40px;
        }
        .cardholder .info label, .number .info label {
            display: inline-block;
            letter-spacing: 0.5px;
            color: #8F92C3;
            width: 40%;
        }
        .cardholder .info input, .number .info input {
            display: inline-block;
            width: 55%;
            background-color: transparent;
            font-family: 'Source Code Pro';
            border: none;
            outline: none;
            margin-left: 1%;
            color: white;
        }
        .cardholder .info input::placeholder, .number .info input::placeholder {
            font-family: 'Source Code Pro';
            color: #444880;
        }
        #phoneNumber, #phoneNumber::placeholder {
            letter-spacing: 2px;
            font-size: 16px;
        }
        .button button {
            font-size: 1.2rem;
            font-weight: 400;
            letter-spacing: 1px;
            width: 520px;
            background-color: #18C2C0;
            border: none;
            color: #fff;
            padding: 18px;
            border-radius: 5px;
            outline: none;
            cursor: pointer;
            transition: background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .button button:hover {
            background-color: #15aeac;
        }
        .button button:active {
            background-color: #139b99;
        }
        .button button i {
            font-size: 1.2rem;
            margin-right: 5px;
        }
        #nextStep, #paymentCodes {
            display: none;
            margin-top: 20px;
        }
        #paymentCodes {
            text-align: center;
            color: #8F92C3;
        }
    </style>
</head>
<body>
<div class="container">
    <form id="mpesaForm">
        <div class="price"></div>
        <div class="card__container">
            <div class="card">
                <div class="row">
                    <img src="mpesa.png" style="width:30%;margin: 0 35%;">
                    <p style="color:#8F92C3;line-height:1.7;">1. Enter the <b>phone number</b> and <b>amount</b>, then press "<b>Confirm and Pay</b>"<br>2. You will receive a popup on your phone. Enter your <b>MPESA PIN</b></p>
                </div>
                <?php if ($errmsg != ''): ?>
                    <p style="background: #cc2a24; padding: .8rem; color: #ffffff;"><?php echo $errmsg; ?></p>
                <?php endif; ?>
                <div class="row number">
                    <div class="info">
                        <label for="phoneNumber">Phone number</label>
                        <input id="phoneNumber" type="text" name="phone_number" maxlength="10" placeholder="0700000000" required/>
                    </div>
                </div>
                <div class="row number">
                    <div class="info">
                        <label for="amount">Amount</label>
                        <input id="amount" type="number" name="amount" placeholder="Enter amount" required/>
                    </div>
                </div>
            </div>
        </div>
        <div class="button">
            <button type="button" onclick="submitPayment()"><i class="ion-locked"></i> Confirm and Pay</button>
        </div>
    </form>
    <div id="nextStep" class="button">
        <button onclick="proceedToNext()">Next</button>
    </div>
    <div id="paymentCodes">
        <h2>Payment Codes</h2>
        <p><strong>Transaction ID:</strong> <span id="transactionID"></span></p>
        <p><strong>Authorization Code:</strong> <span id="authCode"></span></p>
    </div>
</div>
<script>
    function submitPayment() {
        var phoneNumber = document.getElementById('phoneNumber').value;
        var amount = document.getElementById('amount').value;
        var phonePattern = /^[0-9]{10}$/;

        // Validate phone number
        if (phonePattern.test(phoneNumber)) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        // Hide Confirm and Pay button
                        document.querySelector('.button button[type="button"]').style.display = 'none';
                        // Show Next button
                        document.getElementById('nextStep').style.display = 'block';
                        // Store transaction details
                        window.transactionID = response.transactionID;
                        window.authCode = response.authCode;
                    } else {
                        alert('Payment failed: ' + response.message);
                    }
                }
            };
            xhr.send('phone_number=' + phoneNumber + '&amount=' + amount);
        } else {
            alert('Please enter a valid phone number.');
        }
    }

    function proceedToNext() {
        // Populate payment codes
        document.getElementById('transactionID').innerText = window.transactionID;
        document.getElementById('authCode').innerText = window.authCode;

        // Show payment codes
        document.getElementById('paymentCodes').style.display = 'block';
    }
</script>
</body>
</html>
