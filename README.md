
# Projeto de Upload de Imagens em PHP

Este é um projeto de upload de imagens em PHP que permite aos usuários adicionar imagens, movê-las para uma pasta específica e exibir informações sobre a imagem, como nome, tipo, tamanho e extensão. Além disso, a imagem enviada também é exibida abaixo.

## Funcionalidades

O projeto possui as seguintes funcionalidades:

1. **Upload de Imagens**: Os usuários podem selecionar uma imagem de seu dispositivo e fazer o upload para o servidor.

2. **Movendo a Imagem**: Após o upload, a imagem é movida para uma pasta específica no servidor.

3. **Informações da Imagem**: O projeto exibe informações sobre a imagem enviada, incluindo o nome do arquivo, o tipo de arquivo, o tamanho do arquivo e a extensão do arquivo.

4. **Exibição da Imagem**: Uma vez que o upload é concluído, a imagem é exibida abaixo, permitindo que os usuários visualizem a imagem enviada.

## Pré-requisitos

Antes de executar este projeto, certifique-se de ter as seguintes dependências instaladas:

- PHP 7.0 ou superior
- Servidor web (por exemplo, Apache)
- Permissões de gravação na pasta de destino das imagens

## Configuração

Siga as etapas abaixo para configurar o projeto:

1. Faça o download do projeto e extraia-o para a pasta raiz do seu servidor web.

2. Abra o arquivo `upload.php` e verifique se a variável `$targetDir` está configurada corretamente. Essa variável define o diretório de destino onde as imagens serão armazenadas.

3. Certifique-se de que a pasta de destino definida na variável `$targetDir` tenha as permissões corretas de gravação. Caso contrário, você pode ajustar as permissões usando o comando `chmod` no terminal.

4. Inicie seu servidor web e acesse o projeto através do navegador.
