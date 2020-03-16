<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PortType $portType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Port Type'), ['action' => 'edit', $portType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Port Type'), ['action' => 'delete', $portType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Port Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Port Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Portfolios'), ['controller' => 'Portfolios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Portfolio'), ['controller' => 'Portfolios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="portTypes view large-9 medium-8 columns content">
    <h3><?= h($portType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($portType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Decription') ?></th>
            <td><?= h($portType->decription) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($portType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($portType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($portType->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Portfolios') ?></h4>
        <?php if (!empty($portType->portfolios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Port Type Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Imagename') ?></th>
                <th scope="col"><?= __('Imagepath') ?></th>
                <th scope="col"><?= __('Valide') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($portType->portfolios as $portfolios): ?>
            <tr>
                <td><?= h($portfolios->id) ?></td>
                <td><?= h($portfolios->port_type_id) ?></td>
                <td><?= h($portfolios->title) ?></td>
                <td><?= h($portfolios->description) ?></td>
                <td><?= h($portfolios->imagename) ?></td>
                <td><?= h($portfolios->imagepath) ?></td>
                <td><?= h($portfolios->valide) ?></td>
                <td><?= h($portfolios->created) ?></td>
                <td><?= h($portfolios->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Portfolios', 'action' => 'view', $portfolios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Portfolios', 'action' => 'edit', $portfolios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Portfolios', 'action' => 'delete', $portfolios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portfolios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
