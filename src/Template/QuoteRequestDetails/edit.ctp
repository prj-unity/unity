<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $quoteRequestDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $quoteRequestDetail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Quote Request Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quote Requests'), ['controller' => 'QuoteRequests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quote Request'), ['controller' => 'QuoteRequests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quoteRequestDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($quoteRequestDetail) ?>
    <fieldset>
        <legend><?= __('Edit Quote Request Detail') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('quote_request_id', ['options' => $quoteRequests]);
            echo $this->Form->control('message');
            echo $this->Form->control('deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
