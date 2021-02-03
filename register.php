<html lang="en">
<head>
    <title>Register</title>
    <script src="./js/registerUser.js"></script>
    <link rel="stylesheet" href="./css/registerUser.css">
</head>
<body>
    <form method="POST" action="./Controls/registrationControl.php">
        <div class="container">
            <h1><div style="text-align: center;">Register Here</div></h1>
            <hr>

            <label for="type"><b>I am a : </b></label>

            <select name="type" id="type" onchange="userType();">
                <option value="">- Select Type -</option>
                <option value="user" >User</option>
                <option value="vendor">Service Provider</option>

            </select>

            <div class = "user form" id ="user">
            <br><br>
            <label for="email"><b>Email Address</b></label><br>
            <input type="email" placeholder="Enter Email" name="email" id="email" required><br><br>

            <label for="firstname"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="firstname" id="firstname" required>

            <label for="lastname"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname" required>

            <label for="username"><b>User Name</b></label>
            <input type="text" placeholder="Enter User Name" name="username" id="username" required>


            <label for="male"><b>Gender</b></label><br>
            <input type="radio" id="male" name="gender" value="M">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="F">
            <label for="female">Female</label><br><br>

            <label for="dob"><b>Date of Birth</b></label><br>
            <input type="date" placeholder="Enter Date of Birth" name="dob" id="dob" required><br><br>

            <label for="contactno"><b>Contact Number</b></label>
            <input type="text" placeholder="Enter Contact Number" name="contactno" id="contactno" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required onkeyup="checkPassword();">
            <hr>
            <button type="submit" class="registerbtn" id="userRegisterBtn" name="userRegisterBtn" onkeyup="checkPassword();">Register</button>
            </div>
    </form>
    <form method="POST" action="./Controls/registrationControl.php">    
            <div class = "vendor form" id="vendor">
                <br><br>
                <label for="vEmail"><b>Email Address</b></label><br>
                <input type="email" placeholder="Enter Email" name="vEmail" id="vEmail" required><br><br>
    
                <label for="vBusinessname"><b>Business Name</b></label>
                <input type="text" placeholder="Business Name" name="vFirstname" id="vFirstname" required>
    
                <label for="vUsername"><b>User Name</b></label>
                <input type="text" placeholder="Enter User Name" name="vUsername" id="vUsername" required>

                <label for="vContactno"><b>Contact Number/b></label>
                <input type="text" placeholder="Enter Contact Number" name="vContactno" id="vContactno" required>

                <label for="vPsw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="vPsw" id="vPsw" onkeyup="checkPassword();" required>
    
                <label for="vPsw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="vPsw-repeat" id="vPsw-repeat" onkeyup="checkPassword();" required>
                <hr>
                <button type="submit" class="registerbtn" id="vendorRegisterBtn" name="vendorRegisterBtn">Register</button>
                </div>


            

            <p><i>Already have an account?</i> <a href="../login/login.html">Log in</a>.</p>

        </div>

        </div>
    </form>


</body>
</html>
