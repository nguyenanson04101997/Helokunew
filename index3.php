<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
if (isset($_POST["height"]) && isset($_POST["weight"])) {
    $weight = (int) $_POST["weight"];
    $height = (int) $_POST["height"];
    $bmi = $weight/($height*$height);
    echo "Chỉ sô BMI là : " . $bmi;
}
?>
<div>
<h1>chỉ số bmi</h1>
<form name="bmi" action="" method="post">
    <div class="form-group">
        <label>Chiều cao</label>
        <input type="text" class="form-control" name="height" value="">

    </div>
    <div class="form-group">
        <label>cân nặng</label>
        <input type="text" class="form-control" name="weight">

    <button type="submit" name="calc" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>