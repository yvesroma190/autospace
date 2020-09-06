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
            <?= $this->Html->link(__('Edit Piecegallery'), ['action' => 'edit', $piecegallery->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Piecegallery'), ['action' => 'delete', $piecegallery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piecegallery->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Piecegalleries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Piecegallery'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="piecegalleries view content">
            <h3><?= h($piecegallery->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Piece') ?></th>
                    <td><?= $piecegallery->has('piece') ? $this->Html->link($piecegallery->piece->name, ['controller' => 'Pieces', 'action' => 'view', $piecegallery->piece->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($piecegallery->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($piecegallery->path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($piecegallery->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($piecegallery->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($piecegallery->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div> -->





<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Gallerie de pièces détachées</a><a href="#" class="current">Détails</a> </div>
	<h1>Gestion de la gallerie</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
        <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $piecegallery->id], ['class' => 'btn btn-success']) ?>
        <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $piecegallery->id], ['confirm' => __('Voulez-vous supprimer cette image? # {0}?', $piecegallery->id), 'class' => 'btn btn-danger']) ?>
        <?= $this->Html->link(__('Liste des pièces'), ['controller' => 'Pieces', 'action' => 'index'], ['class' => 'btn btn-info']) ?>
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
                    <th><?= __('Pièce') ?></th>
                    <td><?= $piecegallery->has('piece') ? $this->Html->link($piecegallery->piece->name, ['controller' => 'Pieces', 'action' => 'view', $piecegallery->piece->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= @$this->Html->image($piecegallery->photo, ['style'=>'width:200px; heigth:200px']) ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($piecegallery->path) ?></td>
                </tr> -->
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($piecegallery->id) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($piecegallery->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($piecegallery->modified) ?></td>
                </tr>
            </table>
		  </div>
        </div>
	  </div>
	</div>
</div>
