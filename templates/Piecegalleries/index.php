<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Piecegallery[]|\Cake\Collection\CollectionInterface $piecegalleries
 */
?>
<div class="piecegalleries index content">
    <?= $this->Html->link(__('New Piecegallery'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Piecegalleries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('piece_id') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('path') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($piecegalleries as $piecegallery): ?>
                <tr>
                    <td><?= $this->Number->format($piecegallery->id) ?></td>
                    <td><?= $piecegallery->has('piece') ? $this->Html->link($piecegallery->piece->name, ['controller' => 'Pieces', 'action' => 'view', $piecegallery->piece->id]) : '' ?></td>
                    <td><?= h($piecegallery->photo) ?></td>
                    <td><?= h($piecegallery->path) ?></td>
                    <td><?= h($piecegallery->created) ?></td>
                    <td><?= h($piecegallery->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $piecegallery->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $piecegallery->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $piecegallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piecegallery->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
