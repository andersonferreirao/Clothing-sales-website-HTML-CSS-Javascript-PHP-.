<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="css/struct.css" rel="stylesheet">
  <style>
    #main {
      color: white;
    }
    #form {
      color: black;
    }
   
    
  </style>
</head>

<body class="d-flex flex-column h-100">
  <nav class="navbar navbar-light bg-dark">
    
    <div class="container">
      
      <div class="dropdown">
        
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          <h5 class="fs-2 float-start"><span class="fs-2" style="color: blueviolet;">Fw </span>Variedades</h5>
        </button>
        <ul class="dropdown-menu w-100 mt-2 bg-danger" aria-labelledby="dropdownMenuButton">
          <li>
            <!-- Button trigger modal -->
            
            <center>
              <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Administrador
              </button>
            </center>
          </li>
        </ul>
      </div>
    </div>
     
    

  </nav>
  
  



  <main id="main" class="flex-grow-1 d-flex align-items-center py-4 bg-dark">
    
  <div class="container">
      <form novalidate class="form-container needs-validation w-100 bg bg-dark.bg-gradient mb-5" id="form" action="./Model/authentication.php" method="POST">
        <center><h1 class="h3 mb-3 fw-normal">Login</h1></center>
        <div class="form-floating mb-1">
          <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Insira seu email">
          <label for="floatingInput">E-mail</label>
        </div>
        <div class="form-floating">
          <input name="senha" type="password" class="form-control" id="floatingInput" placeholder="Insira sua senha">
          <label for="floatingInput">Senha</label>
        </div>
        <div class="form-check text-start my-3">
          <input name="remember" type="checkbox" id="flexCheckDefault" class="form-check-input">
          <label class="form-check-label text-light" for="flexCheckDefault">Lembre minha senha</label>
        </div>
        <button type="submit" class="btn btn-primary w-100 py-2">Entrar</button>
      </form>
    </div>
  </main>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered border-dark">
      <div class="modal-content bg-light ">
        <div class="modal-header bg-danger">
          <h5 class="modal-title fs-3 text-dark" id="exampleModalLabel">Área do administrador</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form novalidate class="form-container needs-validation w-100 bg bg-dark.bg-gradient" id="form" action="./Model/authentication.php" method="POST">
            <div class="form-floating mb-1">
              <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Insira seu email">
              <label for="floatingInput">E-mail</label>
            </div>
            <div class="form-floating">
              <input name="senha" type="password" class="form-control" id="floatingInput" placeholder="Insira sua senha">
              <label for="floatingInput">Senha</label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
          <button type="submit" class="btn btn-success text-light">Entrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar bottom -->
  <nav class="navbar fixed-bottom navbar navbar-light ">
    <a class="btn btn-warning w-100 fs-4 fixed-bottom" href="page.php?enter=0">Entrar sem Cadastro</a>
  </nav> 

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
