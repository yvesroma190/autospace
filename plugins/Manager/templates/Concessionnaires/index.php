<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $concessionnaires
 */
?>
<!--<div class="concessionnaires index content">
    <?= $this->Html->link(__('New Concessionnaire'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Concessionnaires') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('tel') ?></th>
                    <th><?= $this->Paginator->sort('cel') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('adresse') ?></th>
                    <th><?= $this->Paginator->sort('bp') ?></th>
                    <th><?= $this->Paginator->sort('country_id') ?></th>
                    <th><?= $this->Paginator->sort('ville_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($concessionnaires as $concessionnaire): ?>
                <tr>
                    <td><?= $this->Number->format($concessionnaire->id) ?></td>
                    <td><?= h($concessionnaire->name) ?></td>
                    <td><?= h($concessionnaire->tel) ?></td>
                    <td><?= h($concessionnaire->cel) ?></td>
                    <td><?= h($concessionnaire->email) ?></td>
                    <td><?= h($concessionnaire->adresse) ?></td>
                    <td><?= h($concessionnaire->bp) ?></td>
                    <td><?= $concessionnaire->has('country') ? $this->Html->link($concessionnaire->country->name, ['controller' => 'Countries', 'action' => 'view', $concessionnaire->country->id]) : '' ?></td>
                    <td><?= $concessionnaire->has('ville') ? $this->Html->link($concessionnaire->ville->name, ['controller' => 'Villes', 'action' => 'view', $concessionnaire->ville->id]) : '' ?></td>
                    <td><?= h($concessionnaire->created) ?></td>
                    <td><?= h($concessionnaire->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $concessionnaire->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $concessionnaire->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $concessionnaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $concessionnaire->id)]) ?>
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
                        <h4 class="page-title">CONCESSIONNAIRES</h4>
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
                                <a href="<?= $this->Url->build(['controller' => 'Concessionnaires', 'action' => 'add']); ?>"><button type="button" class="btn btn-outline-primary">Ajouter un concesionnaire</button></a>
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
                                    <h5 class="card-title">Concessionnaires</h5>
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><?= $this->Paginator->sort('id') ?></th>
                                                    <th><?= $this->Paginator->sort('name') ?></th>
                                                    <th><?= $this->Paginator->sort('tel') ?></th>
                                                    <th><?= $this->Paginator->sort('cel') ?></th>
                                                    <th><?= $this->Paginator->sort('email') ?></th>
                                                    <th><?= $this->Paginator->sort('adresse') ?></th>
                                                    <th><?= $this->Paginator->sort('bp') ?></th>
                                                    <th><?= $this->Paginator->sort('country_id') ?></th>
                                                    <th><?= $this->Paginator->sort('ville_id') ?></th>
                                                    <th><?= $this->Paginator->sort('created') ?></th>
                                                    <th><?= $this->Paginator->sort('modified') ?></th>
                                                    <th class="actions"><?= __('Actions') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($concessionnaires as $concessionnaire): ?>
                                                <tr>
                                                    <td><?= $this->Number->format($concessionnaire->id) ?></td>
                                                    <td><?= h($concessionnaire->name) ?></td>
                                                    <td><?= h($concessionnaire->tel) ?></td>
                                                    <td><?= h($concessionnaire->cel) ?></td>
                                                    <td><?= h($concessionnaire->email) ?></td>
                                                    <td><?= h($concessionnaire->adresse) ?></td>
                                                    <td><?= h($concessionnaire->bp) ?></td>
                                                    <td><?= $concessionnaire->has('country') ? $this->Html->link($concessionnaire->country->name, ['controller' => 'Countries', 'action' => 'view', $concessionnaire->country->id]) : '' ?></td>
                                                    <td><?= $concessionnaire->has('ville') ? $this->Html->link($concessionnaire->ville->name, ['controller' => 'Villes', 'action' => 'view', $concessionnaire->ville->id]) : '' ?></td>
                                                    <td><?= h($concessionnaire->created) ?></td>
                                                    <td><?= h($concessionnaire->modified) ?></td>
                                                    <td class="actions">
                                                        <?= $this->Html->link(__('View'), ['action' => 'view', $concessionnaire->id]) ?>
                                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $concessionnaire->id]) ?>
                                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $concessionnaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $concessionnaire->id)]) ?>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th><?= $this->Paginator->sort('id') ?></th>
                                                    <th><?= $this->Paginator->sort('name') ?></th>
                                                    <th><?= $this->Paginator->sort('tel') ?></th>
                                                    <th><?= $this->Paginator->sort('cel') ?></th>
                                                    <th><?= $this->Paginator->sort('email') ?></th>
                                                    <th><?= $this->Paginator->sort('adresse') ?></th>
                                                    <th><?= $this->Paginator->sort('bp') ?></th>
                                                    <th><?= $this->Paginator->sort('country_id') ?></th>
                                                    <th><?= $this->Paginator->sort('ville_id') ?></th>
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