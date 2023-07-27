 <?php
include("connect.php");
session_start();
error_reporting(0);
 ?>
 <html>

<head>
    <title>
        shree sai krupa dairy
    </title>
    <link rel="stylesheet" href="\milk shop\font awesome\fontawesome-free-6.2.1-web\css\all.min.css">
    <link href="C:\wamp64\www\milk shop\project">
</head>

<body>


    <!-- heading and navigation bar  -->
    <div class="main">
        <link rel="stylesheet" href="\milk shop\style.css">
        <header id="top">
            <a href="http://localhost/milk%20shop/htmlfile.php"> <img src="\milk shop/project/pics.png"> </a>
            <!-- <p style="font-family:sans-serif ;"> <a href="file:///E:/milk%20shop/htmlfile.html"> श्री sai krupa dairy </a></p> -->
            <a href="http://localhost/milk%20shop/htmlfile.php"> <img class="pic"src="\milk shop/project/picsart_03.jpg"> </a>
            <nav>
                <ul>
                    <li>
                        <a href="http://localhost/milk%20shop/login.php"> login</a>
                    </li>
                    <li> <a href="http://localhost/milk%20shop/account.php">create account</a> </li>
             <li><a href="cart.php">
                <i style="color: red; font-size: 20px;" class="fa-sharp fa-solid fa-cart-shopping"></i></a></li>
            </ul>
            </nav>
        </header>
        <!-- image  -->
        <div class="middlespace">
              <marquee  behavior="alternate" direction="left">
            <img src="\milk shop/project/back.jpg">
            <div class="right"> few clicks is all it takes</div>
                       <img src="\milk shop\project\co.jpg"> 
          <img src="\milk shop\project\71_full.jpg"> 
    </marquee>
        </div>
        <!--  --product list  ---->
        <div class=" productlist">
            <i style="color: purple;" class="fa-sharp fa-solid fa-clipboard-list">
                <p style=" color: purple; font-size: 20px;cursor: pointer;  display: inline-block;">product list </p>
            </i>
            <ul>
                <li>
                    <i style="color: black;" class="fa-solid fa-cow">
                        <p
                            style=" color: red; font-size: 20px;cursor: pointer; display: inline-block;  padding-right: 10px; ">
                            milk </p>
                    </i>
                    <ul class="sub" style="color:green; ">
                        <li>
                            <a href="#amul"> amul</a>
                            <ul class="subsub">
                                <li>
                                    <a href="#amul"> amul cow</a>
                                </li>
                                <li> <a href="#amul">amul gold</a></li>
                                <li>
                                    <a href="#amul"> amul taza </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#gokul"> gokul</a>
                            <ul class="subsub">
                                <li><a href="#gokul"> gokul cow</a></li>
                                <li><a href="#gokul"> gokul bufello</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#warna"> warna</a>
                            <ul class="subsub">
                                <li><a href="#warna"> warna cow</a></li>
                                <li><a href="#warna"> warna bufello</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#mother"> mother dairy</a>
                            <ul class="subsub">
                                <li><a href="#mother"> bufello</a></li>
                                <li><a href="#mother"> cow</a></li>
                                <li><a href="#mother"> tond</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#patangali"> patanjali</a>
                            <ul class="subsub">
                                <li><a href="#patangali"> patangali cow</a></li>
                                <li><a href="#patangali"> patangali bufello</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#mahananda"> mahananda</a>
                        </li>
                        <li>
                            <a href="#milkpowder">  milk powder</a>
                            <ul class="subsub" style="color:palevioletred;">

                                <li>
                                    <a href="#milkpowder"> Nestle milk powder</a>
                                </li>

                                <li>
                                    <a href="#milkpowder"> Govind milk powder</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                <li> 
                <i style="color: black;" class=" fas-cookie">
                        <p style=" color: red; font-size:15px; cursor: pointer; display: inline-block;">
                            Biscits</p>
                    <!-- <i style="color: black;" class="fa-solid fa-cookie">
                        <p style=" color: red; font-size:15px; cursor: pointer; display: inline-block;">Biscits
                    </p>  -->
                </i>

                    <ul class="sub">
                        <li> <a href="#good day"> good day</a></li>
                        <li> <a href="#marie">marie</a></li>
                        <li><a href="#parle-g"> parle-G</a></li>
                        <li> <a href="#oreo">oreo</a></li>
                        <li> <a href="#bourbone">bourbone</a></li>
                        <li><a href="#crack jack">crack jack</a></li>
                    </ul>
                </li>
                <li>
                    <i style="color: black;" class="fa-solid fa-bacon">
                        <p style=" color: red; font-size:15px; cursor: pointer; display: inline-block;">
                            chips</p>
                    </i>
                    <ul class="sub">
                        <li><a href="#potato">potato chips</li></a>
                        <li><a href="#banana">banana chips</li></a>
                        <li> <a href="#lays">lays
                                <ul class="subsub">
                                    <li>palin salted</li>
                                    <li>cream an onoin</li>
                                    <li>tika tadka</li>
                                </ul>
                            </a>
                        </li>
                        <li><a href="#haltiram">haltiram
                                <ul class="subsub">
                                    <li>moong dal </li>
                                    <li>chana </li>
                                    <li>salted nuts</li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </li>
                <li><i style="color: black;" class="fa-solid fa-bottle-droplet">
                        <p style=" color: red; font-size: 15px;cursor: pointer; display: inline-block;">
                            cold drinks</p>
                    </i>
                    <ul class="sub">
                        <li><a href="#thump up"> thumps up</li></a>
                        <li><a href="#sprite">sprite</li></a>
                        <li><a href="#coke">coke</li></a>
                        <li><a href="#fanta">fanta</li></a>
                        <li><a href="#pepsi">pepsi</li></a>
                        <li><a href="#mirelda">mirelda</li></a>
                    </ul>
                </li>
                <li> <i style="color: black; font-size: 15px;" class=" fa-solid fa-clipboard">
                        <p style=" color: red; font-size: 15px; cursor: pointer; display: inline-block;">
                            milk products </p>
                    </i>
                    <ul class="sub">
                        <li><a href="#panner">paneer</a>
                            <ul class="subsub">
                                <li><a href="#panner">Amul panner</a></li>
                                <li><a href="#panner">Govardhan panner</a></li>
                            </ul>
                        </li>
                        <li><a href="#butter">butter</a>
                            <ul class="subsub">
                                <li><a href="#butter">Amul butter</a></li>
                                <li><a href="#butter">Nuterlite butter</a></li>
                            </ul>
                        </li>
                        <li><a href="#tup">tup</a>
                            <ul class="subsub">
                                <li><a href="#tup">krishna cow tup</a></li>
                                <li><a href="#tup">krishna buffelo tup</a></li>
                            </ul>
                        </li>
                        <li><a href="#curd">curd</a>
                            <ul class="subsub">
                                <li><a href="#curd">warna curd</a></li>
                                <li><a href="#curd">gowardan</a></li>
                            </ul>
                        </li>
                        <li><a href="#shrikand">shirkand</a>
                            <ul class="subsub">
                                <li><a href="#shrikand">warna badam pista </a></li>
                                <li><a href="#shrikand">warna mango </a></li>
                            </ul>
                        </li>
                        <li><a href="#basundi"> basundi</a>
                            <ul class="subsub">
                                <li><a href="#shrikand">krishna basundi </a></li>
                                <li><a href="#shrikand">warna basundi </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <!--------------------------------------------------- shoping card ------------------------------------------------->
      
        <div class="row">
    
        <form method="post" action="htmlfile.php">
            <div class="card" >
                <div id="amul"><form method="post">
                    <img style="width: 230px;" src="\milk shop/project/amul2.jpg">
                    <p style="color: black;"> Amul gold milk 1lt packet </p>
                    <p style="color: black;"> price 52₹</p>
                   <p><input type="submit"  name="1" value="Add to Cart" ></p>
                   <?php
