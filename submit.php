<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Registration Successful!</h2>

    <h3>Submitted Details</h3>

    <p><strong>Name:</strong> <?php echo $_POST['fullname']; ?></p>
    <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
    <p><strong>Phone:</strong> <?php echo $_POST['phone']; ?></p>
    <p><strong>Date of Birth:</strong> <?php echo $_POST['dob']; ?></p>
    <p><strong>Gender:</strong> <?php echo $_POST['gender']; ?></p>
    <p><strong>Address:</strong> <?php echo nl2br($_POST['address']); ?></p>

    <br>
    <a href="index.html" class="btn">Go Back</a>
</div>

</body>
</html>
