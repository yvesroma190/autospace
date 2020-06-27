<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $piecegallery
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Piecegalleries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="piecegalleries form content">
            <?= $this->Form->create($piecegallery) ?>
            <fieldset>
                <legend><?= __('Add Piecegallery') ?></legend>
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
