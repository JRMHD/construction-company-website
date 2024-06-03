<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request a Quote | Kizuri Holding SARL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header img {
            max-width: 200px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group textarea {
            height: 150px;
        }

        .btn {
            background-color: #dc3545;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #c82333;
        }

        .buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff4d4d;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            margin: 0 10px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ff3333;
        }
    </style>
</head>

<body>
    <div class="buttons">
        <a href="{{ url('/') }}" class="btn">Go Home</a>
        <a href="{{ url('contact') }}" class="btn">Contact Us</a>
    </div>

    <div class="container">
        <div class="header">
            <img src="img/logo.png" alt="Kizuri Holding SARL Logo">
            <h2>Request a Quote</h2>
            <p>Fill out the form below and we'll get back to you with a personalized quote.</p>
        </div>
        <form action="submit_quote.php" method="POST">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Your Phone</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location">
            </div>
            <div class="form-group">
                <label for="project">Project Description</label>
                <textarea id="project" name="project" required></textarea>
            </div>
            <div class="form-group">
                <label for="additional_info">Additional Information</label>
                <textarea id="additional_info" name="additional_info"></textarea>
            </div>
            <button type="submit" class="btn">Get a Quote</button>
        </form>
    </div>
</body>

</html>
