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
            background: #121212;
            color: #e0e0e0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 60px auto;
            background: #1e1e1e;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        }

        h1 {
            color: #ffffff;
            margin-bottom: 30px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .profile-image {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-image img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 3px solid #00bcd4;
        }

        .details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .detail-card {
            background: #2a2a2a;
            border-left: 5px solid #00bcd4;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .label {
            font-weight: bold;
            color: #90caf9;
        }

        .value {
            color: #e0e0e0;
            margin-top: 5px;
        }

        .btn-back {
            display: inline-block;
            margin-top: 40px;
            background: #00bcd4;
            color: #121212;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s ease;
            font-weight: bold;
        }

        .btn-back:hover {
            background: #0097a7;
            color: #ffffff;
        }

        a {
            color: #03a9f4;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
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

        <a class="btn-back" href="/profilepage/logout/logout.php">← Logout</a>
    </div>
</body>
</html>
