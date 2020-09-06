<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Country'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="countries view content">
            <h3><?= h($country->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($country->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($country->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($country->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($country->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Clients') ?></h4>
                <?php if (!empty($country->clients)) : ?>
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
                        <?php foreach ($country->clients as $clients) : ?>
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
            <div class="related">
                <h4><?= __('Related Villes') ?></h4>
                <?php if (!empty($country->villes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($country->villes as $villes) : ?>
                        <tr>
                            <td><?= h($villes->id) ?></td>
                            <td><?= h($villes->country_id) ?></td>
                            <td><?= h($villes->name) ?></td>
                            <td><?= h($villes->created) ?></td>
                            <td><?= h($villes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Villes', 'action' => 'view', $villes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Villes', 'action' => 'edit', $villes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Villes', 'action' => 'delete', $villes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $villes->id)]) ?>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#" class="current">Pays</a><a href="#" class="current">Détails</a> </div>
	<h1>Gestion des Pays</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Modifier le Pays'), ['action' => 'edit', $country->id], ['class' => 'btn btn-success']) ?>
		<?= $this->Form->postLink(__('Supprimer le Pays'), ['action' => 'delete', $country->id], ['confirm' => __('Voulez-vous supprimer cet pays? # {0}?', $country->id), 'class' => 'btn btn-danger']) ?>
		<?= $this->Html->link(__('Liste des Pays'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
		<?= $this->Html->link(__('Ajouter un pays'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Détails du pays</h5>
		  </div>
		  <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
                <tr>
                    <th><?= __('Pays') ?></th>
                    <td><?= h($country->name) ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($country->id) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Créé le') ?></th>
                    <td><?= h($country->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifié le') ?></th>
                    <td><?= h($country->modified) ?></td>
                </tr>
            </table>
		  </div>
        </div>
        
        <div class="widget-box">
			<h4><?= __('Clients associés') ?></h4>
			<?php if (!empty($country->clients)) : ?>
			<div class="table table-bordered table-striped">
				<table>
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
					<?php foreach ($country->clients as $clients) : ?>
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
		<div class="widget-box">
			<h4><?= __('Villes associées') ?></h4>
			<?php if (!empty($country->villes)) : ?>
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<tr>
						<th><?= __('Id') ?></th>
						<th><?= __('Country Id') ?></th>
						<th><?= __('Ville') ?></th>
						<th><?= __('Created') ?></th>
						<th><?= __('Modified') ?></th>
						<th class="actions"><?= __('Actions') ?></th>
					</tr>
					<?php foreach ($country->villes as $villes) : ?>
					<tr>
						<td><?= h($villes->id) ?></td>
						<td><?= h($villes->country_id) ?></td>
						<td><?= h($villes->name) ?></td>
						<td><?= h($villes->created) ?></td>
						<td><?= h($villes->modified) ?></td>
						<td class="actions">
							<?= $this->Html->link(__('Détails'), ['controller' => 'Villes', 'action' => 'view', $villes->id]) ?>
							<?= $this->Html->link(__('Modifier'), ['controller' => 'Villes', 'action' => 'edit', $villes->id]) ?>
							<?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Villes', 'action' => 'delete', $villes->id], ['confirm' => __('Voulez-vous supprimer cette ville? # {0}?', $villes->id)]) ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>


