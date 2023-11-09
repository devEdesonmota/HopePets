<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="home_styles.css" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary back-color">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Hopp Pet's</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pet/register_pet.php"
                >Cadastro de Pets</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="../veterinario/register_veterinario.php"
                >Cadastro de Veterinário</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../user/register_user.php"
                >Cadastro de Usuários</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../controller/logout/logout.php"
                >Sair</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container table-top">
      <?php include '../../controller/getAll/get_all_users.php' ?>
    </div>

    <div class="container table-top">
      <?php include '../../controller/getAll/get_all_pets.php' ?>
    </div>

     <div class="container table-top">
      <?php include '../../controller/getAll/get_all_vet.php' ?>
    </div>
  </body>
</html>
