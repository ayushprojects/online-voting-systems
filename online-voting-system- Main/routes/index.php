<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet"  href="../css/stylesheet.css?v=<?php echo time(); ?>">
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
            
            <div id="loginSection">
                <h2 style="color : #dff6ff; letter-spacing: 1px;">Login</h2>
                <form action="../api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 57%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    <span style="color: #dff6ff; font-size:18px;"> New user? </span><a href="register.php" style="color :#dff6ff;">Register here <i class="fa fa-user-plus" aria-hidden="true"></i></a>
                </form>
            </div>
            </center> 
    </body>
</html>