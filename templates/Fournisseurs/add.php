<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fournisseur $fournisseur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Fournisseurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fournisseurs form content">
            <?= $this->Form->create($fournisseur) ?>
            <fieldset>
                <legend><?= __('Add Fournisseur') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('cel');
                    echo $this->Form->control('email');
                    echo $this->Form->control('bp');
                    echo $this->Form->control('adresse');
                    echo $this->Form->control('ville_id', ['options' => $villes]);
                    echo $this->Form->control('country_id', ['options' => $countries]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
