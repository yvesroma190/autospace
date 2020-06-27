<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $pieces
 */
?>
<!--<div class="pieces index content">
    <?= $this->Html->link(__('New Piece'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pieces') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('typepiece_id') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th><?= $this->Paginator->sort('modele_id') ?></th>
                    <th><?= $this->Paginator->sort('marque_id') ?></th>
                    <th><?= $this->Paginator->sort('prix') ?></th>
                    <th><?= $this->Paginator->sort('etat_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pieces as $piece): ?>
                <tr>
                    <td><?= $this->Number->format($piece->id) ?></td>
                    <td><?= h($piece->photo) ?></td>
                    <td><?= h($piece->name) ?></td>
                    <td><?= $piece->has('typepiece') ? $this->Html->link($piece->typepiece->name, ['controller' => 'Typepieces', 'action' => 'view', $piece->typepiece->id]) : '' ?></td>
                    <td><?= $piece->has('category') ? $this->Html->link($piece->category->name, ['controller' => 'Categories', 'action' => 'view', $piece->category->id]) : '' ?></td>
                    <td><?= $piece->has('modele') ? $this->Html->link($piece->modele->name, ['controller' => 'Modeles', 'action' => 'view', $piece->modele->id]) : '' ?></td>
                    <td><?= $piece->has('marque') ? $this->Html->link($piece->marque->name, ['controller' => 'Marques', 'action' => 'view', $piece->marque->id]) : '' ?></td>
                    <td><?= $this->Number->format($piece->prix) ?></td>
                    <td><?= $piece->has('etat') ? $this->Html->link($piece->etat->name, ['controller' => 'Etats', 'action' => 'view', $piece->etat->id]) : '' ?></td>
                    <td><?= h($piece->created) ?></td>
                    <td><?= h($piece->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $piece->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $piece->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $piece->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piece->id)]) ?>
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
                        <h4 class="page-title">PIECES DETACHEES</h4>
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
                                <a href="<?= $this->Url->build(['controller' => 'Pieces', 'action' => 'add']); ?>"><button type="button" class="btn btn-outline-primary">Ajouter une pièce détachée</button></a>

                                <a href="<?= $this->Url->build(['controller' => 'Typepieces', 'action' => 'index']); ?>"><button type="button" class="btn btn-outline-success">Gestion des types de pièces</button></a>
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
                                    <h5 class="card-title">Pièces détachées</h5>
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><?= $this->Paginator->sort('id') ?></th>
                                                    <th><?= $this->Paginator->sort('photo') ?></th>
                                                    <th><?= $this->Paginator->sort('name') ?></th>
                                                    <th><?= $this->Paginator->sort('typepiece_id') ?></th>
                                                    <th><?= $this->Paginator->sort('category_id') ?></th>
                                                    <th><?= $this->Paginator->sort('modele_id') ?></th>
                                                    <th><?= $this->Paginator->sort('marque_id') ?></th>
                                                    <th><?= $this->Paginator->sort('prix') ?></th>
                                                    <th><?= $this->Paginator->sort('etat_id') ?></th>
                                                    <th><?= $this->Paginator->sort('created') ?></th>
                                                    <th><?= $this->Paginator->sort('modified') ?></th>
                                                    <th class="actions"><?= __('Actions') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($pieces as $piece): ?>
                                                <tr>
                                                    <td><?= $this->Number->format($piece->id) ?></td>
                                                    <td><?= @$this->Html->image($piece->photo, ['style'=>'width:200px; heigth:200px']) ?></td>
                                                    <td><?= h($piece->name) ?></td>
                                                    <td><?= $piece->has('typepiece') ? $this->Html->link($piece->typepiece->name, ['controller' => 'Typepieces', 'action' => 'view', $piece->typepiece->id]) : '' ?></td>
                                                    <td><?= $piece->has('category') ? $this->Html->link($piece->category->name, ['controller' => 'Categories', 'action' => 'view', $piece->category->id]) : '' ?></td>
                                                    <td><?= $piece->has('modele') ? $this->Html->link($piece->modele->name, ['controller' => 'Modeles', 'action' => 'view', $piece->modele->id]) : '' ?></td>
                                                    <td><?= $piece->has('marque') ? $this->Html->link($piece->marque->name, ['controller' => 'Marques', 'action' => 'view', $piece->marque->id]) : '' ?></td>
                                                    <td><?= $this->Number->format($piece->prix) ?></td>
                                                    <td><?= $piece->has('etat') ? $this->Html->link($piece->etat->name, ['controller' => 'Etats', 'action' => 'view', $piece->etat->id]) : '' ?></td>
                                                    <td><?= h($piece->created) ?></td>
                                                    <td><?= h($piece->modified) ?></td>
                                                    <td class="actions">
                                                        <?= $this->Html->link(__('View'), ['action' => 'view', $piece->id]) ?>
                                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $piece->id]) ?>
                                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $piece->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piece->id)]) ?>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th><?= $this->Paginator->sort('id') ?></th>
                                                    <th><?= $this->Paginator->sort('photo') ?></th>
                                                    <th><?= $this->Paginator->sort('name') ?></th>
                                                    <th><?= $this->Paginator->sort('typepiece_id') ?></th>
                                                    <th><?= $this->Paginator->sort('category_id') ?></th>
                                                    <th><?= $this->Paginator->sort('modele_id') ?></th>
                                                    <th><?= $this->Paginator->sort('marque_id') ?></th>
                                                    <th><?= $this->Paginator->sort('prix') ?></th>
                                                    <th><?= $this->Paginator->sort('etat_id') ?></th>
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