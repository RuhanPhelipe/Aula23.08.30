<h2>Cadastrar Cidade</h2>
<form action="<?php echo e(route('cidades.store')); ?>" method="POST">
   <!-- Token de segurança salvo na sessão, verificar o formulário submetido -->
   <?php echo csrf_field(); ?>
   <a href="<?php echo e(route('cidades.index')); ?>"><h4>voltar</h4></a>
   <label>Nome: </label> <input type='text' name='nome'>
   <label>E-mail: </label> <input type='text' name='email'>
   <input type="submit" value="Salvar">
</form><?php /**PATH /home/aluno/Área de Trabalho/23.08.30/resources/views/cidades/create.blade.php ENDPATH**/ ?>