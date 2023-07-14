<?php
 error_reporting(0);
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
    header {
        height: 100px;
        background-color: #d6f8b8;
        width: 100%;
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
    /* <--------------------------------------------------------------------------------------------------> */
    .bar {
        width: 400px;
        height: 350px;
        /* background-color: white; */
        border-color: black;
        border-style: outset;
        /* background-color: blueviolet; */
        margin-top: 100px;
        margin-left: 500px;
        margin-bottom:  100px;
        margin-right: 350px;
    }
    .bar td
    {
        font-size: 30px;
        
    }

    body {
        background-image: url("/milk shop/project/blur.jpg");
    }
    form td {
        color: rgb(146, 48, 146);
        text-align: left;
        
    }

    input {
        padding: 10px;
    }
</style>

<body>
<link rel="stylesheet" href="\milk shop\font awesome\fontawesome-free-6.2.1-web\css\all.min.css">

<header id="top">
        <a href="http://localhost/milk%20shop/htmlfile.php"> <img src="\milk shop/project/pics.png"> </a>
        <a href="http://localhost/milk%20shop/htmlfile.php"> <img class="pic" src="\milk shop/project/picsart_03.jpg"> </a>
        <nav>
            <ul>
            <li><a href="cart.php">
                <i style="color: red; font-size: 20px;" class="fa-sharp fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </nav>
    </header>
    <div class="bar">
        <form method="post">
            <table>
                <tr>
                    <td> Frist name</td>
                 <td>   <input type="textbox" name="Fname" placeholder=" frist name " required></td>
                </tr>
                <tr>
                    
                    <td>Last name</td><td><input type="textbox" name="Lname" placeholder=" last name " required></td>
                </tr>
                <tr>
                    
                    <td>Address</td> <td><textarea rows="4" cols="24"name="address" required placeholder=" enter your address in detail here ">
            </textarea></td>
                </tr>
                <tr>
                    
                    <td>Phone number</td><td> <input type="tel" name="phone" required placeholder=" 84******76 "></td>
                </tr>
                <tr>
                    
                    <td>Email</td><td><input type="email" name="email" placeholder=" dsau@gmail.com"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit">
                        <input type="reset" name="cancel">
                    </td>
                </tr>
            </table>
        </form>

    </div>
</body>

</html>
<?php 
include("connect.php");
if (isset($_POST['submit']))
{
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
     
    $query7= "INSERT INTO details values ( '$Fname','$Lname','$address','$phone','$email')";
    $data2 = mysqli_query($conn , $query7);

    if ($data2) {
        echo "<script> alert ('order placed ');</script>";
        header('location:htmlfile.php');
        exit;
    }
}





?>