
<!DOCTYPE HTML>

	<html >
		<head >
			<title>Página inicial</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
			<link rel="stylesheet" href="style/css/main.css" />
			<link rel="stylesheet" type="text/css" href="style/css/Page.css"/>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
			
			
		</head>
		<body id="body"  class="is-preload Page" >

			<!-- Wrapper -->
	<div id="wrapper">

	<!-- Main -->
	<div  id="main">
        <nav  class="navbar navbar-light  ">
            <form  class="container-fluid justify-content-start">
              <button class="btn btn-secondary me-2" type="button">Voltar</button>
             
            </form>
          </nav>
    
		<div   class="float-end">
			<div class="dropdown">
		<i style="margin-top: -20vh" class="bi bi-brightness-high btn btn-outline-warning" onclick="darkMode()" ></i>
		
	  <a   class="btn dropdown" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="true">
		
	
	  
	  </a>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
	<li><a class="dropdown-item" href="#">Perfil</a></li>
	<li><a class="dropdown-item" href="#">Alternar conta</a></li>
	<li><a class="dropdown-item" href="#">Sair</a></li>
	</ul>
	</div>
	</div>
	<div class="inner">
			<img id="foto" src="" alt="">

			<!-- Header -->
				<center>
					 <h1 > <strong class="logo" id="user"> SITE DE VENDAS  </strong> <br></h1>
					 </center>
					 <header id="header">
			
			<!--<a href="index.html" class="logo"><strong>Portfólio</strong> de Anderson Ferreira</a>-->
			<ul class="icons">
                <nav class="navbar navbar-light ">
                    <div class="container-fluid">
                        <div class="dropdown">
                            <i class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Filtrar
                            </i>
                        
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">todas</a></li>
                              <li><a class="dropdown-item" href="#">baratas</a></li>
                              <li><a class="dropdown-item" href="#">caras</a></li>
                            </ul>
                        
                          </div> 
                          
                    </div>
                  </nav>
                  
		</ul>
		</header>

	<!-- Banner -->
		<section id="banner">
			<div class="content">
				<header>
			<center>	<u>	<h1>Sessão de camisetas</h1> </center></u>
					
				</header>
				
            </div>
		
        </section>

	<!-- Section -->
	<main>
		<div class="container">
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
		<?php
		session_start();

		
		foreach($_SESSION['itens'] as $produto){
		echo "	
		  <div class='col mb-5'>
                        <div class='card h-100'>
                            <!-- Product image-->
                            <img class='card-img-top' src='". $produto['imagem'] . "' alt='...' />
                            <!-- Product details-->
                            <div class='card-body p-4'>
                                <div class='text-center'>
                                    <!-- Product name-->
                                    <h5 class='fw-bolder'>". $produto['modelo'] . "</h5>
                                    <!-- Product price-->

                                    <h5> ". $produto['quantidade'] . "</h5>
                                    <h5>". $produto['valor'] . " </h5>
                                </div>
                            </div>
                            <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                <div class='text-center'><a class='btn btn-secondary mt-auto' href='#'>View options</a></div>
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