if (isset($_POST['1']))
$_SESSION['value'] = '1';
?>
                </div>
            </div>

            <!-- <div class="card">
                <div id="amul"><form method="post">
                    <img style="width: 230px;" src="\milk shop/project/amul2.jpg">
                    <p style="color: black;"> Amul gold milk 1lt packet </p>
                    <p style="color: black;"> price 52₹</p><form method=post onsubmit="addtocart()">
                    <p><input type="submit"  name="1" value="Add to Cart"></p></form>
                </div>
            </div> -->

            <div class="card">
                <img style="width: 230px;" src="\milk shop/project/product/Amul Milk.jpg">
                <p style="color: black;"> Amul taza milk 1/2lt packet </p>
                <p style="color: black;"> price 52₹</p>
                <p><input type="submit"  name="2" value="Add to Cart"></p>
                <?php
if (isset($_POST['2']))
$_SESSION['value'] = '2';
?>
            </div>

            <div class="card">
                <img style="width: 230px;" src="\milk shop/project/amul cow.jpg">
                <p style="color: black;"> Amul cow milk 1/2lt packet </p>
                <p style="color: black;"> price 52₹</p>
                <p><input type="submit"  name="3" value="Add to Cart"></p>
                <?php
if (isset($_POST['3']))
$_SESSION['value'] = '3';
?>
            </div>


            <div class="card">

                <div id="gokul">
                    <img src="\milk shop/project/gokul.jpg">
                    <p style="color: black;"> gokul bufello 1lt packet </p>
                    <p style="color: black;"> price 72₹</p>
                <p><input type="submit"  name="4" value="Add to Cart"></p>
                <?php
