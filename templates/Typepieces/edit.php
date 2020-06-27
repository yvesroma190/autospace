<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typepiece $typepiece
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typepiece->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typepiece->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Typepieces'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="typepieces form content">
            <?= $this->Form->create($typepiece) ?>
            <fieldset>
                <legend><?= __('Edit Typepiece') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
