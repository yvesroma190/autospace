<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commande $commande
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Commande'), ['action' => 'edit', $commande->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Commande'), ['action' => 'delete', $commande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commande->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Commandes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Commande'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commandes view content">
            <h3><?= h($commande->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Voiture') ?></th>
                    <td><?= $commande->has('voiture') ? $this->Html->link($commande->voiture->name, ['controller' => 'Voitures', 'action' => 'view', $commande->voiture->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $commande->has('client') ? $this->Html->link($commande->client->name, ['controller' => 'Clients', 'action' => 'view', $commande->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($commande->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($commande->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($commande->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($commande->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
