<?php $__env->startSection('content'); ?>

<h1><center>Lembur Pegawai</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo e(url('lembur_pegawais/create')); ?>" class="btn btn-success">Create</a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>NO</th>
<th>Kode Lembur</th>
<th>Kode Pegawai</th>
<th>Jumlah Jam</th>
<th colspan="3"><center>Actions</th></center>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $lembur_pegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
	<td><?php echo e($data->id); ?></td>
	<td><?php echo e($data->Kategori_lembur->Kode_lembur); ?></td>
	<td><?php echo e($data->Pegawai->Kode_jabatan); ?></td>
	<td><?php echo e($data->Jumlah_jam); ?></td>
	<td> <a href="<?php echo e(url('lembur_pegawais',$data->id)); ?>" class="btn btn-primary">Read</a></td>
	<td> <a href="<?php echo e(route('lembur_pegawais.edit',$data->id)); ?>" class="btn btn-warning">Update</a></td>
	<td>
	<?php echo Form::open(['method'=>'DELETE','route'=>['lembur_pegawais.destroy', $data->id]]); ?>


	<?php echo Form::Submit('Delete',['class'=>'btn btn-danger']); ?>


	<?php echo Form::close(); ?>

	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>