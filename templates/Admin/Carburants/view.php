<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carburant $carburant
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Carburant'), ['action' => 'edit', $carburant->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Carburant'), ['action' => 'delete', $carburant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carburant->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carburants'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Carburant'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carburants view content">
            <h3><?= h($carburant->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($carburant->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($carburant->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($carburant->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($carburant->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Voitures') ?></h4>
                <?php if (!empty($carburant->voitures)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Marque Id') ?></th>
                            <th><?= __('Modele Id') ?></th>
                            <th><?= __('Mode Id') ?></th>
                            <th><?= __('Etat Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Immatriculation') ?></th>
                            <th><?= __('Carburant Id') ?></th>
                            <th><?= __('Vitesse') ?></th>
                            <th><?= __('Kilometrage') ?></th>
                            <th><?= __('Annee') ?></th>
                            <th><?= __('Detail') ?></th>
                            <th><?= __('Concessionnaire Id') ?></th>
                            <th><?= __('Prix') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($carburant->voitures as $voitures) : ?>
                        <tr>
                            <td><?= h($voitures->id) ?></td>
                            <td><?= h($voitures->photo) ?></td>
                            <td><?= h($voitures->category_id) ?></td>
                            <td><?= h($voitures->marque_id) ?></td>
                            <td><?= h($voitures->modele_id) ?></td>
                            <td><?= h($voitures->mode_id) ?></td>
                            <td><?= h($voitures->etat_id) ?></td>
                            <td><?= h($voitures->name) ?></td>
                            <td><?= h($voitures->immatriculation) ?></td>
                            <td><?= h($voitures->carburant_id) ?></td>
                            <td><?= h($voitures->vitesse) ?></td>
                            <td><?= h($voitures->kilometrage) ?></td>
                            <td><?= h($voitures->annee) ?></td>
                            <td><?= h($voitures->detail) ?></td>
                            <td><?= h($voitures->concessionnaire_id) ?></td>
                            <td><?= h($voitures->prix) ?></td>
                            <td><?= h($voitures->created) ?></td>
                            <td><?= h($voitures->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Voitures', 'action' => 'view', $voitures->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Voitures', 'action' => 'edit', $voitures->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Voitures', 'action' => 'delete', $voitures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voitures->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div> -->


<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Carburants</a><a href="#" class="current">Détails</a> </div>
	<h1>Gestion des Carburants</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Modifier le Carburant'), ['action' => 'edit', $carburant->id], ['class' => 'btn btn-success']) ?>
		<?= $this->Form->postLink(__('Supprimer le Carburant'), ['action' => 'delete', $carburant->id], ['confirm' => __('Voulez-vous supprimer ce carburant? # {0}?', $carburant->id), 'class' => 'btn btn-danger']) ?>
		<?= $this->Html->link(__('Liste des Carburants'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
		<?= $this->Html->link(__('Ajouter un Carburant'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Détails du carburant</h5>
		  </div>
		  <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
                <tr>
                    <th><?= __('Carburant') ?></th>
                    <td><?= h($carburant->name) ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($carburant->id) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($carburant->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($carburant->modified) ?></td>
                </tr>
            </table>
		  </div>
        </div>
        
        <div class="widget-box">
            <h4><?= __('Voitures Associées') ?></h4>
            <?php if (!empty($carburant->voitures)) : ?>
            <div class="table table-bordered table-striped">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th><?= __('Id') ?></th>
						<th><?= __('Photo') ?></th>
						<th><?= __('Category Id') ?></th>
						<th><?= __('Marque Id') ?></th>
						<th><?= __('Modele Id') ?></th>
						<!-- <th><?= __('Mode Id') ?></th>
						<th><?= __('Etat Id') ?></th> -->
						<th><?= __('Name') ?></th>
						<th><?= __('Immatriculation') ?></th>
						<!-- <th><?= __('Carburant Id') ?></th>
						<th><?= __('Vitesse') ?></th>
						<th><?= __('Kilometrage') ?></th>
						<th><?= __('Annee') ?></th>
						<th><?= __('Detail') ?></th> -->
						<th><?= __('Concessionnaire Id') ?></th>
						<th><?= __('Prix') ?></th>
						<th><?= __('Created') ?></th>
						<th><?= __('Modified') ?></th>
						<th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($carburant->voitures as $voitures) : ?>
                    <tr>
                        <td><?= h($voitures->id) ?></td>
						<td><?= h($voitures->photo) ?></td>
						<td><?= h($voitures->category_id) ?></td>
						<td><?= h($voitures->marque_id) ?></td>
						<td><?= h($voitures->modele_id) ?></td>
						<!-- <td><?= h($voitures->mode_id) ?></td>
						<td><?= h($voitures->etat_id) ?></td> -->
						<td><?= h($voitures->name) ?></td>
						<td><?= h($voitures->immatriculation) ?></td>
						<!-- <td><?= h($voitures->carburant_id) ?></td>
						<td><?= h($voitures->vitesse) ?></td>
						<td><?= h($voitures->kilometrage) ?></td>
						<td><?= h($voitures->annee) ?></td>
						<td><?= h($voitures->detail) ?></td> -->
						<td><?= h($voitures->concessionnaire_id) ?></td>
						<td><?= h($voitures->prix) ?></td>
						<td><?= h($voitures->created) ?></td>
						<td><?= h($voitures->modified) ?></td>
						<td class="actions">
							<?= $this->Html->link(__('View'), ['controller' => 'Voitures', 'action' => 'view', $voitures->id]) ?>
							<?= $this->Html->link(__('Edit'), ['controller' => 'Voitures', 'action' => 'edit', $voitures->id]) ?>
							<?= $this->Form->postLink(__('Delete'), ['controller' => 'Voitures', 'action' => 'delete', $voitures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voitures->id)]) ?>
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
