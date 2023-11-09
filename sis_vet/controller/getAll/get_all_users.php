<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_vet";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM tabela_pessoa";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div style='margin-left: -170px;'>
            <h3>Lista de Usuários</h3>
            <table class='table table-striped'>
                 <thead class='thead-dark' style='background-color: #cdb28a;'>
                    <tr>
                        <th scope='col'>Nome</th>
                        <th scope='col'>CPF</th>
                        <th scope='col'>RG</th>
                        <th scope='col'>Estado Civil</th>
                        <th scope='col'>CEP</th>
                        <th scope='col'>Endereço</th>
                        <th scope='col'>Bairro</th>
                        <th scope='col'>Cidade</th>
                        <th scope='col'>UF</th>
                        <th scope='col'>Telefone</th>
                        <th scope='col'>Email</th>
                    </tr>
                </thead>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <th scope='row'>" . $row["nome"] . "</th>
                    <th>" . $row["cpf"] . "</th>
                    <th>" . $row["rg"] . "</th>
                    <th>" . $row["estado_civil"] . "</th>
                    <th>" . $row["cep"] . "</th>
                    <th>" . $row["endereco"] . "</th>
                    <th>" . $row["bairro"] . "</th>
                    <th>" . $row["cidade"] . "</th>
                    <th>" . $row["uf"] . "</th>
                    <th>" . $row["telefone"] . "</th>
                    <th>" . $row["email"] . "</th>
                </tr>";
        }
        echo "</table></div>";
    } else {
        echo "0 resultados";
    }


    $conn->close();
?>