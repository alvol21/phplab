<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AppleShop.RU</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <scridockpt src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/main.css"></style>
    <script src="../assets/js/edit.js"></script>
</head>
<?php 
include '../Api/security.php';
include_once '../navbar.php';
?>
<div class="card-body">
  <h4>Управление товарами</h4>
  <div id="exTab1">	
    <ul  class="nav nav-pills nav-fill">
          <li class="nav-item" >
            <a class="nav-link active" href="#1a" data-toggle="tab">Товары</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#2a" data-toggle="tab">Материалы</a>
          </li>
    </ul>
    <div class="card">
        <div class="tab-content clearfix card-body">
          <div class="tab-pane active" id="1a">
        <h4>Новый товар</h4>
        <form method="POST" action='/api/goods/add.php'>
          <div class="form-group">
            <label for="exampleFormControlInput1">Артикул товара</label>
            <input type="number" name="id" class="form-control" id="exampleFormControlInput1" placeholder="1000" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Наименование товара</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="VOLMA-LUXE" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Описание товара</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Добавить товар" />
          </div>
        </form>
        <hr>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Артикул</th>
                <th scope="col">Наименование</th>
                <th scope="col">Описание</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              require_once '../Api/database.php';
              $conn->set_charset("utf8");
              $sql = 'SELECT * FROM `Product3`';
              $res = $conn->query($sql);
              if ($res->num_rows > 0) {
                  while ($row = $res->fetch_assoc()) {
                  ?>
                    <tr>
                      <th scope="row"><a href='./api/goods/delete.php?id=<?php echo "$row[article_number]" ?>'>❌</a><a onclick='edit("<?php echo "$row[article_number]" ?>", "<?php echo "$row[name1]" ?>", "<?php echo "$row[short_characteristic_of_product]" ?>")'>✏</a></th>
                      <td><?php echo $row['article_number'] ?></td>
                      <td><?php echo $row['name1']?></td>
                      <td><?php echo $row['short_characteristic_of_product']?></td>
                    </tr>
                  <?php }}?>
            </tbody>
        </table>
          </div>
          <div class="tab-pane" id="2a">
          <h4>Новый материал</h4>
          <form method="POST" action='/api/material/add.php'>
          <div class="form-group">
              <label for="exampleFormControlInput1">Артикул материала</label>
              <input type="number" name="id" class="form-control" id="exampleFormControlInput1" placeholder="10000" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Наименование материала</label>
              <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Gyps" required>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Добавить материал" />
            </div>
          </form>
        <hr>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Артикул</th>
                <th scope="col">Наименование</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              require_once '../Api/database.php';
              $conn->set_charset("utf8");
              $sql = 'SELECT * FROM `Material3`';
              $workers = array();
              $res = $conn->query($sql);
              if ($res->num_rows > 0) {
                  while ($row = $res->fetch_assoc()) {
                  ?>
                    <tr>
                      <th scope="row"><a href='./api/employee/delete.php?id=<?php echo "$row[article_number_materials]" ?>'>❌</a></th>
                      <td><?php echo $row['article_number_materials'] ?></td>
                      <td><?php echo $row['name']?></td>
                    </tr>
                  <?php }}?>
            </tbody>
        </table>
          </div>
        </div>
      </div>
  </div>

</div>
