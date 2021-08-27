<?php
require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");
require($_SERVER['DOCUMENT_ROOT']."/admin/template/left-bar.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");

$query = "SELECT * FROM tovar";
$res = mysqli_query($link, $query);
?>   
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Товары</h1>
                        <h3 class="mt-4">Добавить товар</h3>
                                <div class="alert alert-success" id="successAddUser" role="alert" style="display: none;">
                                    </div>
                                <div class="row">
                                    <form action="" method="POST" id="addOfferForm">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="NameT" aria-describedby="emailHelp" placeholder="Название">
                                      </div>

                                      <div class="form-group">
                                        <input type="text" class="form-control" name="CatT" aria-describedby="emailHelp" placeholder="Категория">
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="LinkT" aria-describedby="emailHelp" placeholder="Ссылка на картинку">
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="PriceT" aria-describedby="emailHelp" placeholder="Цена">
                                      </div>
                                      <button type="submit" class="btn btn-primary" id="buttonAddOffer">Добавить</button>
                                    </form>
                                </div>
                            </br>
                        <table class="table table-bordered" id="myOffer"cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Название</th>
                                            <th>Категория</th>
                                            <th>Картинка</th>
                                            <th>Цена</th>
                                            <th>Редактировать</th>
                                            <th>Удалить</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while($row=mysqli_fetch_array($res)){
                                            echo "<tr>
                                                    <td>".$row['name']."</td>
                                                    <td>".$row['cat']."</td>
                                                    <td>".$row['link']."</td>
                                                    <td>".$row['price']."</td>
                                                    <td><a href='offerEdit.php?id=".$row['id']."'>Редактировать</a></td>
                                                    <td><a href='offerDel.php?id=".$row['id']."'>Удалить</a></td>
                                                </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                    </div>
                </main>
<?php
require($_SERVER['DOCUMENT_ROOT']."/admin/template/footer.php");
?> 