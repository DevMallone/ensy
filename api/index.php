<?php
    include('conexao.php');

    if(isset($_POST['email']) || isset($_POST['senha'])){

        if(strlen($_POST['email']) == 0){
            echo "<span class=\"alert incorrect_email\">Preencha seu e-mail</span>";
        }else if(strlen($_POST['senha']) == 0){
            echo "<span class=\"alert incorrect_senha\">Preencha sua senha</span>";
        }else{
            
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1){

                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome']; 

                header("Location: home.php");

            }else{

                echo "<span class=\"alert incorrect_all\">Falha ao entrar! E-mail ou senha incorretos</span>";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ENSY - LOGIN</title>

    <!-- LINK CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <!-- FONTAWESSOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>

    <!-- FORMULÁRIO DE LOGIN -->

    <div class="box-login">
        <div class="login">

            <section>
                <img src="assets/svg/loggin.svg" alt="">
            </section>
    
            <form method="POST" action="">
                <div>
                    <h1>ENSY23</h1>
                    <p>Comece seus estudos para o enem de 2023 agora mesmo.</p>
                    
                    <h3>Login</h3>
                    
                    <input type="text" name="email" id="email" placeholder="Nome">
                    <input type="password" name="senha" id="senha" placeholder="Senha">
        
                    <button type="submit">Acessar</button>
                </div>

            </form>
            
        </div>
    </div>
    
    <script type="text/JavaScript" src="..//assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>

    <!-- MUDAR TEMA -->
    <script>     
        var darkMode = false;

        // default to system setting
        if (window.matchMedia('(prefers-color-scheme: light)').matches) {
            darkMode = true;
        }

        // preference from localStorage should overwrite
        if (localStorage.getItem('theme') === 'dark') {
            darkMode = true;
        } else if (localStorage.getItem('theme') === 'light') {
            darkMode = false;
        }

        if (darkMode) {
            document.body.classList.toggle('dark');
        }

        document.addEventListener('DOMContentLoaded', () => {

            document.getElementById('theme-toggle').addEventListener('click', () => {
                document.body.classList.toggle('dark');
                localStorage.setItem('theme', document.body.classList.contains('dark') ? 'dark' : 'light');
            });

        });

    </script>

</body>
</html>