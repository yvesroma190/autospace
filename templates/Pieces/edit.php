<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Piece $piece
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $piece->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $piece->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pieces'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pieces form content">
            <?= $this->Form->create($piece) ?>
            <fieldset>
                <legend><?= __('Edit Piece') ?></legend>
                <?php
                    echo $this->Form->control('photo');
                    echo $this->Form->control('name');
                    echo $this->Form->control('typepiece_id', ['options' => $typepieces, 'empty' => true]);
                    echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
                    echo $this->Form->control('modele_id', ['options' => $modeles, 'empty' => true]);
                    echo $this->Form->control('marque_id', ['options' => $marques, 'empty' => true]);
                    echo $this->Form->control('prix');
                    echo $this->Form->control('etat_id', ['options' => $etats, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