if (isset($_POST['4']))
$_SESSION['value'] = '4';
?>
                </div>
            </div>

            <div class="card">
                <img src="\milk shop/project/gokul cow.jpg">
                <p style="color: black;"> gokul cow 1/2lt packet </p>
                <p style="color: black;"> price 28₹</p>
                <p><input type="submit"  name="5" value="Add to Cart" ></p>
                <?php
if (isset($_POST['5']))
$_SESSION['value'] = '5';
?>
            </div>

            <div class="card">
                <div id="warna">
                    <img src="\milk shop/project/warna.png">
                    <p style="color: black;"> warna milk 1/2lt packet </p>
                    <p style="color: black;"> price 28₹</p>
                    <p><input type="submit"  name="6" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['6']))
$_SESSION['value'] = '6';
?>
                </div>
            </div>



            <div class="card">
                <img src="\milk shop/project/warna b.jpg">
                <p style="color: black;"> warna bufello 1/2lt packet </p>
                <p style="color: black;"> price 36₹</p>
                <p><input type="submit"  name="7" value="Add to Cart" ></p>
                <?php
if (isset($_POST['7']))
$_SESSION['value'] = '7';
?>
            </div>

            <div class="card">
                <div id="mother">
                    <img src="\milk shop/project/mother.jpg">
                    <p style="color: black;"> mother dailry bufello milk 1/2lt packet </p>
                    <p style="color: black;"> price 37₹</p>
                    <p><input type="submit"  name="8" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['8']))
$_SESSION['value'] = '8';
?>
                </div>
            </div>

            <div class="card">
                <img style="width: 230px;" src="\milk shop/project/mother c.jpg">
                <p style="color: black;"> mother dailry cow milk </p>
                <p style="color: black;"> price 29₹</p>
                <p><input type="submit"  name="9" value="Add to Cart" ></p>
                <?php
if (isset($_POST['9']))
$_SESSION['value'] = '9';
?>
            </div>

            <div class="card">
                <img style="width: 215px; " src="\milk shop/project/mother t.jpg ">
                <p style="color: black;"> mother dailry tond milk </p>
                <p style="color: black;"> price 28₹</p>
                <p><input type="submit"  name="10" value="Add to Cart" ></p>
                <?php
if (isset($_POST['10']))
$_SESSION['value'] = '10';
?>
            </div>


            <div class="card">
                <div id="patangali">
                    <img src="\milk shop/project/patanjali.jpg">
                    <p style="color: black;"> patanjali cow milk 1/2lt packet </p>
                    <p style="color: black;"> price 28₹</p>
                    <p><input type="submit"  name="11" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['11']))
$_SESSION['value'] = '11';
?>
                </div>
            </div>

            <div class="card">
                <img src="\milk shop/project/patanjali t.jpg">
                <p style="color: black;"> patanjali tond milk 1/2lt packet </p>
                <p style="color: black;"> price 27₹</p>
                <p><input type="submit"  name="12" value="Add to Cart" ></p>
                <?php
if (isset($_POST['12']))
$_SESSION['value'] = '12';
?>
            </div>


            <div class="card">
                <div id="mahananda">
                    <img style="width: 230px; " src="\milk shop/project/product/Mahananda Milk.jpg">
                    <p style="color: black;"> mahananda milk 1/2lt packet </p>
                    <p style="color: black;"> price 28₹</p>
                    <p><input type="submit"  name="13" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['13']))
$_SESSION['value'] = '13';
?>
                </div>
            </div>

            <div class="card">
                <div id="milkpowder">
                    <img style="width: 230px; " src="\milk shop/project/product/Nestle Milk Powder.jpg">
                    <p style="color: black;"> Nestle milk powder 1/2lt packet </p>
                    <p style="color: black;"> price 75₹</p>
                    <p><input type="submit"  name="14" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['14']))
