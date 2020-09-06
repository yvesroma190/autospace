<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voiture[]|\Cake\Collection\CollectionInterface $voitures
 */
?>
<!-- <div class="voitures index content">
    <?= $this->Html->link(__('New Voiture'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Voitures') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th><?= $this->Paginator->sort('marque_id') ?></th>
                    <th><?= $this->Paginator->sort('modele_id') ?></th>
                    <th><?= $this->Paginator->sort('mode_id') ?></th>
                    <th><?= $this->Paginator->sort('etat_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('immatriculation') ?></th>
                    <th><?= $this->Paginator->sort('carburant_id') ?></th>
                    <th><?= $this->Paginator->sort('vitesse') ?></th>
                    <th><?= $this->Paginator->sort('kilometrage') ?></th>
                    <th><?= $this->Paginator->sort('annee') ?></th>
                    <th><?= $this->Paginator->sort('detail') ?></th>
                    <th><?= $this->Paginator->sort('concessionnaire_id') ?></th>
                    <th><?= $this->Paginator->sort('prix') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($voitures as $voiture): ?>
                <tr>
                    <td><?= $this->Number->format($voiture->id) ?></td>
                    <td><?= h($voiture->photo) ?></td>
                    <td><?= $voiture->has('category') ? $this->Html->link($voiture->category->name, ['controller' => 'Categories', 'action' => 'view', $voiture->category->id]) : '' ?></td>
                    <td><?= $voiture->has('marque') ? $this->Html->link($voiture->marque->name, ['controller' => 'Marques', 'action' => 'view', $voiture->marque->id]) : '' ?></td>
                    <td><?= $voiture->has('modele') ? $this->Html->link($voiture->modele->name, ['controller' => 'Modeles', 'action' => 'view', $voiture->modele->id]) : '' ?></td>
                    <td><?= $voiture->has('mode') ? $this->Html->link($voiture->mode->name, ['controller' => 'Modes', 'action' => 'view', $voiture->mode->id]) : '' ?></td>
                    <td><?= $voiture->has('etat') ? $this->Html->link($voiture->etat->name, ['controller' => 'Etats', 'action' => 'view', $voiture->etat->id]) : '' ?></td>
                    <td><?= h($voiture->name) ?></td>
                    <td><?= h($voiture->immatriculation) ?></td>
                    <td><?= $voiture->has('carburant') ? $this->Html->link($voiture->carburant->name, ['controller' => 'Carburants', 'action' => 'view', $voiture->carburant->id]) : '' ?></td>
                    <td><?= h($voiture->vitesse) ?></td>
                    <td><?= h($voiture->kilometrage) ?></td>
                    <td><?= h($voiture->annee) ?></td>
                    <td><?= h($voiture->detail) ?></td>
                    <td><?= $voiture->has('concessionnaire') ? $this->Html->link($voiture->concessionnaire->name, ['controller' => 'Concessionnaires', 'action' => 'view', $voiture->concessionnaire->id]) : '' ?></td>
                    <td><?= $this->Number->format($voiture->prix) ?></td>
                    <td><?= h($voiture->created) ?></td>
                    <td><?= h($voiture->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $voiture->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $voiture->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $voiture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voiture->id)]) ?>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#" class="current">Voitures</a> </div>
	<h1>Gestion des Voitures</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Ajouter une Voiture'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Liste des voitures</h5>
		  </div>
		  <div class="widget-content nopadding">
			<table class="table table-bordered table-striped">
			  <thead>
				<tr>
					<th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('categorie') ?></th>
                    <th><?= $this->Paginator->sort('marque_id') ?></th>
                    <th><?= $this->Paginator->sort('modele_id') ?></th>
                    <th><?= $this->Paginator->sort('mode_id') ?></th>
                    <th><?= $this->Paginator->sort('etat_id') ?></th>
                    <th><?= $this->Paginator->sort('Nom') ?></th>
                    <!-- <th><?= $this->Paginator->sort('immatriculation') ?></th>
                    <th><?= $this->Paginator->sort('carburant_id') ?></th>
                    <th><?= $this->Paginator->sort('vitesse') ?></th>
                    <th><?= $this->Paginator->sort('kilometrage') ?></th>
                    <th><?= $this->Paginator->sort('annee') ?></th>
                    <th><?= $this->Paginator->sort('detail') ?></th>
                    <th><?= $this->Paginator->sort('concessionnaire_id') ?></th> -->
                    <th><?= $this->Paginator->sort('prix') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
				</tr>
			  </thead>
			  <tbody>
                <?php foreach ($voitures as $voiture): ?>
                <tr>
                    <td><?= $this->Number->format($voiture->id) ?></td>
                    <td><?= @$this->Html->image($voiture->photo, ['style'=>'width:200px; heigth:200px']) ?></td>
                    <td><?= $voiture->has('category') ? $this->Html->link($voiture->category->name, ['controller' => 'Categories', 'action' => 'view', $voiture->category->id]) : '' ?></td>
                    <td><?= $voiture->has('marque') ? $this->Html->link($voiture->marque->name, ['controller' => 'Marques', 'action' => 'view', $voiture->marque->id]) : '' ?></td>
                    <td><?= $voiture->has('modele') ? $this->Html->link($voiture->modele->name, ['controller' => 'Modeles', 'action' => 'view', $voiture->modele->id]) : '' ?></td>
                    <td><?= $voiture->has('mode') ? $this->Html->link($voiture->mode->name, ['controller' => 'Modes', 'action' => 'view', $voiture->mode->id]) : '' ?></td>
                    <td><?= $voiture->has('etat') ? $this->Html->link($voiture->etat->name, ['controller' => 'Etats', 'action' => 'view', $voiture->etat->id]) : '' ?></td>
                    <td><?= h($voiture->name) ?></td>
                    <!-- <td><?= h($voiture->immatriculation) ?></td>
                    <td><?= $voiture->has('carburant') ? $this->Html->link($voiture->carburant->name, ['controller' => 'Carburants', 'action' => 'view', $voiture->carburant->id]) : '' ?></td>
                    <td><?= h($voiture->vitesse) ?></td>
                    <td><?= h($voiture->kilometrage) ?></td>
                    <td><?= h($voiture->annee) ?></td>
                    <td><?= h($voiture->detail) ?></td>
                    <td><?= $voiture->has('concessionnaire') ? $this->Html->link($voiture->concessionnaire->name, ['controller' => 'Concessionnaires', 'action' => 'view', $voiture->concessionnaire->id]) : '' ?></td> -->
                    <td><?= $this->Number->format($voiture->prix) ?></td>
                    <td><?= h($voiture->created) ?></td>
                    <td><?= h($voiture->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Détails'), ['action' => 'view', $voiture->id]) ?>
                        <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $voiture->id]) ?>
                        <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $voiture->id], ['confirm' => __('Voulez-vous supprimer cette voiture? # {0}?', $voiture->id)]) ?>
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
