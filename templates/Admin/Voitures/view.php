<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Voiture $voiture
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Voiture'), ['action' => 'edit', $voiture->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Voiture'), ['action' => 'delete', $voiture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voiture->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Voitures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Voiture'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="voitures view content">
            <h3><?= h($voiture->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($voiture->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $voiture->has('category') ? $this->Html->link($voiture->category->name, ['controller' => 'Categories', 'action' => 'view', $voiture->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Marque') ?></th>
                    <td><?= $voiture->has('marque') ? $this->Html->link($voiture->marque->name, ['controller' => 'Marques', 'action' => 'view', $voiture->marque->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Modele') ?></th>
                    <td><?= $voiture->has('modele') ? $this->Html->link($voiture->modele->name, ['controller' => 'Modeles', 'action' => 'view', $voiture->modele->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Mode') ?></th>
                    <td><?= $voiture->has('mode') ? $this->Html->link($voiture->mode->name, ['controller' => 'Modes', 'action' => 'view', $voiture->mode->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Etat') ?></th>
                    <td><?= $voiture->has('etat') ? $this->Html->link($voiture->etat->name, ['controller' => 'Etats', 'action' => 'view', $voiture->etat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($voiture->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Immatriculation') ?></th>
                    <td><?= h($voiture->immatriculation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Carburant') ?></th>
                    <td><?= $voiture->has('carburant') ? $this->Html->link($voiture->carburant->name, ['controller' => 'Carburants', 'action' => 'view', $voiture->carburant->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Vitesse') ?></th>
                    <td><?= h($voiture->vitesse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kilometrage') ?></th>
                    <td><?= h($voiture->kilometrage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Annee') ?></th>
                    <td><?= h($voiture->annee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Detail') ?></th>
                    <td><?= h($voiture->detail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Concessionnaire') ?></th>
                    <td><?= $voiture->has('concessionnaire') ? $this->Html->link($voiture->concessionnaire->name, ['controller' => 'Concessionnaires', 'action' => 'view', $voiture->concessionnaire->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($voiture->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= $this->Number->format($voiture->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($voiture->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($voiture->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Commandes') ?></h4>
                <?php if (!empty($voiture->commandes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Voiture Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Pt') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($voiture->commandes as $commandes) : ?>
                        <tr>
                            <td><?= h($commandes->id) ?></td>
                            <td><?= h($commandes->voiture_id) ?></td>
                            <td><?= h($commandes->client_id) ?></td>
                            <td><?= h($commandes->pt) ?></td>
                            <td><?= h($commandes->date) ?></td>
                            <td><?= h($commandes->created) ?></td>
                            <td><?= h($commandes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Commandes', 'action' => 'view', $commandes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Commandes', 'action' => 'edit', $commandes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commandes', 'action' => 'delete', $commandes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commandes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Voituregalleries') ?></h4>
                <?php if (!empty($voiture->voituregalleries)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Voiture Id') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Path') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($voiture->voituregalleries as $voituregalleries) : ?>
                        <tr>
                            <td><?= h($voituregalleries->id) ?></td>
                            <td><?= h($voituregalleries->voiture_id) ?></td>
                            <td><?= h($voituregalleries->photo) ?></td>
                            <td><?= h($voituregalleries->path) ?></td>
                            <td><?= h($voituregalleries->created) ?></td>
                            <td><?= h($voituregalleries->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Voituregalleries', 'action' => 'view', $voituregalleries->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Voituregalleries', 'action' => 'edit', $voituregalleries->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Voituregalleries', 'action' => 'delete', $voituregalleries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voituregalleries->id)]) ?>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Voitures</a><a href="#" class="current">Détails</a> </div>
	<h1>Gestion des Voitures</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
        <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $voiture->id], ['class' => 'btn btn-success']) ?>
        <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $voiture->id], ['confirm' => __('Voulez-vous supprimer cette voiture? # {0}?', $voiture->id), 'class' => 'btn btn-danger']) ?>
        <?= $this->Html->link(__('Liste des Voitures'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
        <?= $this->Html->link(__('Ajouter une Voiture'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
		<?= $this->Html->link(__('Ajouter une image dans sa gallerie'), ['controller' => 'Voituregalleries', 'action' => 'add', $voiture->id], ['class' => 'btn btn-warning']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Détails de la voiture</h5>
		  </div>
		  <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= @$this->Html->image($voiture->photo, ['style'=>'width:200px; heigth:200px']) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $voiture->has('category') ? $this->Html->link($voiture->category->name, ['controller' => 'Categories', 'action' => 'view', $voiture->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Marque') ?></th>
                    <td><?= $voiture->has('marque') ? $this->Html->link($voiture->marque->name, ['controller' => 'Marques', 'action' => 'view', $voiture->marque->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Modele') ?></th>
                    <td><?= $voiture->has('modele') ? $this->Html->link($voiture->modele->name, ['controller' => 'Modeles', 'action' => 'view', $voiture->modele->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Mode') ?></th>
                    <td><?= $voiture->has('mode') ? $this->Html->link($voiture->mode->name, ['controller' => 'Modes', 'action' => 'view', $voiture->mode->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Etat') ?></th>
                    <td><?= $voiture->has('etat') ? $this->Html->link($voiture->etat->name, ['controller' => 'Etats', 'action' => 'view', $voiture->etat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($voiture->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Immatriculation') ?></th>
                    <td><?= h($voiture->immatriculation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Carburant') ?></th>
                    <td><?= $voiture->has('carburant') ? $this->Html->link($voiture->carburant->name, ['controller' => 'Carburants', 'action' => 'view', $voiture->carburant->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Vitesse') ?></th>
                    <td><?= h($voiture->vitesse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kilometrage') ?></th>
                    <td><?= h($voiture->kilometrage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Annee') ?></th>
                    <td><?= h($voiture->annee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Detail') ?></th>
                    <td><?= h($voiture->detail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Concessionnaire') ?></th>
                    <td><?= $voiture->has('concessionnaire') ? $this->Html->link($voiture->concessionnaire->name, ['controller' => 'Concessionnaires', 'action' => 'view', $voiture->concessionnaire->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($voiture->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= $this->Number->format($voiture->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($voiture->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($voiture->modified) ?></td>
                </tr>
            </table>
		  </div>
        </div>
        
        <div class="widget-box">
            <h4><?= __('Gallerie Associée') ?></h4>
            <?php if (!empty($voiture->voituregalleries)) : ?>
            <div class="table table-bordered table-striped">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th><?= __('Id') ?></th>
						<!-- <th><?= __('Voiture Id') ?></th> -->
						<th><?= __('Photo') ?></th>
						<!-- <th><?= __('Path') ?></th> -->
						<th><?= __('Created') ?></th>
						<th><?= __('Modified') ?></th>
						<th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($voiture->voituregalleries as $voituregalleries) : ?>
                    <tr>
                        <td><?= h($voituregalleries->id) ?></td>
						<!-- <td><?= h($voituregalleries->voiture_id) ?></td> -->
						<td><?= @$this->Html->image($voituregalleries->photo, ['style'=>'width:200px; heigth:200px']) ?></td>
						<!-- <td><?= h($voituregalleries->path) ?></td> -->
						<td><?= h($voituregalleries->created) ?></td>
						<td><?= h($voituregalleries->modified) ?></td>
						<td class="actions">
							<?= $this->Html->link(__('Détails'), ['controller' => 'Voituregalleries', 'action' => 'view', $voituregalleries->id]) ?>
							<?= $this->Html->link(__('Modifier'), ['controller' => 'Voituregalleries', 'action' => 'edit', $voituregalleries->id]) ?>
							<?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Voituregalleries', 'action' => 'delete', $voituregalleries->id], ['confirm' => __('Voulez-vous supprimer cette image? # {0}?', $voituregalleries->id)]) ?>
						</td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php endif; ?>
            </div>
		</div>
		
		<div class="widget-box">
            <h4><?= __('Commandes Associées') ?></h4>
            <?php if (!empty($voiture->commandes)) : ?>
            <div class="table table-bordered table-striped">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th><?= __('Id') ?></th>
						<th><?= __('Voiture Id') ?></th>
						<th><?= __('Client Id') ?></th>
						<th><?= __('Pt') ?></th>
						<th><?= __('Date') ?></th>
						<th><?= __('Created') ?></th>
						<th><?= __('Modified') ?></th>
						<th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($voiture->commandes as $commandes) : ?>
                    <tr>
                        <td><?= h($commandes->id) ?></td>
						<td><?= h($commandes->voiture_id) ?></td>
						<td><?= h($commandes->client_id) ?></td>
						<td><?= h($commandes->pt) ?></td>
						<td><?= h($commandes->date) ?></td>
						<td><?= h($commandes->created) ?></td>
						<td><?= h($commandes->modified) ?></td>
						<td class="actions">
							<?= $this->Html->link(__('Détails'), ['controller' => 'Commandes', 'action' => 'view', $commandes->id]) ?>
							<?= $this->Html->link(__('Modifier'), ['controller' => 'Commandes', 'action' => 'edit', $commandes->id]) ?>
							<?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Commandes', 'action' => 'delete', $commandes->id], ['confirm' => __('Voulez-vous supprimer cette commande? # {0}?', $commandes->id)]) ?>
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
