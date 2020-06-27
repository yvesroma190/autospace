<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voituregallery[]|\Cake\Collection\CollectionInterface $voituregalleries
 */
?>
<div class="voituregalleries index content">
    <?= $this->Html->link(__('New Voituregallery'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Voituregalleries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('voiture_id') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('path') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($voituregalleries as $voituregallery): ?>
                <tr>
                    <td><?= $this->Number->format($voituregallery->id) ?></td>
                    <td><?= $voituregallery->has('voiture') ? $this->Html->link($voituregallery->voiture->name, ['controller' => 'Voitures', 'action' => 'view', $voituregallery->voiture->id]) : '' ?></td>
                    <td><?= h($voituregallery->photo) ?></td>
                    <td><?= h($voituregallery->path) ?></td>
                    <td><?= h($voituregallery->created) ?></td>
                    <td><?= h($voituregallery->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $voituregallery->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $voituregallery->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $voituregallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voituregallery->id)]) ?>
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
