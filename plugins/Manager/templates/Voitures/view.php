<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $voiture
 */
?>
<!--<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Voiture'), ['action' => 'edit', $voiture->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Voiture'), ['action' => 'delete', $voiture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voiture->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Voitures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Voiture'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="voitures view content">
            <h3><?= h($voiture->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($voiture->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $voiture->has('category') ? $this->Html->link($voiture->category->name, ['controller' => 'Categories', 'action' => 'view', $voiture->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Marque') ?></th>
                    <td><?= $voiture->has('marque') ? $this->Html->link($voiture->marque->name, ['controller' => 'Marques', 'action' => 'view', $voiture->marque->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Modele') ?></th>
                    <td><?= $voiture->has('modele') ? $this->Html->link($voiture->modele->name, ['controller' => 'Modeles', 'action' => 'view', $voiture->modele->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Mode') ?></th>
                    <td><?= $voiture->has('mode') ? $this->Html->link($voiture->mode->name, ['controller' => 'Modes', 'action' => 'view', $voiture->mode->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Etat') ?></th>
                    <td><?= $voiture->has('etat') ? $this->Html->link($voiture->etat->name, ['controller' => 'Etats', 'action' => 'view', $voiture->etat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($voiture->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Immatriculation') ?></th>
                    <td><?= h($voiture->immatriculation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Carburant') ?></th>
                    <td><?= $voiture->has('carburant') ? $this->Html->link($voiture->carburant->name, ['controller' => 'Carburants', 'action' => 'view', $voiture->carburant->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Vitesse') ?></th>
                    <td><?= h($voiture->vitesse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kilometrage') ?></th>
                    <td><?= h($voiture->kilometrage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Annee') ?></th>
                    <td><?= h($voiture->annee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Detail') ?></th>
                    <td><?= h($voiture->detail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Concessionnaire') ?></th>
                    <td><?= $voiture->has('concessionnaire') ? $this->Html->link($voiture->concessionnaire->name, ['controller' => 'Concessionnaires', 'action' => 'view', $voiture->concessionnaire->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($voiture->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= $this->Number->format($voiture->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($voiture->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($voiture->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Commandes') ?></h4>
                <?php if (!empty($voiture->commandes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Voiture Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($voiture->commandes as $commandes) : ?>
                        <tr>
                            <td><?= h($commandes->id) ?></td>
                            <td><?= h($commandes->voiture_id) ?></td>
                            <td><?= h($commandes->client_id) ?></td>
                            <td><?= h($commandes->date) ?></td>
                            <td><?= h($commandes->created) ?></td>
                            <td><?= h($commandes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Commandes', 'action' => 'view', $commandes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Commandes', 'action' => 'edit', $commandes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commandes', 'action' => 'delete', $commandes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commandes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Voituregalleries') ?></h4>
                <?php if (!empty($voiture->voituregalleries)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Voiture Id') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Path') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($voiture->voituregalleries as $voituregalleries) : ?>
                        <tr>
                            <td><?= h($voituregalleries->id) ?></td>
                            <td><?= h($voituregalleries->voiture_id) ?></td>
                            <td><?= h($voituregalleries->photo) ?></td>
                            <td><?= h($voituregalleries->path) ?></td>
                            <td><?= h($voituregalleries->created) ?></td>
                            <td><?= h($voituregalleries->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Voituregalleries', 'action' => 'view', $voituregalleries->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Voituregalleries', 'action' => 'edit', $voituregalleries->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Voituregalleries', 'action' => 'delete', $voituregalleries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voituregalleries->id)]) ?>
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
                        <h4 class="page-title">VOITURES</h4>
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
                                <a href="<?= $this->Url->build(['controller' => 'Voitures', 'action' => 'index']); ?>"><button type="button" class="btn btn-outline-primary">Liste des voitures</button></a>

                                <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $voiture->id], ['class' => 'btn btn-outline-success']) ?>
                                <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $voiture->id], ['confirm' => __('Voulez-vous supprimer cette voiture? # {0}?', $voiture->id), 'class' => 'btn btn-outline-danger']) ?>
                                <?= $this->Html->link(__('Ajouter une voiture'), ['action' => 'add'], ['class' => 'btn btn-outline-info']) ?>
                                <?= $this->Html->link(__('Ajouter une image dans la gallerie'), ['controller' => 'Voituregalleries', 'action' => 'add', $voiture->id], ['class' => 'btn btn-outline-warning']) ?>

                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div>
                                <h3><?= h($voiture->name) ?></h3>
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <th><?= __('Photo') ?></th>
                                        <td><?= @$this->Html->image($voiture->photo, ['style'=>'width:200px; heigth:200px']) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Category') ?></th>
                                        <td><?= $voiture->has('category') ? $this->Html->link($voiture->category->name, ['controller' => 'Categories', 'action' => 'view', $voiture->category->id]) : '' ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Marque') ?></th>
                                        <td><?= $voiture->has('marque') ? $this->Html->link($voiture->marque->name, ['controller' => 'Marques', 'action' => 'view', $voiture->marque->id]) : '' ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Modele') ?></th>
                                        <td><?= $voiture->has('modele') ? $this->Html->link($voiture->modele->name, ['controller' => 'Modeles', 'action' => 'view', $voiture->modele->id]) : '' ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Mode') ?></th>
                                        <td><?= $voiture->has('mode') ? $this->Html->link($voiture->mode->name, ['controller' => 'Modes', 'action' => 'view', $voiture->mode->id]) : '' ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Etat') ?></th>
                                        <td><?= $voiture->has('etat') ? $this->Html->link($voiture->etat->name, ['controller' => 'Etats', 'action' => 'view', $voiture->etat->id]) : '' ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Name') ?></th>
                                        <td><?= h($voiture->name) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Immatriculation') ?></th>
                                        <td><?= h($voiture->immatriculation) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Carburant') ?></th>
                                        <td><?= $voiture->has('carburant') ? $this->Html->link($voiture->carburant->name, ['controller' => 'Carburants', 'action' => 'view', $voiture->carburant->id]) : '' ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Vitesse') ?></th>
                                        <td><?= h($voiture->vitesse) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Kilometrage') ?></th>
                                        <td><?= h($voiture->kilometrage) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Annee') ?></th>
                                        <td><?= h($voiture->annee) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Detail') ?></th>
                                        <td><?= h($voiture->detail) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Concessionnaire') ?></th>
                                        <td><?= $voiture->has('concessionnaire') ? $this->Html->link($voiture->concessionnaire->name, ['controller' => 'Concessionnaires', 'action' => 'view', $voiture->concessionnaire->id]) : '' ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Id') ?></th>
                                        <td><?= $this->Number->format($voiture->id) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Prix') ?></th>
                                        <td><?= $this->Number->format($voiture->prix) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Created') ?></th>
                                        <td><?= h($voiture->created) ?></td>
                                    </tr>
                                    <tr>
                                        <th><?= __('Modified') ?></th>
                                        <td><?= h($voiture->modified) ?></td>
                                    </tr>
                                </table>
                                <div class="related">
                                    <h4><?= __('Related Commandes') ?></h4>
                                    <?php if (!empty($voiture->commandes)) : ?>
                                    <div class="table-responsive">
                                        <table>
                                            <tr>
                                                <th><?= __('Id') ?></th>
                                                <th><?= __('Voiture Id') ?></th>
                                                <th><?= __('Client Id') ?></th>
                                                <th><?= __('Date') ?></th>
                                                <th><?= __('Created') ?></th>
                                                <th><?= __('Modified') ?></th>
                                                <th class="actions"><?= __('Actions') ?></th>
                                            </tr>
                                            <?php foreach ($voiture->commandes as $commandes) : ?>
                                            <tr>
                                                <td><?= h($commandes->id) ?></td>
                                                <td><?= h($commandes->voiture_id) ?></td>
                                                <td><?= h($commandes->client_id) ?></td>
                                                <td><?= h($commandes->date) ?></td>
                                                <td><?= h($commandes->created) ?></td>
                                                <td><?= h($commandes->modified) ?></td>
                                                <td class="actions">
                                                    <?= $this->Html->link(__('View'), ['controller' => 'Commandes', 'action' => 'view', $commandes->id]) ?>
                                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Commandes', 'action' => 'edit', $commandes->id]) ?>
                                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commandes', 'action' => 'delete', $commandes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commandes->id)]) ?>
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

            <div class="container-fluid">
            <h4><?= __('Photos Associées') ?></h4>
            <?php if (!empty($voiture->voituregalleries)) : ?>
            <div class="row el-element-overlay">
                <?php foreach ($voiture->voituregalleries as $voituregalleries) : ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"><?= @$this->Html->image($voituregalleries->photo) ?>
                            </div>
                            <div class="el-card-content">
                                <span class="text-muted">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Voituregalleries', 'action' => 'view', $voituregalleries->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Voituregalleries', 'action' => 'edit', $voituregalleries->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Voituregalleries', 'action' => 'delete', $voituregalleries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voituregalleries->id)]) ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>