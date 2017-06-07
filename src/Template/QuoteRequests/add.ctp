<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Quote Requests'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Provider Messages'), ['controller' => 'ProviderMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Provider Message'), ['controller' => 'ProviderMessages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quotations'), ['controller' => 'Quotations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quotation'), ['controller' => 'Quotations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quote Request Details'), ['controller' => 'QuoteRequestDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quote Request Detail'), ['controller' => 'QuoteRequestDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Messages'), ['controller' => 'UserMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Message'), ['controller' => 'UserMessages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quoteRequests form large-9 medium-8 columns content">
    <?= $this->Form->create($quoteRequest) ?>
    <fieldset>
        <legend><?= __('Add Quote Request') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('genre');
            echo $this->Form->control('name');
            echo $this->Form->control('reply_deadline', ['empty' => true]);
            echo $this->Form->control('delivery_date', ['empty' => true]);
            echo $this->Form->control('budget');
            echo $this->Form->control('contents');
            echo $this->Form->control('deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
