<?php $__env->startSection('head_title', 'Order Confirmed' .' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
 
 <div class="sub-banner" style="background:url(<?php echo e(URL::asset('upload/'.getcong('page_bg_image'))); ?>) no-repeat center top;">
    <div class="overlay">
      <div class="container">
        <h1>Order Confirmed</h1>
      </div>
    </div>
  </div>   

  <div class="white_for_login">
    <div class="container margin_60">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <div class="box_style_2">
            <h2 class="inner">Order Confirmed</h2>
            <div id="confirm"> <i class="fa fa-check-square-o"></i>
              <h3>Thank you!</h3>
            </div>
            <h4>Summary</h4>
            <table class="table table-striped nomargin">
              <tbody>
                <?php $__currentLoopData = \App\Cart::where('user_id',Auth::id())->orderBy('id')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n=>$order_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><strong><?php echo e($order_item->quantity); ?>x</strong> <?php echo e($order_item->item_name); ?> </td>
                    <td><strong class="pull-right"><?php echo e(getcong('currency_symbol')); ?><?php echo e($order_item->item_price); ?></strong></td>
                </tr>
                
                     
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <tr>
                  <td class="total_confirm"> TOTAL </td>
                  <td class="total_confirm"><span class="pull-right"><?php echo e(getcong('currency_symbol')); ?><?php echo e($price = DB::table('cart')
                ->where('user_id', Auth::id())
                ->sum('item_price')); ?></span></td>
                </tr>

              </tbody>
            </table>
            <a href="<?php echo e(URL::to('myorder')); ?>" class="btn btn-submit">My Order</a> 
            <div style="display:none;"><?php echo e(\App\Cart::where('user_id', Auth::id())->delete()); ?></div>
          </div>
        </div>
        <div class="col-md-3"> </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>