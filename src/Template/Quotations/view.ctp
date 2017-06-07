<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quotation'), ['action' => 'edit', $quotation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quotation'), ['action' => 'delete', $quotation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quotations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quotation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Providers'), ['controller' => 'Providers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Provider'), ['controller' => 'Providers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quote Requests'), ['controller' => 'QuoteRequests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote Request'), ['controller' => 'QuoteRequests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quotations view large-9 medium-8 columns content">
    <h3><?= h($quotation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $quotation->has('user') ? $this->Html->link($quotation->user->id, ['controller' => 'Users', 'action' => 'view', $quotation->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Provider') ?></th>
            <td><?= $quotation->has('provider') ? $this->Html->link($quotation->provider->id, ['controller' => 'Providers', 'action' => 'view', $quotation->provider->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quote Request') ?></th>
            <td><?= $quotation->has('quote_request') ? $this->Html->link($quotation->quote_request->name, ['controller' => 'QuoteRequests', 'action' => 'view', $quotation->quote_request->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($quotation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($quotation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($quotation->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $quotation->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Contents') ?></h4>
        <?= $this->Text->autoParagraph(h($quotation->contents)); ?>
    </div>
</div>
