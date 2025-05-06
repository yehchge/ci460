<?php
/* Smarty version 4.5.5, created on 2025-05-06 08:53:25
  from '/data/sites/ci460/app/Views/template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6819ce0598a106_48468988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9077f6d3becccd2247f91592635a8e5db53027f1' => 
    array (
      0 => '/data/sites/ci460/app/Views/template.tpl',
      1 => 1746521601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6819ce0598a106_48468988 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Hello World Smarty!</h1>

<b><font color="red">Hi, <?php echo (($tmp = $_smarty_tpl->tpl_vars['username']->value ?? null)===null||$tmp==='' ? 'Guys' ?? null : $tmp);?>
.</font></b>

<p>date: <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</p>
<?php }
}
