<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voiture $voiture
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Voitures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="voitures form content">
            <?= $this->Form->create($voiture) ?>
            <fieldset>
                <legend><?= __('Add Voiture') ?></legend>
                <?php
                    echo $this->Form->control('photo');
                    echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
                    echo $this->Form->control('marque_id', ['options' => $marques, 'empty' => true]);
                    echo $this->Form->control('modele_id', ['options' => $modeles, 'empty' => true]);
                    echo $this->Form->control('mode_id', ['options' => $modes, 'empty' => true]);
                    echo $this->Form->control('etat_id', ['options' => $etats, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('immatriculation');
                    echo $this->Form->control('carburant_id', ['options' => $carburants, 'empty' => true]);
                    echo $this->Form->control('vitesse');
                    echo $this->Form->control('kilometrage');
                    echo $this->Form->control('annee');
                    echo $this->Form->control('detail');
                    echo $this->Form->control('concessionnaire_id', ['options' => $concessionnaires, 'empty' => true]);
                    echo $this->Form->control('prix');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
