<?php
/* Smarty version 3.1.31, created on 2020-09-12 16:37:15
  from "/home/u105560370/domains/encantobabyshop.com.br/public_html/view/menu_cliente.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f5d236b2e5f53_60231421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '737af170eb6f5343df6c19efa880b921d3e6c3ee' => 
    array (
      0 => '/home/u105560370/domains/encantobabyshop.com.br/public_html/view/menu_cliente.tpl',
      1 => 1599874618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d236b2e5f53_60231421 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4 class="text-center text-danger"> Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4> 
<section class="row">
    
    <div class="text-center">
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Minha Conta</a>
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Pedidos</a>
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Meus Dados </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Carrinho </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_SENHA']->value;?>
" class="btn btn-warning"> Alterar Senha </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>
     
        
        
        
    </div>
    
    
    
    
    
</section><?php }
}
