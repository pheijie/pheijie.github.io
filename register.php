<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title/>

<body>
    <?php 
        if(isset($_POST['text1']) && isset($_POST['password']) && isset($_POST['text2']))
        {
            if(($_POST['text1']!="") && ($_POST['password']!="") && ($_POST['text2']!=""))
            {
                $username =$_POST['text1'];
                $password =$_POST['password'];
                $email =$_POST['text2'];


                $con=mysqli_connect("localhost","root","","sdm");
                //check connection
                if(mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: ".mysqli_connect_error();
                }
                $sql="INSERT INTO user(username,email,password)values('$username','$email','$password')";
                if (!mysqli_query($con,$sql)) 
                {
                    die('Error: '.mysqli_error($con));
                }
                
                echo "1 record added";
                mysqli_close($con);
            }
            else
            {
                echo "Please fill up all of the data first before insert!";
            }
        }
        else
        {
            echo "Error in getting the data from html page!";
        }

    ?>

</body>
</html>
