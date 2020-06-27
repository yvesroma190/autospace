<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mode[]|\Cake\Collection\CollectionInterface $modes
 */
?>
<div class="modes index content">
    <?= $this->Html->link(__('New Mode'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Modes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($modes as $mode): ?>
                <tr>
                    <td><?= $this->Number->format($mode->id) ?></td>
                    <td><?= h($mode->name) ?></td>
                    <td><?= h($mode->created) ?></td>
                    <td><?= h($mode->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mode->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mode->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mode->id)]) ?>
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
