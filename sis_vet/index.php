<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta charset="utf-8" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="login.css" />
  </head>
  <body>
    <div class="two-div">
      <div class="image-background">
        <img src="./content/images/image-two.jpeg" />
      </div>
      <div class="container box-container">
        <div class="div-form">
          <h2 class="title">Hope Pet's</h2>
          <form action="./controller/login/login.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input
                type="email"
                name="email"
                class="form-control"
                id="email"
                required
                aria-describedby="emailHelp"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Senha</label
              >
              <input
                type="password"
                name="senha"
                class="form-control"
                required
                id="senha"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >CRVM (opcional)</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
              />
            </div>

            <div class="button-actions">
              <button type="submit" class="btn btn-primary button-confirm">
                Entrar
              </button>
              <a href="./view/user/register_user.php"
                >Não tem cadastro? Cadastre-se.</a
              >
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
