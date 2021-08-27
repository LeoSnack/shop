<?php
require($_SERVER['DOCUMENT_ROOT']."/admin/template/header.php");
require($_SERVER['DOCUMENT_ROOT']."/admin/template/left-bar.php");
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");

$query = "SELECT * FROM cat";
$res = mysqli_query($link, $query);
?>   
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Категории</h1>
                        <h3 class="mt-4">Добавить категорию</h3>
                                <div class="alert alert-success" id="successAddUser" role="alert" style="display: none;">
                                    </div>
                                <div class="row">
                                    <form action="" method="POST" id="catForm">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Название">
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="link" aria-describedby="emailHelp" placeholder="Ссылку на картинку">
                                      </div>
                                      <button type="submit" class="btn btn-primary" id="catButton">Добавить</button>
                                    </form>
                                </div>
                            </br>
                        <table class="table table-bordered" id="myOffer"cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Название</th>
                                            <th>Картинка</th>
                                            <th>Редактировать</th>
                                            <th>Удалить</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while($row=mysqli_fetch_array($res)){
                                            echo "<tr>
                                                    <td>".$row['name']."</td>
                                                    <td>".$row['link']."</td>
                                                    <td><a href='catEdit.php?id=".$row['id']."'>Редактировать</a></td>
                                                    <td><a href='catDel.php?id=".$row['id']."'>Удалить</a></td>
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