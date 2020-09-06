<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ville[]|\Cake\Collection\CollectionInterface $villes
 */
?>
<!-- <div class="villes index content">
    <?= $this->Html->link(__('New Ville'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Villes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('country_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($villes as $ville): ?>
                <tr>
                    <td><?= $this->Number->format($ville->id) ?></td>
                    <td><?= $ville->has('country') ? $this->Html->link($ville->country->name, ['controller' => 'Countries', 'action' => 'view', $ville->country->id]) : '' ?></td>
                    <td><?= h($ville->name) ?></td>
                    <td><?= h($ville->created) ?></td>
                    <td><?= h($ville->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ville->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ville->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ville->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ville->id)]) ?>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#" class="current">Villes</a> </div>
	<h1>Gestion des Villes</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Ajouter une Ville'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
		<?= $this->Html->link(__('Gestion des Pays'), ['controller' => 'countries', 'action' => 'index'], ['class' => 'btn btn-info']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Liste des villes</h5>
		  </div>
		  <div class="widget-content nopadding">
			<table class="table table-bordered table-striped">
			  <thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Pays') ?></th>
                    <th><?= $this->Paginator->sort('Ville') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
				</tr>
			  </thead>
			  <tbody>
			  <?php foreach ($villes as $ville): ?>
				<tr class="odd gradeX">
					<td><?= $this->Number->format($ville->id) ?></td>
                    <td><?= $ville->has('country') ? $this->Html->link($ville->country->name, ['controller' => 'Countries', 'action' => 'view', $ville->country->id]) : '' ?></td>
                    <td><?= h($ville->name) ?></td>
                    <td><?= h($ville->created) ?></td>
                    <td><?= h($ville->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Détails'), ['action' => 'view', $ville->id]) ?>
                        <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $ville->id]) ?>
                        <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $ville->id], ['confirm' => __('Voulez-vous supprimer cette ville? # {0}?', $ville->id)]) ?>
                    </td>
				<?php endforeach; ?>
				</tr>
			  </tbody>
			</table>
		  </div>
		</div>
	  </div>
	</div>
</div>

