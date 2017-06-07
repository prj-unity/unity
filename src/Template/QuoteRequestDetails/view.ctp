<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quote Request Detail'), ['action' => 'edit', $quoteRequestDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quote Request Detail'), ['action' => 'delete', $quoteRequestDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quoteRequestDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quote Request Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote Request Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quote Requests'), ['controller' => 'QuoteRequests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote Request'), ['controller' => 'QuoteRequests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quoteRequestDetails view large-9 medium-8 columns content">
    <h3><?= h($quoteRequestDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $quoteRequestDetail->has('user') ? $this->Html->link($quoteRequestDetail->user->id, ['controller' => 'Users', 'action' => 'view', $quoteRequestDetail->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quote Request') ?></th>
            <td><?= $quoteRequestDetail->has('quote_request') ? $this->Html->link($quoteRequestDetail->quote_request->name, ['controller' => 'QuoteRequests', 'action' => 'view', $quoteRequestDetail->quote_request->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($quoteRequestDetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($quoteRequestDetail->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($quoteRequestDetail->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $quoteRequestDetail->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Message') ?></h4>
        <?= $this->Text->autoParagraph(h($quoteRequestDetail->message)); ?>
    </div>
</div>
