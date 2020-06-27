<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $achat
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $achat->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $achat->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Achats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="achats form content">
            <?= $this->Form->create($achat) ?>
            <fieldset>
                <legend><?= __('Edit Achat') ?></legend>
                <?php
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    echo $this->Form->control('piece_id', ['options' => $pieces, 'empty' => true]);
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('qte');
                    echo $this->Form->control('pt');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
