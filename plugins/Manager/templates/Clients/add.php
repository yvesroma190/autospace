<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $client
 */
?>
<!--<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Add Client') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('cel');
                    echo $this->Form->control('email');
                    echo $this->Form->control('adresse');
                    echo $this->Form->control('ville_id', ['options' => $villes, 'empty' => true]);
                    echo $this->Form->control('country_id', ['options' => $countries, 'empty' => true]);
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
                        <h4 class="page-title">CLIENTS</h4>
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
                                <a href="<?= $this->Url->build(['controller' => 'Clients', 'action' => 'index']); ?>"><button type="button" class="btn btn-outline-primary">Liste des clients</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6 col-lg-9">
                        <div class="card">
                            <?= $this->Form->create($client, ['class'=>'form-horizontal']) ?>
                            <!--<form class="form-horizontal">-->
                                <div class="card-body">
                                    <h4 class="card-title">Ajouter un client</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                        <?= $this->Form->control('name', ['class'=>'form-control', 'type'=>'text', 'name'=>'name', 'label'=>'Nom et prénoms', 'placeholder'=>'Nom et prénoms du client']); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                        <?= $this->Form->control('tel', ['class'=>'form-control', 'type'=>'text', 'name'=>'tel', 'label'=>'N° de téléphone fixe', 'placeholder'=>'N° de téléphone fixe']); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                        <?= $this->Form->control('cel', ['class'=>'form-control', 'type'=>'text', 'name'=>'cel', 'label'=>'N° cellulaire', 'placeholder'=>'N° cellulaire']); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                        <?= $this->Form->control('email', ['class'=>'form-control', 'type'=>'text', 'name'=>'email', 'label'=>'Email', 'placeholder'=>'Email']); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                        <?= $this->Form->control('adresse', ['class'=>'form-control', 'type'=>'text', 'name'=>'adresse', 'label'=>'Adresse', 'placeholder'=>'Adresse']); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <?= $this->Form->control('country_id', ['options' => $countries, 'empty' => true, 'class' => 'select2 form-control custom-select', 'style' => 'width: 100%; height:36px']); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <?= $this->Form->control('ville_id', ['options' => $villes, 'empty' => true, 'class' => 'select2 form-control custom-select', 'style' => 'width: 100%; height:36px']); ?>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="border-top">
                                    <div class="card-body">
                                        <?= $this->Form->button(__('Créer'), ['class'=>'btn btn-primary']) ?>
                                        
                                    </div>
                                </div>
                            <!--</form>-->
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