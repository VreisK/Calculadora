<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Calculator</title>
</head>
<body>
    <div class="container">

        <h1>Calculadora</h1>

        <div id="calculator">

            <form action="" method="post">

                <div id="display">
                    <div id="results">Resultado
                        <?php
                        if(isset($_POST['acao'])):
                            $n1 = str_replace(',','.', $_POST['n1']);
                            $n2 = str_replace(',','.', $_POST['n2']);
                            $tipo = $_POST['tipo'];

                            if($tipo == '+'):
                                $calcular = $n1 + $n2;
                            elseif ($tipo == '-'):
                                $calcular = $n1 - $n2;
                            elseif ($tipo == '/'):
                                $calcular = $n1 / $n2;
                            else:
                                $calcular = $n1 * $n2;
                            
                            endif;
                                echo $n1 ." ". $tipo . " " .$n2 ." igual a $calcular";
                                $calcular = str_replace('.',',',$calcular);
                        endif;
                        ?>
                    </div>
                </div>

                <div id="keyboard">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="n1" class="form-control mb-3" placeholder ="Digite um número" required>
                        </div>

                        <div class="col-12">
                            <select name="tipo" class="form-select mb-3 bg-info" required>
                                <option selected>Selecione um operador</option>
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>

                            </select>
                        </div>
                            
                        <div class="col-12">
                            <input type="text" name="n2" class="form-control mb-3" placeholder="Digite um número" required>
                        </div>

                        <div class="col-12">
                            <button type="submite" class="btn btn-danger" name="acao">=</button>
                        </div>

                    </div>
                    
                </div>

            </form>
        </div>
    </div>
    <!-- script boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>