<?php $__env->startSection("content"); ?>
 
<?php echo $__env->make("_particles.search_slider", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

<!-- Content ================================================== --> 

<div id="blog_item">
  <div class="container">
  <h1 class="mb5 zui-highlight">Choississez un type de cuisine</h1>
   
   <nav id="list_shortcuts">
    <ul>
    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li> <a title="Chinese" href="<?php echo e(URL::to('restaurants/type/'.$type->id)); ?>" data-cuisine="chinese"> <img alt="<?php echo e($type->type); ?>" src="<?php echo e(URL::asset('upload/type/'.$type->type_image.'.jpg')); ?>"> <span><?php echo e($type->type); ?></span> </a> </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     

    </ul>
   </nav>
  </div>
  </div>

  <div class="white_bg">
    <div class="container margin_60">
      <div class="main_title">
        <h2 class="nomargin_top">Choississez les plats que</h2>         
      </div>
      <div class="row">
        <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6"> <a class="strip_list" href="<?php echo e(URL::to('restaurants/menu/'.$restaurant->restaurant_slug)); ?>">
          <div class="desc">
            <h3><?php echo e($restaurant->restaurant_name); ?></h3>
          <div class="type"> <?php echo e($restaurant->type); ?> </div>
          <div class="location"><?php echo e($restaurant->restaurant_address); ?>  </div>
            
            <div class="rating"> 
                <?php for($x = 0; $x < 5; $x++): ?>
                    
                <?php if($x < $restaurant->review_avg): ?>
                  <i class="fa fa-star"></i>
                <?php else: ?>
                  <i class="fa fa-star fa fa-star-o"></i>
                <?php endif; ?>
               
                <?php endfor; ?>
                
              </div>
            <div class="thumb_strip"> <img src="<?php echo e(URL::asset('upload/restaurants/'.$restaurant->restaurant_logo.'-s.jpg')); ?>" alt="<?php echo e($restaurant->restaurant_name); ?>"> </div>
          </div>
          </a> 
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
           
           
      </div>
    </div>
  </div>
 
<!-- End section --> 
<!-- End Content =============================================== --> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>