$_SESSION['value'] = '14';
?>
                </div>
            </div>

            <div class="card">
                <div id="milkpowder">
                    <img style="width: 230px; " src="\milk shop/project/product/Govind Milk Powder.jpg">
                    <p style="color: black;"> govind milk powder 1/2lt packet </p>
                    <p style="color: black;"> price 75₹</p>
                    <p><input type="submit"  name="15" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['15']))
$_SESSION['value'] = '15';
?>
                </div>
            </div>

            <div class="card">
                <div id="oreo">
                    <img style="width: 230px; " src="\milk shop/project/product/oreo.jpg">
                    <p style="color: black;"> 20RS oreo packet of 6 </p>
                    <p style="color: black;"> price 120₹</p>
                    <p><input type="submit"  name="16" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['16']))
$_SESSION['value'] = '16';
?>
                </div>
            </div>

            <div class="card">
                <div id="parle-g">
                    <img style="width: 230px; " src="\milk shop/project/product/parle-G.jpg">
                    <p style="color: black;"> parle-G 30Rs packet of 6 </p>
                    <p style="color: black;"> price 180₹</p>
                    <p><input type="submit"  name="17" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['17']))
$_SESSION['value'] = '17';
?>
                </div>
            </div>

            <div class="card">
                <div id="crack jack">
                    <img style="width: 230px; " src="\milk shop/project/product/krack jack.jpg">
                    <p style="color: black;"> crack jack 10 Rs packet of 12 </p>
                    <p style="color: black;"> price 120₹</p>
                    <p><input type="submit"  name="18" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['18']))
$_SESSION['value'] = '18';
?>
                </div>
            </div>

            <div class="card">
                <div id="good day">
                    <img style="width: 230px; " src="\milk shop/project/product/good day.jpg">
                    <p style="color: black;"> good day 35 Rs packet of 6 </p>
                    <p style="color: black;"> price 210₹</p>
                    <p><input type="submit"  name="19" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['19']))
$_SESSION['value'] = '19';
?>
                </div>
            </div>

            <div class="card">
                <div id="marie">
                    <img style="width: 230px; " src="\milk shop/project/product/marie.jpg">
                    <p style="color: black;"> marie 35 Rs packet of 6 </p>
                    <p style="color: black;"> price 210₹</p>
                    <p><input type="submit"  name="20" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['20']))
$_SESSION['value'] = '20';
?>
                </div>
            </div>

            <div class="card">
                <div id="bourbone">
                    <img style="width: 230px; " src="\milk shop/project/product/BourBon.jpg">
                    <p style="color: black;"> bourbone 20 Rs packet of 6 </p>
                    <p style="color: black;"> price 120₹</p>
                    <p><input type="submit"  name="21" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['21']))
$_SESSION['value'] = '21';
?>
                </div>
            </div>

            <div class="card">
                <div id="banana">
                    <img style="width: 230px; " src="\milk shop/project/product/banana chips.jpg">
                    <p style="color: black;"> bananachips 10 Rs packet of 6 </p>
                    <p style="color: black;"> price 60₹</p>
                    <p><input type="submit"  name="22" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['22']))
$_SESSION['value'] = '22';
?>
                </div>
            </div>

            <div class="card">
                <div id="potato">
                    <img style="width: 230px; " src="\milk shop/project/product/potato chips.jpg">
                    <p style="color: black;"> potato chips 10 Rs packet of 6 </p>
                    <p style="color: black;"> price 60₹</p>
                    <p><input type="submit"  name="23" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['23']))
$_SESSION['value'] = '23';
?>
                </div>
            </div>

            <div class="card">
                <div id="lays">
                    <img style="width: 230px; " src="\milk shop/project/product/Lay_s Cream _ Onion.jpg">
                    <p style="color: black;"> Cream Onion 10 Rs packet of 6 </p>
                    <p style="color: black;"> price 60₹</p>
                    <p><input type="submit"  name="24" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['24']))
$_SESSION['value'] = '24';
?>
                </div>
            </div>

            <div class="card">
                <img style="width: 230px; " src="\milk shop/project/product/Lay_s sizzlin Hot.jpg">
                <p style="color: black;"> sizzlin Hot 10 Rs packet of 6 </p>
                <p style="color: black;"> price 60₹</p>
                <p><input type="submit"  name="25" value="Add to Cart" ></p>
                <?php
