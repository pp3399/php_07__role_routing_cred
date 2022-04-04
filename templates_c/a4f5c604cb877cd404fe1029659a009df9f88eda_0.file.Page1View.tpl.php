<?php
/* Smarty version 4.1.0, created on 2022-03-31 12:39:50
  from 'B:\Documents K\xampp\htdocs\php_07_routing_cred\app\views\Page1View.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624584f6eb7d56_56609048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4f5c604cb877cd404fe1029659a009df9f88eda' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_07_routing_cred\\app\\views\\Page1View.tpl',
      1 => 1648723186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624584f6eb7d56_56609048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_560158447624584f6e91617_93957256', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1658934515624584f6e94ec9_93161326', 'wrapper');
?>
     

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_433861936624584f6e9af66_37334129', 'content');
?>






















<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_560158447624584f6e91617_93957256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_560158447624584f6e91617_93957256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><?php
}
}
/* {/block 'footer'} */
/* {block 'wrapper'} */
class Block_1658934515624584f6e94ec9_93161326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'wrapper' => 
  array (
    0 => 'Block_1658934515624584f6e94ec9_93161326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <h2>Inna strona</h2>
    <p>Witam na kolejnej stronie</p> <?php
}
}
/* {/block 'wrapper'} */
/* {block 'content'} */
class Block_433861936624584f6e9af66_37334129 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_433861936624584f6e9af66_37334129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <p> użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</p>
        <section>

            <div class="row">
                <div class="col-6 col-12-medium">
                    <h4>Lista rzeczy, które możesz zrobić:</h4>
                    <ul>
                        <li>Zamknąć przeglądarkę</li>
                        <li>Wrócić do poprzedniej strony</li>
                        <li>Wylogować się</li>
                    </ul>
                </div>
            </div>    

            <div class="row">
                <h2> SŁODKI KOTEK DLA ADMINA </h2>
                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/cuteCat.jpg" alt="cuteCat"/>
            </div>
        </section>


        <section>
            <ul class="actions">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute"  class="button">Powrót do kalkulatora</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="button primary">Wyloguj się</a></li>
            </ul>
        </section>

    <?php
}
}
/* {/block 'content'} */
}
