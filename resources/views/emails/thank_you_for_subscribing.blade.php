<!-- resources/views/emails/thank_you_for_subscribing.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Subscribing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 600px;
        }

        .header {
            background-color: #28a745;
            color: #ffffff;
            padding: 10px 20px;
            text-align: center;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        .footer {
            text-align: center;
            padding: 10px;
            background-color: #28a745;
            color: #ffffff;
        }

        .footer a {
            color: #ffffff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to Kizuri Holding SARL</h1>
        </div>
        <div class="content">
            <p>Dear {{ $name }},</p>
            <p>Thank you for subscribing to our newsletter! We are excited to have you on board.</p>
            <p>At Kizuri Holding SARL, we strive to keep you updated with the latest news and promotions. Stay tuned for
                updates and tips coming your way.</p>
            <a href="https://kizuriholding.com" class="button">Visit Our Website</a>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Kizuri Holding SARL. All rights reserved.</p>
            <p><a href="https://kizuriholding.com">www.kizuriholding.com</a></p>
        </div>
    </div>
</body>

</html>
