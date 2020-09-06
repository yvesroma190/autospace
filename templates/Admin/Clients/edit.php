<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $client->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $client->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Edit Client') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('cel');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('bp');
                    echo $this->Form->control('adresse');
                    echo $this->Form->control('ville_id', ['options' => $villes, 'empty' => true]);
                    echo $this->Form->control('country_id', ['options' => $countries, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->


<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Clients</a> <a href="#" class="current">Modifier le client</a> </div>
	<h1>Gestion des Clients</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
        <?= $this->Html->link(__('Liste des Clients'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->postLink(
            __('Supprimer'),
            ['action' => 'delete', $client->id],
            ['confirm' => __('Voulez-vous supprimer cet client? # {0}?', $client->id), 'class' => 'btn btn-danger']
        ) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span2"></div>
	  <div class="span8">
		<div class="widget-box">
			<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			  <h5>Modifier le client</h5>
			</div>
			<div class="widget-content nopadding">
			<?= $this->Form->create($client, ['class' => 'form-horizontal']) ?>
				<div class="control-group">
				  <label class="control-label">Nom et prénoms :</label>
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
				  <label class="control-label">Mot de passe :</label>
				  <div class="controls">
					<?= $this->Form->control('password', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Boîte postale :</label>
				  <div class="controls">
					<?= $this->Form->control('bp', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Adresse :</label>
				  <div class="controls">
					<?= $this->Form->control('adresse', ['class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Ville :</label>
				  <div class="controls">
					<?= $this->Form->control('ville_id', ['options' => $countries, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Pays :</label>
				  <div class="controls">
					<?= $this->Form->control('country_id', ['options' => $countries, 'empty' => true, 'class' => 'span11', 'label' => '']); ?>
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

