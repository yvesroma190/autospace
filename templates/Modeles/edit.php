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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $modele->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $modele->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Modeles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modeles form content">
            <?= $this->Form->create($modele) ?>
            <fieldset>
                <legend><?= __('Edit Modele') ?></legend>
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
