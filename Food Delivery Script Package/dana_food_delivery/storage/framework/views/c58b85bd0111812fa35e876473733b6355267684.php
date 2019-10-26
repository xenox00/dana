<?php $__env->startSection('head_title', 'Contact Us | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
 
 <div class="sub-banner" style="background:url(<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>) no-repeat center top;">
    <div class="overlay">
      <div class="container">
        <h1>Contact Us</h1>
      </div>
    </div>
  </div>

   
<div class="what-we-do">
  <div class="container contact_block">
    <div class="contact-form">
      <div class="col-sm-6">                
         
         <?php echo Form::open(array('url' => 'contact_send','class'=>'','id'=>'contact_form','role'=>'form')); ?> 
          
          <div class="message">
                         
                      <?php if(count($errors) > 0): ?>
                          <div class="alert alert-danger">
                          
                              <ul>
                                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <li><?php echo e($error); ?></li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                          </div>
                      <?php endif; ?>
                                    
        </div>
        <?php if(Session::has('flash_message')): ?>

          <div class="alert alert-success fade in">
              
             <?php echo e(Session::get('flash_message')); ?>

           </div>

             
        <?php endif; ?>      

          <ul class="row">
            <li class="col-sm-6">
              <label class="font-montserrat">Your Name <span class="required">*</span>
                <input type="text" class="form-control" name="name" id="name" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">Your Email <span class="required">*</span>
                <input type="text" class="form-control" name="email" id="email" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">Phone 
                <input type="text" class="form-control" name="phone" id="phone" placeholder="">
              </label>
            </li>
            <li class="col-sm-6">
              <label class="font-montserrat">Subject
                <input type="text" class="form-control" name="subject" id="subject" placeholder="">
              </label>
            </li>
            <li class="col-sm-12">
              <label class="font-montserrat">Message
                <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
              </label>
            </li>
            
            <li class="col-sm-8">
              <button type="submit" value="submit" class="btn font-montserrat" id="btn_submit" onClick="proceed();">Submit</button>
            </li>
          </ul>
        <?php echo Form::close(); ?>

      </div>
    <div class="col-sm-6">
      <h5>Contact Info</h5>          
          <div class="loc-info">
            <p><i class="fa fa-map-marker"></i><?php echo e(getcong_widgets('footer_widget3_address')); ?></p>
            <p><i class="fa fa-phone"></i> <?php echo e(getcong_widgets('footer_widget3_phone')); ?></p>
             
            <p><i class="fa fa-envelope-o"></i><a href="mailto:<?php echo e(getcong_widgets('footer_widget3_email')); ?>"><?php echo e(getcong_widgets('footer_widget3_email')); ?></a></p>
          </div>
      </div>
      </div>
    </div>    
  </div>

   
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>