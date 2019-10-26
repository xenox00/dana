<?php $__env->startSection("content"); ?>
<div id="main">
	<div class="page-header">
		
		<div class="pull-right">
			<a href="<?php echo e(URL::to('admin/types/addtype')); ?>" class="btn btn-primary">Add Type <i class="fa fa-plus"></i></a>
		</div>
		<h2>Restaurant Types</h2>
	</div>
	<?php if(Session::has('flash_message')): ?>
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
				        <?php echo e(Session::get('flash_message')); ?>

				    </div>
	<?php endif; ?>
     
<div class="panel panel-default panel-shadow">
    <div class="panel-body">
         
        <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Types</th>                             
                <th class="text-center width-100">Action</th>
            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($type->type); ?></td>                
                <td class="text-center">
                <a href="<?php echo e(url('admin/types/addtype/'.$type->id)); ?>" class="btn btn-default btn-rounded"><i class="md md-edit"></i></a>
                <a href="<?php echo e(url('admin/types/delete/'.$type->id)); ?>" class="btn btn-default btn-rounded" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="md md-delete"></i></a>
            </td>
                
            </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
            </tbody>
        </table>
         
    </div>
    <div class="clearfix"></div>
</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>