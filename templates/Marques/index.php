<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marque[]|\Cake\Collection\CollectionInterface $marques
 */
?>
<div class="marques index content">
    <?= $this->Html->link(__('New Marque'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Marques') ?></h3>
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
                <?php foreach ($marques as $marque): ?>
                <tr>
                    <td><?= $this->Number->format($marque->id) ?></td>
                    <td><?= h($marque->name) ?></td>
                    <td><?= h($marque->created) ?></td>
                    <td><?= h($marque->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $marque->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $marque->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $marque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marque->id)]) ?>
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
