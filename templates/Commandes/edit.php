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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commande->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commande->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Commandes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commandes form content">
            <?= $this->Form->create($commande) ?>
            <fieldset>
                <legend><?= __('Edit Commande') ?></legend>
                <?php
                    echo $this->Form->control('voiture_id', ['options' => $voitures, 'empty' => true]);
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    echo $this->Form->control('date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
