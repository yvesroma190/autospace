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
            <?= $this->Html->link(__('List Pieces'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pieces form content">
            <?= $this->Form->create($piece) ?>
            <fieldset>
                <legend><?= __('Add Piece') ?></legend>
                <?php
                    echo $this->Form->control('photo');
                    echo $this->Form->control('name');
                    echo $this->Form->control('typepiece_id', ['options' => $typepieces, 'empty' => true]);
                    echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
                    echo $this->Form->control('modele_id', ['options' => $modeles, 'empty' => true]);
                    echo $this->Form->control('marque_id', ['options' => $marques, 'empty' => true]);
                    echo $this->Form->control('prix');
                    echo $this->Form->control('etat_id', ['options' => $etats, 'empty' => true]);
                    echo $this->Form->control('fournisseur_id', ['options' => $fournisseurs]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
