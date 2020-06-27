<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $voituregallery
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Voituregallery'), ['action' => 'edit', $voituregallery->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Voituregallery'), ['action' => 'delete', $voituregallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voituregallery->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Voituregalleries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Voituregallery'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="voituregalleries view content">
            <h3><?= h($voituregallery->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Voiture') ?></th>
                    <td><?= $voituregallery->has('voiture') ? $this->Html->link($voituregallery->voiture->name, ['controller' => 'Voitures', 'action' => 'view', $voituregallery->voiture->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($voituregallery->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($voituregallery->path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($voituregallery->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($voituregallery->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($voituregallery->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
