<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quote Request'), ['action' => 'edit', $quoteRequest->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quote Request'), ['action' => 'delete', $quoteRequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quoteRequest->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quote Requests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote Request'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Provider Messages'), ['controller' => 'ProviderMessages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Provider Message'), ['controller' => 'ProviderMessages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quotations'), ['controller' => 'Quotations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quotation'), ['controller' => 'Quotations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quote Request Details'), ['controller' => 'QuoteRequestDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote Request Detail'), ['controller' => 'QuoteRequestDetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Messages'), ['controller' => 'UserMessages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Message'), ['controller' => 'UserMessages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quoteRequests view large-9 medium-8 columns content">
    <h3><?= h($quoteRequest->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $quoteRequest->has('user') ? $this->Html->link($quoteRequest->user->id, ['controller' => 'Users', 'action' => 'view', $quoteRequest->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genre') ?></th>
            <td><?= h($quoteRequest->genre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($quoteRequest->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($quoteRequest->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Budget') ?></th>
            <td><?= $this->Number->format($quoteRequest->budget) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reply Deadline') ?></th>
            <td><?= h($quoteRequest->reply_deadline) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Date') ?></th>
            <td><?= h($quoteRequest->delivery_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($quoteRequest->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($quoteRequest->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $quoteRequest->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Contents') ?></h4>
        <?= $this->Text->autoParagraph(h($quoteRequest->contents)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Provider Messages') ?></h4>
        <?php if (!empty($quoteRequest->provider_messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Provider Id') ?></th>
                <th scope="col"><?= __('Quote Request Id') ?></th>
                <th scope="col"><?= __('Message Id') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($quoteRequest->provider_messages as $providerMessages): ?>
            <tr>
                <td><?= h($providerMessages->id) ?></td>
                <td><?= h($providerMessages->user_id) ?></td>
                <td><?= h($providerMessages->provider_id) ?></td>
                <td><?= h($providerMessages->quote_request_id) ?></td>
                <td><?= h($providerMessages->message_id) ?></td>
                <td><?= h($providerMessages->message) ?></td>
                <td><?= h($providerMessages->deleted) ?></td>
                <td><?= h($providerMessages->created) ?></td>
                <td><?= h($providerMessages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProviderMessages', 'action' => 'view', $providerMessages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProviderMessages', 'action' => 'edit', $providerMessages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProviderMessages', 'action' => 'delete', $providerMessages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $providerMessages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Quotations') ?></h4>
        <?php if (!empty($quoteRequest->quotations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Provider Id') ?></th>
                <th scope="col"><?= __('Quote Request Id') ?></th>
                <th scope="col"><?= __('Contents') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($quoteRequest->quotations as $quotations): ?>
            <tr>
                <td><?= h($quotations->id) ?></td>
                <td><?= h($quotations->user_id) ?></td>
                <td><?= h($quotations->provider_id) ?></td>
                <td><?= h($quotations->quote_request_id) ?></td>
                <td><?= h($quotations->contents) ?></td>
                <td><?= h($quotations->deleted) ?></td>
                <td><?= h($quotations->created) ?></td>
                <td><?= h($quotations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Quotations', 'action' => 'view', $quotations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Quotations', 'action' => 'edit', $quotations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quotations', 'action' => 'delete', $quotations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Quote Request Details') ?></h4>
        <?php if (!empty($quoteRequest->quote_request_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Quote Request Id') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($quoteRequest->quote_request_details as $quoteRequestDetails): ?>
            <tr>
                <td><?= h($quoteRequestDetails->id) ?></td>
                <td><?= h($quoteRequestDetails->user_id) ?></td>
                <td><?= h($quoteRequestDetails->quote_request_id) ?></td>
                <td><?= h($quoteRequestDetails->message) ?></td>
                <td><?= h($quoteRequestDetails->deleted) ?></td>
                <td><?= h($quoteRequestDetails->created) ?></td>
                <td><?= h($quoteRequestDetails->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'QuoteRequestDetails', 'action' => 'view', $quoteRequestDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'QuoteRequestDetails', 'action' => 'edit', $quoteRequestDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'QuoteRequestDetails', 'action' => 'delete', $quoteRequestDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quoteRequestDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Messages') ?></h4>
        <?php if (!empty($quoteRequest->user_messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Provider Id') ?></th>
                <th scope="col"><?= __('Quote Request Id') ?></th>
                <th scope="col"><?= __('Message Id') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($quoteRequest->user_messages as $userMessages): ?>
            <tr>
                <td><?= h($userMessages->id) ?></td>
                <td><?= h($userMessages->user_id) ?></td>
                <td><?= h($userMessages->provider_id) ?></td>
                <td><?= h($userMessages->quote_request_id) ?></td>
                <td><?= h($userMessages->message_id) ?></td>
                <td><?= h($userMessages->message) ?></td>
                <td><?= h($userMessages->deleted) ?></td>
                <td><?= h($userMessages->created) ?></td>
                <td><?= h($userMessages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserMessages', 'action' => 'view', $userMessages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserMessages', 'action' => 'edit', $userMessages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserMessages', 'action' => 'delete', $userMessages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userMessages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
