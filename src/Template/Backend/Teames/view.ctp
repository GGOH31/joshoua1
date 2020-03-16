<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teame $teame
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Teame'), ['action' => 'edit', $teame->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Teame'), ['action' => 'delete', $teame->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teame->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teames'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teame'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teames view large-9 medium-8 columns content">
    <h3><?= h($teame->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($teame->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poste') ?></th>
            <td><?= h($teame->poste) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avatare Name') ?></th>
            <td><?= h($teame->avatare_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avatare Path') ?></th>
            <td><?= h($teame->avatare_path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($teame->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valide') ?></th>
            <td><?= $this->Number->format($teame->valide) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($teame->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($teame->created) ?></td>
        </tr>
    </table>
</div>
