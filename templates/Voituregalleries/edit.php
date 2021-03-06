<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voituregallery $voituregallery
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $voituregallery->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $voituregallery->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Voituregalleries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="voituregalleries form content">
            <?= $this->Form->create($voituregallery) ?>
            <fieldset>
                <legend><?= __('Edit Voituregallery') ?></legend>
                <?php
                    echo $this->Form->control('voiture_id', ['options' => $voitures, 'empty' => true]);
                    echo $this->Form->control('photo');
                    echo $this->Form->control('path');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
