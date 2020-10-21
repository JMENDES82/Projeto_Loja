<?php
/* Smarty version 3.1.31, created on 2020-09-12 15:11:50
  from "/home/u105560370/domains/encantobabyshop.com.br/public_html/adm/view/adm_categorias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f5d0f66b2d1f8_96828024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72725be7eddc5f14d9473f4a82faf60203920668' => 
    array (
      0 => '/home/u105560370/domains/encantobabyshop.com.br/public_html/adm/view/adm_categorias.tpl',
      1 => 1599874628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d0f66b2d1f8_96828024 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <h4 class="text-center"> Gerenciar categorias </h4>
<hr>

<section class="row">
    
    <form name="categoriainsere" method="post" action="">
        
        <div class="col-md-4">
            <input type="text" name="cate_nome" class="form-control" required>  
        </div>
        <div class="col-md-4">
            <button class="btn btn-success" name="cate_nova" value="cate_nova"> Inserir nova </button>
            
        </div>
        <div class="col-md-4"></div>
        
        
    </form>
    
</section>
<hr>

<!-- section listar categorias -->
<section class="row" id="listarcategorias">
    
    <center>
    <table class="table table-bordered" style="width: 90%">
        
      
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
            <form name="categorias_editar" method="post" action="">
               
                <tr>

                    <td style="width: 70%">
                         <input type="text" name="cate_nome" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
" class="form-control" required> 
                          <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
">
                    </td>
                       
                    <td>
                        <button class="btn btn-success" name="cate_editar" value="cate_editar">Editar</button>
                    </td>
                   
                    <td>
                        <button class="btn btn-danger" name="cate_apagar" value="cate_apagar">Apagar</button>
                    </td>


                </tr>        

            </form>
            
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        
    </table>
    </center>
    
    
</section><?php }
}
