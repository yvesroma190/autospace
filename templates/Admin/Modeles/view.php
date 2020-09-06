<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modele $modele
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Modele'), ['action' => 'edit', $modele->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Modele'), ['action' => 'delete', $modele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modele->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Modeles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Modele'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modeles view content">
            <h3><?= h($modele->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($modele->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marque') ?></th>
                    <td><?= $modele->has('marque') ? $this->Html->link($modele->marque->name, ['controller' => 'Marques', 'action' => 'view', $modele->marque->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($modele->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($modele->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($modele->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Pieces') ?></h4>
                <?php if (!empty($modele->pieces)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Typepiece Id') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Modele Id') ?></th>
                            <th><?= __('Marque Id') ?></th>
                            <th><?= __('Prix') ?></th>
                            <th><?= __('Etat Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($modele->pieces as $pieces) : ?>
                        <tr>
                            <td><?= h($pieces->id) ?></td>
                            <td><?= h($pieces->photo) ?></td>
                            <td><?= h($pieces->name) ?></td>
                            <td><?= h($pieces->typepiece_id) ?></td>
                            <td><?= h($pieces->category_id) ?></td>
                            <td><?= h($pieces->modele_id) ?></td>
                            <td><?= h($pieces->marque_id) ?></td>
                            <td><?= h($pieces->prix) ?></td>
                            <td><?= h($pieces->etat_id) ?></td>
                            <td><?= h($pieces->created) ?></td>
                            <td><?= h($pieces->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pieces', 'action' => 'view', $pieces->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pieces', 'action' => 'edit', $pieces->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pieces', 'action' => 'delete', $pieces->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pieces->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Voitures') ?></h4>
                <?php if (!empty($modele->voitures)) : ?>
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
                        <?php foreach ($modele->voitures as $voitures) : ?>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Modèles</a><a href="#" class="current">Détails</a> </div>
	<h1>Gestion des Modèles</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Modifier le Modèle'), ['action' => 'edit', $modele->id], ['class' => 'btn btn-success']) ?>
		<?= $this->Form->postLink(__('Supprimer le Modèle'), ['action' => 'delete', $modele->id], ['confirm' => __('Voulez-vous supprimer ce modèle? # {0}?', $modele->id), 'class' => 'btn btn-danger']) ?>
		<?= $this->Html->link(__('Liste des Modèles'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
		<?= $this->Html->link(__('Ajouter un Modèle'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Détails du modèle</h5>
		  </div>
		  <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
                <tr>
                    <th><?= __('Modèle') ?></th>
                    <td><?= h($modele->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marque') ?></th>
                    <td><?= $modele->has('marque') ? $this->Html->link($modele->marque->name, ['controller' => 'Marques', 'action' => 'view', $modele->marque->id]) : '' ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($modele->id) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($modele->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($modele->modified) ?></td>
                </tr>
            </table>
		  </div>
        </div>
        
        <div class="widget-box">
            <h4><?= __('Pièces Associées') ?></h4>
            <?php if (!empty($modele->pieces)) : ?>
            <div class="table table-bordered table-striped">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th><?= __('Id') ?></th>
						<th><?= __('Photo') ?></th>
						<th><?= __('Name') ?></th>
						<th><?= __('Typepiece Id') ?></th>
						<th><?= __('Category Id') ?></th>
						<th><?= __('Modele Id') ?></th>
						<th><?= __('Marque Id') ?></th>
						<th><?= __('Prix') ?></th>
						<th><?= __('Etat Id') ?></th>
						<th><?= __('Created') ?></th>
						<th><?= __('Modified') ?></th>
						<th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($modele->pieces as $pieces) : ?>
                    <tr>
                        <td><?= h($pieces->id) ?></td>
						<td><?= @$this->Html->image($pieces->photo, ['style'=>'width:200px; heigth:200px']) ?></td>
						<td><?= h($pieces->name) ?></td>
						<td><?= h($pieces->typepiece_id) ?></td>
						<td><?= h($pieces->category_id) ?></td>
						<td><?= h($pieces->modele_id) ?></td>
						<td><?= h($pieces->marque_id) ?></td>
						<td><?= h($pieces->prix) ?></td>
						<td><?= h($pieces->etat_id) ?></td>
						<td><?= h($pieces->created) ?></td>
						<td><?= h($pieces->modified) ?></td>
						<td class="actions">
							<?= $this->Html->link(__('Détails'), ['controller' => 'Pieces', 'action' => 'view', $pieces->id]) ?>
							<?= $this->Html->link(__('Modifer'), ['controller' => 'Pieces', 'action' => 'edit', $pieces->id]) ?>
							<?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Pieces', 'action' => 'delete', $pieces->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pieces->id)]) ?>
						</td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php endif; ?>
            </div>
	  </div>
	  
	  <div class="widget-box">
            <h4><?= __('Voitures Associées') ?></h4>
            <?php if (!empty($modele->voitures)) : ?>
            <div class="table table-bordered table-striped">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th><?= __('Id') ?></th>
						<th><?= __('Photo') ?></th>
						<th><?= __('Category Id') ?></th>
						<th><?= __('Marque Id') ?></th>
						<th><?= __('Modele Id') ?></th>
						<th><?= __('Mode Id') ?></th>
						<!-- <th><?= __('Etat Id') ?></th> -->
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
                    <?php foreach ($modele->voitures as $voitures) : ?>
                    <tr>
                        <td><?= h($voitures->id) ?></td>
						<td><?= @$this->Html->image($voitures->photo, ['style'=>'width:200px; heigth:200px']) ?></td>
						<td><?= h($voitures->category_id) ?></td>
						<td><?= h($voitures->marque_id) ?></td>
						<td><?= h($voitures->modele_id) ?></td>
						<td><?= h($voitures->mode_id) ?></td>
						<!-- <td><?= h($voitures->etat_id) ?></td> -->
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
							<?= $this->Html->link(__('Détails'), ['controller' => 'Voitures', 'action' => 'view', $voitures->id]) ?>
							<?= $this->Html->link(__('Modifier'), ['controller' => 'Voitures', 'action' => 'edit', $voitures->id]) ?>
							<?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Voitures', 'action' => 'delete', $voitures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voitures->id)]) ?>
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
