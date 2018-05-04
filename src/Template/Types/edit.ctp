<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Type $type
 */
?>

<div class="types form large-9 medium-8 columns content">
    <?= $this->Form->create($type) ?>
    <h3>Editar tipo de activo</h3>
    <fieldset>
        <?php
            echo $this->Form->control('name', array('label'=>'Nombre', 'class' => 'form-control'));
            echo $this->Form->control('description',  array('label'=>'Descripción', 'class' => 'form-control'));
        ?>
    </fieldset>

    <?= $this->Form->end() ?>
<style>
    .btn-primary {
      margin-top: 15px;
      float: right;
    }
</style> 
</div>

<?= $this->Html->link(__('Cancelar'), ['controller' => 'Types', 'action' => 'index'], ['class' => 'btn btn-primary']) ?>

<?= $this->Form->button(__('Aceptar'), ['class' => 'btn btn-primary']) ?>
    
     
