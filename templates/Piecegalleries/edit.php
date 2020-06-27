<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Piecegallery $piecegallery
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $piecegallery->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $piecegallery->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Piecegalleries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="piecegalleries form content">
            <?= $this->Form->create($piecegallery) ?>
            <fieldset>
                <legend><?= __('Edit Piecegallery') ?></legend>
                <?php
                    echo $this->Form->control('piece_id', ['options' => $pieces, 'empty' => true]);
                    echo $this->Form->control('photo');
                    echo $this->Form->control('path');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
