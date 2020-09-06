<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etat[]|\Cake\Collection\CollectionInterface $etats
 */
?>
<!-- <div class="etats index content">
    <?= $this->Html->link(__('New Etat'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Etats') ?></h3>
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
                <?php foreach ($etats as $etat): ?>
                <tr>
                    <td><?= $this->Number->format($etat->id) ?></td>
                    <td><?= h($etat->name) ?></td>
                    <td><?= h($etat->created) ?></td>
                    <td><?= h($etat->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $etat->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $etat->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $etat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etat->id)]) ?>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#" class="current">Etats de vente</a> </div>
	<h1>Gestion des Etats de vente</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Ajouter un Etat de vente'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Liste des Etats de vente</h5>
		  </div>
		  <div class="widget-content nopadding">
			<table class="table table-bordered table-striped">
			  <thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Etat de vente') ?></th>
                    <th><?= $this->Paginator->sort('Créé le') ?></th>
                    <th><?= $this->Paginator->sort('Modifié le') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
				</tr>
			  </thead>
			  <tbody>
                <?php foreach ($etats as $etat): ?>
                <tr>
                    <td><?= $this->Number->format($etat->id) ?></td>
                    <td><?= h($etat->name) ?></td>
                    <td><?= h($etat->created) ?></td>
                    <td><?= h($etat->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Détails'), ['action' => 'view', $etat->id]) ?>
                        <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $etat->id]) ?>
                        <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $etat->id], ['confirm' => __('Voulez-vous supprimer cet état? # {0}?', $etat->id)]) ?>
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

