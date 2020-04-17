<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Portfolio[]|\Cake\Collection\CollectionInterface $portfolios
 */
?>
<div class="app-main__outer">
                    <div class="app-main__inner">

<div class="tab-content">
    <h3><?= __('Portfolios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('port_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagename') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagepath') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valide') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($portfolios as $portfolio): ?>
            <tr>
                <td><?= $this->Number->format($portfolio->id) ?></td>
                <td><?= $portfolio->has('port_type') ? $this->Html->link($portfolio->port_type->name, ['controller' => 'PortTypes', 'action' => 'view', $portfolio->port_type->id]) : '' ?></td>
                <td><?= h($portfolio->title) ?></td>
                <td><?= h($portfolio->imagename) ?></td>
                <td><?= h($portfolio->imagepath) ?></td>
                <td><?= $this->Number->format($portfolio->valide) ?></td>
                <td><?= h($portfolio->created) ?></td>
                <td><?= h($portfolio->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $portfolio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $portfolio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $portfolio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portfolio->id)]) ?>
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
</div>
