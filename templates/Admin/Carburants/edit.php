<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carburant $carburant
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carburant->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carburant->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Carburants'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carburants form content">
            <?= $this->Form->create($carburant) ?>
            <fieldset>
                <legend><?= __('Edit Carburant') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->


<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Carburants</a> <a href="#" class="current">Modifier le carburant</a> </div>
	<h1>Gestion des Carburants</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Liste des Carburants'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
		<?= $this->Form->postLink(
			__('Supprimer'),
			['action' => 'delete', $carburant->id],
			['confirm' => __('Voulez-vous supprimer ce carburant? # {0}?', $carburant->id), 'class' => 'btn btn-danger']
		) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span2"></div>
	  <div class="span8">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			  <h5>Modifier le carburant</h5>
			</div>
			<div class="widget-content nopadding">
			<?= $this->Form->create($carburant, ['class' => 'form-horizontal']) ?>
				<div class="control-group">
				  <label class="control-label">Nom carburant :</label>
				  <div class="controls">
					<?= $this->Form->control('name', ['class' => 'span11', 'label' => '']); ?>
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

