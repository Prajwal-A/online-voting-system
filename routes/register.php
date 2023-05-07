<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">

        <script>
        function validateForm(){
            let name = document.forms["myForm"]["name"].value;
            let password = document.forms["myForm"]["password"].value;
            let mobile = document.forms["myForm"]["mob"].value;
            if (name == "") {
                alert("Name must be filled out");
                return false;
            }

            if(password.length < 6){
                alert("Password should atleast be of 6 characters");
                return false;
            }
            
            if(mobile.length != 10){
                alert("Phone Number should be of 10 digits");
                return false;
            }  

            var x=document.forms["myForm"]["email"].value;  
            var atposition=x.indexOf("@");  
            var dotposition=x.lastIndexOf(".");  
            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
                alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
                return false;  
            }  
        }
    </script>
    
    </head>
    <style>
        body{
            background: -webkit-linear-gradient(bottom, #fdfdfd,rgb(73, 233, 123));
            overflow: hidden;
        }
    </style>
    <body>
        <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            </div>
            <div id="image">
                <img src="../img/960x0.webp" alt="" width="5%" height="auto">
            </div>
            

            <h2>Registration</h2>
                <form action="../api/register.php" name="myForm" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data" >
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="number" name="mob" placeholder="Mobile" required><br><br>
                    <input style="width:25%" type="email" name="email" placeholder="Email" required><br><br>
                    <input type="password" name="password" placeholder="Password" required>&nbsp
                    <input type="password" name="cpassword" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 30%">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    Already user? <a href="../loginPage.php">Login here</a>
                </form>
            </center>
    </body>
</html>