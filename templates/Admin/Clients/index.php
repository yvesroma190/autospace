<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<!-- <div class="clients index content">
    <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clients') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('tel') ?></th>
                    <th><?= $this->Paginator->sort('cel') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('bp') ?></th>
                    <th><?= $this->Paginator->sort('adresse') ?></th>
                    <th><?= $this->Paginator->sort('ville_id') ?></th>
                    <th><?= $this->Paginator->sort('country_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= $this->Number->format($client->id) ?></td>
                    <td><?= h($client->name) ?></td>
                    <td><?= h($client->tel) ?></td>
                    <td><?= h($client->cel) ?></td>
                    <td><?= h($client->email) ?></td>
                    <td><?= h($client->password) ?></td>
                    <td><?= h($client->bp) ?></td>
                    <td><?= h($client->adresse) ?></td>
                    <td><?= $client->has('ville') ? $this->Html->link($client->ville->name, ['controller' => 'Villes', 'action' => 'view', $client->ville->id]) : '' ?></td>
                    <td><?= $client->has('country') ? $this->Html->link($client->country->name, ['controller' => 'Countries', 'action' => 'view', $client->country->id]) : '' ?></td>
                    <td><?= h($client->created) ?></td>
                    <td><?= h($client->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $client->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#" class="current">Clients</a> </div>
	<h1>Gestion des Clients</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Ajouter un client'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Liste des clients</h5>
		  </div>
		  <div class="widget-content nopadding">
			<table class="table table-bordered table-striped">
			  <thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('tel') ?></th>
                    <th><?= $this->Paginator->sort('cel') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('bp') ?></th>
                    <th><?= $this->Paginator->sort('adresse') ?></th>
                    <th><?= $this->Paginator->sort('ville_id') ?></th>
                    <th><?= $this->Paginator->sort('country_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
				</tr>
			  </thead>
			  <tbody>
                <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= $this->Number->format($client->id) ?></td>
                    <td><?= h($client->name) ?></td>
                    <td><?= h($client->tel) ?></td>
                    <td><?= h($client->cel) ?></td>
                    <td><?= h($client->email) ?></td>
                    <td><?= h($client->password) ?></td>
                    <td><?= h($client->bp) ?></td>
                    <td><?= h($client->adresse) ?></td>
                    <td><?= $client->has('ville') ? $this->Html->link($client->ville->name, ['controller' => 'Villes', 'action' => 'view', $client->ville->id]) : '' ?></td>
                    <td><?= $client->has('country') ? $this->Html->link($client->country->name, ['controller' => 'Countries', 'action' => 'view', $client->country->id]) : '' ?></td>
                    <td><?= h($client->created) ?></td>
                    <td><?= h($client->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $client->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
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


