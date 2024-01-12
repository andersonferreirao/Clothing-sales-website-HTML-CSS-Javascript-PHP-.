
	<?php  
/*	session_start();

	function Page_php($param){
		
		if($param != true)

			header("Location: login.html");
	} 
	Page_php($_SESSION['password']);
*/	
	









	?>
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
		
		<div   class="float-end">
			<div class="dropdown">
		<i style="margin-top: 3vh" class="bi bi-brightness-high btn btn-outline-warning" onclick="darkMode()" ></i>
		
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
			 <u>	<strong style="margin-top:10%" ><h4 style='color:#d56af5'>Seja bem vindo</h4></strong></u> 
					 <h1 > <strong class="logo" id="user"> SITE DE VENDAS  </strong> <br></h1>
					 </center>
					 <header id="header">
			
			<!--<a href="index.html" class="logo"><strong>Portfólio</strong> de Anderson Ferreira</a>-->
			<ul class="icons">
			<li><p class="label">Dark Mode</p></li>
			
		</ul>
		</header>

	<!-- Banner -->
		<section id="banner">
			<div class="content">
				<header>
					<h1>Bem vindo a sua loja intermediária de vendas</h1>
					
				</header>
				<p>Organize e economize tempo comprando suas roupas.</p>
				<ul class="actions">
					<li><a href="#" class="button big">Clique aqui para conhecer a loja</a></li>
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
							<h2>suas últimas atividades</h2>
						</header>
						<div class="posts">
							<article>
								<a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwiw-ty8vsKDAxWbQUgAHXBXBFYYABAAGgJjZQ&ae=2&gclid=CjwKCAiAqNSsBhAvEiwAn_tmxa9nLyPlk73nEPqcs0d6_jMUWdS4S5kdVIBGQ88mD7Oci_i_MJ5GKhoC3x4QAvD_BwE&ohost=www.google.com&cid=CAESVeD24RvOTzBUTAFratDrq9grW3O7JEtYqfI0KzKJq_Qbgan7jmFdPdvBdyGIxsbgt2Fi2lakm3iQi5hZKS9URWkvfh7jIxJdP7nyc-j5Lr0T2S6sRns&sig=AOD64_2ftjHoDhPx91PynhMtQfe0i0Y-ag&q&adurl&ved=2ahUKEwit7dO8vsKDAxWmppUCHa6eBUoQ0Qx6BAgFEAE" class="image"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBTky2OSsE6xAEpC9gMzp7O78_HxjdCR5wvw&usqp=CAU" alt="" /></a>
								<h3>Nike</h3>
								<p>.....</p>
								<ul class="actions">
									<li><a href="#" class="button">ver mais</a></li>
								</ul>
							</article>
							<article>
								<a href="#" class="image"><img src="data:image/png;base64,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" alt="" /></a>
								<h3>Adidas</h3>
								<p>.......</p>
								<ul class="actions">
									<li><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjJ5L2Vv8KDAxVWFq0GHQcdBN8YABAAGgJwdg&gclid=CjwKCAiAqNSsBhAvEiwAn_tmxVbny74i5XtQ34__9PXcTfFZuMFBUt6OxeGJn4-guZRdMVBAHDlIsxoCJgwQAvD_BwE&ohost=www.google.com&cid=CAESVeD26b9um8VivjeckNUi_EiqkwJ7oiO8sSyHJg6pi5fZ14vYb5OqV5F-efLMDJFteiY2wWSQUAQ3dbi9gpThAz24br5nK_TtZAeg8TTLLkoXnNp9MPU&sig=AOD64_1lwi4OY-V7hEPj50_YGzyMj1XtwA&q&adurl&ved=2ahUKEwii8bCVv8KDAxW5rZUCHV-zBGsQ0Qx6BAgFEAE" class="button">Ver mais</a></li>
								</ul>
							</article>

							<article>
								<a href="#" class="image"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASUAAACsCAMAAAAKcUrhAAAAeFBMVEUAAAD///+QkJC2trbe3t58fHzy8vLJycl3d3fR0dEEBAQ7Ozvl5eVra2uLi4v4+PiDg4OYmJjBwcHs7Oynp6dXV1etra0yMjIeHh5zc3MXFxdERETT09NgYGCfn58rKytISEhPT09mZmYRERFaWlolJSUvLy83NzcJAHRLAAAEt0lEQVR4nO3c55qiMBgF4AQQGwoK1sU67f7vcAmIBAmII5LP4bx/9hk0GM5CJAUZAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAeMRIdwXIOzie586e28dp0Uxd6BpyYfv7HYz2LufL5ipEURCHxB1zevzdDs5uvINGK0XNnGfs5fjxHUwvhZuvGh1Lntf/9+AOjEvB4UuqR8OCF8w/HtmBlxY7vqaCFGzdYkrc3dTfwe5Sxvl8XSW1myhCEqdT3fLrJGX/gVzfkepcEoddsxUP4zbfe20d9RuoU+K8V7u0+eo6UjAsianOXaIVve/Pn0iJ8WK1MBUxWet7JdfRu3ZtVJEKSxGTe69v5tW8MP+MUHnV3ekCW91ok6LuxdDnrm+VNU79qrKf3G2rmno5ZV9xKf+nvLDVkettfy8kXtHy9LjfZl31KbvQcsraHpcbrVZWGzFqMt/078SkviWIEu7IMPC3y90DY197+xrJRHHr5J6LRaOL1Wq/wpoMvpN/F4EVdels84uxmeJ0Cm7LiW7yoO3KkrC+DH0HqqtulXvrKdrkaKgiJcqvPlMaxNyIDY8Oav456pECJ9isRmx7MuK7rG7cK1Vaqfp1OVPdVSTBsytD6mbLrdArP5/szrdJkvFMPVTQlZvu+n4m0705v0nL1l0rorZGrp3CF1wZeaq863eUFeTJcjTfpfwspb3uutAlzQR3ZzzgcdLJpLsqhEnd4G/ddaFrlKWkGJgjZjMzbnnJHOs5fWUWfQkdr2+LB44WXqGUrHcZn/03LbyUJZLdDdDvyCnnh2xxDWTD/Ua2Si05pLu9fB5P5d6ujYuF6Sf/XDfRHxNQH7BYdNSXjyKXkqcqkifW/G3VL10X6lw/oDDGS446JTE7Vp6Sar2EYgc79UuT9KMP6Rb6c99ZSpaX5SKmo+ukZPekxNwgu3xFH1a6JfKlnlvWb0uvyHdKKfrDlv+ok9JOvu85MlaSUl/em9S7td8uJXH6ZOcCq5fSj9zIyzvIpzQTc9yKlC7voL9w+bmUxnJKo6qUshZfHilJ9uQ+8URGO/SmdClA/pLTnNKHW9xGkOaU2CqJifgib90psbWf7pYw7SldOnSV6wm1I5BSPElOe1klhZQO6s2EUEjpKDaTHtelkNIp3n5s98AfQiGl+Fwi/XwFhZQO6UeSRSGleFwB7dK9lMR8SljcTAeJlEQ50ssFslE4T36ImzWakrOSlg0qb4xM2it0pHFv6bnbuiO6NVPKUd8+rkmvqVDPDoimtN2UaFOnJB75Q0oZZUrxbwA0mZIjfcx7pzSbJrzP5LmjBlMK5fnut06pMHTR5p0AdUipjjop9eUsmkpptwyO7R7qE+qkxENpjXZDKYXzzSCs/UsxupWnJK82lkwaSWnomYE5MumvNkmUp6R6AJDH646fT2lssejG1WLv8uR3eUonZUji8HMpZRdjZUrT6x8ipU3AnPMyYMNf/HacDtfrqjiJYSge2ApFdyu3miJrvthNSufrK4Z8LomZt92cOTMz+j86tHy478VnDlvuTqSH3vTbiR82M9yK3/SAyCl0/P6X7loAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQ8x/pkzuCzXaE8AAAAABJRU5ErkJggg==" alt="" /></a>
								<h3>Puma</h3>
								<p>......</p>
								<ul class="actions">
									<li><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwj0rKqvv8KDAxUUQkgAHUAtA4wYABAAGgJjZQ&ae=2&gclid=CjwKCAiAqNSsBhAvEiwAn_tmxSKcc_-W3QO5sYr_JqJW-TJfochEK8hLLL4bEAwZ4XS9x4nEjQZ3ZBoCmY0QAvD_BwE&ohost=www.google.com&cid=CAESVeD2l8_sW0GH78bQB4f1GDxGqkGBma3n9KEo6bMniws7aqD07iJ-knk8L7r9V3mVO6SS8PIN5vVxEQcS-TdyxdSbe53sjKQtblt-7tlFtaEmEPXwY2M&sig=AOD64_3z4x2NfPWZNvcvrCRmhXfW5oK3Tw&q&adurl&ved=2ahUKEwjN2aGvv8KDAxUps5UCHc-IBmgQ0Qx6BAgOEAE" class="button">Ver mais</a></li>
								</ul>
							</article>
							<article>
							<ul class="icons">
			<li> <h1><i class="bi bi-pc-display-horizontal"></h1></i></li>
			<li> <h1><i class="bi bi-server"></h1></i></li>
			<li> <h1><i class="bi bi-download"></h1></i></li>
							</article>
							
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
						<h2>Menu</h2>
					</header>
					<ul id=list >
						<li><a href="index.html">Home</a></li>
						<li><a href="./Model/Products.php?produto=tenis">Tênis</a></li>
						<li><a href="./Model/Products.php?produto=camisetas">Camisetas</a></li>
						<li>
							<span class="opener">Variedades</span>
							<ul>
								<li><a href="../Model/Products.php?produto=esportivos">Esportivos</a></li>
								
							</ul>
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
							<p>site em produção.</p>
							<ul class="contact">
								<li class="icon solid fa-envelope"><a href="#">Barretos - sp</a></li>
								<li class="icon solid fa-phone">(17)1798197-9774</li>
								<li class="icon solid fa-home">1234 Somewhere Road #8254<br />
								Nashville, TN 00000-0000</li>
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