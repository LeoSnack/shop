<?php
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/function.php");

$id = getUrlQuery($_SERVER['REQUEST_URI'], 'id');

$query = "SELECT * FROM cat WHERE id='$id'";
$res = mysqli_query($link, $query);

    $name1 = "";
    $link1 = "";
while($row=mysqli_fetch_array($res)){
        $name1 = $row['name'];
        $link1 = $row['link'];
    }

if(!empty($_POST["name"]) && !empty($_POST["link"])){
        
        $name = trim($_POST["name"]);
        $linkN = trim($_POST["link"]);

            $query ="UPDATE cat SET name='$name', link='$linkN' WHERE id='$id'";
            $result_sql = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            header("Refresh:0");
    }
    mysqli_close($link);

    require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");
    require($_SERVER['DOCUMENT_ROOT']."/admin/template/left-bar.php");
?>   
                <main>
                    <div class="container-fluid">
                        <a href="/admin/tovar.php">Вернуться к категориям</a>
                        <h1 class="mt-4">Редактировать категорию</h1>
                                <div class="alert alert-success" id="successAddUser" role="alert" style="display: none;">
                                    </div>
                                <div class="row">
                                    <form action="" method="POST" id="editOfferForm" autocomplete="off" enctype="multipart/form-data">
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='name' aria-describedby='emailHelp' placeholder='Введите название' value='".$name1."'>";?>
                                      </div>
                                      <div class="form-group">
                                        <?php echo "<input type='text' class='form-control' name='link' placeholder='Введите ссылку' value='".$link1."'>";?>
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