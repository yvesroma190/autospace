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
            <?= $this->Html->link(__('Edit Achat'), ['action' => 'edit', $achat->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Achat'), ['action' => 'delete', $achat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $achat->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Achats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Achat'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="achats view content">
            <h3><?= h($achat->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $achat->has('client') ? $this->Html->link($achat->client->name, ['controller' => 'Clients', 'action' => 'view', $achat->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Piece') ?></th>
                    <td><?= $achat->has('piece') ? $this->Html->link($achat->piece->name, ['controller' => 'Pieces', 'action' => 'view', $achat->piece->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($achat->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qte') ?></th>
                    <td><?= $this->Number->format($achat->qte) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pt') ?></th>
                    <td><?= $this->Number->format($achat->pt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($achat->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($achat->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($achat->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div> -->


<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Achats</a><a href="#" class="current">Détails</a> </div>
	<h1>Gestion des Achats</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
        <?= $this->Html->link(__('Modifier l\'achat'), ['action' => 'edit', $achat->id], ['class' => 'btn btn-success']) ?>
        <?= $this->Form->postLink(__('Supprimer l\'achat'), ['action' => 'delete', $achat->id], ['confirm' => __('Voulez-vous supprimer cet achat? # {0}?', $achat->id), 'class' => 'btn btn-danger']) ?>
        <?= $this->Html->link(__('Liste des Achats'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
        <?= $this->Html->link(__('Ajouter un Achat'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Détails de l'achat</h5>
		  </div>
		  <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $achat->has('client') ? $this->Html->link($achat->client->name, ['controller' => 'Clients', 'action' => 'view', $achat->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Piece') ?></th>
                    <td><?= $achat->has('piece') ? $this->Html->link($achat->piece->name, ['controller' => 'Pieces', 'action' => 'view', $achat->piece->id]) : '' ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($achat->id) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Qte') ?></th>
                    <td><?= $this->Number->format($achat->qte) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pt') ?></th>
                    <td><?= $this->Number->format($achat->pt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($achat->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($achat->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($achat->modified) ?></td>
                </tr>
            </table>
		  </div>
        </div>
	</div>
</div>
