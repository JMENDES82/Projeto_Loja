<?php
/* Smarty version 3.1.31, created on 2020-09-19 17:44:10
  from "/home/u105560370/domains/encantobabyshop.com.br/public_html/adm/view/adm_itens.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f666d9aaac288_26260797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd2db4975c55233fa809fced587eb68b9ddba5a6' => 
    array (
      0 => '/home/u105560370/domains/encantobabyshop.com.br/public_html/adm/view/adm_itens.tpl',
      1 => 1599874629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f666d9aaac288_26260797 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4 class="text-center">Dados do pedido</h4>

<!-- informações sobre o pedido -->
<section class="row">
    
    <center>
    <table class="table table-bordered" style="width: 80%">
        <tr class="bg-success">
            
            <td><b>Data:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</td>
            
            <td><b>Hora:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</td>
            
            <td><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</td>
            
            <td><b>Status:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'];?>
</td>
            
        </tr>  
        
        
    </table>
    </center>
    
</section>


<!-- listagem dos itens -->
<section class="row" id="listaitens">
    
    <center>
    <table class="table table-bordered" style="width: 80%">
        
        <tr class="text-success bg-success">
            <td></td>
            <td>Item</td>
            <td>Valor Uni</td>
            <td>X</td>
            <td>Sub</td>
        </tr>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        <tr>
            
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt=""> </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</td>
            <td class="text-right"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
            <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
            <td class="text-right"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>
            
        </tr>
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        
        
    </table>
    </center>
    
    
    
</section>
        
        
        <section class="row" id="resumo">

            <center>
                <table class="table table-bordered" style="width: 80%">
                    <tr>

                        <td class="text-danger"> <b>Frete:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</td>

                        <td class="text-danger"> <b>Total:</b> <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>

                        <td class="text-danger"> <b>Final:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>

                    </tr>  


                </table>
            </center>

        </section><?php }
}
