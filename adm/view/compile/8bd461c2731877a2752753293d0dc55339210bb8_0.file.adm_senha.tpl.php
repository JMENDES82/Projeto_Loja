<?php
/* Smarty version 3.1.31, created on 2020-09-12 15:11:10
  from "/home/u105560370/domains/encantobabyshop.com.br/public_html/adm/view/adm_senha.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f5d0f3e5f2107_87705819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bd461c2731877a2752753293d0dc55339210bb8' => 
    array (
      0 => '/home/u105560370/domains/encantobabyshop.com.br/public_html/adm/view/adm_senha.tpl',
      1 => 1599874631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d0f3e5f2107_87705819 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3 class="text-center">Alteração de senha de acesso</h3>


<form name="alterarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite sua senha atual</label>
          
            <input type="password" name="adm_senha_atual" id="adm_senha_atual" class="form-control" required>
          
           
            
            <label>Digite sua nova senha</label>
          
            <input type="password" name="adm_senha" id="adm_senha" class="form-control" required>
            <br>
           
            
            
            <button type="submit" class="btn btn-success btn-block"> Alterar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  

    
    
    
</form><?php }
}
