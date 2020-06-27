<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modele $modele
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Modeles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modeles form content">
            <?= $this->Form->create($modele) ?>
            <fieldset>
                <legend><?= __('Add Modele') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('marque_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
