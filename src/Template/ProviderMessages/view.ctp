<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Provider Message'), ['action' => 'edit', $providerMessage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Provider Message'), ['action' => 'delete', $providerMessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $providerMessage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Provider Messages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Provider Message'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Providers'), ['controller' => 'Providers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Provider'), ['controller' => 'Providers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quote Requests'), ['controller' => 'QuoteRequests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote Request'), ['controller' => 'QuoteRequests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="providerMessages view large-9 medium-8 columns content">
    <h3><?= h($providerMessage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $providerMessage->has('user') ? $this->Html->link($providerMessage->user->id, ['controller' => 'Users', 'action' => 'view', $providerMessage->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Provider') ?></th>
            <td><?= $providerMessage->has('provider') ? $this->Html->link($providerMessage->provider->id, ['controller' => 'Providers', 'action' => 'view', $providerMessage->provider->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quote Request') ?></th>
            <td><?= $providerMessage->has('quote_request') ? $this->Html->link($providerMessage->quote_request->name, ['controller' => 'QuoteRequests', 'action' => 'view', $providerMessage->quote_request->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($providerMessage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Message Id') ?></th>
            <td><?= $this->Number->format($providerMessage->message_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($providerMessage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($providerMessage->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $providerMessage->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Message') ?></h4>
        <?= $this->Text->autoParagraph(h($providerMessage->message)); ?>
    </div>
</div>
