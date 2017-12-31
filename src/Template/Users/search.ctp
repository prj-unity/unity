<?php
/**
  * @var \App\View\AppView $this
  */
?>
test
<div>
<?php foreach ($users as $user): ?>
<div>
<span><?= $user['username']; ?></span>
<?= $user['pref']; ?>
<?= $user['region']; ?>
<?= $user['addr_1']; ?>
<?= $this->Html->link('詳細', ['controller' => 'users', 'action' => 'detail', $user['id']], ['class' => 'button']);?>
</div>
<?php endforeach; ?>
</div>
