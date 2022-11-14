<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css?v=<?php echo time(); ?>">
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1 style="font-family:'Times New Roman', Times, serif; text-transform:uppercase;">Online Voting System</h1>  
            </div>
            <hr>

            <div class="regisSection">
                <h2 style="color: #dff6ff;">Registration</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="number" name="mob" placeholder="Mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 50%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 50%; color:#dff6ff;">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 50%;  color:#dff6ff;">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    <span style="color:#dff6ff;">Already user?</span> <a href="index.php" style="color:#dff6ff; font-size:18px;">Login here
 
 
<i class="fa fa-sign-in" aria-hidden="true" style=" font-size:20px;"></i></a>
                </form>
            </div>
            </center>
    </body>
</html>