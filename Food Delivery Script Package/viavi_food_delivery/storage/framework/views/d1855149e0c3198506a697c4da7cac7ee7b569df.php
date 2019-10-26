<?php $__env->startSection('head_title', 'Restaurants' .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
 
 <div class="sub-banner" style="background:url(<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>) no-repeat center top;">
    <div class="overlay">
      <div class="container">
        <h1>Restaurant</h1>
      </div>
    </div>
  </div>

 <div class="restaurant_list_detail">
    <div class="container">
      <div class="row"> 
        <div class="col-md-9 col-sm-7 col-xs-12">         
          <?php $__currentLoopData = $restaurants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
          <div data-wow-delay="0.<?php echo e($i); ?>s" class="strip_list wow fadeIn animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
            <div class="row">         
            <div class="col-md-9 col-sm-12">
              <div class="desc">
              <div class="thumb_strip"> 
                <a href="<?php echo e(URL::to('restaurants/menu/'.$restaurant->restaurant_slug)); ?>">

                    <img src="<?php echo e(URL::asset('upload/restaurants/'.$restaurant->restaurant_logo.'-s.jpg')); ?>" alt="<?php echo e($restaurant->restaurant_name); ?>">

                  </a>  
                </div>         
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
                (<small><a href="<?php echo e(URL::to('restaurants/'.$restaurant->restaurant_slug)); ?>">Read <?php echo e(\App\Review::getTotalReview($restaurant->id)); ?> reviews</a></small>)
              </div>

               
              </div>
            </div>  
            <div class="col-md-3 col-sm-12">
              <div class="go_to">
              <div> <a class="btn_1" href="<?php echo e(URL::to('restaurants/menu/'.$restaurant->restaurant_slug)); ?>">View Menu</a> </div>
              </div>
            </div>
            </div>
          </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
          <?php echo $__env->make('_particles.pagination', ['paginator' => $restaurants], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
 
                        
           </div>
          
          <?php echo $__env->make("_particles.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>