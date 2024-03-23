<?php
/* Smarty version 4.2.1, created on 2024-03-23 21:41:31
  from 'C:\xampp\htdocs\php_04_szablony_smarty_zadanie\app\calc_view_kredytowy.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65ff3e7bd6d6d2_95059629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6fb1c431e9972989af4daf3d2ccbc1ccf142f96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_szablony_smarty_zadanie\\app\\calc_view_kredytowy.html',
      1 => 1711226489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ff3e7bd6d6d2_95059629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116532524565ff3e7bd60ac2_11617495', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150707811765ff3e7bd612d2_37908691', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_116532524565ff3e7bd60ac2_11617495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_116532524565ff3e7bd60ac2_11617495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Adam Horzela<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_150707811765ff3e7bd612d2_37908691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_150707811765ff3e7bd612d2_37908691',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div style="width:90%; margin: 2em auto;">



<section>
        <h3>Wypełnij parametry kredytu</h3>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc_kredytowy.php">
                <div class="row gtr-uniform gtr-50">
                        <div class="col-6 col-12-xsmall">
                                <input id="id_amount" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['amount'];?>
" placeholder="Kwota kredytu" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                               <input id="id_years" type="text" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['years'];?>
" placeholder="Liczba lat" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                               <input id="id_interest" type="text" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['interest'];?>
" placeholder="Oprocentowanie" />
                        </div>
                        <div class="col-12">
                                <ul class="actions">
                                        <li><input type="submit" value="Oblicz" class="primary" /></li>
                                </ul>
                        </div>
                </div>
        </form>
</section>
	
	
<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="error">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="info">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik:</h4>
	<p class="res">
            Wysokość miesięcznej raty wynosi <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zł.
        </p>
<?php }?>
</div>
<?php
}
}
/* {/block 'content'} */
}
