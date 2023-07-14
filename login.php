<?php
error_reporting(0);
include("connect.php");
?>

<html>

<style>
    * {
        margin: 0px;
        padding: 0%;
        box-sizing: border-box;
    }

    body {

        background-image: url("/milk shop/project/blur.jpg");
    }

    .one {
        border-style: solid;
        text-align: center;
        width: 500px;
        height: 150px;
        padding: 20px;
        font-style: italic;
        border-color: black;
        display: block;
        margin-left: 400px;
        margin-top: 20px;

    }

    form td {
        color: rgb(146, 48, 146);
        text-align: left;
        font-size: 30px;
    }

    input {
        padding: 10px;
    }

    .one div {
        padding-left: 200px;
        text-align: right;
    }

    header {
        height: 100px;
        background-color: #d6f8b8;
        width: 100%;

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
</style>

<body>
    <header id="top">
        <a href="http://localhost/milk%20shop/htmlfile.php"> <img src="\milk shop/project/pics.png"> </a>
        <a href="http://localhost/milk%20shop/htmlfile.php">
             <img class="pic" src="\milk shop/project/picsart_03.jpg"> </a>
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
        <form method="post" action="login.php">
            <table>
                <tr>
                    <td>
                        Enter email:</td>
                    <td>
                        <input type="email" name="email" placeholder="Enter email  " required><br>
                    </td>
                </tr>
                <tr>
                    <td> password:</td>
                    <td> <input type="password" name="password" placeholder="password" maxlength="12"
                     required><br>
                    </td>
                </tr>
            </table>
            <div><input type="submit" name="submit" value="LogIn"></div>
        </form>
    </div>
    <link href="login.php">

</body>

</html>


<?php
if (isset($_SESSION['lock'])){
    echo "<script> alert ('user is active');</script>";
    header('location:cart.php');
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM account WHERE email  ='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $vpassword = $row['password'];
        if ($vpassword == $password) {
            if ($result) {
                $query = " INSERT INTO form values ( '$email','$password')";
                $data = mysqli_query($conn, $query);
                session_start();
                $_SESSION['pop'] = '2';
                // header('location:htmlfile.php');
                echo "<script> alert ('welcome');</script>";
                echo "<script>window.location.href = 'htmlfile.php';</script>";
            } else {
                // echo "<script> alert ('CREATE account frist');
                // </script>";
                // header ('location:account.php'); 
                echo "<script>alert('CREATE account first');</script>";
                echo "<script>window.location.href = 'account.php';</script>";
            }
        }
    }
}

?>