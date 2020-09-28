<?php
/* Smarty version 3.1.33, created on 2018-12-04 17:40:48
  from 'C:\xampp\htdocs\mvc\app\templates\gamelist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c06ae1034b517_34409416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5ab81dfa6e7b5aa452ae0a37a355d1cf9c14bea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc\\app\\templates\\gamelist.tpl',
      1 => 1543941645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c06ae1034b517_34409416 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
<thead class="thead-dark">
<tr>
  <th scope="col">Id</th>
  <th scope="col">Titre</th>
</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
<tr><th scope='col'><?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
</th><td><?php echo $_smarty_tpl->tpl_vars['game']->value->title;?>
</td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}
