<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <?php include'import.php'; ?>
    <title>Hog Inácio</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <?php $msg = $_GET["msg"]; ?>
        <div class="alert alert-primary" role="alert">
          <?php echo $msg; ?>
        </div>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>