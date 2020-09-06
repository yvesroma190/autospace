<!-- <?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country[]|\Cake\Collection\CollectionInterface $countries
 */
?>
<div class="countries index content">
    <?= $this->Html->link(__('New Country'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Countries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($countries as $country): ?>
                <tr>
                    <td><?= $this->Number->format($country->id) ?></td>
                    <td><?= h($country->name) ?></td>
                    <td><?= h($country->created) ?></td>
                    <td><?= h($country->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $country->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $country->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#" class="current">Pays</a> </div>
	<h1>Gestion des Pays</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
	<?= $this->Html->link(__('Ajouter un Pays'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Liste des pays</h5>
		  </div>
		  <div class="widget-content nopadding">
			<table class="table table-bordered table-striped">
			  <thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
					<th><?= $this->Paginator->sort('Pays') ?></th>
					<th><?= $this->Paginator->sort('Créé le') ?></th>
					<th><?= $this->Paginator->sort('modifié le') ?></th>
					<th class="actions"><?= __('Actions') ?></th>
				</tr>
			  </thead>
				<tbody>
					<?php foreach ($countries as $country): ?>
					<tr>
						<td><?= $this->Number->format($country->id) ?></td>
						<td><?= h($country->name) ?></td>
						<td><?= h($country->created) ?></td>
						<td><?= h($country->modified) ?></td>
						<td class="actions">
							<?= $this->Html->link(__('Détails'), ['action' => 'view', $country->id]) ?>
							<?= $this->Html->link(__('Modifier'), ['action' => 'edit', $country->id]) ?>
							<?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $country->id], ['confirm' => __('Voulez-vous supprimer ce pays? # {0}?', $country->id)]) ?>
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