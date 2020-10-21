<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pedidos Salvar</title>
  
    <script type="text/javascript">

      function fMasc(objeto,mascara) {
        obj=objeto
        masc=mascara
        setTimeout("fMascEx()",1)
      }
      function fMascEx() {
        obj.value=masc(obj.value)
      } 

      function mTel(tel) {
        tel=tel.replace(/\D/g,"")
        tel=tel.replace(/^(\d)/,"($1")
        tel=tel.replace(/(.{3})(\d)/,"$1)$2")
        if(tel.length == 9) {
          tel=tel.replace(/(.{1})$/,"-$1")
        } else if (tel.length == 10) {
          tel=tel.replace(/(.{2})$/,"-$1")
        } else if (tel.length == 11) {
          tel=tel.replace(/(.{3})$/,"-$1")
        } else if (tel.length == 12) {
          tel=tel.replace(/(.{4})$/,"-$1")
        } else if (tel.length > 12) {
          tel=tel.replace(/(.{4})$/,"-$1")
        }
        return tel;
      }
  </script>

  </head>
  <body style="background-color: #f8e2e3;">
    <div class="container-fluid">
      <br><br>
      <div class="row">
        <div class="col-md-12" style="text-align: center; border: solid 1px #000;">
          <h2 style="color: #000;">Cadastro de novos pedidos</h2>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="salva_pedido.php" method="POST" enctype="multipart/form-data">
              <div class="row">
              <div class="col-md-12">  
              <div class="form-group">
                <label for="nome_cliente">Nome Cliente:</label>
                <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" required>
              </div>
              </div>

              <div class="col-md-4"> 
              <div class="form-group">
                <label for="data_pedido">Data Pedido</label>
                <input type="date" value="<?=date('Y-m-d')?>" class="form-control" id="data_pedido" name="data_pedido" required>
              </div>
              </div>

              <div class="col-md-4"> 
              <div class="form-group">
                <label for="date_entrega_pedido">Data Entrega</label>
                <input type="date" class="form-control" id="date_entrega_pedido" name="date_entrega_pedido" required>
              </div>
              </div>

              <div class="col-md-4"> 
              <div class="form-group">
                <label for="tel_cliente">Telefone Cliente</label>
                <input type="text" class="form-control" id="tel_cliente" name="tel_cliente" onkeydown="javascript: fMasc( this, mTel );" maxlength="14" required>
              </div>
              </div>
            
              <div class="col-md-12">  
              <div class="form-group">
                <label for="desc_pedido">Descrição do Pedido</label>
                <textarea rows="5" class="form-control" id="desc_pedido" name="desc_pedido" required></textarea>
              </div>
              </div>

              <div class="col-md-12"> 
              <div class="form-group">
                <label for="img_pedido">Imagem do Pedido</label>
                <input type="file" class="form-control" id="img_pedido" name="img_pedido">
              </div>
              </div>

              <div class="col-md-12"> 
              <div class="form-group">
                <label for="img_pedido1">Imagem do Pedido</label>
                <input type="file" class="form-control" id="img_pedido1" name="img_pedido1">
              </div>
              </div>

              <div class="col-md-12"> 
              <div class="form-group">
                <label for="img_pedido2">Imagem do Pedido</label>
                <input type="file" class="form-control" id="img_pedido2" name="img_pedido2">
              </div>
              </div>

              <div class="col-md-4"> 
              <div class="form-group">
                <label for="val_pedido">Valor Pedido</label>
                <input type="text" class="form-control" id="val_pedido" name="val_pedido" required>
              </div>
              </div>

               <div class="col-md-4"> 
              <div class="form-group">
                <label for="val_entrada">Valor Entrada</label>
                <input type="text" class="form-control" id="val_entrada" name="val_entrada" required>
              </div>
              </div>

               <div class="col-md-4"> 
              <div class="form-group">
                <label for="val_restante">Valor Restante</label>
                <input type="text" class="form-control" id="val_restante" name="val_restante" required>
              </div>
              </div>

               <div class="col-md-12">  
              <div class="form-group">
                <label for="end_cliente">Endereço de Entrega:</label>
                <input type="text" class="form-control" id="end_cliente" name="end_cliente" required>
              </div>
              </div>
                
              <div class="col-md-4"></div>
              <div class="col-md-4"><button type="submit" class="btn btn-primary">Salvar Pedido</button></div>
              <div class="col-md-4"></div>
                              
            </div>
            </form>
        </div>
        <div class="col-md-3"></div>
      </div>  
    </div>
    <br><br>
    <!-- Optional JavaScript -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="mask/src/jquery.maskMoney.js" type="text/javascript"></script>
    <script type="text/javascript">
    $("#val_entrada").maskMoney({allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
    $("#val_restante").maskMoney({allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
    $("#val_pedido").maskMoney({allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

