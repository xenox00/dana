<?php $__env->startSection("content"); ?>

<div id="main">
	<div class="page-header">
		<h2> <?php echo e(isset($menu->menu_name) ? 'Edit: '. $menu->menu_name : 'Add Menu'); ?></h2>
		
		<a href="<?php echo e(URL::to('admin/restaurants/view/'.$restaurant_id.'/menu')); ?>" class="btn btn-default-light btn-xs"><i class="md md-backspace"></i> Back</a>
	  
	</div>
	<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
	<?php endif; ?>
	 <?php if(Session::has('flash_message')): ?>
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
				        <?php echo e(Session::get('flash_message')); ?>

				    </div>
	<?php endif; ?>
   
   	<div class="panel panel-default">
            <div class="panel-body">
                <?php echo Form::open(array('url' => array('admin/restaurants/view/'.$restaurant_id.'/menu/addmenu'),'class'=>'form-horizontal padding-15','name'=>'menu_form','id'=>'menu_form','role'=>'form','enctype' => 'multipart/form-data')); ?> 
                
                <input type="hidden" name="restaurant_id" value="<?php echo e($restaurant_id); ?>">
                <input type="hidden" name="id" value="<?php echo e(isset($menu->id) ? $menu->id : null); ?>">
                
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Menu category</label>
                    <div class="col-sm-4">
                        <select id="basic" name="menu_cat" class="selectpicker show-tick form-control">
                            <option value="">Select Type</option>
                            
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                <?php if(isset($menu->menu_cat) && $menu->menu_cat==$category->id): ?>  
                                    <option value="<?php echo e($category->id); ?>" selected ><?php echo e($category->category_name); ?></option>
                                     
                                <?php else: ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option> 
                                <?php endif; ?>                          
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Menu Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="menu_name" value="<?php echo e(isset($menu->menu_name) ? $menu->menu_name : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Sort Description</label>
                      <div class="col-sm-9">
                        <input type="text" name="description" value="<?php echo e(isset($menu->description) ? $menu->description : null); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Price</label>
                      <div class="col-sm-9">
                         
                        <input id="touch-spin-2" data-toggle="touch-spin" data-min="-1000000" data-max="1000000" data-prefix="$" data-step="1" type="text" value="<?php echo e(isset($menu->price) ? $menu->price : null); ?>" name="price" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-3 control-label">Menu Image</label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                <?php if(isset($menu->menu_image)): ?>
                                 
                                    <img src="<?php echo e(URL::asset('upload/menu/'.$menu->menu_image.'-s.jpg')); ?>" width="100" alt="person">
                                <?php endif; ?>
                                                                
                            </div>
                            <div class="media-body media-middle">
                                <input type="file" name="menu_image" class="filestyle"> 
                            </div>
                        </div>
    
                    </div>
                </div> 
                <hr>
                <div class="form-group">
                    <div class="col-md-offset-3 col-sm-9 ">
                    	<button type="submit" class="btn btn-primary"><?php echo e(isset($menu->id) ? 'Edit Menu ' : 'Add Menu'); ?></button>
                         
                    </div>
                </div>
                
                <?php echo Form::close(); ?> 
            </div>
        </div>
   
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>