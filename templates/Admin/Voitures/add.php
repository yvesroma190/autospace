<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voiture $voiture
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Voitures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="voitures form content">
            <?= $this->Form->create($voiture) ?>
            <fieldset>
                <legend><?= __('Add Voiture') ?></legend>
                <?php
                    echo $this->Form->control('photo');
                    echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
                    echo $this->Form->control('marque_id', ['options' => $marques, 'empty' => true]);
                    echo $this->Form->control('modele_id', ['options' => $modeles, 'empty' => true]);
                    echo $this->Form->control('mode_id', ['options' => $modes, 'empty' => true]);
                    echo $this->Form->control('etat_id', ['options' => $etats, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('immatriculation');
                    echo $this->Form->control('carburant_id', ['options' => $carburants, 'empty' => true]);
                    echo $this->Form->control('vitesse');
                    echo $this->Form->control('kilometrage');
                    echo $this->Form->control('annee');
                    echo $this->Form->control('detail');
                    echo $this->Form->control('concessionnaire_id', ['options' => $concessionnaires, 'empty' => true]);
                    echo $this->Form->control('prix');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->


<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Voitures</a> <a href="#" class="current">Ajouter une voiture</a> </div>
	<h1>Gestion des Voitures</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Liste des Voitures'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span2"></div>
	  <div class="span8">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			  <h5>Ajouter une voiture</h5>
			</div>
			<div class="widget-content nopadding">
			  <?= $this->Form->create($voiture, ['type'=>'file', 'class' => 'form-horizontal']) ?>
				<div class="control-group">
				  <label class="control-label">Photo :</label>
				  <div class="controls">
					<?= $this->Form->control('image_file', ['class'=>'', 'type'=>'file', 'label'=>'']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Catégorie :</label>
				  <div class="controls">
					<?= $this->Form->control('category_id', ['options' => $categories, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Marque :</label>
				  <div class="controls">
					<?= $this->Form->control('marque_id', ['options' => $marques, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Modèle :</label>
				  <div class="controls">
					<?= $this->Form->control('modele_id', ['options' => $modeles, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Mode de vente :</label>
				  <div class="controls">
					<?= $this->Form->control('mode_id', ['options' => $modes, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Etat de vente :</label>
				  <div class="controls">
					<?= $this->Form->control('etat_id', ['options' => $etats, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Nom de la voiture :</label>
				  <div class="controls">
					<?= $this->Form->control('name', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Immatriculation :</label>
				  <div class="controls">
					<?= $this->Form->control('immatriculation', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Carburant :</label>
				  <div class="controls">
					<?= $this->Form->control('carburant_id', ['options' => $carburants, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				  <div class="control-group">
				  <label class="control-label">Vitesse :</label>
				  <div class="controls">
					<?= $this->Form->control('vitesse', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Kilométrage :</label>
				  <div class="controls">
					<?= $this->Form->control('kilometrage', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Année :</label>
				  <div class="controls">
					<?= $this->Form->control('annee', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Détails :</label>
				  <div class="controls">
					<?= $this->Form->control('detail', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Prix :</label>
				  <div class="controls">
					<?= $this->Form->control('prix', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Concessionnaire :</label>
				  <div class="controls">
					<?= $this->Form->control('concessionnaire_id', ['options' => $concessionnaires, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="form-actions">
					<?= $this->Form->button(__('Valider', ['class' => 'btn btn-success'])) ?>
				</div>
			  <?= $this->Form->end() ?>
			</div>
		  </div>
	  </div>
	</div>
</div>
