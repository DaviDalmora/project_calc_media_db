<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
        <meta charset="utf-8">
        <title>Calc Média</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <header>
            <nav>
                <a href="index.html" class="href_header"><<<-VOLTAR</a>
            </nav>

            <h3>PROJECT 01 - CALC MÉDIA</h3>
            <h4>HTML / CSS / JS / PYTHON</h4>
        </header>
        <br>

        <section class="container" id="container1"> 
            <br>
            <label for="valor1">Informe o primeiro valor</label>
            <br>
            <input type="number" id="valor1" placeholder="Insira aqui">
            <br><br>

            <label for="valor2">Informe o segundo valor</label>
            <br>
            <input type="number" id="valor2" placeholder="Insira aqui">
            <br><br>

            <label for="valor3">Informe o terceiro valor</label>
            <br>
            <input type="number" id="valor3" placeholder="Insira aqui">
            <br><br>

            <button onclick="calc()">CALCULAR</button>

            <button onclick="clear_inputs()">LIMPAR</button>           
            <br><br>

            <form method="POST">
                <p><b>A média dos 3 valores acima é: <u><input type="number" id="result" name="nota" readonly></u></b></p>
                <br>
                <input type="text" placeholder="Insira seu nome aqui" name="nome">
                <br><br>
                <button type="submit">CADASTRAR</button>
            <form>

            <script src="js/javascript_calc_media_.js"></script>

            <?php 
                /* error_reporting(E_ERROR | E_PARSE); */
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = $_POST["nome"];
                $nota = $_POST["nota"];

                $servername = "localhost";
                $username = "root";
                $password = "0123";
                $database = "MEDIA";

                $conn = new mysqli($servername, $username, $password, $database);

                if ($conn->connect_error) {
                    die("Falha na conexão: " . $conn->connect_error);
                }

                echo "<br><br> Conexão bem-sucedida <br>";

                $NOME = $nome;
                $NOTA = $nota;

                $sql = "INSERT INTO NOTAS VALUES (NULL, '$NOME', $NOTA)";

                if ($conn->query($sql) === true) {
                    echo "Dados inseridos com sucesso <br>";
                } else {
                    echo "Erro ao inserir dados: " . $conn->error;
                }

                $conn->close();
                }
            ?>

            <br><br>

            <a href="calc_media2.html">Deseja calcular a média de mais valores?</a>
            <br><br><br>
        </section>

        <section class="container"> 
        <br>
        <h2>Informações no Banco de Dados</h2>
        <br>

        <p>
        <?php
            //iniciando a conexão com o banco de dados 
            $cx = mysqli_connect("localhost", "root", "0123");

            //selecionando o banco de dados 
            $db = mysqli_select_db($cx, "MEDIA");

            //criando a query de consulta à tabela criada 
            $sql = mysqli_query($cx, "SELECT * FROM NOTAS") or die( 
            mysqli_error($cx) //caso haja um erro na consulta 
            );

            while($aux = mysqli_fetch_assoc($sql)) { 
            echo "-----------------------------------------------------------------------------<br />"; 
            echo "Nome: " . $aux["NOME"] . "<br />"; 
            echo "Média: " . $aux["NOTA"] . "<br />"; 
            }
        ?>
        </p>

        <br>
        </section>

        <br><br>

        <footer>
            <h3>PROJECT 01 - CALC MÉDIA</h3>
            <h4>HTML / CSS / JS / PYTHON</h4>
            <br>
            <p class="footer_config">Contatos:</p>
            <p class="footer_config">Email: dalmorajoaodavi@gmail.com</p>
            <p class="footer_config">Whatsapp: (49) 99836-0507</p>
        </footer>
    </body>
</html>