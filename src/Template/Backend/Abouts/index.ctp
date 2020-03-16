<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About[]|\Cake\Collection\CollectionInterface $abouts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New About'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="abouts index large-9 medium-8 columns content">
    <h3><?= __('Abouts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_path') ?></th>
                <th scope="col"><?= $this->Paginator->sort('video_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('video_path') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subicone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valide') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($abouts as $about): ?>
            <tr>
                <td><?= $this->Number->format($about->id) ?></td>
                <td><?= h($about->image_name) ?></td>
                <td><?= h($about->image_path) ?></td>
                <td><?= h($about->video_name) ?></td>
                <td><?= h($about->video_path) ?></td>
                <td><?= h($about->subicone) ?></td>
                <td><?= $this->Number->format($about->valide) ?></td>
                <td><?= h($about->created) ?></td>
                <td><?= h($about->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $about->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $about->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $about->id], ['confirm' => __('Are you sure you want to delete # {0}?', $about->id)]) ?>
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
