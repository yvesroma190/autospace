<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $piece
 */
?>
<!--<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Piece'), ['action' => 'edit', $piece->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Piece'), ['action' => 'delete', $piece->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piece->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pieces'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Piece'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pieces view content">
            <h3><?= h($piece->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($piece->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($piece->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typepiece') ?></th>
                    <td><?= $piece->has('typepiece') ? $this->Html->link($piece->typepiece->name, ['controller' => 'Typepieces', 'action' => 'view', $piece->typepiece->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $piece->has('category') ? $this->Html->link($piece->category->name, ['controller' => 'Categories', 'action' => 'view', $piece->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Modele') ?></th>
                    <td><?= $piece->has('modele') ? $this->Html->link($piece->modele->name, ['controller' => 'Modeles', 'action' => 'view', $piece->modele->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Marque') ?></th>
                    <td><?= $piece->has('marque') ? $this->Html->link($piece->marque->name, ['controller' => 'Marques', 'action' => 'view', $piece->marque->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Etat') ?></th>
                    <td><?= $piece->has('etat') ? $this->Html->link($piece->etat->name, ['controller' => 'Etats', 'action' => 'view', $piece->etat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($piece->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= $this->Number->format($piece->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($piece->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($piece->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Achats') ?></h4>
                <?php if (!empty($piece->achats)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Piece Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Qte') ?></th>
                            <th><?= __('Pt') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($piece->achats as $achats) : ?>
                        <tr>
                            <td><?= h($achats->id) ?></td>
                            <td><?= h($achats->client_id) ?></td>
                            <td><?= h($achats->piece_id) ?></td>
                            <td><?= h($achats->date) ?></td>
                            <td><?= h($achats->qte) ?></td>
                            <td><?= h($achats->pt) ?></td>
                            <td><?= h($achats->created) ?></td>
                            <td><?= h($achats->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Achats', 'action' => 'view', $achats->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Achats', 'action' => 'edit', $achats->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Achats', 'action' => 'delete', $achats->id], ['confirm' => __('Are you sure you want to delete # {0}?', $achats->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Piecegalleries') ?></h4>
                <?php if (!empty($piece->piecegalleries)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Piece Id') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Path') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($piece->piecegalleries as $piecegalleries) : ?>
                        <tr>
                            <td><?= h($piecegalleries->id) ?></td>
                            <td><?= h($piecegalleries->piece_id) ?></td>
                            <td><?= h($piecegalleries->photo) ?></td>
                            <td><?= h($piecegalleries->path) ?></td>
                            <td><?= h($piecegalleries->created) ?></td>
                            <td><?= h($piecegalleries->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Piecegalleries', 'action' => 'view', $piecegalleries->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Piecegalleries', 'action' => 'edit', $piecegalleries->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Piecegalleries', 'action' => 'delete', $piecegalleries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piecegalleries->id)]) ?>
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
                        <h4 class="page-title">PIECES DETACHEES</h4>
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
                                <a href="<?= $this->Url->build(['controller' => 'Pieces', 'action' => 'index']); ?>"><button type="button" class="btn btn-outline-primary">Liste des pièces détachées</button></a>

                                <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $piece->id], ['class' => 'btn btn-outline-success']) ?>
                                <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $piece->id], ['confirm' => __('Voulez-vous supprimer cette pièce? # {0}?', $piece->id), 'class' => 'btn btn-outline-danger']) ?>
                                <?= $this->Html->link(__('Ajouter une pièce'), ['action' => 'add'], ['class' => 'btn btn-outline-info']) ?>

                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div>
                                <h3><?= h($piece->name) ?></h3>
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <th><?= __('Photo') ?></th>
                                        <td><?= @$this->Html->image($piece->photo, ['style'=>'width:200px; heigth:200px']) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Name') ?></th>
                                        <td><?= h($piece->name) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Typepiece') ?></th>
                                        <td><?= $piece->has('typepiece') ? $this->Html->link($piece->typepiece->name, ['controller' => 'Typepieces', 'action' => 'view', $piece->typepiece->id]) : '' ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Category') ?></th>
                                        <td><?= $piece->has('category') ? $this->Html->link($piece->category->name, ['controller' => 'Categories', 'action' => 'view', $piece->category->id]) : '' ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Modele') ?></th>
                                        <td><?= $piece->has('modele') ? $this->Html->link($piece->modele->name, ['controller' => 'Modeles', 'action' => 'view', $piece->modele->id]) : '' ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Marque') ?></th>
                                        <td><?= $piece->has('marque') ? $this->Html->link($piece->marque->name, ['controller' => 'Marques', 'action' => 'view', $piece->marque->id]) : '' ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Etat') ?></th>
                                        <td><?= $piece->has('etat') ? $this->Html->link($piece->etat->name, ['controller' => 'Etats', 'action' => 'view', $piece->etat->id]) : '' ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Id') ?></th>
                                        <td><?= $this->Number->format($piece->id) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Prix') ?></th>
                                        <td><?= $this->Number->format($piece->prix) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Created') ?></th>
                                        <td><?= h($piece->created) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Modified') ?></th>
                                        <td><?= h($piece->modified) ?></td>
                                    </tr>
                                </table>
                                <div class="related">
                                    <h4><?= __('Related Achats') ?></h4>
                                    <?php if (!empty($piece->achats)) : ?>
                                    <div class="table-responsive">
                                        <table>
                                            <tr>
                                                <th><?= __('Id') ?></th>
                                                <th><?= __('Client Id') ?></th>
                                                <th><?= __('Piece Id') ?></th>
                                                <th><?= __('Date') ?></th>
                                                <th><?= __('Qte') ?></th>
                                                <th><?= __('Pt') ?></th>
                                                <th><?= __('Created') ?></th>
                                                <th><?= __('Modified') ?></th>
                                                <th class="actions"><?= __('Actions') ?></th>
                                            </tr>
                                            <?php foreach ($piece->achats as $achats) : ?>
                                            <tr>
                                                <td><?= h($achats->id) ?></td>
                                                <td><?= h($achats->client_id) ?></td>
                                                <td><?= h($achats->piece_id) ?></td>
                                                <td><?= h($achats->date) ?></td>
                                                <td><?= h($achats->qte) ?></td>
                                                <td><?= h($achats->pt) ?></td>
                                                <td><?= h($achats->created) ?></td>
                                                <td><?= h($achats->modified) ?></td>
                                                <td class="actions">
                                                    <?= $this->Html->link(__('View'), ['controller' => 'Achats', 'action' => 'view', $achats->id]) ?>
                                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Achats', 'action' => 'edit', $achats->id]) ?>
                                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Achats', 'action' => 'delete', $achats->id], ['confirm' => __('Are you sure you want to delete # {0}?', $achats->id)]) ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="related">
                                    <h4><?= __('Related Piecegalleries') ?></h4>
                                    <?php if (!empty($piece->piecegalleries)) : ?>
                                    <div class="table-responsive">
                                        <table>
                                            <tr>
                                                <th><?= __('Id') ?></th>
                                                <th><?= __('Piece Id') ?></th>
                                                <th><?= __('Photo') ?></th>
                                                <th><?= __('Path') ?></th>
                                                <th><?= __('Created') ?></th>
                                                <th><?= __('Modified') ?></th>
                                                <th class="actions"><?= __('Actions') ?></th>
                                            </tr>
                                            <?php foreach ($piece->piecegalleries as $piecegalleries) : ?>
                                            <tr>
                                                <td><?= h($piecegalleries->id) ?></td>
                                                <td><?= h($piecegalleries->piece_id) ?></td>
                                                <td><?= h($piecegalleries->photo) ?></td>
                                                <td><?= h($piecegalleries->path) ?></td>
                                                <td><?= h($piecegalleries->created) ?></td>
                                                <td><?= h($piecegalleries->modified) ?></td>
                                                <td class="actions">
                                                    <?= $this->Html->link(__('View'), ['controller' => 'Piecegalleries', 'action' => 'view', $piecegalleries->id]) ?>
                                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Piecegalleries', 'action' => 'edit', $piecegalleries->id]) ?>
                                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Piecegalleries', 'action' => 'delete', $piecegalleries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piecegalleries->id)]) ?>
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