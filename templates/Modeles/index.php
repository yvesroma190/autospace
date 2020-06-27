<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modele[]|\Cake\Collection\CollectionInterface $modeles
 */
?>
<div class="modeles index content">
    <?= $this->Html->link(__('New Modele'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Modeles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('marque_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($modeles as $modele): ?>
                <tr>
                    <td><?= $this->Number->format($modele->id) ?></td>
                    <td><?= h($modele->name) ?></td>
                    <td><?= h($modele->marque_id) ?></td>
                    <td><?= h($modele->created) ?></td>
                    <td><?= h($modele->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $modele->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $modele->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $modele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modele->id)]) ?>
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
