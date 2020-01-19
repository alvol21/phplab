<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>BOLMA | Лабораторная работа №6</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <scridockpt src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/main.css"></style>
</head>
<?php 
include '../Api/security.php';
include_once '../navbar.php';
?>
<div class="card-body">

<h4>Создание сотрудника</h4>
<form method="POST" action='/api/employee/add.php'>
  <div class="form-group">
    <label for="exampleFormControlInput1">ФИО сотрудника</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Ivanov Ivan Ivanych" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Должность</label>
    <select class="form-control" id="exampleFormControlSelect1" name="position" required>
      <option value="Loader">Loader</option>
      <option value="Designer">Designer</option>
      <option value="Accountant">Accountant</option>
      <option value="Marketer">Marketer</option>
      <option value="Manager">Manager</option>
    </select>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Добавить сотрудника" />
  </div>
</form>


<h4>Список сотрудников</h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">№</th>
      <th scope="col">ФИО</th>
      <th scope="col">Должность</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    require_once '../Api/database.php';
    $conn->set_charset("utf8");
    $sql = 'SELECT * FROM `Workers3`';
    $workers = array();
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
        ?>
          <tr>
            <th scope="row"><a href='./api/employee/delete.php?id=<?php echo "$row[Workers_number]" ?>'>❌</a></th>
            <td><?php echo $row['Workers_number'] ?></td>
            <td><?php echo $row['Wrk_name']?></td>
            <td><?php echo $row['Wrk_position']?></td>
          </tr>
        <?php }}?>
  </tbody>
</div>
</table>