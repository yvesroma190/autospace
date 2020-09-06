<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ville $ville
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ville'), ['action' => 'edit', $ville->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ville'), ['action' => 'delete', $ville->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ville->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Villes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ville'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="villes view content">
            <h3><?= h($ville->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $ville->has('country') ? $this->Html->link($ville->country->name, ['controller' => 'Countries', 'action' => 'view', $ville->country->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($ville->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ville->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($ville->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($ville->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Clients') ?></h4>
                <?php if (!empty($ville->clients)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Tel') ?></th>
                            <th><?= __('Cel') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Adresse') ?></th>
                            <th><?= __('Ville Id') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ville->clients as $clients) : ?>
                        <tr>
                            <td><?= h($clients->id) ?></td>
                            <td><?= h($clients->name) ?></td>
                            <td><?= h($clients->tel) ?></td>
                            <td><?= h($clients->cel) ?></td>
                            <td><?= h($clients->email) ?></td>
                            <td><?= h($clients->adresse) ?></td>
                            <td><?= h($clients->ville_id) ?></td>
                            <td><?= h($clients->country_id) ?></td>
                            <td><?= h($clients->created) ?></td>
                            <td><?= h($clients->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Clients', 'action' => 'view', $clients->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Clients', 'action' => 'edit', $clients->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clients', 'action' => 'delete', $clients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clients->id)]) ?>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Villes</a><a href="#" class="current">Détails</a> </div>
	<h1>Gestion des Villes</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
        <?= $this->Html->link(__('Modifier la Ville'), ['action' => 'edit', $ville->id], ['class' => 'btn btn-success']) ?>
        <?= $this->Form->postLink(__('Supprimer la Ville'), ['action' => 'delete', $ville->id], ['confirm' => __('Voulez-vous supprimer cette ville? # {0}?', $ville->id), 'class' => 'btn btn-danger']) ?>
        <?= $this->Html->link(__('Liste des Villes'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
        <?= $this->Html->link(__('Ajouter une Ville'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Détails de la ville</h5>
		  </div>
		  <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
                <tr>
                    <th><?= __('Pays') ?></th>
                    <td><?= $ville->has('country') ? $this->Html->link($ville->country->name, ['controller' => 'Countries', 'action' => 'view', $ville->country->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ville') ?></th>
                    <td><?= h($ville->name) ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ville->id) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($ville->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($ville->modified) ?></td>
                </tr>
            </table>
		  </div>
        </div>
        
        <div class="widget-box">
            <h4><?= __('Clients Associés') ?></h4>
            <?php if (!empty($ville->clients)) : ?>
            <div class="table table-bordered table-striped">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Nom et prénoms') ?></th>
                        <th><?= __('Tel') ?></th>
                        <th><?= __('Cel') ?></th>
                        <th><?= __('Email') ?></th>
                        <th><?= __('Adresse') ?></th>
                        <th><?= __('Ville Id') ?></th>
                        <th><?= __('Country Id') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($ville->clients as $clients) : ?>
                    <tr>
                        <td><?= h($clients->id) ?></td>
                        <td><?= h($clients->name) ?></td>
                        <td><?= h($clients->tel) ?></td>
                        <td><?= h($clients->cel) ?></td>
                        <td><?= h($clients->email) ?></td>
                        <td><?= h($clients->adresse) ?></td>
                        <td><?= h($clients->ville_id) ?></td>
                        <td><?= h($clients->country_id) ?></td>
                        <td><?= h($clients->created) ?></td>
                        <td><?= h($clients->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Détails'), ['controller' => 'Clients', 'action' => 'view', $clients->id]) ?>
                            <?= $this->Html->link(__('Modifier'), ['controller' => 'Clients', 'action' => 'edit', $clients->id]) ?>
                            <?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Clients', 'action' => 'delete', $clients->id], ['confirm' => __('Voulez-vous supprimer ce client? # {0}?', $clients->id)]) ?>
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


