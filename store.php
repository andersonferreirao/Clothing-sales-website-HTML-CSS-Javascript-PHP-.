<?php
session_start();

?>
<!DOCTYPE HTML>

	<html>
		<head>
			<title>Página inicial</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			<link rel="stylesheet" href="./css/struct.css" />
			<link rel="stylesheet" href="style/css/main.css" />
			<link rel="stylesheet" type="text/css" href="style/css/Page.css"/>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		</head>
			
	<style>
	.nav-custom{
	height: 20px;
	}
	.center-custom{
		margin-top: 20vh;

	}
	#navbar-letter{
		color: white;

	}
	#navbar{
		border-bottom: 2px solid white;	
	}

	ul {
      list-style: none;
   }
	body {
    border: 10px solid black; /* 10 pixels de largura, cor preta (substitua pela cor desejada) */
    margin: 0; /* Para garantir que a borda se estenda até a borda da janela do navegador */
    padding: 0; /* Para garantir que não haja preenchimento interno dentro da borda */
}

		
#title-products{
	margin-top: 100vh;

}		


</style>


<?php

require_once("./Controller/Select.php");
include("./Controller/Connection.php");

$item = $_GET['estoque'];
$url = $_GET['filtro'];



if($url == 1){
$dados = $_SESSION['itens'];
$selection = "Todas";
$secundary = "<li><a class='dropdown-item' href='store.php?estoque=".$item."&filtro=2'>Abaixo de R$100,00</a></li>
			  <li><a class='dropdown-item' href='store.php?estoque=".$item."&filtro=3'>Acima de R$100,00</a></li>";

}

if($url == 2){
$filtragem = new Select();
$selection = "Abaixo de 100";
$secundary = "<li><a class='dropdown-item' href='store.php?estoque=".$item."&filtro=3'>Acima de R$100,00</a></li>
			   <li><a class='dropdown-item' href='store.php?estoque=".$item."&filtro=1'>Todas</a></li>";

$dados = $filtragem->Filtro($item,$conexao,2);

}
if($url == 3){
	$filtragem = new Select();
	$selection = "Acima de 100";
	$secundary = "<li><a class='dropdown-item' href='store.php?estoque=".$item."&filtro=2'>Abaixo de R$100,00</a></li>
				  <li><a class='dropdown-item' href='store.php?estoque=".$item."&filtro=1'>Todas</a></li>";

	
	$dados = $filtragem->Filtro($item,$conexao,3);
	}



	


	

?>
			
			
		<body id="body"  class="is-preload Page" >

			<!-- Wrapper -->
	<div >
<nav id="navbar" class="navbar fixed-top navbar-light bg-dark ">
  <div class="container-fluid ">
	
    
 	 <a  data-bs-toggle="modal" data-bs-target="#exampleModal" id="navbar-letter" class="navbar-brand btn"><span>F.W</span>  <span class="btn btn-dark text-light" > Opções</span> </a>
    <form class="d-flex nav-custom">
	<span style="padding: 3px" ><i class="bi bi-brightness-high btn btn-outline-warning" onclick="darkMode()"></i></span>

	<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
	<button class="btn btn-outline-success" type="submit">Buscar</button>
  </form>
</div>
</nav>
    
	
    
</div>			
	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Anderson Ferreira de Oliveira</h4>
		
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		
		  <u><h5>Dados:</h5></u>
			<p>avenida sétima</p>
			
		</div>
      <div class="modal-footer">
	  <h5>o que deseja fazer ?</h5>
	  <ul>
	<li><a href="#" class="link-info">Alternar conta</a></li>
	<li><a href="#" class="link-info">Alterar dados</a></li>
	<li><a href="#" class="link-info">Voltar a página inicial</a></li>
	<li><a href="#" class="link-info">Sair</a></li>


		</ul>   
	</div>
    </div>
  </div>
  <center>
	  <h1 >  SITE DE VENDAS   <br></h1>
	  <button class="btn btn-dark">Adicionar ao carrinho</button>
  </center>
</div>

	
</div>
</div>

	
	<!-- Header -->
	<header id="header">
		
			    <nav class="navbar navbar-light ">
                    <div class="container" >
                        <div class="dropdown ">
                            <i class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $selection;  ?>
                            </i>
                        
							<ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
							<?php echo $secundary; ?>
                            </ul>
                        
                          </div> 
                          
                    </div>
                  </nav>
                  
		</header>

	<!-- Banner -->
		<section id="banner">
			<div class="content">
				<header>
			<center>	
					<h1 id="title-products" class="display-3 bg bg-warning border border-danger text-dark w-100">
				 <?php if ($item === "tenis") {
			echo "Tênis";
					} elseif ($item === "camisetas") {
			echo"Camisetas";
					} elseif ($item === "infantis") {
			echo"Infantis";
					} elseif ($item === "esportivos") {
			echo"Esportivos";
}
?>
				
				</h1> 
			</center>
					
				</header>
				
            </div>
		
        </section>

	<!-- Section -->
	<main>
		<div class="container ">
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
		<?php
		

		
		foreach($dados as $produto){
		echo "	
		<script>". $produto['imagem'] . "</script>
		  <div class='col mb-5'>
                        <div class='card h-100 w-100'>
                            <!-- Product image-->
                            <img class='card-img-top border border-dark ' src='". $produto['imagem'] . "' alt='...' />
                            <!-- Product details-->
                            <div class='card-body p-4 w-100'>
                                <div class='text-center'>
                                    <!-- Product name-->
                                    <h5 class='fw-bolder border '>". $produto['modelo'] . "</h5>
                                    <!-- Product price-->

                                    <h5 class'font-weight-bold'>Estoque: <span id='color-cards'> ". $produto['quantidade'] . "</span> itens </h5>
                                    <h5 class'font-weight-bold' id='buy'>R$ ". $produto['valor'] . " reais </h5>
                                </div>
                            </div>
                            <div class='card-footer p-4 pt-0 border-top-0 bg-transparent w-100'>
                                <div class='text-center'><a class='btn btn-secondary mt-auto' href='#'>Ver mais</a></div>
                            </div>
                        </div>
                    </div>";
        
		  }      	
		?>
		</div>
        </div>
    </section>
</div>

            
       
       
        

			
	</main>
								<!-- Section -->
					
                                
					<!-- Footer -->
						<footer id="footer">
						<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
    <img src="" alt="">  
	<small class="d-block mb-3 text-body-secondary">© since 2024</small>
    </div>
    <div class="col-6 col-md">
      <h5></h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="#">Business</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Education</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Government</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Gaming</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary text-decoration-none" href="#">Team</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
        <li><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer>
						</footer>

				</div>
			</div>
			
				</div>

			<!-- Scripts -->
				<script src="./Js/Api.js" ></script>
				<script src="./Js/script.js" ></script>
				<script src="style/js/jquery.min.js"></script>
				<script src="style/js/browser.min.js"></script>
				<script src="style/js/breakpoints.min.js"></script>
				<script src="style/js/util.js"></script>
				<script src="style/js/main.js"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
				
                
		</body>
	</html>