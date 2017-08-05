<?php
/**
  * @var \App\View\AppView $this
  */
?>
<h3>ログイン</h3>
<?= $this->Form->create() ?>
<?= $this->Form->input('username') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('ログイン') ?>
<?= $this->Form->end() ?>
