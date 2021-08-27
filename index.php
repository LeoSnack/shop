<?php
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/function.php");

$catPage = getUrlQuery($_SERVER['REQUEST_URI'], "cat");
if(empty($catPage)){
	$catPage = "Pasport RB";
}

$qCatPage = "SELECT * FROM tovar WHERE cat='".$catPage."'";
$resCatPage = mysqli_query($link, $qCatPage);

$query = "SELECT * FROM cat LIMIT 8";
$res = mysqli_query($link, $query);

$queryAdd = "SELECT * FROM cat LIMIT 8,20";
$resAdd = mysqli_query($link, $queryAdd);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>Cloud Passport</title>
</head>

<body>
    <header>
        <nav>
            <div class="navDesctop">
                <div class="navBrand">
                    <img src="./assets/img/logo.png" alt="" />
                </div>
                <div class="search">
                    <form action="return false">
                        <input type="search" name="" id="" placeholder="Search for all products" />
                        <input type="submit" value="" class="searchSubmit" />
                    </form>
                </div>
                <div class="navFeatures">
                    <div class="navFeature">
                        <a href="#">
                            <img src="./assets/img/drawingDocuments.png" alt="" />
                            <span>Drawing documents</span>
                        </a>
                    </div>
                    <div class="navFeature">
                        <a href="#">
                            <img src="./assets/img/telegramBot.png" alt="" />
                            <span>Telegram bot</span>
                        </a>
                    </div>
                </div>
                <div class="navLogin">
                    <a class="logInTrigger" href="#">
                        <img src="./assets/img/login.png" alt="" />
                        <span>Log In</span></a>
                </div>
            </div>
            <div class="navMobile">
                <div class="navMobileListContainer">
                    <div class="navMobileLogIn">
                        <a class="navLogInTrigger" href="#">
                            <img src="./assets/img/login.png" alt="" />
                            <span>Log In</span>
                        </a>
                    </div>
                    <div class="navMobileLinks">
                        <a href="#"><img src="./assets/img/logo.png" alt="" /></a>
                        <div class="navLinksMain">
                            <a href="#">About</a>
                            <a href="#">Contact</a>
                            <a href="#">FAQ</a>
                        </div>
                    </div>
                    <span class="navDescription">We accept payment</span>
                    <div class="navFooter">
                        <a href="#">Terms</a>
                        <a href="#">Privacy</a>
                    </div>
                </div>
                <button class="navBtn"><img src="./assets/img/navMenu.png" alt="" /></button>
                <div class="navMobileBrand">
                    <a href="#"> <img src="./assets/img/logo.png" alt="" /></a>
                </div>
            </div>
        </nav>
        <div class="headerGif container">
            <img src="./assets/img/sXLlSCf.gif" alt="" />
        </div>
        <div class="priceRow container">
            <div class="priceRowMain">
                <?php
                                        while($row=mysqli_fetch_array($res)){
                                        	//".$row['link']."
                                            echo "<div class='priceRowCell'>
								                    <a href='#'>
								                        <img src='".$row['link']."' alt='' height='50px' width='50px'/>
								                        <span>".$row['name']."</span>
								                    </a>
								                  </div>";
                                        }
				?>
            </div>
            <div class="priceRowCell costlU">
                <button class="priceRowBtn">
                              <div>
                                   <img src="./assets/img/more.png" alt="" />
                              </div>
                              <span class="costl">More</span>
                         </button>
                <ul class="costlUUl">
                    <?php
                    	while($row=mysqli_fetch_array($resAdd)){
                                            echo "<a href='#''>
							                        <li>".$row['name']."</li>
							                      </a>";
                                        }
                    ?>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <div class="mainTitle container">
            <h2>Passports</h2>
        </div>
        <div class="mainNav container">
            <div class="mainNavhLeft">
                <div class="search">
                    <form action="return false">
                        <input type="search" name="" id="" placeholder="Search for all products" />
                        <input class="searchSubmit" type="submit" value="" />
                    </form>
                </div>
            </div>
            <div class="mainNavRight">
                <div class="mainNavSelectCont">
                    <select name="" id="">
                                   <option value="0">Выберите страну</option>
                                   <option value="ARM">Armenia</option>
                                   <option value="AUS">Australia</option>
                                   <option value="AUT">Austria</option>
                                   <option value="AZR">Azerbaijan</option>
                                   <option value="BLR">Belarus</option>
                                   <option value="BLG">Belgue</option>
                                   <option value="BRA">Brazil</option>
                                   <option value="UK">Britain</option>
                                   <option value="BGR">Bulgaria</option>
                                   <option value="CAN">Canada</option>
                                   <option value="CHN">China</option>
                                   <option value="CZE">Czech Republic</option>
                                   <option value="DNR">DNR</option>
                                   <option value="EST">Estonia</option>
                                   <option value="FIN">Finland</option>
                                   <option value="FRC">France</option>
                                   <option value="GEO">Georgia</option>
                                   <option value="DEU">Germany</option>
                                   <option value="CHN">Hong Kong</option>
                                   <option value="IND">India</option>
                                   <option value="IRL">Ireland</option>
                                   <option value="ITA">Italy</option>
                                   <option value="KAZ">Kazakhstan</option>
                                   <option value="KOR">Korea</option>
                                   <option value="KGR">Kyrgyzstan</option>
                                   <option value="LVA">Latvia</option>
                                   <option value="LAT">Latvia</option>
                                   <option value="MDA">Moldova</option>
                                   <option value="NLD">Netherlands</option>
                                   <option value="NZL">New Zealand</option>
                                   <option value="NOR">Norway</option>
                                   <option value="POL">Poland</option>
                                   <option value="ROU">Romania</option>
                                   <option value="RUS">Russia</option>
                                   <option value="SVN">Slovenia</option>
                                   <option value="ESP">Spain</option>
                                   <option value="SWD">Sweden</option>
                                   <option value="CHE">Switzerland</option>
                                   <option value="UKR">Ukraine</option>
                                   <option value="OAE">United Arab Emirates</option>
                                   <option value="USA">United States of America</option>
                                   <option value="VNM">Vietnam</option>
                              </select>
                </div>
                <button class="mainNavBtn">Показать</button>
            </div>
        </div>
        <div class="productCells container">
        	<?php
                                        while($rowCat=mysqli_fetch_array($resCatPage)){
                                            echo "<a class='productCell' href='#'>
									                <div class='productCellMain'>
									                    <img class='productCellImg' src='".$rowCat['link']."' alt='' />
									                    <span>".$rowCat['name']."</span>
									                </div>
									                <div class='productCellDescription'>
									                    <div class='productPrice'>".$rowCat['price']."</div>
									                    <div class='productBtn'>
									                        <button class='productBuy'>Add to cart</button>
									                    </div>
									                </div>
									            </a>";
                                        }
				?>
            
        </div>
        <div class="mainFooter container"><button>Все страны</button></div>
    </main>
    <footer>
        <div class="footerLeft">
            <a href="#">Terms</a>
            <a href="#">Privacy</a>
        </div>
        <div class="footerCenter">
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="#">FAQ</a>
        </div>
        <div class="footerRight">
            <span>Принимаем к оплате</span>
            <img src="./assets/img/weAccept.png" alt="" />
        </div>
    </footer>
    <div class="logIn">
        <div class="logInContent">
            <div class="logInTop">
                <span>Log in to continue</span>
                <button class="logInClose"><img src="./assets/img/icons8-multiply-24.png" alt="" /></button>
            </div>
            <form action="">
                <input placeholder="Login" type="text" />
                <input placeholder="Password" type="password" name="" id="" />
                <input class="logInSub" type="submit" value="Log in" />
                <a href="#">Haven't registered yet?</a>
            </form>
        </div>
    </div>
    <script src="./assets/js/script.js"></script>
</body>

</html>