<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fournisseur $fournisseur
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fournisseur->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fournisseur->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Fournisseurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fournisseurs form content">
            <?= $this->Form->create($fournisseur) ?>
            <fieldset>
                <legend><?= __('Edit Fournisseur') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('cel');
                    echo $this->Form->control('email');
                    echo $this->Form->control('bp');
                    echo $this->Form->control('adresse');
                    echo $this->Form->control('ville_id', ['options' => $villes]);
                    echo $this->Form->control('country_id', ['options' => $countries]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->


<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Fournisseurs</a> <a href="#" class="current">Modifier le fournisseur</a> </div>
	<h1>Gestion des Fournisseurs</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid
		<?= $this->Form->postLink(
			__('Supprimer'),
			['action' => 'delete', $fournisseur->id],
			['confirm' => __('Voulez-vous supprimer ce fournisseur? # {0}?', $fournisseur->id), 'class' => 'btn btn-primary']
		) ?>
		<?= $this->Html->link(__('Liste des Fournisseurs'), ['action' => 'index'], ['class' => 'btn btn-danger']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span2"></div>
	  <div class="span8">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			  <h5>Modifier le fournisseur</h5>
			</div>
			<div class="widget-content nopadding">
			<?= $this->Form->create($fournisseur, ['class' => 'form-horizontal']) ?>
				<div class="control-group">
				  <label class="control-label">Nom :</label>
				  <div class="controls">
					<?= $this->Form->control('name', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Tel :</label>
				  <div class="controls">
					<?= $this->Form->control('tel', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Cel :</label>
				  <div class="controls">
					<?= $this->Form->control('cel', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Email :</label>
				  <div class="controls">
					<?= $this->Form->control('email', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Boîte postale :</label>
				  <div class="controls">
					<?= $this->Form->control('bp', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Adresse :</label>
				  <div class="controls">
					<?= $this->Form->control('adresse', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Ville :</label>
				  <div class="controls">
					<?= $this->Form->control('ville_id', ['options' => $villes, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Pays :</label>
				  <div class="controls">
					<?= $this->Form->control('country_id', ['options' => $countries, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
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

