<h2>Lista de Cidades</h2>
<a href="<?php echo e(route('cidades.create')); ?>"><h4>Novo Cliente</h4></a>
<table>
   <thead>
       <tr>
           <th>ID</th>
           <th>NOME</th>
           <th>PORTE</th>
           <th>INFO</th>
           <th>EDITAR</th>
           <th>REMOVER</th>
       </tr>
   </thead>
   <tbody>
       <!-- Funcionalidade Blade / Laço Repetição -->
       <!-- Percorre o array cidades enviado pela Controller -->
       <?php $__currentLoopData = $cidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <tr>
               <!-- Acessa os campos de cada item do array -->
               <td><?php echo e($item['id']); ?></td>
               <td><?php echo e($item['nome']); ?></td>
               <td><?php echo e($item['porte']); ?></td>
               <td><a href="<?php echo e(route('cidades.show', $item['id'])); ?>">info</a></td>
               <td><a href="<?php echo e(route('cidades.edit', $item['id'])); ?>">editar</a></td>
               <td>
                   <form action="<?php echo e(route('cidades.destroy', $item['id'])); ?>" method="POST">
                       <!-- Token de Segurança -->
                       <!-- Define o método de submissão como delete -->
                       <?php echo csrf_field(); ?>
                       <?php echo method_field('DELETE'); ?>
                       <input type='submit' value='remover'>
                   </form>
               </td>
           </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </tbody>
</table><?php /**PATH /home/aluno/Área de Trabalho/23.08.30/resources/views/cidades/index.blade.php ENDPATH**/ ?>