<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $usergroups
 */
?>
<!--<div class="usergroups index content">
    <?= $this->Html->link(__('New Usergroup'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usergroups') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usergroups as $usergroup): ?>
                <tr>
                    <td><?= $this->Number->format($usergroup->id) ?></td>
                    <td><?= h($usergroup->name) ?></td>
                    <td><?= h($usergroup->created) ?></td>
                    <td><?= h($usergroup->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usergroup->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usergroup->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usergroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usergroup->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>-->



<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">GROUPES D'UTILISATEURS</h4>
                        <div class="ml-auto text-right">
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
                                <a href="<?= $this->Url->build(['controller' => 'Usergroups', 'action' => 'add']); ?>"><button type="button" class="btn btn-outline-primary">Ajouter un groupe</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->

                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Groupes d'utilisateurs</h5>
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><?= $this->Paginator->sort('id') ?></th>
                                                    <th><?= $this->Paginator->sort('name') ?></th>
                                                    <th><?= $this->Paginator->sort('created') ?></th>
                                                    <th><?= $this->Paginator->sort('modified') ?></th>
                                                    <th class="actions"><?= __('Actions') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($usergroups as $usergroup): ?>
                                                <tr>
                                                    <td><?= $this->Number->format($usergroup->id) ?></td>
                                                    <td><?= h($usergroup->name) ?></td>
                                                    <td><?= h($usergroup->created) ?></td>
                                                    <td><?= h($usergroup->modified) ?></td>
                                                    <td class="actions">
                                                        <?= $this->Html->link(__('View'), ['action' => 'view', $usergroup->id]) ?>
                                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usergroup->id]) ?>
                                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usergroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usergroup->id)]) ?>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th><?= $this->Paginator->sort('id') ?></th>
                                                    <th><?= $this->Paginator->sort('name') ?></th>
                                                    <th><?= $this->Paginator->sort('created') ?></th>
                                                    <th><?= $this->Paginator->sort('modified') ?></th>
                                                    <th class="actions"><?= __('Actions') ?></th>
                                                </tr>
                                            </tfoot>
                                        </table>
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