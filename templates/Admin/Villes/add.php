<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ville $ville
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Villes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="villes form content">
            <?= $this->Form->create($ville) ?>
            <fieldset>
                <legend><?= __('Add Ville') ?></legend>
                <?php
                    echo $this->Form->control('country_id', ['options' => $countries, 'empty' => true]);
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->


<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Villes</a> <a href="#" class="current">Ajouter une ville</a> </div>
	<h1>Gestion des Villes</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Liste des Villes'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span2"></div>
	  <div class="span8">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			  <h5>Ajouter une ville</h5>
			</div>
			<div class="widget-content nopadding">
			<?= $this->Form->create($ville, ['class' => 'form-horizontal']) ?>
			  <!-- <form action="#" method="get" class="form-horizontal"> -->
				<div class="control-group">
				  <label class="control-label">Nom Pays :</label>
				  <div class="controls">
					<?= $this->Form->control('country_id', ['options' => $countries, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
					<!-- <input type="text" class="span11" placeholder="First name"> -->
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Nom ville :</label>
				  <div class="controls">
					<?= $this->Form->control('name', ['class' => 'span11', 'label' => '']); ?>
					<!-- <input type="text" class="span11" placeholder="Last name"> -->
				  </div>
				</div>
				<div class="form-actions">
					<?= $this->Form->button(__('Valider', ['class' => 'btn btn-success'])) ?>
				  <!-- <button type="submit" class="btn btn-success">Valider</button> -->
				</div>
			  <!-- </form> -->
			  <?= $this->Form->end() ?>
			</div>
		  </div>
	  </div>
	</div>
</div>


