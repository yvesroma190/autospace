<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Achat[]|\Cake\Collection\CollectionInterface $achats
 */
?>
<!-- <div class="achats index content">
    <?= $this->Html->link(__('New Achat'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Achats') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('piece_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('qte') ?></th>
                    <th><?= $this->Paginator->sort('pt') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($achats as $achat): ?>
                <tr>
                    <td><?= $this->Number->format($achat->id) ?></td>
                    <td><?= $achat->has('client') ? $this->Html->link($achat->client->name, ['controller' => 'Clients', 'action' => 'view', $achat->client->id]) : '' ?></td>
                    <td><?= $achat->has('piece') ? $this->Html->link($achat->piece->name, ['controller' => 'Pieces', 'action' => 'view', $achat->piece->id]) : '' ?></td>
                    <td><?= h($achat->date) ?></td>
                    <td><?= $this->Number->format($achat->qte) ?></td>
                    <td><?= $this->Number->format($achat->pt) ?></td>
                    <td><?= h($achat->created) ?></td>
                    <td><?= h($achat->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $achat->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $achat->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $achat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $achat->id)]) ?>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#" class="current">Achats</a> </div>
	<h1>Gestion des Achats</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Faire un achat'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Liste des achats</h5>
		  </div>
		  <div class="widget-content nopadding">
			<table class="table table-bordered table-striped">
			  <thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('piece_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('qte') ?></th>
                    <th><?= $this->Paginator->sort('pt') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
				</tr>
			  </thead>
			  <tbody>
                <?php foreach ($achats as $achat): ?>
                <tr>
                    <td><?= $this->Number->format($achat->id) ?></td>
                    <td><?= $achat->has('client') ? $this->Html->link($achat->client->name, ['controller' => 'Clients', 'action' => 'view', $achat->client->id]) : '' ?></td>
                    <td><?= $achat->has('piece') ? $this->Html->link($achat->piece->name, ['controller' => 'Pieces', 'action' => 'view', $achat->piece->id]) : '' ?></td>
                    <td><?= h($achat->date) ?></td>
                    <td><?= $this->Number->format($achat->qte) ?></td>
                    <td><?= $this->Number->format($achat->pt) ?></td>
                    <td><?= h($achat->created) ?></td>
                    <td><?= h($achat->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $achat->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $achat->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $achat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $achat->id)]) ?>
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
