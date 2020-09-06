<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commande[]|\Cake\Collection\CollectionInterface $commandes
 */
?>
<!-- <div class="commandes index content">
    <?= $this->Html->link(__('New Commande'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Commandes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('voiture_id') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('pt') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($commandes as $commande): ?>
                <tr>
                    <td><?= $this->Number->format($commande->id) ?></td>
                    <td><?= $commande->has('voiture') ? $this->Html->link($commande->voiture->name, ['controller' => 'Voitures', 'action' => 'view', $commande->voiture->id]) : '' ?></td>
                    <td><?= $commande->has('client') ? $this->Html->link($commande->client->name, ['controller' => 'Clients', 'action' => 'view', $commande->client->id]) : '' ?></td>
                    <td><?= $this->Number->format($commande->pt) ?></td>
                    <td><?= h($commande->date) ?></td>
                    <td><?= h($commande->created) ?></td>
                    <td><?= h($commande->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $commande->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $commande->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commande->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div> -->



<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#" class="current">Commandes</a> </div>
	<h1>Gestion des Commandes</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Ajouter une Commande'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Liste des commandes</h5>
		  </div>
		  <div class="widget-content nopadding">
			<table class="table table-bordered table-striped">
			  <thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('voiture_id') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('pt') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
				</tr>
			  </thead>
			  <tbody>
                <?php foreach ($commandes as $commande): ?>
                <tr>
                    <td><?= $this->Number->format($commande->id) ?></td>
                    <td><?= $commande->has('voiture') ? $this->Html->link($commande->voiture->name, ['controller' => 'Voitures', 'action' => 'view', $commande->voiture->id]) : '' ?></td>
                    <td><?= $commande->has('client') ? $this->Html->link($commande->client->name, ['controller' => 'Clients', 'action' => 'view', $commande->client->id]) : '' ?></td>
                    <td><?= $this->Number->format($commande->pt) ?></td>
                    <td><?= h($commande->date) ?></td>
                    <td><?= h($commande->created) ?></td>
                    <td><?= h($commande->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Détails'), ['action' => 'view', $commande->id]) ?>
                        <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $commande->id]) ?>
                        <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $commande->id], ['confirm' => __('Voulez-vous supprimer cette commande? # {0}?', $commande->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
			</table>
		  </div>
		</div>
	  </div>
	</div>
</div>