if (isset($_POST['25']))
$_SESSION['value'] = '25';
?>
            </div>

            <div class="card">
                <img style="width: 230px; " src="\milk shop/project/product/Lay_s Salted.jpg">
                <p style="color: black;"> Salted 10 Rs packet of 6 </p>
                <p style="color: black;"> price 60₹</p>
                <p><input type="submit"  name="26" value="Add to Cart" ></p>
                <?php
if (isset($_POST['26']))
$_SESSION['value'] = '26';
?>
            </div>

            <div class="card">
                <div id="thumps">
                    <img style="width: 230px; " src="\milk shop/project/thumps up.jpg">
                    <p style="color: black;"> 2lt bottle Thumsup </p>
                    <p style="color: black;"> price 99₹</p>
                    <p><input type="submit"  name="27" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['27']))
$_SESSION['value'] = '27';
?>
                </div>
            </div>

            <div class="card">
                <div id="fanta">
                    <img style="width: 230px; " src="\milk shop/project/fanta.jpg">
                    <p style="color: black;"> 2lt bottle fanta </p>
                    <p style="color: black;"> price 99₹</p>
                    <p><input type="submit"  name="28" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['28']))
$_SESSION['value'] = '28';
?>
                </div>
            </div>

            <div class="card">
                <div id="sprite">
                    <img style="width: 230px; " src="\milk shop/project/sprite.jpg">
                    <p style="color: black;"> 2lt bottle sprite </p>
                    <p style="color: black;"> price 99₹</p>
                    <p><input type="submit"  name="29" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['29']))
$_SESSION['value'] = '29';
?>
                </div>
            </div>

            <div class="card">
                <div id="pepsi">
                    <img style="width: 230px; " src="\milk shop/project/pepsi.jpg">
                    <p style="color: black;"> 2lt bottle pepsi </p>
                    <p style="color: black;"> price 99₹</p>
                    <p><input type="submit"  name="30" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['30']))
$_SESSION['value'] = '30';
?>
                </div>
            </div>

            <div class="card">
                <div id="mirelda">
                    <img style="width: 230px; " src="\milk shop/project/MIRINDA.jpg">
                    <p style="color: black;"> 2lt bottle MIRINDA </p>
                    <p style="color: black;"> price 99₹</p>
                    <p><input type="submit"  name="31" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['31']))
$_SESSION['value'] = '31';
?>
                </div>
            </div>

            <div class="card">
                <div id="coke">
                    <img style="width: 230px; " src="\milk shop/project/coke.jpg">
                    <p style="color: black;"> 2lt bottle coke </p>
                    <p style="color: black;"> price 99₹</p>
                    <p><input type="submit"  name="32" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['32']))
$_SESSION['value'] = '32';
?>
                </div>
            </div>

            <div class="card">
                <div id="panner">
                    <img style="width: 230px; " src="\milk shop/project/amul p.jpg">
                    <p style="color: black;"> 200gm packet panner amul   </p>
                    <p style="color: black;"> price 80₹</p>
                    <p><input type="submit"  name="33" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['33']))
$_SESSION['value'] = '33';
?>
                </div>
            </div>

            <div class="card">
                <img style="width: 230px; " src="\milk shop/project/gowar p.jpg">
                <p style="color: black;"> 200gm packet panner gowerdhan </p>
                <p style="color: black;"> price 80₹</p>
                <p><input type="submit"  name="34" value="Add to Cart" ></p>
                <?php
if (isset($_POST['34']))
$_SESSION['value'] = '34';
?>
            </div>

            <div class="card">
                <div id="curd">
                    <img style="width: 230px; " src="\milk shop/project/warna curd.jpg">
                    <p style="color: black;"> 500gm packet warna curd </p>
                    <p style="color: black;"> price 40₹</p>
                    <p><input type="submit"  name="35" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['35']))
$_SESSION['value'] = '35';
?>
                </div>
            </div>

            <div class="card">
                <img style="width: 230px; " src="\milk shop/project/go.jpg">
                <p style="color: black;"> 500gm packet gowerdhan curd </p>
                <p style="color: black;"> price 40₹</p>
                <p><input type="submit"  name="36" value="Add to Cart" ></p>
                <?php
if (isset($_POST['36']))
$_SESSION['value'] = '36';
?>
            </div>

            <div class="card">
                <div id="tup">
                    <img style="width: 230px; " src="\milk shop/project/krishna tup.jpg">
                    <p style="color: black;"> 500gm packet krishna tup cow </p>
                    <p style="color: black;"> price 345₹</p>
                     <p><input type="submit"  name="37" value="Add to Cart" ></p>
                     <?php
