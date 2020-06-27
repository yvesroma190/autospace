<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ville[]|\Cake\Collection\CollectionInterface $villes
 */
?>
<div class="villes index content">
    <?= $this->Html->link(__('New Ville'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Villes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('country_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($villes as $ville): ?>
                <tr>
                    <td><?= $this->Number->format($ville->id) ?></td>
                    <td><?= $ville->has('country') ? $this->Html->link($ville->country->name, ['controller' => 'Countries', 'action' => 'view', $ville->country->id]) : '' ?></td>
                    <td><?= h($ville->name) ?></td>
                    <td><?= h($ville->created) ?></td>
                    <td><?= h($ville->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ville->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ville->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ville->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ville->id)]) ?>
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
