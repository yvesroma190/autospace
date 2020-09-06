<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usergroup $usergroup
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usergroup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usergroup->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Usergroups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usergroups form content">
            <?= $this->Form->create($usergroup) ?>
            <fieldset>
                <legend><?= __('Edit Usergroup') ?></legend>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Groupes</a> <a href="#" class="current">Modifier le groupe</a> </div>
	<h1>Gestion des Groupes</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Liste des groupes'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
		<?= $this->Form->postLink(
			__('Supprimer'),
			['action' => 'delete', $usergroup->id],
			['confirm' => __('Voulez-vous supprimer ce groupe? # {0}?', $usergroup->id), 'class' => 'btn btn-danger']
		) ?>
		
	
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span2"></div>
	  <div class="span8">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			  <h5>Modifier le groupe</h5>
			</div>
			<div class="widget-content nopadding">
			<?= $this->Form->create($usergroup, ['class' => 'form-horizontal']) ?>
				<label class="control-label">Nom du groupe :</label>
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

