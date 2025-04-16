<?php
/* Smarty version 5.4.3, created on 2025-04-10 09:16:50
  from 'file:templates/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67f77062650d56_15717624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ebbdcaf35173767acc3539cf090820ee682e1b8' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1744269401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f77062650d56_15717624 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\chat-app\\chat\\templates';
?><html>
<head>
    <title><?php echo (($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? "Twig HR" ?? null : $tmp);?>
</title>
    <link href="assets/css/common.css" rel="stylesheet" >
    <?php echo '<script'; ?>
 src="assets/js/chat.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=close,send" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body><?php }
}