if (isset($_POST['37']))
$_SESSION['value'] = '37';
?>
                </div>
            </div>

            <div class="card">
                <img style="width: 230px; " src="\milk shop/project/krishna b.jpg">
                <p style="color: black;"> 500gm packet krishna tup bufello  </p>
                <p style="color: black;"> price 345₹</p>
                 <p><input type="submit"  name="38" value="Add to Cart" ></p>
                 <?php
if (isset($_POST['38']))
$_SESSION['value'] = '38';
?>
            </div>

            <div class="card">
                <div id="butter">
                    <img style="width: 200px; " src="\milk shop/project/amul butter.jpg">
                    <p style="color: black;"> 500gm packet amul butter </p>
                    <p style="color: black;"> price 200₹</p>
                    <p><input type="submit"  name="39" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['39']))
$_SESSION['value'] = '39';
?>
                </div>
            </div>

            <div class="card">
                <img style="width: 230px; " src="\milk shop/project/Nuterlite.jpg">
                <p style="color: black;"> 500gm packet  Nuterlite butter</p>
                <p style="color: black;"> price 150₹</p>
                <p><input type="submit"  name="40" value="Add to Cart" ></p>
                <?php
if (isset($_POST['40']))
$_SESSION['value'] = '40';
?>
            </div>

            <div class="card">
                <div id="shirkand">
                    <img style="width: 230px; " src="\milk shop/project/shri waran.jpg">
                    <p style="color: black;"> 250gm packet warna shrikhanda </p>
                    <p style="color: black;"> price 80₹</p>
                    <p><input type="submit"  name="41" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['41']))
$_SESSION['value'] = '41';
?>
                </div>
            </div>

            <div class="card">
                <img style="width: 230px; " src="\milk shop/project/shri waran mango.jpg">
                <p style="color: black;"> 250gm packet warna amrakhanda </p>
                <p style="color: black;"> price 80₹</p>
                <p><input type="submit"  name="42" value="Add to Cart" ></p>
                <?php
if (isset($_POST['42']))
$_SESSION['value'] = '42';
?>
            </div>

            <div class="card">
                <div id="basundi">
                    <img style="width: 240px; " src="\milk shop/project/basundi k.jpg">
                    <p style="color: black;"> 250gm packet krishna basundi </p>
                    <p style="color: black;"> price 67₹</p>
                    <p><input type="submit"  name="43" value="Add to Cart" ></p>
                    <?php
if (isset($_POST['43']))
$_SESSION['value'] = '43';
?>
                </div>
            </div>


            <div class="card">
                <img style="width: 240px; " src="\milk shop/project/waran basundi.jpg">
                <p style="color: black;"> 250gm packet warna basundi </p>
                <p style="color: black;"> price 70₹</p>
                <p><input type="submit"  name="44" value="Add to Cart" ></p>
                <?php
if (isset($_POST['44']))
$_SESSION['value'] = '44';
?>
            </div>


        </div>

        <div>
        </form> 
        </div>
            
        <!--------------------------------------------------- bottom------------------------------------------------->
        <footer>
            <div class="bottom">
                <p class="one"> since 1997 <a href="#">shreesaikrupa.com</a>
                    <a href="#top"><i class="fa-solid fa-arrow-up"></i></a>
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
                    Kolhapur <br>
                    karad <br>
                    pune<br>
                    Nashik<br>
                    Satara<br>

                    </p>
                </div>
                <div class="two">
                    <p><a href="about us">About Us</a>
                        <a href="privacy poicy">Privacy Policy</a>
                    <div class="three">
                        <p>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-facebook"></i>
                            <a href="#">  <i class="fa-solid fa-envelope"></i></a>
                        </p>
                    </div>
                    </p>
                </div>

                <!--                 
                <p class="three">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-solid fa-envelope"></i>
                    
                </p> -->
            </div>
        </footer>
    </div>


</body>

</html>


<?php

if (isset($_POST['submit']))
{ echo "<script> alert ('added to cart ');</script>";
// $query="SELECT id FROM cart WHERE id ='$id';";
//         $data= mysqli_query($conn,$query);  
//         for($row=1;$row>0;$row++){
//         $data==$_SESSION["$row"]; 
//          break;
//          }
//      if($data)
//         {
    //echo "<script> alert ('added to cart ');</script>";
         
//         } 
    
}
                   
?>
