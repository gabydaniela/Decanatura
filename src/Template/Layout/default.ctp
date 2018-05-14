<?php
$cakeDescription = 'Control de Activos';
?>
<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $cakeDescription ?>:
    <?= $this->fetch('title') ?>
  </title>
  <?= $this->Html->meta('icon') ?>

  
  <?= $this->Html->css('cake.css') ?>


  <?= $this->Html->css(['plugins/bootstrap/css/bootstrap.css','plugins/bootstrap/css/bootstrap.min.css', 'plugins/font-awesome/css/font-awesome.min.css', 'plugins/datatables/dataTables.bootstrap4.css','sb-admin.css']) ?>

  <?=
  $this->Html->script([ 'plugins/jquery/jquery.min.js']);
  ?>


</head>





<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">


    <a class="navbar-left" rel="home" href="#" title="Sistema de Activos">
      <?= $this->Html->image('acronimo.png', array('style' => 'max-width:100px; margin-top: -7px; margin-right: 40px;'),['alt' => 'Facultad de Ingenieria']);?>
    </a>

    <a class="navbar-brand" href="index.html">Sistema de Activos</a>




    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Usuarios">
        <?=$this->Html->link(

          $this->Html->tag('i','' , array('class' => 'fa fa-users')).$this->Html->tag('span', ' Usuarios', array('class' => 'nav-link-text')),array('controller' => 'Users','action' => 'index'),
          array('class' => 'nav-link',
            'escape'=> false)
        );
        ?>
      </li>


      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Activos">
        <?=$this->Html->link(
          $this->Html->tag('i','' , array('class' => 'fa fa-users')).$this->Html->tag('span', ' Activos', array('class' => 'nav-link-text')),
          array('controller' => 'Assets','action' => 'index'),
          array('class' => 'nav-link',
            'escape'=> false)
        );
        ?>
      </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tipos de activos">
        <?=$this->Html->link(
          $this->Html->tag('i','' , array('class' => 'fa fa-users')).$this->Html->tag('span', ' Tipos de activos', array('class' => 'nav-link-text')),
          array('controller' => 'Types','action' => 'index'),
          array('class' => 'nav-link',
            'escape'=> false)
        );
        ?>

      </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Prestamos">
        <a class="nav-link" href="tables.html">
          <span class="nav-link-text">Préstamos</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="InfTencnico">
        <a class="nav-link" href="tables.html">
          <span class="nav-link-text">Informe Técnico</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Desechos">
        <a class="nav-link" href="tables.html">
          <span class="nav-link-text">Desechos</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Traslados">
        <a class="nav-link" href="tables.html">
          <span class="nav-link-text">Traslados</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="UAcademica">
        <a class="nav-link" href="tables.html">
          <span class="nav-link-text">Unidad Académica</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ubicaciones">
        <a class="nav-link" href="tables.html">
          <span class="nav-link-text">Ubicaciones</span>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="navbar-brand" style="color:white">
                <i class="fa fa-user"></i> <?php echo "Bienvenido:" ." ". $nombre ."". $apellido; ?></a>
        </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Salir</a>
        </li>
      </ul>
    </div>
  </nav>



  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="container">
       <?= $this->Flash->render() ?>
       <div class="clearfix"></div>
       <?= $this->fetch('content') ?>
     </div>
   </div>
 </div>
 <!-- /.container-fluid-->
 <!-- /.content-wrapper-->


 <footer class="sticky-footer">
  <div class="container">
    <div class="text-center">
      <small>Copyright Decanatura 2018</small>
    </div>
  </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿List@ para salir?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Seleccione "Salir" para cerrar sesión.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="users/logout">Salir</a>
      </div>
    </div>
  </div>
</div>



  <?=
  $this->Html->script([ 'plugins/jquery/jquery.min.js','plugins/bootstrap/js/bootstrap.bundle.min.js' ,'sb-admin.min.js',
    'plugins/jquery-easing/jquery.easing.min.js','plugins/datatables/jquery.dataTables.js','plugins/datatables/dataTables.bootstrap4.js',
    'sb-admin-datatables.min.js'
  ])
  ?>


</body>
</html>








