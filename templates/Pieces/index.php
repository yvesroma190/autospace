<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Piece[]|\Cake\Collection\CollectionInterface $pieces
 */
?>
<div class="pieces index content">
    <?= $this->Html->link(__('New Piece'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pieces') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('typepiece_id') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th><?= $this->Paginator->sort('modele_id') ?></th>
                    <th><?= $this->Paginator->sort('marque_id') ?></th>
                    <th><?= $this->Paginator->sort('prix') ?></th>
                    <th><?= $this->Paginator->sort('etat_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pieces as $piece): ?>
                <tr>
                    <td><?= $this->Number->format($piece->id) ?></td>
                    <td><?= h($piece->photo) ?></td>
                    <td><?= h($piece->name) ?></td>
                    <td><?= $piece->has('typepiece') ? $this->Html->link($piece->typepiece->name, ['controller' => 'Typepieces', 'action' => 'view', $piece->typepiece->id]) : '' ?></td>
                    <td><?= $piece->has('category') ? $this->Html->link($piece->category->name, ['controller' => 'Categories', 'action' => 'view', $piece->category->id]) : '' ?></td>
                    <td><?= $piece->has('modele') ? $this->Html->link($piece->modele->name, ['controller' => 'Modeles', 'action' => 'view', $piece->modele->id]) : '' ?></td>
                    <td><?= $piece->has('marque') ? $this->Html->link($piece->marque->name, ['controller' => 'Marques', 'action' => 'view', $piece->marque->id]) : '' ?></td>
                    <td><?= $this->Number->format($piece->prix) ?></td>
                    <td><?= $piece->has('etat') ? $this->Html->link($piece->etat->name, ['controller' => 'Etats', 'action' => 'view', $piece->etat->id]) : '' ?></td>
                    <td><?= h($piece->created) ?></td>
                    <td><?= h($piece->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $piece->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $piece->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $piece->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piece->id)]) ?>
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
