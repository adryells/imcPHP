<html>

<head>
    <meta charset="utf-8">
    <title>Site de estudo</title>
    <style>
        h1 {
            position: relative;
            top: 18px;
            color: lemonchiffon;
        }
        
        hr {
            width: 200px;
        }
        
        .formulario {
            text-align: center;
            background-color: green;
            width: 200px;
            height: 350px;
            position: relative;
            left: 590px;
            float: center;
            border-radius: 20px;
            border-color: red;
            border-style: groove;
        }
        
        #botao {
            border-radius: 20px;
            width: 50px;
        }
        
        .debaixo {
            position: relative;
            bottom: -10px;
            left: 0px;
        }
    </style>
</head>

<body>
    <div class="formulario">
        <h1>Usuarios</h1>
        <form action="" method="POST">
            <hr> Name:
            <input type="text" name="nome"><br><br> Peso:
            <input type="text" name="peso"><br><br> Altura:
            <input type="text" name="altura"><br><br>
            <input type="submit" name="calcular" value="calc" id="botao"><br>
            <hr class="debaixo">

        </form>
        <?php
                if(isset($_POST['calcular'])){$conexao = mysqli_connect("localhost:3308","root","","imc");
                $nome = mysqli_escape_string($conexao,$_POST['nome']);
                $alturas = mysqli_escape_string($conexao,$_POST['altura']);
                $pesos = mysqli_escape_string($conexao,$_POST['peso']);
                
                function imc($peso,$altura){
                     return (float)$peso/($altura * $altura);
                }
                $imc = imc($pesos, $alturas);
                echo 'Seu imc é<br>'.$imc;
                $sql = "SELECT * FROM usuarios";
                $solicitacao = mysqli_query($conexao, $sql);
        }

            ?>
    </div>
</body>

</html>