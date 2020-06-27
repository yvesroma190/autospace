<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marque $marque
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $marque->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $marque->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Marques'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="marques form content">
            <?= $this->Form->create($marque) ?>
            <fieldset>
                <legend><?= __('Edit Marque') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
