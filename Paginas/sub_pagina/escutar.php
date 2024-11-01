<?php 
    session_start(); // Iniciar a sessão

    include_once("../../Metodos/conexao.php");


    // Limpar o buffer de redirecionamento
    ob_start();

    // Receber o id enviado na URL
    $slide_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    // Acessa o IF quando não é enviado o ID na URL
    if(empty($slide_id)){
        // Criar a mensagem de erro e atribuir para variável global
        $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro: Slide não encontrado!</div>";

        // Redireciona o o usuário para o arquivo listar-slides.php
        header("Location: ../musica.php");

        // Pausar o processamento da página
        exit();
    }


    // Indicar como o conteúdo deve ser apresentado
    echo "<div class='container'>";

    // QUERY para recuperar o slide do banco de dados
    $query_slide = "SELECT sld.id, sld.titulo_pub, sld.image, 
                    FROM Lancamentos AS sld
                    WHERE sld.id =:slide_id
                    /*AND situacao_id = 100*/
                    ORDER BY sld.id DESC
                    LIMIT 1";

    // Preparar a QUERY
    $result_slide = $conn->prepare($query_slide);

    // Substituir o link pelo valor que vem da URL
    $result_slide->bindParam(':slide_id', $slide_id);

    // Executar a QUERY
    $result_slide->execute();

    // Título 
    ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
        <h1 class="title-content">Visualizar Slide</h1>
        <div class="btn-toolbar">
            <div class="btn-group me-2">
                <a href='listar-slides.php' class="btn btn-outline-info btn-sm">Listar</a>
            </div>
        </div>
    </div>
<?php

// Acessa o IF quando encontrar slide no banco de dados
if(($result_slide) and ($result_slide->rowCount() != 0 )){
    // Ler o registro retornado do banco de dados
    $row_slide = $result_slide->fetch(PDO::FETCH_ASSOC);
    //var_dump($row_slide);

    // Extrair o array para imprimir os valores através da chave do array
    extract($row_slide);

    echo "<dl class='row'>";
    echo "<dt class='col-sm-3'>Imagem</dt>";
    echo "<dd class='col-sm-9'><img src='".URLADM."Imagens/capas/$id/$imagem' height='80' alt='$titulo_pub'></dd>";
    echo "</dl>";

    echo "<dl class='row'>";
    echo "<dt class='col-sm-3'>ID</dt>";
    echo "<dd class='col-sm-9'>$id</dd>";
    echo "</dl>";

    echo "<dl class='row'>";
    echo "<dt class='col-sm-3'>Título</dt>";
    echo "<dd class='col-sm-9'>$titulo_pub</dd>";
    echo "</dl>";

    echo "<dl class='row'>";
    echo "<dt class='col-sm-3'>Situação</dt>";
    echo "<dd class='col-sm-9'>$text</dd>";
    echo "</dl>";
  

}else{
    echo "<div class='alert alert-danger' role='alert'>Erro: Slide não encontrado!</div>";
}

// Finalizar o container
echo "</div>";

