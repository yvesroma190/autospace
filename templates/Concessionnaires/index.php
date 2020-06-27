<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Concessionnaire[]|\Cake\Collection\CollectionInterface $concessionnaires
 */
?>
<div class="concessionnaires index content">
    <?= $this->Html->link(__('New Concessionnaire'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Concessionnaires') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('tel') ?></th>
                    <th><?= $this->Paginator->sort('cel') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('adresse') ?></th>
                    <th><?= $this->Paginator->sort('bp') ?></th>
                    <th><?= $this->Paginator->sort('country_id') ?></th>
                    <th><?= $this->Paginator->sort('ville_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($concessionnaires as $concessionnaire): ?>
                <tr>
                    <td><?= $this->Number->format($concessionnaire->id) ?></td>
                    <td><?= h($concessionnaire->name) ?></td>
                    <td><?= h($concessionnaire->tel) ?></td>
                    <td><?= h($concessionnaire->cel) ?></td>
                    <td><?= h($concessionnaire->email) ?></td>
                    <td><?= h($concessionnaire->adresse) ?></td>
                    <td><?= h($concessionnaire->bp) ?></td>
                    <td><?= h($concessionnaire->country_id) ?></td>
                    <td><?= h($concessionnaire->ville_id) ?></td>
                    <td><?= h($concessionnaire->created) ?></td>
                    <td><?= h($concessionnaire->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $concessionnaire->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $concessionnaire->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $concessionnaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $concessionnaire->id)]) ?>
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
