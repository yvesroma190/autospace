<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Achat $achat
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Achats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="achats form content">
            <?= $this->Form->create($achat) ?>
            <fieldset>
                <legend><?= __('Add Achat') ?></legend>
                <?php
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    echo $this->Form->control('piece_id', ['options' => $pieces, 'empty' => true]);
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('qte');
                    echo $this->Form->control('pt');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->


<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Achats</a> <a href="#" class="current">Faire un achat</a> </div>
	<h1>Gestion des Achats</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Liste des Achats'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span2"></div>
	  <div class="span8">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			  <h5>Faire une ville</h5>
			</div>
			<div class="widget-content nopadding">
			<?= $this->Form->create($achat, ['class' => 'form-horizontal']) ?>
				<div class="control-group">
				  <label class="control-label">Client :</label>
				  <div class="controls">
					<?= $this->Form->control('client_id', ['options' => $clients, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Pièce :</label>
				  <div class="controls">
					<?= $this->Form->control('piece_id', ['options' => $pieces, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Date achat :</label>
				  <div class="controls">
					<?= $this->Form->control('date', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Quantité :</label>
				  <div class="controls">
					<?= $this->Form->control('qte', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Prix total :</label>
				  <div class="controls">
					<?= $this->Form->control('pt', ['class' => 'span11', 'label' => '']); ?>
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
