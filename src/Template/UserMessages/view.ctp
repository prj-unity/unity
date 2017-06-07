<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Message'), ['action' => 'edit', $userMessage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Message'), ['action' => 'delete', $userMessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userMessage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Messages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Message'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Providers'), ['controller' => 'Providers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Provider'), ['controller' => 'Providers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quote Requests'), ['controller' => 'QuoteRequests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote Request'), ['controller' => 'QuoteRequests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userMessages view large-9 medium-8 columns content">
    <h3><?= h($userMessage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userMessage->has('user') ? $this->Html->link($userMessage->user->id, ['controller' => 'Users', 'action' => 'view', $userMessage->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Provider') ?></th>
            <td><?= $userMessage->has('provider') ? $this->Html->link($userMessage->provider->id, ['controller' => 'Providers', 'action' => 'view', $userMessage->provider->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quote Request') ?></th>
            <td><?= $userMessage->has('quote_request') ? $this->Html->link($userMessage->quote_request->name, ['controller' => 'QuoteRequests', 'action' => 'view', $userMessage->quote_request->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userMessage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Message Id') ?></th>
            <td><?= $this->Number->format($userMessage->message_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userMessage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userMessage->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $userMessage->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Message') ?></h4>
        <?= $this->Text->autoParagraph(h($userMessage->message)); ?>
    </div>
</div>
