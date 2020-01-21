<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>BOLMA | Лабораторная работа №6</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <scridockpt src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<form method="POST" action='/api/goods/update.php'>
          <div class="form-group">
            <input type="number" name="id" class="form-control" id="exampleFormControlInput1" value=<?php echo "$_GET[id]" ?> hidden>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Наименование товара</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="VOLMA-LUXE" value=<?php echo "$_GET[name]" ?> required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Описание товара</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"><?php echo "$_GET[text]" ?></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Обновить товар" />
          </div>
</form>