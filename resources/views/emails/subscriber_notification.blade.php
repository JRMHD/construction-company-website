<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Subscriber Notification</title>
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
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            text-align: center;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
        }

        .footer {
            text-align: center;
            padding: 10px;
            background-color: #007bff;
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
            <h1>New Subscriber Alert</h1>
        </div>
        <div class="content">
            <p>Hello Admin,</p>
            <p>You have a new subscriber to your newsletter. Here are the details:</p>
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p>Keep engaging with your audience for continued growth and success!</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Kizuri Holding SARL. All rights reserved.</p>
            <p><a href="https://kizuriholding.com">Visit Our Website</a></p>
        </div>
    </div>
</body>

</html>
