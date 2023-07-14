<?php include("connect.php");
error_reporting(0);

?>
<html>
<style>
    * {
        margin: 0px;
        padding: 0%;
        box-sizing: border-box;
    }

    .one {
        width: 550px;
        height: 250px;
        display: block;
        border-style: solid;
        border-color: black;
        padding: 20px;
        font-style: sans-serif;
        font-size: 30px;
        margin-top: 20px;
        margin-left: 450px;
    }

    form td {
        /* font-family: Arial, Helvetica, sans-serif; */
        color: rgb(145, 45, 145);
        font-size: 30px;

    }

    body {
        background-image: url('/milk shop/project/blur.jpg')
    }

    header {
        height: 100px;
        width: 100%;
        background-color: #d6f8b8;


        /* position: sticky;
top: 0px; */
    }

    header p {

        width: 500px;
        display: inline-block;
        font-size: 50px;
        font-style: italic;
        text-align: left;
        margin-bottom: 30px;
    }

    header p a {
        text-decoration: none;
        color: darkgoldenrod;
    }


    header img {

        width: 100px;
        height: 100px;
        padding: 5px;
        text-decoration-line: none;
    }

    .pic {
        width: 450px;
        height: 104px;
    }

    nav {
        margin-top: 20px;
        float: right;
        text-align: center;
        font-size: 20px;
        width: 250px;
        height: 40px;

    }

    nav ul li {
        display: inline-block;
        padding: 10px;


    }

    nav ul li a {
        text-decoration: none;
        color: green;
    }

    input {
        padding: 10px;
    }

    .one div {
        text-align: right;
    }
</style>

<body>
    <header id="top">
        <a href="http://localhost/milk%20shop/htmlfile.php"> <img src="\milk shop/project/pics.png"> </a>
        <a href="http://localhost/milk%20shop/htmlfile.php"> <img class="pic" src="\milk shop/project/picsart_03.jpg"> </a>

        <nav>
            <ul>
                <li>
                    <a href="http://localhost/milk%20shop/login.php"> login</a>
                </li>
                <li> <a href="http://localhost/milk%20shop/account.php">create account</a> </li>
            </ul>
        </nav>
    </header>
    <div class="one">
        <form method="post" action="account.php">
            <table>
                <tr>
                    <td>
                        Enter Name:</td>
                    <td> <input type="textbox" name="name" required placeholder="full name"></td>
                </tr>
                <tr>
                    <td> Email:</td>
                    <td> <input type="email" name="email" required placeholder="email id here"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td> <input type="password" name="password" required placeholder="password"></td>
                </tr>
                <tr>
                    <td> Re Password:</td>
                    <td> <input type="password" name="repassword" placeholder="re-enter password"></td>
                </tr>
            </table>
            <div> <input type="reset" name="cancal" value="cancal">
                <input type="submit" name="submit">
            </div>
        </form>
    </div>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];


    $sql = "SELECT email FROM account WHERE email='$email';";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<script> alert ('Account already exists');
        </script>";
        header('location:login.php');
        exit;
    } else {
        if ($password == $repassword) {
            $query = "INSERT INTO account values ( '$name','$email','$password','$repassword')";
            $data = mysqli_query($conn, $query);

            if ($data) {
                echo "<script> alert ('Account created ');</script>";
                // header('location:login.php');
                // exit;
                echo "<script>window.location.href = 'login.php';</script>";
            }
             else {
                echo "failed";
            }
        } else {
            echo "<script> alert ('Enter correct password  ');</script>";
        }
    }
}



?>
</body>

</html>