<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $country->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $country->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="countries form content">
            <?= $this->Form->create($country) ?>
            <fieldset>
                <legend><?= __('Edit Country') ?></legend>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#" class="current">Pays</a> <a href="#" class="current">Modifier le pays</a> </div>
	<h1>Gestion des Villes</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
	<?= $this->Html->link(__('Liste des Pays'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
	<?= $this->Form->postLink(
		__('Supprimer'),
		['action' => 'delete', $country->id],
		['confirm' => __('Voulez-vous supprimer cet pays? # {0}?', $country->id), 'class' => 'btn btn-danger']
	) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span2"></div>
	  <div class="span8">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			  <h5>Modifier le pays</h5>
			</div>
			<div class="widget-content nopadding">
			<?= $this->Form->create($country, ['class' => 'form-horizontal']) ?>
				<div class="control-group">
				  <label class="control-label">Nom Pays :</label>
				  <div class="controls">
					<?= $this->Form->control('name', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="form-actions">
					<?= $this->Form->button(__('Modifier', ['class' => 'btn btn-success'])) ?>
				</div>
			  <!-- </form> -->
			  <?= $this->Form->end() ?>
			</div>
		  </div>
	  </div>
	</div>
</div>

