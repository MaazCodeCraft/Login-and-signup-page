<?php 
    include '../includes/header.php'; 
?>
<link rel="stylesheet" href="../assets/style.css">

<div class="container">
    <h1>Account Settings</h1>

    <form class="settings-form" method="POST" action="save-settings.php">

        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" value="<?= $_SESSION["user-name"]; ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" value="<?= $_SESSION["user-email"]; ?>" required>
        </div>

        <div class="form-group">
            <label for="password">New Password</label>
            <input type="password" id="password" name="password" placeholder="Leave blank to keep unchanged">
        </div>

        <div class="form-group">
            <label for="dept">Department</label>
            <input type="text" id="dept" name="dept" value="<?= $_SESSION["user-dept"]; ?>">
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="gender">
                <option value="Male" <?= $_SESSION["user-gender"] == "Male" ? "selected" : "" ?>>Male</option>
                <option value="Female" <?= $_SESSION["user-gender"] == "Female" ? "selected" : "" ?>>Female</option>
                <option value="Other" <?= $_SESSION["user-gender"] == "Other" ? "selected" : "" ?>>Other</option>
            </select>
        </div>

        <div class="form-buttons">
            <button type="submit">Save Changes</button>
            <a href="/profilepage/profile/profile-page.php" class="btn-cancel">Cancel</a>
        </div>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
