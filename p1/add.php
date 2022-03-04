<html>
    <head>
        <title>Add Users</title>
    </head>
    <body>
        <a href="index.php">Home</a><br><br>
        <form action="add.php" method"post" name="form1">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Add"></td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $mobile = $_POST['mobile'];
                $email = $_POST['email'];
                include("config.php");
                $res = mysql_query($mysqli, "INSERT INTO users(name,mobile,email) VALUES('$name','$mobile','$email')");
                echo "User Added Succesfully. <a href='index.php'>View Users</a>";

        }
        ?>
    </body>
</html>