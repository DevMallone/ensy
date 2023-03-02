<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ENSY - HOME</title>

    <!-- LINK CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- FONTAWESSOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>

<?php

if(!isset($_SESSION['id'])){

    die("
    <div class=\"box_error\">
    <h2>Lá ele</h2>
    <p>Você não pode acessar esta página porque não está logado. </p>
    <a href=\"index.php\">Entrar</a>
    </div>
    ");
}

?>

    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>