<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_vet";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM tabela_pet";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div style='margin-left: -170px;'>
            <h3>Lista de Pets</h3>
            <table class='table table-striped'>
                 <thead style='background-color: #cdb28a !important;'>
                    <tr>
                        <th scope='col'>Nome do Pet</th>
                        <th scope='col'>Especie</th>
                        <th scope='col'>Raça</th>
                        <th scope='col'>Idade</th>
                        <th scope='col'>Genero</th>
                        <th scope='col'>Cor</th>
                        <th scope='col'>Foto</th>
                        <th scope='col'>Description</th>
                    </tr>
                </thead>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <th>" . $row["name_pet"] . "</th>
                    <th>" . $row["especie"] . "</th>
                    <th>" . $row["raca"] . "</th>
                    <th>" . $row["idade"] . "</th>
                    <th>" . $row["genero"] . "</th>
                    <th>" . $row["cor"] . "</th>
                    <th>" . $row["foto"] . "</th>
                    <th>" . $row["description"] . "</th>
                </tr>";
        }
        echo "</table></div>";
    } else {
        echo "0 resultados";
    }


    $conn->close();
?>