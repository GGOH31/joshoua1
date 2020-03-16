<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PortType[]|\Cake\Collection\CollectionInterface $portTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Port Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Portfolios'), ['controller' => 'Portfolios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Portfolio'), ['controller' => 'Portfolios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="portTypes index large-9 medium-8 columns content">
    <h3><?= __('Port Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('decription') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($portTypes as $portType): ?>
            <tr>
                <td><?= $this->Number->format($portType->id) ?></td>
                <td><?= h($portType->name) ?></td>
                <td><?= h($portType->decription) ?></td>
                <td><?= h($portType->created) ?></td>
                <td><?= h($portType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $portType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $portType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $portType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portType->id)]) ?>
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
