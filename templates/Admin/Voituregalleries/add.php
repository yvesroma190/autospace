<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voituregallery $voituregallery
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Voituregalleries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="voituregalleries form content">
            <?= $this->Form->create($voituregallery) ?>
            <fieldset>
                <legend><?= __('Add Voituregallery') ?></legend>
                <?php
                    echo $this->Form->control('voiture_id', ['options' => $voitures, 'empty' => true]);
                    echo $this->Form->control('photo');
                    echo $this->Form->control('path');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->


<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Gallerie de voitures</a> <a href="#" class="current">Ajouter une image</a> </div>
	<h1>Gestion de la gallerie</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Liste des voitures'), ['controller' => 'Voitures', 'action' => 'index'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span2"></div>
	  <div class="span8">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			  <h5>Ajouter une image</h5>
			</div>
			<div class="widget-content nopadding">
			<?= $this->Form->create($piecegallery, ['type'=>'file', 'class' => 'form-horizontal']) ?>
				<div class="control-group">
				  <label class="control-label">Nom de la voiture :</label>
				  <div class="controls">
					<?= $this->Form->control('voiture_id', ['options' => $voitures, 'class' => 'span11', 'label' => '', 'readonly']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Photo :</label>
				  <div class="controls">
					<?= $this->Form->control('image_file', ['class'=>'', 'type'=>'file', 'label'=>'']); ?>
				  </div>
				</div>
				<!-- <div class="control-group">
				  <label class="control-label">Path :</label>
				  <div class="controls">
					<?= $this->Form->control('path', ['type' => 'hidden', 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div> -->
				<div class="form-actions">
					<?= $this->Form->button(__('Valider', ['class' => 'btn btn-success'])) ?>
				</div>
			  <?= $this->Form->end() ?>
			</div>
		  </div>
	  </div>
	</div>
</div>
