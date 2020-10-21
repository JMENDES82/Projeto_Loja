<?php
/* Smarty version 3.1.31, created on 2020-09-12 16:08:25
  from "/home/u105560370/domains/encantobabyshop.com.br/public_html/view/email_cliente_cadastro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f5d1ca92d9bd8_40561979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf5e95acf536b7895ce3321afde463a019faeabc' => 
    array (
      0 => '/home/u105560370/domains/encantobabyshop.com.br/public_html/view/email_cliente_cadastro.tpl',
      1 => 1599874616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d1ca92d9bd8_40561979 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 , obrigado por se cadastrar em <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h3>

<p> Cadastro efetuado com sucesso,  para fazer  o login use seu email cadastrado ( <?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
 )
<br>
com a sua senha, sua senha neste momento é ( <?php echo $_smarty_tpl->tpl_vars['SENHA']->value;?>
 )

</h3>
<p>
    Para acessar o site e sua conta basta usar este endereço <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a>
    
</p>
<?php }
}
