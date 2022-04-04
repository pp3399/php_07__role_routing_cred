<?php
/* Smarty version 4.1.0, created on 2022-03-31 08:21:12
  from 'B:\Documents K\xampp\htdocs\php_07_routing_cred\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62454858358900_47563997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1776755a0b82df8d0bc9bd519cd4c4b8c2175e6' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_07_routing_cred\\app\\views\\LoginView.tpl',
      1 => 1648707331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62454858358900_47563997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154884205562454858331cb2_45769048', 'footer');
?>


   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3045571686245485833ecb3_82412120', 'wrapper');
?>
     
   
   
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173065395862454858341523_27589177', 'content');
?>






















<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_154884205562454858331cb2_45769048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_154884205562454858331cb2_45769048',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><?php
}
}
/* {/block 'footer'} */
/* {block 'wrapper'} */
class Block_3045571686245485833ecb3_82412120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'wrapper' => 
  array (
    0 => 'Block_3045571686245485833ecb3_82412120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <h2>Zaloguj się</h2>   <?php
}
}
/* {/block 'wrapper'} */
/* {block 'content'} */
class Block_173065395862454858341523_27589177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_173065395862454858341523_27589177',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section>

        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">
            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                    <label for="id_login">Login</label>
                    <input type="text" name="login" id="id_login" placeholder="Login" value="" />
                </div>
                <div class="col-6 col-12-xsmall">
                    <label for="id_pass">Hasło</label>
                    <input type="password" name="pass" id="id_pass" placeholder="Hasło"  />
                </div>



                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Zaloguj" class="primary" /></li>

                    </ul>
                </div>
            </div>
        </form>
    </section>

    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
<?php
}
}
/* {/block 'content'} */
}
