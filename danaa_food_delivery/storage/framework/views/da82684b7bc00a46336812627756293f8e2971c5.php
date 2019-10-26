<div id="banner">
  <section>
  <div id="subheader">
    <div id="sub_content" class="animated zoomIn">
      <h1>Commandez de la delicieuse nourriture en ligne</h1>
      <div class="container-4">
        <?php echo Form::open(array('url' => 'restaurants/search','class'=>'','id'=>'search','role'=>'form')); ?> 
          <input type="search" placeholder="Restaurant name or address..." name="search_keyword" id="search">
          <button class="icon" type="submit"><i class="fa fa-search"></i></button>
        <?php echo Form::close(); ?> 
    </div>
    </div>
  </div>
  <div class="hidden-xs" id="count">
    <ul>
      <li><span class="number"><?php echo e(getcong('total_restaurant')); ?></span> Restaurant</li>
      <li><span class="number"><?php echo e(getcong('total_people_served')); ?></span> People Served</li>
      <li><span class="number"><?php echo e(getcong('total_registered_users')); ?></span> Registered Users</li>
    </ul>
  </div>
  </section>
    <div class="flex-banner">
      <ul class="slides">
        <li><img src="<?php echo e(URL::asset('upload/'.getcong('home_slide_image1'))); ?>" alt=""></li>
        <li><img src="<?php echo e(URL::asset('upload/'.getcong('home_slide_image2'))); ?>" alt=""></li>
        <li><img src="<?php echo e(URL::asset('upload/'.getcong('home_slide_image3'))); ?>" alt=""></li>
         
      </ul>
    </div>
  </div>