<?php
/* Smarty version 5.4.3, created on 2025-04-09 10:57:42
  from 'file:templates/nav.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67f6368653ab85_85283756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e08826ee6a028a9c63bd16187da8830db325c8f' => 
    array (
      0 => 'templates/nav.tpl',
      1 => 1744188771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f6368653ab85_85283756 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\chat-app\\chat\\templates';
?><nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse v-nav-div" id="navbarTogglerDemo01">
      <a class="navbar-brand text-light v-logo" href="/">VPLAK</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link active text-light v-nav-item" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light v-nav-item" href="/">Career</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light v-nav-item"  aria-current="page" href="/">About</a>
        </li>
      </ul>
      <form class="d-flex mt-2" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav><?php }
}
