<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Concessionnaire $concessionnaire
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Concessionnaires'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="concessionnaires form content">
            <?= $this->Form->create($concessionnaire) ?>
            <fieldset>
                <legend><?= __('Add Concessionnaire') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('cel');
                    echo $this->Form->control('email');
                    echo $this->Form->control('adresse');
                    echo $this->Form->control('bp');
                    echo $this->Form->control('country_id');
                    echo $this->Form->control('ville_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
