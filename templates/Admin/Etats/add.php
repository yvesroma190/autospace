<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etat $etat
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Etats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="etats form content">
            <?= $this->Form->create($etat) ?>
            <fieldset>
                <legend><?= __('Add Etat') ?></legend>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Etat de vente</a> <a href="#" class="current">Ajouter un état de vente</a> </div>
	<h1>Gestion des Etats de vente</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
	    <?= $this->Html->link(__('Liste des Etats de vente'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span2"></div>
	  <div class="span8">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			  <h5>Ajouter un état de vente</h5>
			</div>
			<div class="widget-content nopadding">
			<?= $this->Form->create($etat, ['class' => 'form-horizontal']) ?>
				<div class="control-group">
				  <label class="control-label">Etat de vente :</label>
				  <div class="controls">
					<?= $this->Form->control('name', ['class' => 'span11', 'label' => '']); ?>
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
