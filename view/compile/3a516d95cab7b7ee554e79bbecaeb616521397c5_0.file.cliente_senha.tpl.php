<?php
/* Smarty version 3.1.31, created on 2020-09-12 16:37:18
  from "/home/u105560370/domains/encantobabyshop.com.br/public_html/view/cliente_senha.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f5d236e60e956_92863028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a516d95cab7b7ee554e79bbecaeb616521397c5' => 
    array (
      0 => '/home/u105560370/domains/encantobabyshop.com.br/public_html/view/cliente_senha.tpl',
      1 => 1599874615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d236e60e956_92863028 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3 class="text-center">Alteração de senha de acesso</h3>


<form name="alterarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite sua senha atual</label>
          
            <input type="password" name="cli_senha_atual" id="cli_senha_atual" class="form-control" required>
          
           
            
            <label>Digite sua nova senha</label>
          
            <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
            <br>
           
            
            
            <button type="submit" class="btn btn-success btn-block"> Alterar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  

    
    
    
</form>

<?php }
}
