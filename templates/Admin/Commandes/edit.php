<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commande $commande
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commande->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commande->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Commandes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commandes form content">
            <?= $this->Form->create($commande) ?>
            <fieldset>
                <legend><?= __('Edit Commande') ?></legend>
                <?php
                    echo $this->Form->control('voiture_id', ['options' => $voitures, 'empty' => true]);
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    echo $this->Form->control('pt');
                    echo $this->Form->control('date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->


<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Commandes</a> <a href="#" class="current">Modifier la commande</a> </div>
	<h1>Gestion des Commandes</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
        <?= $this->Html->link(__('Liste des Commandes'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->postLink(
            __('Supprimer'),
            ['action' => 'delete', $commande->id],
            ['confirm' => __('Voulez-vous supprimer cette ville? # {0}?', $commande->id), 'class' => 'btn btn-danger']
        ) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span2"></div>
	  <div class="span8">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			  <h5>Modifier la commande</h5>
			</div>
			<div class="widget-content nopadding">
			<?= $this->Form->create($commande, ['class' => 'form-horizontal']) ?>
				<div class="control-group">
				  <label class="control-label">Voiture :</label>
				  <div class="controls">
					<?= $this->Form->control('voiture_id', ['options' => $voitures, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Clients :</label>
				  <div class="controls">
					<?= $this->Form->control('client_id', ['options' => $clients, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Prix total :</label>
				  <div class="controls">
					<?= $this->Form->control('pt', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Date :</label>
				  <div class="controls">
					<?= $this->Form->control('date', ['class' => 'span11', 'label' => '']); ?>
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

