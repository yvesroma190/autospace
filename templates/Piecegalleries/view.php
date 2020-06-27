<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Piecegallery $piecegallery
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Piecegallery'), ['action' => 'edit', $piecegallery->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Piecegallery'), ['action' => 'delete', $piecegallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piecegallery->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Piecegalleries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Piecegallery'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="piecegalleries view content">
            <h3><?= h($piecegallery->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Piece') ?></th>
                    <td><?= $piecegallery->has('piece') ? $this->Html->link($piecegallery->piece->name, ['controller' => 'Pieces', 'action' => 'view', $piecegallery->piece->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($piecegallery->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($piecegallery->path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($piecegallery->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($piecegallery->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($piecegallery->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
