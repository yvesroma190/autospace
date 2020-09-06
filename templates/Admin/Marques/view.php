<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marque $marque
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Marque'), ['action' => 'edit', $marque->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Marque'), ['action' => 'delete', $marque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marque->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Marques'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Marque'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="marques view content">
            <h3><?= h($marque->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($marque->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($marque->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($marque->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($marque->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Modeles') ?></h4>
                <?php if (!empty($marque->modeles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Marque Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($marque->modeles as $modeles) : ?>
                        <tr>
                            <td><?= h($modeles->id) ?></td>
                            <td><?= h($modeles->name) ?></td>
                            <td><?= h($modeles->marque_id) ?></td>
                            <td><?= h($modeles->created) ?></td>
                            <td><?= h($modeles->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Modeles', 'action' => 'view', $modeles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Modeles', 'action' => 'edit', $modeles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Modeles', 'action' => 'delete', $modeles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modeles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Pieces') ?></h4>
                <?php if (!empty($marque->pieces)) : ?>
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
                        <?php foreach ($marque->pieces as $pieces) : ?>
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
        </div>
    </div>
</div> -->

<div id="content-header">
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Marques</a><a href="#" class="current">Détails</a> </div>
	<h1>Gestion des Marques</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Modifier la Marque'), ['action' => 'edit', $marque->id], ['class' => 'btn btn-success']) ?>
		<?= $this->Form->postLink(__('Supprimer la Marque'), ['action' => 'delete', $marque->id], ['confirm' => __('AVoulez-vous supprimer cette marque? # {0}?', $marque->id), 'class' => 'btn btn-danger']) ?>
		<?= $this->Html->link(__('Liste des Marques'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
		<?= $this->Html->link(__('Ajouter une Marque'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Détails de la marque</h5>
		  </div>
		  <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
                <tr>
                    <th><?= __('Nom de la marque') ?></th>
                    <td><?= h($marque->name) ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($marque->id) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($marque->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($marque->modified) ?></td>
                </tr>
            </table>
		  </div>
        </div>
        
        <div class="widget-box">
            <h4><?= __('Modèles Associés') ?></h4>
            <?php if (!empty($marque->modeles)) : ?>
            <div class="table table-bordered table-striped">
                <table class="table table-bordered table-striped">
                    <tr>
						<th><?= __('Id') ?></th>
						<th><?= __('Name') ?></th>
						<th><?= __('Marque Id') ?></th>
						<th><?= __('Created') ?></th>
						<th><?= __('Modified') ?></th>
						<th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($marque->modeles as $modeles) : ?>
                    <tr>
                        <td><?= h($modeles->id) ?></td>
						<td><?= h($modeles->name) ?></td>
						<td><?= h($modeles->marque_id) ?></td>
						<td><?= h($modeles->created) ?></td>
						<td><?= h($modeles->modified) ?></td>
						<td class="actions">
							<?= $this->Html->link(__('Détails'), ['controller' => 'Modeles', 'action' => 'view', $modeles->id]) ?>
							<?= $this->Html->link(__('Modifier'), ['controller' => 'Modeles', 'action' => 'edit', $modeles->id]) ?>
							<?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Modeles', 'action' => 'delete', $modeles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modeles->id)]) ?>
						</td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php endif; ?>
            </div>
	  </div>
	  
	  <div class="widget-box">
            <h4><?= __('Pièces Associées') ?></h4>
            <?php if (!empty($marque->pieces)) : ?>
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
                    <?php foreach ($marque->pieces as $pieces) : ?>
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
							<?= $this->Html->link(__('Détails'), ['controller' => 'Pieces', 'action' => 'view', $pieces->id]) ?>
							<?= $this->Html->link(__('Modifier'), ['controller' => 'Pieces', 'action' => 'edit', $pieces->id]) ?>
							<?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Pieces', 'action' => 'delete', $pieces->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pieces->id)]) ?>
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
