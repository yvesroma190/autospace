<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Piece $piece
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Piece'), ['action' => 'edit', $piece->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Piece'), ['action' => 'delete', $piece->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piece->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pieces'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Piece'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pieces view content">
            <h3><?= h($piece->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($piece->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($piece->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typepiece') ?></th>
                    <td><?= $piece->has('typepiece') ? $this->Html->link($piece->typepiece->name, ['controller' => 'Typepieces', 'action' => 'view', $piece->typepiece->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $piece->has('category') ? $this->Html->link($piece->category->name, ['controller' => 'Categories', 'action' => 'view', $piece->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Modele') ?></th>
                    <td><?= $piece->has('modele') ? $this->Html->link($piece->modele->name, ['controller' => 'Modeles', 'action' => 'view', $piece->modele->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Marque') ?></th>
                    <td><?= $piece->has('marque') ? $this->Html->link($piece->marque->name, ['controller' => 'Marques', 'action' => 'view', $piece->marque->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Etat') ?></th>
                    <td><?= $piece->has('etat') ? $this->Html->link($piece->etat->name, ['controller' => 'Etats', 'action' => 'view', $piece->etat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($piece->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= $this->Number->format($piece->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($piece->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($piece->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Achats') ?></h4>
                <?php if (!empty($piece->achats)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Piece Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Qte') ?></th>
                            <th><?= __('Pt') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($piece->achats as $achats) : ?>
                        <tr>
                            <td><?= h($achats->id) ?></td>
                            <td><?= h($achats->client_id) ?></td>
                            <td><?= h($achats->piece_id) ?></td>
                            <td><?= h($achats->date) ?></td>
                            <td><?= h($achats->qte) ?></td>
                            <td><?= h($achats->pt) ?></td>
                            <td><?= h($achats->created) ?></td>
                            <td><?= h($achats->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Achats', 'action' => 'view', $achats->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Achats', 'action' => 'edit', $achats->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Achats', 'action' => 'delete', $achats->id], ['confirm' => __('Are you sure you want to delete # {0}?', $achats->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Piecegalleries') ?></h4>
                <?php if (!empty($piece->piecegalleries)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Piece Id') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Path') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($piece->piecegalleries as $piecegalleries) : ?>
                        <tr>
                            <td><?= h($piecegalleries->id) ?></td>
                            <td><?= h($piecegalleries->piece_id) ?></td>
                            <td><?= h($piecegalleries->photo) ?></td>
                            <td><?= h($piecegalleries->path) ?></td>
                            <td><?= h($piecegalleries->created) ?></td>
                            <td><?= h($piecegalleries->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Piecegalleries', 'action' => 'view', $piecegalleries->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Piecegalleries', 'action' => 'edit', $piecegalleries->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Piecegalleries', 'action' => 'delete', $piecegalleries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piecegalleries->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
