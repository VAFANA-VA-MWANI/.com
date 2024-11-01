<?php
// Receber o id enviado na URL
$sql= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Indicar como o conteúdo deve ser apresentado
echo "<div class='container'>";

// QUERY para recuperar o slide do banco de dados
$query_sql = "SELECT id, titulo_pub, image, text
                FROM lancamentos WHERE id =:id
                /*AND situacao_id = 100*/
                ORDER BY id DESC
                LIMIT 1";
?>
<?php

echo "<dt class='col-sm-3'>Imagem</dt>";
echo "<dd class='col-sm-9'><img src='../../MyAdmin/Lancamentos/$image' height='80' alt='$titulo_pub'></dd>";

echo "<dt class='col-sm-3'>ID</dt>";
echo "<dd class='col-sm-9'>$id</dd>";

echo "<dt class='col-sm-3'>Título</dt>";
echo "<dd class='col-sm-9'>$titulo_pub</dd>";

echo "<dt class='col-sm-3'>Descricao</dt>";
echo "<dd class='col-sm-9'>$text</dd>";

// Finalizar o container
echo "</div>";
