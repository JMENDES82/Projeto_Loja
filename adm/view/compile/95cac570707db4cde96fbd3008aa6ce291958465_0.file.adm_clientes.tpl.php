<?php
/* Smarty version 3.1.31, created on 2020-09-12 15:11:22
  from "/home/u105560370/domains/encantobabyshop.com.br/public_html/adm/view/adm_clientes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f5d0f4adc6d95_37519877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95cac570707db4cde96fbd3008aa6ce291958465' => 
    array (
      0 => '/home/u105560370/domains/encantobabyshop.com.br/public_html/adm/view/adm_clientes.tpl',
      1 => 1599874628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d0f4adc6d95_37519877 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4 class="text-center">Gerenciar Clientes </h4>
<hr>

<!--- listando clientes ---->
<section class="row">
    
    <center>
    <table class="table table-bordered">
    
        
        <tr class="text-success bg-success">
            <td></td>
            <td>Nome</td>
            <td>Email </td>
            <td>Fone </td>
            <td>Data cad</td>
            <td></td>
            
        </tr>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLIENTES']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
        
        <tr>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
 " class="btn btn-info">Pedidos</a> </td>
            <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_sobrenome'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_fone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_data_cad'];?>
</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_EDITAR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
" class="btn btn-info"> Ver </a>
                
            </td>
            
        </tr>
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        
    </table>
    </center >
    
</section><?php }
}
