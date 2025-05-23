<?php 
    session_start();
    if ($_SESSION["user-logged-in"] != "yes"){
        header("Location: http://127.0.0.1/profilepage/login/login-page.php");
        return 0;
    }
?>

<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e8f0f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 60px auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }

        .details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .detail-card {
            background: #f9fbfd;
            border-left: 5px solid #3498db;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            color: #333;
            margin-top: 5px;
        }

        .btn-back {
            display: inline-block;
            margin-top: 40px;
            background: #3498db;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .btn-back:hover {
            background: #2c80b4;
        }
    </style>
</head>
<body>
    <div class="container">

        <h1>Account Details</h1>

        <div class="details">
            <div class="detail-card">
                <div class="label">Full Name:</div>
                <div class="value"><?php echo $_SESSION["user-name"]; ?></div>
            </div>

            <div class="detail-card">
                <div class="label">Email:</div>
                <div class="value"><?php echo $_SESSION["user-email"]; ?></div>
            </div>

            <div class="detail-card">
                <div class="label">Username:</div>
                <div class="value"><?php echo strtolower(str_replace(" ", "_", $_SESSION["user-name"])); ?></div>
            </div>

            <div class="detail-card">
                <div class="label">Department:</div>
                <div class="value"><?php echo $_SESSION["user-dept"]; ?></div>
            </div>

            <div class="detail-card">
                <div class="label">Account Status:</div>
                <div class="value" style="color: green;">Active</div>
            </div>

            <div class="detail-card">
                <div class="label">Gender:</div>
                <div class="value"><?php echo $_SESSION["user-gender"]; ?></div>
            </div>

            <div class="detail-card">
                <div class="label">Location:</div>
                <div class="value"><?php echo $_SESSION["user-address"]; ?></div>
            </div>

            <div class="detail-card">
                <div class="label">Date of Birth:</div>
                <div class="value"><?php echo $_SESSION["user-dob"]; ?></div>
            </div>
        </div>

        <a class="btn-back" href="/profilepage/logout/logout.php">← Back to Logout</a>
    </div>
</body>
</html>
