<?php
/* Smarty version 4.2.1, created on 2024-03-23 21:55:59
  from 'C:\xampp\htdocs\php_04_szablony_smarty_zadanie\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65ff41df778184_46137702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '978f6e0cb0d2196b24a501ea5f75e5f14cb22296' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_szablony_smarty_zadanie\\templates\\main.html',
      1 => 1711227355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ff41df778184_46137702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/index.php">Kalkulator kredytowy</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"><i class="fa-brands fa-youtube"></i>Mój kanał YT!</a></li>
							<li><a href="#main" class="button primary">Kalkulator</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Kalkulator kredytowy</h2>
							<p>Oblicz swoją miesięczną ratę!</p>
						</header>

						<!-- Form -->
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96746414165ff41df776619_33698700', 'content');
?>

			<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192080759665ff41df7771f0_14892442', 'footer');
?>
. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>
                                        </div>
                                </div>
		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_96746414165ff41df776619_33698700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_96746414165ff41df776619_33698700',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_192080759665ff41df7771f0_14892442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_192080759665ff41df7771f0_14892442',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'footer'} */
}
