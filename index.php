<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        *{font-family: 'Share Tech Mono', monospace;
}
h1{
    text-align: center;
    font-family: 'Share Tech Mono', monospace;
}
#calculator{
    background: #1c4670;
    text-align: center;
    width:450px ;
    display: block;
    border-radius: 10px;
    padding: 10px;
    margin: 30px auto;
}
#display{
    background: #ccc;
    text-align: center;
    border-radius: 10px;
    padding: 10px;
    margin: 15px;
    font-family:'Share Tech Mono', monospace;
}
#results{
    text-align: right;
    height: 100px;
    font-size: 24px;
    padding: 30px 10px;
}
#keyboard{
    margin: 15px;
}
    </style>
<div class="container">
    <h1>Calculadora</h1>
    <div id="calculator">
        <form action="" method="post">
            <div id= "display">
                <div id="results">
                    Resultado:
                    <!--Script php Resultado-->
                    <?php
                    if(isset($_POST['acao'])):
                        $n1 = str_replace(',','.', $_POST['n1']);
                        $n2 = str_replace(',','.', $_POST['n2']);
                        $tipo = $_POST['tipo'];

                            if($tipo == '+'):
                                $calcular = $n1 + $n2;
                            elseif($tipo == '-'):
                                $calcular = $n1 - $n2;
                            elseif($tipo == '*'):
                                $calcular = $n1 * $n2;
                            elseif($tipo == '/'):
                                $calcular = $n1 / $n2;
                            endif;
                            $calcular = str_replace(',','.', $calcular);
                            echo "<br>$n1 $tipo $n2 igual a: $calcular";
                        endif;
                        ?>
                    <!--php fim-->
                </div>
            </div> 
            <div id="keyboard">
                <div id="row">
                    <div id="col-12">
                        <input type="text" name="n1" class="form-control mb-3" placeholder="Digite um Número" required>
                    </div>
                    <div id="col-12">
                        <select name="tipo" class="form-control mb-3 bg-info" required>
                        <option selected=>Selecione um Operador</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                        </select> 
                    </div>
                    <div class="col-12">
                        <input type="text" name="n2" class="form-control mb-3" placeholder="Digite um Número" required>
                    </div>
                    <div class="col-12">
                    <button type="submit" class="btn btn-danger" name="acao">=</button>
                    </div>
                </div>
                    <!--Aqui entra o teclado-->
                </div>
            </form>

        </div>
    </div>
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    </html>