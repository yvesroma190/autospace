<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fournisseur[]|\Cake\Collection\CollectionInterface $fournisseurs
 */
?>
<div class="fournisseurs index content">
    <?= $this->Html->link(__('New Fournisseur'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Fournisseurs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('tel') ?></th>
                    <th><?= $this->Paginator->sort('cel') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('bp') ?></th>
                    <th><?= $this->Paginator->sort('adresse') ?></th>
                    <th><?= $this->Paginator->sort('ville_id') ?></th>
                    <th><?= $this->Paginator->sort('country_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fournisseurs as $fournisseur): ?>
                <tr>
                    <td><?= $this->Number->format($fournisseur->id) ?></td>
                    <td><?= h($fournisseur->name) ?></td>
                    <td><?= h($fournisseur->tel) ?></td>
                    <td><?= h($fournisseur->cel) ?></td>
                    <td><?= h($fournisseur->email) ?></td>
                    <td><?= h($fournisseur->bp) ?></td>
                    <td><?= h($fournisseur->adresse) ?></td>
                    <td><?= $fournisseur->has('ville') ? $this->Html->link($fournisseur->ville->name, ['controller' => 'Villes', 'action' => 'view', $fournisseur->ville->id]) : '' ?></td>
                    <td><?= $fournisseur->has('country') ? $this->Html->link($fournisseur->country->name, ['controller' => 'Countries', 'action' => 'view', $fournisseur->country->id]) : '' ?></td>
                    <td><?= h($fournisseur->created) ?></td>
                    <td><?= h($fournisseur->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $fournisseur->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fournisseur->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fournisseur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fournisseur->id)]) ?>
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
