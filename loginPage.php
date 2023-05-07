<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <style>
        body{
            background: -webkit-linear-gradient(bottom, #fdfdfd,rgb(73, 233, 123));
        }
    </style>
    <body>
        
            <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>
            <br>
            <br>
            </div>
            <div id="image">
                <img src="img/ballot-box-thumbs-up-cartoon-illustration-53635286.jpg" alt="" width="10%" height="auto">
            </div>
            <div id="loginSection">
                <h2>Login</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="password" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    New user? <a href="routes/register.php">Register here</a>
                </form>
            </div>

            </center> 
    </body>
</html>