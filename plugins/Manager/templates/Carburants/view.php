<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $carburant
 */
?>
<!--<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Carburant'), ['action' => 'edit', $carburant->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Carburant'), ['action' => 'delete', $carburant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carburant->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carburants'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Carburant'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carburants view content">
            <h3><?= h($carburant->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($carburant->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($carburant->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($carburant->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($carburant->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Voitures') ?></h4>
                <?php if (!empty($carburant->voitures)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Modele Id') ?></th>
                            <th><?= __('Mode Id') ?></th>
                            <th><?= __('Etat Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Immatriculation') ?></th>
                            <th><?= __('Carburant Id') ?></th>
                            <th><?= __('Vitesse') ?></th>
                            <th><?= __('Kilometrage') ?></th>
                            <th><?= __('Annee') ?></th>
                            <th><?= __('Detail') ?></th>
                            <th><?= __('Concessionnaire Id') ?></th>
                            <th><?= __('Prix') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($carburant->voitures as $voitures) : ?>
                        <tr>
                            <td><?= h($voitures->id) ?></td>
                            <td><?= h($voitures->photo) ?></td>
                            <td><?= h($voitures->category_id) ?></td>
                            <td><?= h($voitures->modele_id) ?></td>
                            <td><?= h($voitures->mode_id) ?></td>
                            <td><?= h($voitures->etat_id) ?></td>
                            <td><?= h($voitures->name) ?></td>
                            <td><?= h($voitures->immatriculation) ?></td>
                            <td><?= h($voitures->carburant_id) ?></td>
                            <td><?= h($voitures->vitesse) ?></td>
                            <td><?= h($voitures->kilometrage) ?></td>
                            <td><?= h($voitures->annee) ?></td>
                            <td><?= h($voitures->detail) ?></td>
                            <td><?= h($voitures->concessionnaire_id) ?></td>
                            <td><?= h($voitures->prix) ?></td>
                            <td><?= h($voitures->created) ?></td>
                            <td><?= h($voitures->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Voitures', 'action' => 'view', $voitures->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Voitures', 'action' => 'edit', $voitures->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Voitures', 'action' => 'delete', $voitures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voitures->id)]) ?>
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
                        <h4 class="page-title">CARBURANTS</h4>
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
                                <a href="<?= $this->Url->build(['controller' => 'Carburants', 'action' => 'index']); ?>"><button type="button" class="btn btn-outline-primary">Liste des carburants</button></a>

                                <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $carburant->id], ['class' => 'btn btn-outline-success']) ?>
                                <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $carburant->id], ['confirm' => __('Voulez-vous supprimer cet carburant? # {0}?', $carburant->id), 'class' => 'btn btn-outline-danger']) ?>
                                <?= $this->Html->link(__('Ajouter un carburant'), ['action' => 'add'], ['class' => 'btn btn-outline-info']) ?>

                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="carburants view content">
                            <h3><?= h($carburant->name) ?></h3>
                            <table>
                                <tr>
                                    <th><?= __('Name') ?></th>
                                    <td><?= h($carburant->name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Id') ?></th>
                                    <td><?= $this->Number->format($carburant->id) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Created') ?></th>
                                    <td><?= h($carburant->created) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Modified') ?></th>
                                    <td><?= h($carburant->modified) ?></td>
                                </tr>
                            </table>
                            <div class="related">
                                <h4><?= __('Related Voitures') ?></h4>
                                <?php if (!empty($carburant->voitures)) : ?>
                                <div class="table-responsive">
                                    <table>
                                        <tr>
                                            <th><?= __('Id') ?></th>
                                            <th><?= __('Photo') ?></th>
                                            <th><?= __('Category Id') ?></th>
                                            <th><?= __('Modele Id') ?></th>
                                            <th><?= __('Mode Id') ?></th>
                                            <th><?= __('Etat Id') ?></th>
                                            <th><?= __('Name') ?></th>
                                            <th><?= __('Immatriculation') ?></th>
                                            <th><?= __('Carburant Id') ?></th>
                                            <th><?= __('Vitesse') ?></th>
                                            <th><?= __('Kilometrage') ?></th>
                                            <th><?= __('Annee') ?></th>
                                            <th><?= __('Detail') ?></th>
                                            <th><?= __('Concessionnaire Id') ?></th>
                                            <th><?= __('Prix') ?></th>
                                            <th><?= __('Created') ?></th>
                                            <th><?= __('Modified') ?></th>
                                            <th class="actions"><?= __('Actions') ?></th>
                                        </tr>
                                        <?php foreach ($carburant->voitures as $voitures) : ?>
                                        <tr>
                                            <td><?= h($voitures->id) ?></td>
                                            <td><?= h($voitures->photo) ?></td>
                                            <td><?= h($voitures->category_id) ?></td>
                                            <td><?= h($voitures->modele_id) ?></td>
                                            <td><?= h($voitures->mode_id) ?></td>
                                            <td><?= h($voitures->etat_id) ?></td>
                                            <td><?= h($voitures->name) ?></td>
                                            <td><?= h($voitures->immatriculation) ?></td>
                                            <td><?= h($voitures->carburant_id) ?></td>
                                            <td><?= h($voitures->vitesse) ?></td>
                                            <td><?= h($voitures->kilometrage) ?></td>
                                            <td><?= h($voitures->annee) ?></td>
                                            <td><?= h($voitures->detail) ?></td>
                                            <td><?= h($voitures->concessionnaire_id) ?></td>
                                            <td><?= h($voitures->prix) ?></td>
                                            <td><?= h($voitures->created) ?></td>
                                            <td><?= h($voitures->modified) ?></td>
                                            <td class="actions">
                                                <?= $this->Html->link(__('View'), ['controller' => 'Voitures', 'action' => 'view', $voitures->id]) ?>
                                                <?= $this->Html->link(__('Edit'), ['controller' => 'Voitures', 'action' => 'edit', $voitures->id]) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Voitures', 'action' => 'delete', $voitures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $voitures->id)]) ?>
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