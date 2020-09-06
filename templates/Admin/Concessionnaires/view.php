<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Concessionnaire $concessionnaire
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Concessionnaire'), ['action' => 'edit', $concessionnaire->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Concessionnaire'), ['action' => 'delete', $concessionnaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $concessionnaire->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Concessionnaires'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Concessionnaire'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="concessionnaires view content">
            <h3><?= h($concessionnaire->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($concessionnaire->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel') ?></th>
                    <td><?= h($concessionnaire->tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cel') ?></th>
                    <td><?= h($concessionnaire->cel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($concessionnaire->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($concessionnaire->adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bp') ?></th>
                    <td><?= h($concessionnaire->bp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $concessionnaire->has('country') ? $this->Html->link($concessionnaire->country->name, ['controller' => 'Countries', 'action' => 'view', $concessionnaire->country->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ville') ?></th>
                    <td><?= $concessionnaire->has('ville') ? $this->Html->link($concessionnaire->ville->name, ['controller' => 'Villes', 'action' => 'view', $concessionnaire->ville->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($concessionnaire->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($concessionnaire->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($concessionnaire->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Voitures') ?></h4>
                <?php if (!empty($concessionnaire->voitures)) : ?>
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
                        <?php foreach ($concessionnaire->voitures as $voitures) : ?>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Concessionnaires</a><a href="#" class="current">Détails</a> </div>
	<h1>Gestion des Concessionnaires</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Modifier le Concessionnaire'), ['action' => 'edit', $concessionnaire->id], ['class' => 'btn btn-success']) ?>
		<?= $this->Form->postLink(__('Supprimer le Concessionnaire'), ['action' => 'delete', $concessionnaire->id], ['confirm' => __('Voulez-vous supprimer ce concessionnaire? # {0}?', $concessionnaire->id), 'class' => 'btn btn-danger']) ?>
		<?= $this->Html->link(__('Liste des Concessionnaires'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
		<?= $this->Html->link(__('Ajouter un Concessionnaire'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Détails du concessionnaire</h5>
		  </div>
		  <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($concessionnaire->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel') ?></th>
                    <td><?= h($concessionnaire->tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cel') ?></th>
                    <td><?= h($concessionnaire->cel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($concessionnaire->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($concessionnaire->adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bp') ?></th>
                    <td><?= h($concessionnaire->bp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $concessionnaire->has('country') ? $this->Html->link($concessionnaire->country->name, ['controller' => 'Countries', 'action' => 'view', $concessionnaire->country->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ville') ?></th>
                    <td><?= $concessionnaire->has('ville') ? $this->Html->link($concessionnaire->ville->name, ['controller' => 'Villes', 'action' => 'view', $concessionnaire->ville->id]) : '' ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($concessionnaire->id) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($concessionnaire->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($concessionnaire->modified) ?></td>
                </tr>
            </table>
		  </div>
        </div>
        
        <div class="widget-box">
            <h4><?= __('Voitures Associées') ?></h4>
            <?php if (!empty($concessionnaire->voitures)) : ?>
            <div class="table table-bordered table-striped">
                <table class="table table-bordered table-striped">
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
						<!-- <th><?= __('Carburant Id') ?></th>
						<th><?= __('Vitesse') ?></th>
						<th><?= __('Kilometrage') ?></th>
						<th><?= __('Annee') ?></th>
						<th><?= __('Detail') ?></th>
						<th><?= __('Concessionnaire Id') ?></th> -->
						<th><?= __('Prix') ?></th>
						<th><?= __('Created') ?></th>
						<th><?= __('Modified') ?></th>
						<th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($concessionnaire->voitures as $voitures) : ?>
                    <tr>
                        <td><?= h($voitures->id) ?></td>
						<td><?= @$this->Html->image($voitures->photo, ['style'=>'width:200px; heigth:200px']) ?></td>
						<td><?= h($voitures->category_id) ?></td>
						<td><?= h($voitures->marque_id) ?></td>
						<td><?= h($voitures->modele_id) ?></td>
						<td><?= h($voitures->mode_id) ?></td>
						<td><?= h($voitures->etat_id) ?></td>
						<td><?= h($voitures->name) ?></td>
						<td><?= h($voitures->immatriculation) ?></td>
						<!-- <td><?= h($voitures->carburant_id) ?></td>
						<td><?= h($voitures->vitesse) ?></td>
						<td><?= h($voitures->kilometrage) ?></td>
						<td><?= h($voitures->annee) ?></td>
						<td><?= h($voitures->detail) ?></td>
						<td><?= h($voitures->concessionnaire_id) ?></td> -->
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
