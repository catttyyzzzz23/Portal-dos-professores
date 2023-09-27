<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="style_inserir.css">
    <title>Inserir dados</title>
</head>
<body>
<div class="wrapper">
     <div class="form">
         <h1 class="title" align="center">Inserir dados dos alunos</h1>

         <form class="myform" method="post" action="inserir.php">
             <div class="control-from">
                 <label>Primeiro Nome *</label>
                 <input type="text" name="nome">
             </div>

             <div class="control-from">
                 <label>Ultimo Nome *</label>
                 <input type="text" name="apelido" value="" required>
             </div>

             <div class="control-from">
                 <label> Ano e turma *</label>
                 <input type="text" name="turmas" value="" required>
             </div>

             <div class="control-from">
                 <label> Numero do aluno/a</label>
                 <input type="text" name="numero" value="" required>
             </div>

             <div class="full-width">
                 <label>Nome da escola</label>
                 <input type="text" name="escola" value="" required>
             </div>

             <div class="opcao">
             <label >Periodo</label>
             <select class="form-select" name ="periodo">
            <option value="1">1ºPeriodo</option>
            <option value="2">2ºPeriodo</option>
            <option value="3">3ºPeriodo</option>
            </select>
             </div>

             <div class="control-from">
                 <label>Nota do aluno/a </label>
                 <input type="text" name="nota" value="" required>
             </div>

             <div class="button">
                 <button name="registar">Enviar dados</button>
             </div>

         </form>
     </div>
 </div>
</body>
<?php
 extract($_POST);
 /*
    if(!$nome || !$apelido || !$ano || !$numero || !$escola || !$periodo || !$nota)
    {
        echo "Campo em falta. Volte atras e preencha-o";
        exit;
    }*/
    $ligax =mysqli_connect("localhost", "root");
    if(!$ligax)
    {
        echo "<p> Erro: Falha de ligação.";
        exit;
    }
    mysqli_select_db($ligax,"professores");
    $insere ="insert into alunos (nome, apelido,turmas,numero,escola,periodo,nota), values('$nome','$apelido','$turmas','$numero','$escola','$periodo','$nota')";
    $result =mysqli_query($ligax,$insere);
    if($result==1)
    echo "<p> Dados inseridos <br>";
    else
    echo"Dados não inseridos <br>";
?>
</html>