<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $usergroup
 */
?>
<!--<div class="row">
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
</div>-->



<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">GROUPES D'UTILISATEURS</h4>
                        <div class="ml-auto text-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= $this->Url->build(['controller' => 'Commandes', 'action' => 'index']); ?>">Accueil</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <a href="<?= $this->Url->build(['controller' => 'Commandes', 'action' => 'index']); ?>">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                    <h6 class="text-white">Tableau de bord</h6>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <a href="<?= $this->Url->build(['controller' => 'Categories', 'action' => 'index']); ?>">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-database"></i></h1>
                                    <h6 class="text-white">Données de configuration</h6>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <a href="<?= $this->Url->build(['controller' => 'Voitures', 'action' => 'index']); ?>">
                                <div class="box bg-warning text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-car"></i></h1>
                                    <h6 class="text-white">Voitures</h6>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <a href="<?= $this->Url->build(['controller' => 'Pieces', 'action' => 'index']); ?>">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-chart-bubble"></i></h1>
                                    <h6 class="text-white">Pièces détachées</h6>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <a href="<?= $this->Url->build(['controller' => 'Clients', 'action' => 'index']); ?>">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-human-male-female"></i></h1>
                                    <h6 class="text-white">Clients</h6>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->

                <!-- =====================SOUS MENU==================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div>
                                <a href="<?= $this->Url->build(['controller' => 'Usergroups', 'action' => 'index']); ?>"><button type="button" class="btn btn-outline-primary">Liste des groupes</button></a>

                                <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $usergroup->id], ['class' => 'btn btn-outline-success']) ?>
                                <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $usergroup->id], ['confirm' => __('Voulez-vous supprimer cet groupe? # {0}?', $usergroup->id), 'class' => 'btn btn-outline-danger']) ?>
                                <?= $this->Html->link(__('Ajouter un groupe'), ['action' => 'add'], ['class' => 'btn btn-outline-info']) ?>

                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table table-striped table-bordered">
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
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->