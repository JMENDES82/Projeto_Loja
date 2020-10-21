<?php
/* Smarty version 3.1.31, created on 2020-09-19 17:42:24
  from "/home/u105560370/domains/encantobabyshop.com.br/public_html/view/pedido_retorno.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f666d30b6f485_37637563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e58ffd7080c84f053862a8e92d66da8a182f3ffb' => 
    array (
      0 => '/home/u105560370/domains/encantobabyshop.com.br/public_html/view/pedido_retorno.tpl',
      1 => 1599874619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f666d30b6f485_37637563 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3 class="text-center text-success"> Obrigado pelo seu pedido </h3>
<hr>
<section class="row">
    
    <div class="col-md-3"></div> 
   
    <div class="col-md-6 thumbnail">
        
        
         <h4> Informações do pagamento </h4>
            <p> <b>Código transação:</b> <?php echo $_smarty_tpl->tpl_vars['CODIGO']->value;?>
</p>
            <p> <b>Referencia:</b> <?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
</p>
            <p> <b>Status do pagamento:</b> <?php echo $_smarty_tpl->tpl_vars['PAGO']->value;?>
</p>
            <p> <b>Forma pagamento: </b><?php echo $_smarty_tpl->tpl_vars['FORMA_PAG']->value;?>
</p>
            
            
         
            <form name="pagamento" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                <input type="hidden" name="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
">  
                <button class="btn btn-success btn-block btn-lg"> Detalhes deste Pedido</button>



            </form>        

        
    </div> 
    <div class="col-md-3"></div> 
    
    
   
    
    
</section>

<?php }
}
