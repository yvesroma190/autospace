<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Piece $piece
 */
?>
<!-- <div class="row">
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
                    echo $this->Form->control('fournisseur_id', ['options' => $fournisseurs]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->


<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Pièces détachées</a> <a href="#" class="current">Modifier la pièce détachée</a> </div>
	<h1>Gestion des Pièces détachées</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
        <?= $this->Html->link(__('Liste des Pièces détachées'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->postLink(
            __('Supprimer'),
            ['action' => 'delete', $piece->id],
            ['confirm' => __('Voulez-vous supprimer cette pièce? # {0}?', $piece->id), 'class' => 'btn btn-danger']
        ) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span2"></div>
	  <div class="span8">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			  <h5>Modifier la pièce détachée</h5>
			</div>
			<div class="widget-content nopadding">
			<?= $this->Form->create($piece, ['type'=>'file', 'class' => 'form-horizontal']) ?>
				<div class="control-group">
				  <label class="control-label">Photo :</label>
				  <div class="controls">
					<?= $this->Form->control('image_file', ['class'=>'', 'type'=>'file', 'label'=>'']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Nom :</label>
				  <div class="controls">
					<?= $this->Form->control('name', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Type de pièce :</label>
				  <div class="controls">
					<?= $this->Form->control('typepiece_id', ['options' => $typepieces, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Catégorie :</label>
				  <div class="controls">
					<?= $this->Form->control('category_id', ['options' => $categories, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Modèle :</label>
				  <div class="controls">
					<?= $this->Form->control('modele_id', ['options' => $modeles, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Marque :</label>
				  <div class="controls">
					<?= $this->Form->control('marque_id', ['options' => $marques, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Prix :</label>
				  <div class="controls">
					<?= $this->Form->control('prix', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Etat de vente :</label>
				  <div class="controls">
					<?= $this->Form->control('etat_id', ['options' => $etats, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Fournisseur :</label>
				  <div class="controls">
					<?= $this->Form->control('fournisseur_id', ['options' => $fournisseurs, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="form-actions">
					<?= $this->Form->button(__('Modifier', ['class' => 'btn btn-success'])) ?>
				</div>
			  <?= $this->Form->end() ?>
			</div>
		  </div>
	  </div>
	</div>
</div>

