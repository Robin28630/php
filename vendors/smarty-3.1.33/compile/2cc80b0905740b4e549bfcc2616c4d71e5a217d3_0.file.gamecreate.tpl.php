<?php
/* Smarty version 3.1.33, created on 2018-12-05 13:47:38
  from 'C:\xampp\htdocs\mvc\app\templates\gamecreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c07c8ea688e90_46593075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cc80b0905740b4e549bfcc2616c4d71e5a217d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc\\app\\templates\\gamecreate.tpl',
      1 => 1544014054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c07c8ea688e90_46593075 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
	<div class="card-body">
		<h5 class="card-title">Nouvelle partie</h5>
		<form id="gameForm" action="/game/save" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="gameTitle">Quel est le titre de votre partie ?</label>
				<input type="text" class="form-control" name="gameTitle" id="gameTitle">
			</div>
			<p>
				<button type="submit" class="btn btn-primary">Créer</button>
			</p>
		</form>
	</div>
</div><?php }
}
