
<!DOCTYPE html>
<html>
<head>
    <title>Styx-Register</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="logins.js"></script>
</head>
<body>
    <div class="login-box" id="lgbx1">
        <h1>Register</h1>
        <!--form login over here-->
        <form method="POST" action="insert.php" enctype="multipart/form-data">
        <div class="texts">
            <input type="text" name="username" placeholder="Enter Username" id="uname" required>
        </div>
        <div class="texts">
            <input type="email" name="mail" placeholder="Enter Email" id="uemail" required>
        </div>
        <div class="texts">
            <input type="password" name="password" placeholder="Enter Password" id="upasswd" required>
        </div>
        <div class="texts">
            <input type="number" name="phone" placeholder="Enter Phone Number" id="uphno" required>
        </div>
        <div class="texts">
            <input type="email" name="recmail" placeholder="Enter Recovery Mail" id="uphno" required>
        </div>
        <div class="texts">
          <p>Upload Photo</p>
          <input type="file" name="pic" accept="image/*" class='btn'>
        </div>

        <input class="btn" type="submit" name="subs" value="Register" >
        </form>
    </div>

</body>
</html>
