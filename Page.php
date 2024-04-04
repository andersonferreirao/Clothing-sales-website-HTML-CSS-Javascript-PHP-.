
	<?php  
	session_start();









	?>
	<!DOCTYPE HTML>

	<html >
		<head >
			<title>Página inicial</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
			<link rel="stylesheet" href="./style/css/main.css" />
			<link rel="stylesheet" type="text/css" href="style/css/Page.css"/>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
			
			
<style>
ody {
            border: 5px solid black;
            position: relative;
            min-height: 100vh; /* Garante que a altura seja pelo menos a altura da janela de visualização */
        }

        #imagem {
            position: absolute;
            bottom: 0;
            right: 0;
            margin-bottom: 20px; /* Ajuste conforme necessário */
            margin-right: 20px; /* Ajuste conforme necessário */
            border-radius: 100%;
            height: 8vh;
            width: 8vh;
        }

        #usuario {
            /* Estilos para o texto, se necessário */
        }

</style>


		</head>
		<body id="body"  class="is-preload Page" >

			<!-- Wrapper -->
	<div id="wrapper">

	<!-- Main -->
	<div  id="main">
		    
		<div   class="float-end">
			<div class="dropdown">
		<i style="margin-top: 3vh" class="bi bi-brightness-high btn btn-outline-warning" onclick="darkMode()" ></i>
		
	  <a   class="btn dropdown" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="true">
		
	
	  
	  </a>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
	<li><a class="dropdown-item" href="#">Perfil</a></li>
	<li><a class="dropdown-item" href="#">Alternar conta</a></li>
	<li><a class="dropdown-item" href="#">Sair</a></li>
	<li> </li>	
</ul>
	</div>
	</div>
	<div class="inner mt-5">
			<img id="foto" src="" alt="">

			<!-- Header -->
				<center>
					 <h1 > <strong class="logo" id="user"><span style="color: purple">FW </span>VARIEDADES  </strong> <br></h1>
					 </center>
					 <header id="header">
					 
		
			<ul class="icons">
				
			
			

			
		 
		</ul>
				
		
		<nav class="navbar fixed-bottom navbar navbar-light">

	<a class="navbar-brand  p-3"  href="#"><h3 class="text-primary" id="usuario" hidden> </h3></a>
  <a class="navbar-brand end" href="#"><img class="file circle" id="imagem" src="" alt=""></a>
</nav>
<u>	<strong class="float-end text-secondary"><h4 >Seja bem vindo</h4></strong></u>
	</header>

	<!-- Banner -->
		<section id="banner">
			
			<div class="content">
				
				<header>
					<h1>Bem vindo a sua loja intermediária de vendas </h1>
					
				</header>
				<p>Organize e economize tempo comprando suas roupas.</p>
				<ul class="actions">
				<center>	<li><a href="#" class="button big">Conhecer a loja</a></li></center>
				</ul>
			</div>
		<span class="image object">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  			<div class="carousel-inner">
			<div class="carousel-item active">
      			<img src="images/pic10.jpeg" class="d-block w-100 image" alt="...">
			</div>
		<div class="carousel-item">
      			<img src="images/pic11.jpeg" class="d-block w-100 image" alt="...">
    		</div>
		<div class="carousel-item">
      			<img src="images/pic12.jpg" class="d-block w-100 image" alt="...">
    		</div>
			</div>
			</div>
		</span>
		</section>

	<!-- Section -->
	<main>
		<section>
			<header class="major">
				<h2>Organize suas compras</h2>
			</header>
			
			<div class="features">
				<article>
					
					<div  class="content">
					<center><h3>Camisetas</h3>
					Encontre as camisetas mais estilosas aqui. 		
					</center>
				</div>
				</article>
				

					 
					
				<article>
					<div  class="content">
					<center><h3>Tênis</h3>
					Todo mês é mês de comprar tênis, venha conhecer nossos modelos. 		
					</center>
				</div>
				</article>
				<article>
				
					<div  class="content">
					<center><h3>Espotivos</h3>
					Venha comprar seu itens para esporte. 		
					</center>
				</div>
				</article>
				<article>
					<div  class="content">
					<center><h3>Infantis</h3>
					Veja nosso nosso estoque infantil. 		
					</center>
				</div>
				</article>
			</div>
		</section>
	</main>
								<!-- Section -->
					<section>
						<header class="major">
							<h2>Itens</h2>
						</header>
						<div class="posts">
							<article>
								<a href="./Model/products.php?produto=camisetas" class="image"><img src="fotos/camiseta-logo.png" alt="Camisetas" /></a>
							<center>
								<h3 class="fw-bold">Camisetas</h3>
							</center>
							</article>
							<article>
								<a href="./Model/products.php?produto=tenis" class="image"><img src="fotos/tenis-logo.png" alt="Tênis"></a> 
							<center>
								<h3 class="fw-bold">Tênis</h3>
							</center>	
							</article>

							<article>
								<a href="./Model/products.php?produto=infantis" class="image"><img src="fotos/camiseta-puma_infantil.png" alt="Infantis" /></a>
							<center>
								<h3 class="fw-bold">Roupas infantis</h3>
							</center>
							</article>

							<article>
								<a href="./Model/products.php?produto=esportivos" class="image"><img src="fotos/roupas-time.png" alt="Infantis" /></a>
							<center>
								<h3 class="fw-bold">Acessórios esportivos</h3>
							</center>
								
							</article>
							
							
							<article>
							
							
						</div>
					</section>

		</div>
	</div>

	<!-- Sidebar -->	
	<div id="sidebar">
		<div   class="inner">

			
			<!-- Menu -->
				<nav id="menu">
					<header  class="major">
						<center><p id="nome" class="fs-2"> </p></center> 
						<h2>Menu</h2>
					</header>
					<ul id=list >
						<li><a href="" class="link-underline link-underline-opacity-0">Perfil</a></li>
						<li><a href="" class="link-underline link-underline-opacity-0">Alternar conta</a></li>
						<li><a href="" class="text-danger link-underline link-underline-opacity-0">Sair</a></li>
						<li><a href="" class="text-muted link-underline link-underline-opacity-0">Deletar conta</a></li>
						<li>
							
						</li>
								
							
							</nav>

								<!-- Section -->
				<section id="major">
					<header class="major">
						<h2>Nossos Parceiros</h2>
					</header>
					<div class="mini-posts">
						<article>
							<a href="" class="image"><img src="images/joia.png" alt="" /></a>
							<h5> <strong>Grupo jóia.</strong> </h5>
						</article>
						<article>
							<a href="#" class="image"><img src="images/word_tenis.jpg" alt="" /></a>
							<h5> <strong>Word Tênis.</strong> </h5>
						</article>
						<article>
							<a href="#" class="image"><img src="images/bia.png" alt="" /></a>
							<h5> <strong>BiaBelaVer mais.</strong> </h5>
						</article>
					</div>
					<ul class="actions">
						<li><a href="#" class="button">Ver mais</a></li>
					</ul>
				</section>
    
					<!-- Section -->
						<section>
							<header class="major">
								<h2>FW</h2>
							</header>
							<p>Site em produção.</p>
							<ul class="contact">
								<li class="icon solid fa-envelope"><a href="#">example@example.com</a></li>
								<li class="icon solid fa-phone">(17)xxxxx-xxxx</li>
								<li class="icon solid fa-home">1234 Barretos<br />
								SP</li>
							</ul>
						</section>

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