<?php 
    include '../includes/header.php';
?>

<html>
<head>
    <link rel="stylesheet" href="../assets/style.css">
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
    <?php include '../includes/footer.php'; ?>
</body>
</html>
