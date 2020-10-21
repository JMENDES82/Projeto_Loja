<?php

$servername = "31.170.161.37";
$database = "u105560370_encanto_ofic";
$username = "u105560370_encatobabyshop";
$password = "Jm250584@";
// Create connection
$conexao = @mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conexao ,"utf8"); 

$nome_cliente = $_POST['nome_cliente'];
$data_pedido = $_POST['data_pedido'];
$date_entrega_pedido = $_POST['date_entrega_pedido'];
$tel_cliente = $_POST['tel_cliente'];
$desc_pedido = $_POST['desc_pedido'];
$val_pedido = str_replace(",", ".", str_replace(".", "", $_POST['val_pedido']));
$val_pedido = number_format($val_pedido, 2, '.', '');
$val_entrada = str_replace(",", ".", str_replace(".", "",$_POST['val_entrada']));
$val_entrada = number_format($val_entrada, 2, '.', '');
$val_restante = str_replace(",", ".", str_replace(".", "",$_POST['val_restante']));
$val_restante = number_format($val_restante, 2, '.', '');
$end_cliente = $_POST['end_cliente'];

mysqli_query($conexao, "INSERT INTO pedidos_externos 
(
nome_cliente,
data_pedido,
date_entrega_pedido,
tel_cliente,
desc_pedido,
val_pedido,
val_entrada,
val_restante,
end_cliente
)
VALUES 
(
'$nome_cliente',
'$data_pedido',
'$date_entrega_pedido',
'$tel_cliente',
'$desc_pedido',
'$val_pedido',
'$val_entrada',
'$val_restante',
'$end_cliente')
");

$id = mysqli_insert_id($conexao);


// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = 'imagens_pedidos/';
 
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 3; // 2Mb
 
// Array com as extensões permitidas
$_UP['extensoes'] = array('jpg', 'png', 'gif', 'pdf', 'jpeg', 'png');
 
// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = true;
 
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
 
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['img_pedido']['error'] != 0) {
/*die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['img_pedido']['error']]);
exit; // Para a execução do script*/
}
 
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
if ($_FILES[ 'img_pedido' ][ 'name' ] != ""){ 
// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.', $_FILES['img_pedido']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
echo "Por favor, envie arquivos com as seguintes extensões: jpg, png, pdf ou gif";
}
 
// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['img_pedido']['size']) {
echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
}
 
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
$nome_final = 'Pedido_'.$id.'_img_'.time().'.jpg';
} else {
// Mantém o nome original do arquivo
$nome_final = $_FILES['img_pedido']['name'];
}
 
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['img_pedido']['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
/*echo "Upload efetuado com sucesso!";
echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';*/
$dir_img_pedido = "imagens_pedidos/".$nome_final;

mysqli_query($conexao, "UPDATE pedidos_externos SET url_img_pedido = '$dir_img_pedido' WHERE id = '$id'");

} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
echo "Não foi possível enviar o arquivo, tente novamente";
}
 
}
}


// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = 'imagens_pedidos/';
 
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 3; // 2Mb
 
// Array com as extensões permitidas
$_UP['extensoes'] = array('jpg', 'png', 'gif', 'pdf', 'jpeg', 'png');
 
// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = true;
 
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
if ($_FILES[ 'img_pedido1' ][ 'name' ] != ""){
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['img_pedido1']['error'] != 0) {
/*die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['img_pedido1']['error']]);
exit; // Para a execução do script*/
}
 
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
 
// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.', $_FILES['img_pedido1']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
echo "Por favor, envie arquivos com as seguintes extensões: jpg, png, pdf ou gif";
}
 
// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['img_pedido1']['size']) {
echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
}
 
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
$nome_final = 'Pedido_'.$id.'_img1_'.time().'.jpg';
} else {
// Mantém o nome original do arquivo
$nome_final = $_FILES['img_pedido1']['name'];
}
 
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['img_pedido1']['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
/*echo "Upload efetuado com sucesso!";
echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';*/
$dir_img_pedido1 = "imagens_pedidos/".$nome_final;

mysqli_query($conexao, "UPDATE pedidos_externos SET url_img_pedido1 = '$dir_img_pedido1' WHERE id = '$id'");

} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
echo "Não foi possível enviar o arquivo, tente novamente";
}
 
}
}


// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = 'imagens_pedidos/';
 
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 3; // 2Mb
 
// Array com as extensões permitidas
$_UP['extensoes'] = array('jpg', 'png', 'gif', 'pdf', 'jpeg', 'png');
 
// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = true;
 
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
 
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['img_pedido2']['error'] != 0) {
/*die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['img_pedido2']['error']]);
exit; // Para a execução do script*/
}
 
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
if ($_FILES[ 'img_pedido2' ][ 'name' ] != ""){
// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.', $_FILES['img_pedido2']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
echo "Por favor, envie arquivos com as seguintes extensões: jpg, png, pdf ou gif";
}
 
// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['img_pedido2']['size']) {
echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
}
 
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
$nome_final = 'Pedido_'.$id.'_img2_'.time().'.jpg';
} else {
// Mantém o nome original do arquivo
$nome_final = $_FILES['img_pedido2']['name'];
}
 
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['img_pedido2']['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
/*echo "Upload efetuado com sucesso!";
echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';*/
$dir_img_pedido2 = "imagens_pedidos/".$nome_final;

mysqli_query($conexao, "UPDATE pedidos_externos SET url_img_pedido2 = '$dir_img_pedido2' WHERE id = '$id'");

} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
echo "Não foi possível enviar o arquivo, tente novamente";
}
 
}
}
mysqli_close($conexao);

echo "<script type=\"text/javascript\">window.location.href='./imprimir_pedido.php?id=$id'</script>";
?>

