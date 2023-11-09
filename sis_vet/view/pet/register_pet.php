<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8" />
    <title>Formulário de Cadastro de Pet</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link rel="stylesheet" type="text/css" href="pet.css" />
  </head>
  <body>
    <div class="container form-pet">
      <h2 class="title-form-pet">Cadastro de Pet</h2>

      <form
        action="../../controller/insert/insert_pet.php"
        method="post"
        class="row g-3 form-space-pet"
      >
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Nome do Pet</label>
          <input
            type="text"
            class="form-control"
            id="name_pet"
            name="name_pet"
          />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Espécie</label>
          <input type="text" class="form-control" id="especie" name="especie" />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Raça</label>
          <input type="text" class="form-control" id="raca" name="raca" />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Idade</label>
          <input type="number" class="form-control" id="idade" name="idade" />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Gênero</label>
          <input type="text" class="form-control" id="genero" name="genero" />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Cor</label>
          <input type="text" class="form-control" id="cor" name="cor" />
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Foto</label>
          <input type="file" class="form-control" id="foto" name="foto" />
        </div>
        <div class="col-md-12">
          <label for="inputPassword4" class="form-label">Descrição</label>
          <textarea
            class="form-control"
            id="description"
            name="description"
            name="description"
            rows="4"
            cols="50"
          ></textarea
          ><br /><br />
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
