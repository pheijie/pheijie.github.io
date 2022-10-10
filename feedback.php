<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <?php 
        if(isset($_POST['Text1']) && isset($_POST['Text2']) && isset($_POST['Text3']))
        {
            if(($_POST['Text1']!="") && ($_POST['Text2']!="") && ($_POST['Text3']!=""))
            {
                $name =$_POST['Text1'];
                $email =$_POST['Text2'];
                $comments =$_POST['Text3'];

                $con=mysqli_connect("localhost","root","","feedback");
                //check connection
                if(mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: ".mysqli_connect_error();
                }
                $sql="INSERT INTO feed(name,email,comments)values('$name','$email','$comments')";
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

