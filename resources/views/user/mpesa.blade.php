<!DOCTYPE html>
<html>
<head>
    <title>M-Pesa Express Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>M-Pesa Express Payment</h2>
    <form action="process_payment.php" method="post">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>
        
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" placeholder="Enter the payment amount" required>
        
        <input type="submit" value="Pay with M-Pesa">
    </form>
</body>
</html>
