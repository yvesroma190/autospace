<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usergroup $usergroup
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usergroup'), ['action' => 'edit', $usergroup->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usergroup'), ['action' => 'delete', $usergroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usergroup->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usergroups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usergroup'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usergroups view content">
            <h3><?= h($usergroup->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($usergroup->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usergroup->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($usergroup->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($usergroup->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($usergroup->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Tel') ?></th>
                            <th><?= __('Cel') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Usergroup Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usergroup->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->username) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->name) ?></td>
                            <td><?= h($users->tel) ?></td>
                            <td><?= h($users->cel) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->usergroup_id) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
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
	<div id="breadcrumb"> <a href="#" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#">Groupes</a><a href="#" class="current">Détails</a> </div>
	<h1>Gestion des Groupes</h1>
</div>
	<div class="container-fluid">
	<hr>
	<div class="contaniner-fluid">
		<?= $this->Html->link(__('Modifier le groupe'), ['action' => 'edit', $usergroup->id], ['class' => 'btn btn-success']) ?>
		<?= $this->Form->postLink(__('Supprimer le groupe'), ['action' => 'delete', $usergroup->id], ['confirm' => __('Voulez-vous supprimer ce groupe? # {0}?', $usergroup->id), 'class' => 'btn btn-danger']) ?>
		<?= $this->Html->link(__('Liste des groupes'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
		<?= $this->Html->link(__('Ajouter un groupe'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	</div>
	<hr>
	<div class="row-fluid">
	  <div class="span12">
		<div class="widget-box">
		  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
			<h5>Détails du groupe</h5>
		  </div>
		  <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
                <tr>
                    <th><?= __('Groupe') ?></th>
                    <td><?= h($usergroup->name) ?></td>
                </tr>
                <!-- <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usergroup->id) ?></td>
                </tr> -->
                <tr>
                    <th><?= __('Créé le') ?></th>
                    <td><?= h($usergroup->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifié le') ?></th>
                    <td><?= h($usergroup->modified) ?></td>
                </tr>
            </table>
		  </div>
        </div>
        
        <div class="widget-box">
            <h4><?= __('Utilisateurs Associés') ?></h4>
            <?php if (!empty($usergroup->users)) : ?>
                <div class="table table-bordered table-striped">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Pseudi') ?></th>
                            <!-- <th><?= __('Mot de passe') ?></th> -->
                            <th><?= __('Nom et prénoms') ?></th>
                            <th><?= __('Tel') ?></th>
                            <th><?= __('Cel') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Usergroup Id') ?></th>
                            <th><?= __('Créé le') ?></th>
                            <th><?= __('Modifié le') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usergroup->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->username) ?></td>
                            <!-- <td><?= h($users->password) ?></td> -->
                            <td><?= h($users->name) ?></td>
                            <td><?= h($users->tel) ?></td>
                            <td><?= h($users->cel) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->usergroup_id) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Détails'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Modifier'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Voulez-vous supprimer cet utilisateur? # {0}?', $users->id)]) ?>
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
