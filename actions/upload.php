<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetFile = './imagens/' . basename($_FILES['imagem']['name']);
    $uploadOk = true;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
    //Move o arquivo para a pasta desejada
    if ($uploadOk) {
        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $targetFile)) {

            //Exibe as informações da imagem
            echo '<h1>O arquivo foi enviado com sucesso e salvo na pasta.</h1> <br>';
            echo 'Nome do arquivo: ' . $_FILES['imagem']['name'] . '<br>';
            echo 'Tipo do arquivo: ' . $_FILES['imagem']['type'] . '<br>';
            echo 'Tamanho do arquivo: ' . $_FILES['imagem']['size'] . ' bytes<br>';
            echo 'Extensão do arquivo: ' . $imageFileType . '<br>';
            
            //Exibe a imagem enviada
            echo '<img width="500px" src="' . $targetFile . '" alt="Imagem Enviada">';
        } else {
            echo 'Desculpe, ocorreu um erro ao enviar o arquivo.';
        }
    }
}
?>