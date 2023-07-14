<?php
 error_reporting(0);
include("connect.php");
session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    $query5 = "DELETE FROM id ";
    $result4 = mysqli_query($conn, $query5);
    if ($result4) {
        // echo "<script> alert ('user has been logout');</script>";
        header('location:htmlfile.php');
        exit;
    }
}
if (isset($_POST['sub'])) {
    header("Location: http://localhost/milk%20shop/customerdetail.php");
    //echo "<script> header('location:customerdetail.php');</script>";
}

?>
<html>

<body>
    <style>
        * {
            margin: 0px;
            padding: 0%;
            box-sizing: border-box;
        }

        body {

            background-image: url('/milk shop/project/blur.jpg')
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

        /* <---------------------------------------------------------------------------------------------------------> */



        /* <----------------------------------------------------------------------------------------------------------> */


        .bottom {
            width: 100%;
            height: 410px;
            background-color: #6b7b8e;
            clear: both;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            border-style: outset solid;
            border-color: gray;
            margin: 0px;

        }

        .bottom a {
            text-decoration-line: none;
            color: rgb(152, 152, 201);
        }

        .one {
            color: rgb(152, 152, 201);
            font-size: 20px;
            text-align: center;
            padding: 10px;

        }

        .two {
            margin-top: 94px;
            /* background-color: black; */
            display: inline-block;
            font-size: 20px;
            margin-right: 0px;
            margin-left: 0px;
            color: rgb(152, 152, 201);
            width: 100%;
            padding-top: 10px;

        }

        .two .three {
            float: right;
        }

        .three i {
            font-size: 25px;
            color: rgb(152, 152, 201);

            color: aqua;
            padding: 5px;
            margin-bottom: 10px;
            /* background-color: black; */
        }

        /* .three
{ padding: 5px;
 padding-left: 985px;
display: inline-block;
font-size: 30px;

margin: 0px;
} */
        .fa-arrow-up {
            float: right;
            font-size: 30px;
        }

        .four {
            text-align: center;
        }

        .nono {
            text-align: center;
            margin: 10px;
        }

        .two a {
            padding: 5px;
        }

        /* <----------------------------------------------------------------------------------------------------------> */
        .center {

            height: 700px;
            background-color: #acdeaa;
            ;
        }

        .center p {
            text-align: center;
            font-size: 30px;
            font-style: italic;
            color: rgb(179, 101, 101);
        }

        table {
            width: 100%;
            text-align: center;

        }

        tr {
            font-size: 22px;

        }

        input {
            font-size: 20px;
            float: right;
            margin-right: 5px;
            cursor: pointer;
            background-color: aqua;
            width: 100px;
            margin-top: 10px;
        }

        /* <----------------------------------------------------------------------------------------------------------> */
    </style>
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

    <div class="center">
        <p> shopping cart</p>

        <table border="0px solid transparent;">
            <tr>
                <th>
                    id
                </th>
                <th>
                    iteam name
                </th>

                <th>
                    prize
                </th>
            </tr>


        </table>

        <?php
        if (isset($_SESSION['pop'])) {
            $_SESSION['lock'] = '1';
            $value = $_SESSION['value'];
            $id = $value;
            $query2 = "INSERT INTO id values ( '$id')";
            $data = mysqli_query($conn, $query2);

            $query3 = "SELECT * FROM id ";
            $result2 = mysqli_query($conn, $query3);
            $values = array();
            while ($row2 = mysqli_fetch_assoc($result2)) {
                $values[] = $row2['id'];
            }
            $sum = 0;
            foreach ($values as $value) {
                $query = "SELECT * FROM cart WHERE id='$value'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                if ($row)
                //while($row = mysqli_fetch_assoc($result)) 
                {  
                    echo "ID: " . $row['id'] . "<br>";
                    echo "Name: " . $row['product_name'] . "<br> ";
                    echo "price: " . $row['price'] . "<br><br>";
                    $sum = $row['price'] + $sum;
                }
               //  else{
                //     echo "<script> alert ('login frist');</script>";
                //     header('location:login.php');
                // }
            }
            // mysqli_close($conn);
        } else {
            header('location:account.php');
            exit;
        }
        ?>
        <p style="text-align: right; margin-right:10px;";><?php echo "total $sum"; ?></p>

        <form method="post">
            <input type="submit" name="sub" value="Buy now">
            <input type="submit" name="logout" value="logout">
        </form>
        <?php
        // if (isset($_POST['logout'])) {
        //     session_unset();
        //     session_destroy();
        //     $query5 = "DELETE FROM id ";
        //     $result4 = mysqli_query($conn, $query5);
        //     if ($result4) {
        //         // echo "<script> alert ('user has been logout');</script>";
        //         header('location:htmlfile.php');
        //         exit;
        //     }
        // }
        // if (isset($_POST['sub'])) {
        //     header("Location: http://localhost/milk%20shop/customerdetail.php");
        //     //echo "<script> header('location:customerdetail.php');</script>";
        // }
        ?>
    </div>
    <footer>
        <div class="bottom">
            <p class="one"> since 1997 <a href="#">shreesaikrupa.com</a>
                <!-- <a href="#top"><i class="fa-solid fa-arrow-up"></i></a> -->
            </p>
            <div class="nono">
                <p>
                <p style="color: red;"> Main branche</p>
                Mumbai, kural east, sham nagar 420,Mumbai-700207
                </p>
            </div>
            <div class="four">
                <p style="color:solid rgb(87, 84, 84); font-size: 20px;">
                <p style="color:red">Branches</p>
                Mumbai <br>
                Navi Mumbai <br>
                Kolapure <br>
                karad <br>
                pune<br>
                Nashik<br>
                Satara<br>

                </p>
            </div>
            <div class="two">
                <p><a href="about us">About Us</a>
                    <a href="privacy poicy">Privacy Policy</a>
                    <!-- <div class="three">
                        <p>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-facebook"></i>
                            <a href="#">  <i class="fa-solid fa-envelope"></i></a>
                        </p>
                    </div> -->
                </p>
            </div>


            <!-- <p class="three">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-solid fa-envelope"></i>
                    
                </p> -->
        </div>
    </footer>
</body>

</html>