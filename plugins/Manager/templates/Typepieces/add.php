<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $typepiece
 */
?>
<!--<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Typepieces'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="typepieces form content">
            <?= $this->Form->create($typepiece) ?>
            <fieldset>
                <legend><?= __('Add Typepiece') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>-->


<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">TYPES DE PIECES</h4>
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
                                <a href="<?= $this->Url->build(['controller' => 'Typepieces', 'action' => 'index']); ?>"><button type="button" class="btn btn-outline-primary">Liste des types de pièces</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <?= $this->Form->create($typepiece, ['class'=>'form-horizontal']) ?>
                                <div class="card-body">
                                    <h4 class="card-title">Ajouter un type de pièces</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                        <?= $this->Form->control('name', ['class'=>'form-control', 'type'=>'text', 'name'=>'name', 'label'=>'Nom', 'placeholder'=>'Nom du type de pièces']); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <?= $this->Form->button(__('Ajouter'), ['class'=>'btn btn-primary']) ?>
                                        
                                    </div>
                                </div>
                            <?= $this->Form->end() ?>
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