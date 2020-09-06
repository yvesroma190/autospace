<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typepiece $typepiece
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Typepiece'), ['action' => 'edit', $typepiece->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Typepiece'), ['action' => 'delete', $typepiece->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typepiece->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Typepieces'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Typepiece'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="typepieces view content">
            <h3><?= h($typepiece->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($typepiece->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($typepiece->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($typepiece->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($typepiece->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Pieces') ?></h4>
                <?php if (!empty($typepiece->pieces)) : ?>
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
                        <?php foreach ($typepiece->pieces as $pieces) : ?>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Types de pièces</a><a href="#" class="current">Détails</a> </div>
	<h1>Gestion des Types de pièces</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Modifier le Type de pièces'), ['action' => 'edit', $typepiece->id], ['class' => 'btn btn-success']) ?>
		<?= $this->Form->postLink(__('Supprimer le Type pièces'), ['action' => 'delete', $typepiece->id], ['confirm' => __('Voulez-vous supprimer ce type de pièces? # {0}?', $typepiece->id), 'class' => 'btn btn-danger']) ?>
		<?= $this->Html->link(__('Liste des Types pièces'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
		<?= $this->Html->link(__('Ajouter un Type de pièces'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Détails du type de pièces</h5>
		  </div>
		  <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
                <tr>
                    <th><?= __('Type de pièces') ?></th>
                    <td><?= h($typepiece->name) ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($typepiece->id) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($typepiece->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($typepiece->modified) ?></td>
                </tr>
            </table>
		  </div>
        </div>
        
        <div class="widget-box">
            <h4><?= __('Pièces Associées') ?></h4>
            <?php if (!empty($typepiece->pieces)) : ?>
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
                    <?php foreach ($typepiece->pieces as $pieces) : ?>
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
							<?= $this->Html->link(__('Modifier'), ['controller' => 'Pieces', 'action' => 'edit', $pieces->id]) ?>
							<?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Pieces', 'action' => 'delete', $pieces->id], ['confirm' => __('Voulez-vous supprimer cette pièce? # {0}?', $pieces->id)]) ?>
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
