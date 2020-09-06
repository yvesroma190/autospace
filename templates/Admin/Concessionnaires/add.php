<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Concessionnaire $concessionnaire
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Concessionnaires'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="concessionnaires form content">
            <?= $this->Form->create($concessionnaire) ?>
            <fieldset>
                <legend><?= __('Add Concessionnaire') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('cel');
                    echo $this->Form->control('email');
                    echo $this->Form->control('adresse');
                    echo $this->Form->control('bp');
                    echo $this->Form->control('country_id', ['options' => $countries, 'empty' => true]);
                    echo $this->Form->control('ville_id', ['options' => $villes, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->

<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Concessionnaires</a> <a href="#" class="current">Ajouter un concesionnaire</a> </div>
	<h1>Gestion des Concessionnaires</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Liste des Concesionnaires'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span2"></div>
	  <div class="span8">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			  <h5>Ajouter un concessionnaire</h5>
			</div>
			<div class="widget-content nopadding">
			<?= $this->Form->create($concessionnaire, ['class' => 'form-horizontal']) ?>
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
				  <label class="control-label">Adresse :</label>
				  <div class="controls">
					<?= $this->Form->control('adresse', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Boîte postale :</label>
				  <div class="controls">
					<?= $this->Form->control('bp', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Pays :</label>
				  <div class="controls">
					<?= $this->Form->control('country_id', ['options' => $countries, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Ville :</label>
				  <div class="controls">
					<?= $this->Form->control('ville_id', ['options' => $villes, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
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
