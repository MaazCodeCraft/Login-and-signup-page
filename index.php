<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="signup/signup-style.css">
</head>
<body>
    <form class="form-container" method="post" action="signup/signup-php-code.php">
        <h1>Admission Form</h1>

        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" required>

        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>

        <label>Gender</label>
        <div class="gender-options">
            <label><input type="radio" name="gender" value="male" required> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label>
        </div>

        <label for="department">Department</label>
        <select id="department" name="department" required>
            <option value="">-- Select Department --</option>
            <option value="cs">Computer Science</option>
            <option value="phy">Physics</option>
        </select>

        <label for="profile_picture">Profile Picture</label>
        <input type="file" id="profile_picture" name="profile_picture" accept="image/*">

        <label for="address">Address</label>
        <textarea id="address" name="address" placeholder="Enter your address..."></textarea>

        <input type="submit" class="submit-btn" value="Apply">
    </form>
</body>
</html>