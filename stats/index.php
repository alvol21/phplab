<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>BOLMA | Лабораторная работа №6</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <scridockpt src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/main.css"></style>
    <link rel="stylesheet" type="text/css" href="../assets/c3-0.4.21/c3.css">
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script src="../assets/js/stats.js" charset="utf-8"></script>
    <script src="../assets/c3-0.4.21/c3.js"></script>
    </head>
<?php 
include '../Api/security.php';
include_once '../navbar.php';
?>
<div class="row statsCards text-center mt-4">
        <div class="col-sm-3">
            <div class="card rounded">
                <div class="card-body">
                    <h5 class="card-title">Количество продаж</h5>
                    <p class="card-text"><span id="amount" class="badge badge-pill badge-primary" style="font-size: 22">3</span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Общая сумма</h5>
                    <p class="card-text"><span id="sum" class="badge badge-pill badge-primary" style="font-size: 22">3</span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Количество позиций</h5>
                    <p class="card-text"><span id="articles" class="badge badge-pill badge-primary" style="font-size: 22">3</span></p>
                </div>
            </div>
        </div>
</div>

<div class="card-body">
    <div class="menu1">
        <div id="1">
          <h3>График продаж</h3>
            <div id="chart1">
            </div></div>
    </div>
    <button class="btn btn-success" onclick="exportCsv()">Экспортировать данные в Excel</button>
    <br><br>
    <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">№</th>
                <th scope="col">Cумма</th>
                <th scope="col">Работник</th>
                <th scope="col">Артикул</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              require_once '../Api/database.php';
              $conn->set_charset("utf8");
              $sql = 'SELECT * FROM sale LEFT JOIN Workers3 ON Workers3.Workers_number = sale.Workers_number';
              $workers = array();
              $res = $conn->query($sql);
              if ($res->num_rows > 0) {
                  while ($row = $res->fetch_assoc()) {
                  ?>
                    <tr>
                      <td><?php echo $row['num_sale'] ?></td>
                      <td><?php echo $row['total']?></td>
                      <td><?php echo $row['Wrk_name']?></td>
                      <td><?php echo $row['article_number']?></td>
                    </tr>
                  <?php }}?>
            </tbody>
        </table>
</div>