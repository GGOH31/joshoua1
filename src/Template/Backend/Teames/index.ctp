<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teame[]|\Cake\Collection\CollectionInterface $teames
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Teame'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teames index large-9 medium-8 columns content">
    <h3><?= __('Teames') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('poste') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avatare_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avatare_path') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valide') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teames as $teame): ?>
            <tr>
                <td><?= $this->Number->format($teame->id) ?></td>
                <td><?= h($teame->name) ?></td>
                <td><?= h($teame->poste) ?></td>
                <td><?= h($teame->avatare_name) ?></td>
                <td><?= h($teame->avatare_path) ?></td>
                <td><?= $this->Number->format($teame->valide) ?></td>
                <td><?= h($teame->modified) ?></td>
                <td><?= h($teame->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $teame->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teame->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teame->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teame->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
