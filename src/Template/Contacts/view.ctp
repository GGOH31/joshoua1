<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contacts view large-9 medium-8 columns content">
    <h3><?= h($contact->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Localisation') ?></th>
            <td><?= h($contact->localisation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email1') ?></th>
            <td><?= h($contact->email1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email2') ?></th>
            <td><?= h($contact->email2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact1') ?></th>
            <td><?= h($contact->contact1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact2') ?></th>
            <td><?= h($contact->contact2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contact->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valide') ?></th>
            <td><?= $this->Number->format($contact->valide) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contact->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contact->modified) ?></td>
        </tr>
    </table>
</div>
