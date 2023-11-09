<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Formulário de Cadastro</title>
    <meta charset="utf-8" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="user.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  </head>
  <body>
    <div class="container form-user">
      <h2 class="title-form-user">Cadastro de Usuários</h2>
      <form
        action="../../controller/insert/insert_user.php"
        method="post"
        class="row g-3 form-space"
      >
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Nome</label>
          <input
            type="text"
            class="form-control"
            id="nome"
            name="nome"
            required
          />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">CPF</label>
          <input
            type="text"
            id="cpf"
            name="cpf"
            class="form-control"
            required
          />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">RG</label>
          <input type="text" class="form-control" id="rg" name="rg" required />
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Estado Civil</label>
          <input
            type="text"
            class="form-control"
            id="estado_civil"
            name="estado_civil"
            required
            placeholder=""
          />
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Telefone</label>
          <input
            type="text"
            class="form-control"
            id="telefone"
            name="telefone"
            placeholder=""
          />
        </div>
        <div class="col-md-6">
          <label for="inputAddress" class="form-label">Endereço</label>
          <input
            type="text"
            class="form-control"
            id="endereco"
            name="endereco"
            required
            placeholder=""
          />
        </div>
        <div class="col-md-6">
          <label for="inputAddress" class="form-label">Bairro</label>
          <input
            type="text"
            class="form-control"
            id="bairro"
            name="bairro"
            required
            placeholder=""
          />
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="cidade" name="cidade" />
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">UF</label>
          <select id="uf" name="uf" class="form-select" required>
            <option selected>Escolha a UF</option>
          </select>
        </div>

        <div class="col-md-2">
          <label for="inputZip" class="form-label">CEP</label>
          <input
            type="text"
            class="form-control"
            id="cep"
            name="cep"
            required
          />
        </div>

        <h4 class="subtitle-form-user">Dados de acesso</h4>

        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">E-mail</label>
          <input
            type="text"
            class="form-control"
            id="email"
            name="email"
            required
          />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Senha</label>
          <input
            type="password"
            class="form-control"
            id="senha"
            name="senha"
            required
          />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label"
            >Confirme sua senha</label
          >
          <input
            type="password"
            class="form-control"
            id="senha"
            name="senha"
            required
          />
        </div>
        <div
          class="col-12"
          style="display: flex; flex-direction: row; gap: 40px"
        >
          <button type="submit" class="btn btn-primary" style="width: 50%">
            Registrar
          </button>
          <button
            type="button"
            class="btn btn-outline-danger"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
            style="width: 50%"
          >
            Cancelar cadastro
          </button>
        </div>
      </form>
    </div>
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Confirmação de Cancelamento
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">Deseja mesmo cancelar o registro?</div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cancelar
            </button>
            <button
              type="button"
              class="btn btn-primary"
              onclick="confirmarCancelamento()"
            >
              Sim
            </button>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(document).ready(function () {
        var estados = [
          "AC",
          "AL",
          "AP",
          "AM",
          "BA",
          "CE",
          "DF",
          "ES",
          "GO",
          "MA",
          "MT",
          "MS",
          "MG",
          "PA",
          "PB",
          "PR",
          "PE",
          "PI",
          "RJ",
          "RN",
          "RS",
          "RO",
          "RR",
          "SC",
          "SP",
          "SE",
          "TO",
        ];

        var select = $("#uf");
        $.each(estados, function (index, value) {
          select.append($("<option></option>").val(value).html(value));
        });
      });

      $(document).ready(function () {
        $("#cpf").mask("000.000.000-00", { reverse: true });
      });

      $(document).ready(function () {
        $("#telefone").mask("(00) 00000-0000");
      });

      $(document).ready(function () {
        $("#cep").mask("00000-000");
      });

      $(document).ready(function () {
        $("#rg").mask("0000000-0");
      });

      const myModal = document.getElementById("myModal");

      myModal.addEventListener("shown.bs.modal", () => {
        myInput.focus();
      });

      function confirmarCancelamento() {
        window.location.href = "../home/home_view.php";
      }
    </script>
  </body>
</html>
