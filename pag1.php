<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Portal dos professores</title>
</head>
<body>
    <header>
    <h2 align="center"> Portal dos professores </h2>
    </header>
    
    <?php
    extract($_POST);
    if(isset($botao))
    {
        echo"<div class='login_php'>";
        echo "<h3 align='right'>Bem vindo $login</h1>";
        echo"</div>";
    }
    ?>
    <main class="main_php">
    <section class="vh-90 gradient-custom" >
			
			<div class="container py-3 h-100">
			  <div class="row d-flex justify-content-center align-items-center h-80">
				<div class="col-12 col-md-8 col-lg-6 col-xl-5">
				  <div class="card bg-dark text-white" style="border-radius: 1rem;">
					<div class="card-body p-5 text-center" >
					  <div class="mb-md-5 mt-md-4 pb-5">
            <a href ="inserir.php"><button type="button"><img src="https://cdn.icon-icons.com/icons2/37/PNG/512/adddatabase_a%C3%B1adir_4282.png" height ="48" width="48" /></button></a><br>Inserir dados<br>
            
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </section>
    </main>
</body>
</html>