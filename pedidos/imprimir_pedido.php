<?php

$id_pedido = $_GET['id'];

$servername = "31.170.161.37";
$database = "u105560370_encanto_ofic";
$username = "u105560370_encatobabyshop";
$password = "Jm250584@";
// Create connection
$conexao = @mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conexao ,"utf8");

$query = mysqli_query($conexao, "SELECT * FROM pedidos_externos WHERE id = '$id_pedido'");

$dados = mysqli_fetch_object($query); 
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Imprimir Pedido</title>
   <style type="text/css">
      @media print { 
          .notprint { visibility:hidden; } 
      }
      .break { page-break-before: always; }
  </style>
   </head>
   <body>
   	<div class="container-fluid">
   	<div class="row">
   	<div class="col-md-1 notprint"></div>	
   	<div class="col-md-10">	
   	<div class="row notprint">
   		<div class="col-md-12" ><input type="button" class="btn btn-info" value="VOLTAR" onclick="window.location.href='http://pedidos.encantobabyshop.com.br'" style="float: right;"></div>
   	</div>

   	<div class="row">
   		<div class="row">
              <div class="col-md-12">  
              <div class="form-group">
                <label for="nome_cliente">Nome Cliente:</label>
                <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" value="<?=$dados->nome_cliente?>">
              </div>
              </div>

              <div class="col-md-4"> 
              <div class="form-group">
                <label for="data_pedido">Data Pedido</label>
                <input type="date" value="<?=date('Y-m-d')?>" class="form-control" id="data_pedido" name="data_pedido" value="<?=$dados->data_pedido?>">
              </div>
              </div>

              <div class="col-md-4"> 
              <div class="form-group">
                <label for="date_entrega_pedido">Data Entrega</label>
                <input type="date" class="form-control" id="date_entrega_pedido" name="date_entrega_pedido" value="<?=$dados->date_entrega_pedido?>">
              </div>
              </div>

              <div class="col-md-4"> 
              <div class="form-group">
                <label for="tel_cliente">Telefone Cliente</label>
                <input type="text" class="form-control" id="tel_cliente" name="tel_cliente" onkeydown="javascript: fMasc( this, mTel );" maxlength="14" value="<?=$dados->tel_cliente?>">
              </div>
              </div>
            
              <div class="col-md-12">  
              <div class="form-group">
                <label for="desc_pedido">Descrição do Pedido</label>
                <textarea rows="5" class="form-control" id="desc_pedido" name="desc_pedido" ><?=$dados->desc_pedido?></textarea>
              </div>
              </div>             

              <div class="col-md-4"> 
              <div class="form-group">
                <label for="val_pedido">Valor Pedido</label>
                <input type="text" class="form-control" id="val_pedido" name="val_pedido" value="<?=$dados->val_pedido?>">
              </div>
              </div>

               <div class="col-md-4"> 
              <div class="form-group">
                <label for="val_entrada">Valor Entrada</label>
                <input type="text" class="form-control" id="val_entrada" name="val_entrada" value="<?=$dados->val_entrada?>">
              </div>
              </div>

               <div class="col-md-4"> 
              <div class="form-group">
                <label for="val_restante">Valor Restante</label>
                <input type="text" class="form-control" id="val_restante" name="val_restante" value="<?=$dados->val_restante?>">
              </div>
              </div>

               <div class="col-md-12">  
              <div class="form-group">
                <label for="end_cliente">Endereço de Entrega:</label>
                <input type="text" class="form-control" id="end_cliente" name="end_cliente" value="<?=$dados->end_cliente?>">
              </div>
              </div>

                <div class="col-md-6">  
              <div class="form-group">
                <label for="end_cliente">Imagem 01</label><br>
                <img src="./<?=$dados->url_img_pedido?>" style="height:350px; width:auto;"> 
              </div>
              </div>
                <div class="col-md-6">  
              <div class="form-group">
                <label for="end_cliente">Imagem 02</label><br>
                <img src="./<?=$dados->url_img_pedido1?>" style="height:350px;  width:auto;"> 
              </div>
              </div>
              <div class="col-md-3"></div>
                <div class="col-md-6">  
              <div class="form-group">
                <label for="end_cliente">Imagem 03</label><br>
               <img src="./<?=$dados->url_img_pedido2?>" style="height:350px;  width:auto;"> 
              </div>
              </div>
              <div class="col-md-3"></div>

   	</div>
  </div>
  <div class="col-md-1 notprint"></div>   	
  </div>   	
  </div>
  <p class="break"></p>   	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?
echo "<script>window.print();</script>";
?>
