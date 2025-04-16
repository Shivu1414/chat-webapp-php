<?php
/* Smarty version 5.4.3, created on 2025-04-09 11:41:44
  from 'file:templates/chatView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67f640d81f3c13_88675534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a187e1e15cf58f458aff0b869fe6e7130f2af7c9' => 
    array (
      0 => 'templates/chatView.tpl',
      1 => 1744191701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
))) {
function content_67f640d81f3c13_88675534 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\chat-app\\chat\\templates';
$_smarty_tpl->renderSubTemplate("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Twigytech"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container-fluid">
    <div class="mt-5">
        <table class="table">
            <thead class="bg-dark">
                <tr class="text-center t-bold" style="background-color: transparent">
                  <th class="text-light" style="background-color: transparent" scope="col">Name</th>
                  <th class="text-light" style="background-color: transparent" scope="col">Contact No</th>
                  <th class="text-light" style="background-color: transparent" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), 'user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user')->value) {
$foreach0DoElse = false;
?>
            <tr class="text-center t-bold" style="background-color: <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('cycle')->handle(array('values'=>"#eeeeee,#dddddd"), $_smarty_tpl);?>
"><td class="t-color"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('user')['name']);?>
</td><td class="t-color"><?php echo $_smarty_tpl->getValue('user')['phone'];?>
</td><td style="background-color: transparent"><button class="btn bg-info mr-2 chat-btn" type="botton">Chat Now</button></td></tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
