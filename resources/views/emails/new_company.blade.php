<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to Our Company</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            color: #212529;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 8px;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: #3490dc;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .footer {
            margin-top: 40px;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Hello{{ isset($company) ? ' ' . $company['name'] : '' }}!</h2>

    <p>Welcome to our platform! We're excited to have you on board. 🎉</p>

    <p>If you have any questions or need help getting started, don't hesitate to reach out to us.</p>

    <a href="{{ url('/') }}" class="btn">Visit Our Website</a>

    <p class="footer">
        &copy; {{ date('Y') }} Your Company. All rights reserved.
    </p>
</div>
</body>
</html>
