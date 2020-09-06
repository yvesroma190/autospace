<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commande $commande
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Commande'), ['action' => 'edit', $commande->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Commande'), ['action' => 'delete', $commande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commande->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Commandes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Commande'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commandes view content">
            <h3><?= h($commande->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Voiture') ?></th>
                    <td><?= $commande->has('voiture') ? $this->Html->link($commande->voiture->name, ['controller' => 'Voitures', 'action' => 'view', $commande->voiture->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $commande->has('client') ? $this->Html->link($commande->client->name, ['controller' => 'Clients', 'action' => 'view', $commande->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($commande->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pt') ?></th>
                    <td><?= $this->Number->format($commande->pt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($commande->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($commande->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($commande->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div> -->


<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Commandes</a><a href="#" class="current">Détails</a> </div>
	<h1>Gestion des Commandes</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
        <?= $this->Html->link(__('Modifier la commande'), ['action' => 'edit', $commande->id], ['class' => 'btn btn-success']) ?>
        <?= $this->Form->postLink(__('Supprimer la Commande'), ['action' => 'delete', $commande->id], ['confirm' => __('Voulez-vous supprimer cette commande? # {0}?', $commande->id), 'class' => 'btn btn-danger']) ?>
        <?= $this->Html->link(__('Liste des Commandes'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
        <?= $this->Html->link(__('Ajouter une Commande'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Détails de la commandes</h5>
		  </div>
		  <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
                <tr>
                    <th><?= __('Voiture') ?></th>
                    <td><?= $commande->has('voiture') ? $this->Html->link($commande->voiture->name, ['controller' => 'Voitures', 'action' => 'view', $commande->voiture->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $commande->has('client') ? $this->Html->link($commande->client->name, ['controller' => 'Clients', 'action' => 'view', $commande->client->id]) : '' ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($commande->id) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Pt') ?></th>
                    <td><?= $this->Number->format($commande->pt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($commande->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($commande->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($commande->modified) ?></td>
                </tr>
            </table>
		  </div>
        </div>
        
        <div class="widget-box">
            <h4><?= __('Clients Associés') ?></h4>
            <?php if (!empty($ville->clients)) : ?>
            <div class="table table-bordered table-striped">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Nom et prénoms') ?></th>
                        <th><?= __('Tel') ?></th>
                        <th><?= __('Cel') ?></th>
                        <th><?= __('Email') ?></th>
                        <th><?= __('Adresse') ?></th>
                        <th><?= __('Ville Id') ?></th>
                        <th><?= __('Country Id') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($ville->clients as $clients) : ?>
                    <tr>
                        <td><?= h($clients->id) ?></td>
                        <td><?= h($clients->name) ?></td>
                        <td><?= h($clients->tel) ?></td>
                        <td><?= h($clients->cel) ?></td>
                        <td><?= h($clients->email) ?></td>
                        <td><?= h($clients->adresse) ?></td>
                        <td><?= h($clients->ville_id) ?></td>
                        <td><?= h($clients->country_id) ?></td>
                        <td><?= h($clients->created) ?></td>
                        <td><?= h($clients->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Détails'), ['controller' => 'Clients', 'action' => 'view', $clients->id]) ?>
                            <?= $this->Html->link(__('Modifier'), ['controller' => 'Clients', 'action' => 'edit', $clients->id]) ?>
                            <?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Clients', 'action' => 'delete', $clients->id], ['confirm' => __('Voulez-vous supprimer ce client? # {0}?', $clients->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php endif; ?>
            </div>
	  </div>
	</div>
</div>
