<div class="col-md-3 col-sm-5 col-xs-12 side-bar">   
        
      <div id="cart_box">
      <h3>Your order <i class="fa fa-shopping-cart pull-right"></i></h3>
      <table class="table table_summary">
      <tbody>
      </tbody>
      </table>  
      <?php $__currentLoopData = \App\Cart::where('user_id',Auth::id())->orderBy('id')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n=>$cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <table class="table table_summary">
              <tbody>
              <tr>
                <td><a href="<?php echo e(URL::to('delete_item/'.$cart_item->id)); ?>" class="remove_item"><i class="fa fa-minus-circle"></i></a> <strong><?php echo e($cart_item->quantity); ?>x</strong> <?php echo e($cart_item->item_name); ?> </td>
                <td><strong class="pull-right"><?php echo e(getcong('currency_symbol')); ?><?php echo e($cart_item->item_price); ?></strong></td>
              </tr>
             </tbody>
            </table> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
        
      <hr>
      <?php if(DB::table('cart')->where('user_id', Auth::id())->sum('item_price')>0): ?>
      <table class="table table_summary">
        <tbody>
        <tr>
          <td class="total"> TOTAL <span class="pull-right"><?php echo e(getcong('currency_symbol')); ?><?php echo e($price = DB::table('cart')
                ->where('user_id', Auth::id())
                ->sum('item_price')); ?></span></td>
        </tr>
        </tbody>
      </table>
      <hr>
          <a class="btn_full" href="<?php echo e(URL::to('order_details')); ?>">Order now</a>  
          <?php else: ?>
            <a class="btn_full" href="#0">Empty Cart</a>  
          <?php endif; ?>
    </div>  

        <div id="cart_box" class="categories">
            <h3>Type</h3>
             
            <ul>
             <li>
                <label><a href="<?php echo e(URL::to('restaurants/')); ?>">All</a></label>
              </li>
              <?php $__currentLoopData = \App\Types::orderBy('type')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                <label><a href="<?php echo e(URL::to('restaurants/type/'.$type->id)); ?>"><?php echo e($type->type); ?></a></label>
              </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </ul>
          </div>  

           
      <div id="help" class="box_style_2"> 
      <i class="fa fa-life-bouy"></i>
        <h4><?php echo e(getcong_widgets('need_help_title')); ?></h4>
        <a href="tel://<?php echo e(getcong_widgets('need_help_phone')); ?>" class="phone"><?php echo e(getcong_widgets('need_help_phone')); ?></a> <small><?php echo e(getcong_widgets('need_help_time')); ?></small> 
      </div>
</div>