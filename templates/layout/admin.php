<!DOCTYPE html>
<html lang="fr">
<head>
<title>Administration Autospace</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('bootstrap-responsive.min.css') ?>
<?= $this->Html->css('fullcalendar.css') ?>
<?= $this->Html->css('matrix-style.css') ?>
<?= $this->Html->css('matrix-media.css') ?>
<?= $this->Html->css('/font-awesome/css/font-awesome.css') ?>
<?= $this->Html->css('jquery.gritter.css') ?>
<?= $this->Html->css('uniform.css') ?>
<?= $this->Html->css('select2.css') ?>


<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Administration Autospace</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Binevenur utilisateur</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> Mon Profile</a></li>
        <!-- <li class="divider"></li> -->
        <!-- <li><a href="#"><i class="icon-check"></i> Mes Tâches</a></li> -->
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Déconnexion</a></li>
      </ul>
    </li>
    <!-- <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li> -->
	<li class=""><a title="" href="#"><i class="icon icon-bell"></i> <span class="text">Notifications</span><span class="label label-important">5</span></a></li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Paramètres</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Se déconnecter</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>Tableau de bord</a>
  <ul>
	<li class="active"><a href="<?= $this->Url->build(['controller' => 'Commandes', 'action' => 'dashboard']); ?>"><i class="icon icon-home"></i> <span>Tableau de bord</span></a> </li>
	<li class="submenu"> <a href="#"><i class="icon icon-shopping-cart"></i> <span>Vendre</span> <span class="label label-important">+</span></a>
      <ul>
        <li><a href="<?= $this->Url->build(['controller' => 'Commandes', 'action' => 'index']); ?>">Commandes de voitures</a></li>
        <li><a href="<?= $this->Url->build(['controller' => 'Achats', 'action' => 'index']); ?>">Achats de pièces</a></li>
      </ul>
    </li>
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Catalogue</span> <span class="label label-important">+</span></a>
      <ul>
        <li><a href="<?= $this->Url->build(['controller' => 'Voitures', 'action' => 'index']); ?>">Voitures</a></li>
        <li><a href="<?= $this->Url->build(['controller' => 'Pieces', 'action' => 'index']); ?>">Pièces Détachées</a></li>
      </ul>
    </li>
	<li> <a href="<?= $this->Url->build(['controller' => 'Clients', 'action' => 'index']); ?>"><i class="icon icon-group"></i> <span>Clients</span></a> </li>
	<li> <a href="<?= $this->Url->build(['controller' => 'Concessionnaires', 'action' => 'index']); ?>"><i class="icon icon-truck"></i> <span>Concessionnaires</span></a> </li>
	<li> <a href="<?= $this->Url->build(['controller' => 'Fournisseurs', 'action' => 'index']); ?>"><i class="icon icon-hand-right"></i> <span>Fournisseurs</span></a> </li>
	
	<li class="submenu"> <a href="#"><i class="icon  icon-hdd"></i> <span>Données</span> <span class="label label-important">+</span></a>
      <ul>
        <li><a href="<?= $this->Url->build(['controller' => 'Categories', 'action' => 'index']); ?>">Catégories de Voitures</a></li>
        <li><a href="<?= $this->Url->build(['controller' => 'Typepieces', 'action' => 'index']); ?>">Types de Pièces Détachées</a></li>
        <li><a href="<?= $this->Url->build(['controller' => 'Modeles', 'action' => 'index']); ?>">Modèles</a></li>
		<li><a href="<?= $this->Url->build(['controller' => 'Marques', 'action' => 'index']); ?>">Marques</a></li>
		<li><a href="<?= $this->Url->build(['controller' => 'Carburants', 'action' => 'index']); ?>">Carburants</a></li>
		<li><a href="<?= $this->Url->build(['controller' => 'Etats', 'action' => 'index']); ?>">Etats de vente</a></li>
		<li><a href="<?= $this->Url->build(['controller' => 'Modes', 'action' => 'index']); ?>">Mode de vente</a></li>
      </ul>
    </li>
	<li class="submenu"> <a href="#"><i class="icon icon-cogs"></i> <span>Paramètres</span> <span class="label label-important">+</span></a>
      <ul>
        <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>">Utilisateurs</a></li>
        <li><a href="<?= $this->Url->build(['controller' => 'Villes', 'action' => 'index']); ?>">Villes</a></li>
      </ul>
    </li>
  </ul>

</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">

<!--breadcrumbs-->
  <!-- <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Allez à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a></div>
  </div> -->
<!--End-breadcrumbs-->
	
	<?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>


</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2020 &copy; Autospace tous droits réservés. <a href="http://themedesigner.in">Site propulsé par KENLO Business And Technologies</a> </div>
</div>

<!--end-Footer-part-->
<?= $this->Html->script('excanvas.min.js') ?>
<?= $this->Html->script('jquery.min.js') ?>
<?= $this->Html->script('jquery.ui.custom.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->Html->script('jquery.flot.min.js') ?>
<?= $this->Html->script('jquery.flot.resize.min.js') ?>
<?= $this->Html->script('jquery.peity.min.js') ?>
<?= $this->Html->script('fullcalendar.min.js') ?>
<?= $this->Html->script('matrix.js') ?>
<?= $this->Html->script('matrix.dashboard.js') ?>
<?= $this->Html->script('jquery.gritter.min.js') ?>
<?= $this->Html->script('matrix.interface.js') ?>
<?= $this->Html->script('matrix.chat.js') ?>
<?= $this->Html->script('jquery.validate.js') ?>
<?= $this->Html->script('matrix.form_validation.js') ?>
<?= $this->Html->script('jquery.wizard.js') ?>
<?= $this->Html->script('jquery.uniform.js') ?>
<?= $this->Html->script('select2.min.js') ?>
<?= $this->Html->script('matrix.popover.js') ?>
<?= $this->Html->script('jquery.dataTables.min.js') ?>
<?= $this->Html->script('.../js/matrix.tables.js') ?>

<script src=".../js/jquery.dataTables.min.js"></script>


<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 


<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
