<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Piecegallery $piecegallery
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Piecegalleries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="piecegalleries form content">
            <?= $this->Form->create($piecegallery) ?>
            <fieldset>
                <legend><?= __('Add Piecegallery') ?></legend>
                <?php
                    echo $this->Form->control('piece_id', ['options' => $pieces, 'empty' => true]);
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Gallerie de pièces détachées</a> <a href="#" class="current">Ajouter une image</a> </div>
	<h1>Gestion de la gallerie</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Liste des pièces'), ['controller' => 'Pieces', 'action' => 'index'], ['class' => 'btn btn-primary']) ?>
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
				  <label class="control-label">Nom de la pièce :</label>
				  <div class="controls">
					<?= $this->Form->control('piece_id', ['options' => $pieces, 'class' => 'span11', 'label' => '', 'readonly']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Photo :</label>
				  <div class="controls">
					<?= $this->Form->control('image_file', ['class'=>'', 'type'=>'file', 'label'=>'']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <!-- <label class="control-label">Path :</label> -->
				  <div class="controls">
					<?= $this->Form->control('path', ['type' => 'hidden', 'class' => 'span11', 'label' => '']); ?>
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
