<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <base href="http://cabinet.codetogether.ru/cabinet/products">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Тест</title>
</head>

<body>

<div id="wrapper">
    <div id="page-wrapper">
        <!-- /.row -->
        <!-- /.row -->
        <div class="row">
            <!-- /.col-lg-8 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Загрузить CSV файл с товарами</h2>
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <label for="exampleInputFile">Загрузите CSV файл</label>
                    <input type="file" name="csv">
                    <button class="btn btn-default">Загрузить</button>
                </form>
            </div>
        </div>
        <div class="col-lg-12">
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Товары
                </div>


                <!-- /.panel-heading -->
                <div class="panel-body" data-ng-app="products" data-ng-controller="productsController">
                    <div class="row">
                        <div class="col-lg-12">
                            <div data-ng-view></div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Код</th>
                                        <th>Наименование</th>
                                        <th>Уровень 1</th>
                                        <th>Уровень 2</th>
                                        <th>Уровень 3</th>
                                        <th>Цена</th>
                                        <th>Цена СП</th>
                                        <th>Поля свойств</th>
                                        <th>Совместные покупки</th>
                                        <th>Единица измерения</th>
                                        <th>Картинка</th>
                                        <th>Выводить на главной</th>
                                        <th>Описание</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($pageData['products'] as $key => $value) { ?>
                                        <tr>
                                            <td><?php
                                                echo $value['id']; ?></td>
                                            <td><?php
                                                echo $value['code']; ?></td>
                                            <td><?php
                                                echo $value['name']; ?></td>
                                            <td><?php
                                                echo $value['level_1']; ?></td>
                                            <td><?php
                                                echo $value['level_2']; ?></td>
                                            <td><?php
                                                echo $value['level_3']; ?></td>
                                            <td><?php
                                                echo $value['price']; ?></td>
                                            <td><?php
                                                echo $value['price_sp']; ?></td>
                                            <td><?php
                                                echo $value['property_fields']; ?></td>
                                            <td><?php
                                                echo $value['joint_purchases']; ?></td>
                                            <td><?php
                                                echo $value['unit']; ?></td>
                                            <td><?php
                                                echo $value['image']; ?></td>
                                            <td><?php
                                                echo $value['output_on_main']; ?></td>
                                            <td><?php
                                                echo $value['description']; ?></td>
                                        </tr>
                                        <?php
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <!-- /.panel -->
        </div>
    </div>
    <!-- /#page-wrapper -->

</div>

</body>

</html>