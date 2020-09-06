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
            <?= $this->Html->link(__('Edit Voituregallery'), ['action' => 'edit', $voituregallery->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Voituregallery'), ['action' => 'delete', $voituregallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voituregallery->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Voituregalleries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Voituregallery'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="voituregalleries view content">
            <h3><?= h($voituregallery->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Voiture') ?></th>
                    <td><?= $voituregallery->has('voiture') ? $this->Html->link($voituregallery->voiture->name, ['controller' => 'Voitures', 'action' => 'view', $voituregallery->voiture->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($voituregallery->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($voituregallery->path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($voituregallery->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($voituregallery->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($voituregallery->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div> -->


<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Gallerie de voitures</a><a href="#" class="current">Détails</a> </div>
	<h1>Gestion de la gallerie</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
        <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $voituregallery->id], ['class' => 'btn btn-success']) ?>
        <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $voituregallery->id], ['confirm' => __('Voulez-vous supprimer cette image? # {0}?', $voituregallery->id), 'class' => 'btn btn-danger']) ?>
        <?= $this->Html->link(__('Liste des Voitures'), ['controller' => 'Voitures', 'action' => 'index'], ['class' => 'btn btn-info']) ?>
        <!-- <?= $this->Html->link(__('Ajouter une image'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?> -->
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Détails de l'image</h5>
		  </div>
		  <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
                <tr>
                    <th><?= __('Voiture') ?></th>
                    <td><?= $voituregallery->has('voiture') ? $this->Html->link($voituregallery->voiture->name, ['controller' => 'Voitures', 'action' => 'view', $voituregallery->voiture->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= @$this->Html->image($voituregallery->photo, ['style'=>'width:200px; heigth:200px']) ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($voituregallery->path) ?></td>
                </tr> -->
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($voituregallery->id) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($voituregallery->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($voituregallery->modified) ?></td>
                </tr>
            </table>
		  </div>
        </div>
	  </div>
	</div>
</div>

