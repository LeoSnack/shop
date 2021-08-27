<?php
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/function.php");

$id = getUrlQuery($_SERVER['REQUEST_URI'], 'id');

$query = "SELECT * FROM tovar WHERE id='$id'";
$res = mysqli_query($link, $query);

    $name = "";
    $link1 = "";
    $cat = "";
    $price = "";
while($row=mysqli_fetch_array($res)){
        $name = $row['name'];
        $link1 = $row['link'];
        $cat = $row['cat'];
        $price = $row['price'];
    }

if(!empty($_POST["NameT"]) && !empty($_POST["CatT"]) && !empty($_POST["LinkT"]) && !empty($_POST["PriceT"])){
        
        $nameN = trim($_POST["NameT"]);
        $targetN = trim($_POST["CatT"]);
        $countryN = trim($_POST["LinkT"]);
        $tagN = trim($_POST["PriceT"]);

            $query ="UPDATE tovar SET name='$nameN', cat='$targetN', link='$countryN', price='$tagN' WHERE id='$id'";
            $result_sql = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            header("Refresh:0");
    }
    mysqli_close($link);

    require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");
    require($_SERVER['DOCUMENT_ROOT']."/admin/template/left-bar.php");
?>   
                <main>
                    <div class="container-fluid">
                        <a href="/admin/tovar.php">Вернуться к Товарам</a>
                        <h1 class="mt-4">Редактировать оффер</h1>
                                <div class="alert alert-success" id="successAddUser" role="alert" style="display: none;">
                                    </div>
                                <div class="row">
                                    <form action="" method="POST" id="editOfferForm" autocomplete="off" enctype="multipart/form-data">
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='NameT' aria-describedby='emailHelp' placeholder='Введите название' value='".$name."'>";?>
                                      </div>
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='CatT' placeholder='Введите Категория' value='".$cat."'>";?>
                                      </div>
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='LinkT' placeholder='Введите Ссылка' value='".$link1."'>";?>
                                      </div>
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='PriceT' placeholder='Введите Цена' value='".$price."'>";?>
                                      </div>
                                      <button type="submit" class="btn btn-primary" id="buttonEditOffer">Обновить
                                    </button>
                                    </form>
                                </div>
                            </br>
                    </div>
                </main>
<?php
require($_SERVER['DOCUMENT_ROOT']."/admin/template/footer.php");
?>                