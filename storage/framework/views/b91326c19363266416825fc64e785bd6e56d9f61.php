
<form action="<?php echo e(URL::to('create-payment')); ?>" method="post">

<?php echo csrf_field(); ?>
<input name="submit" type="image" id="paypalbtn" src="https://www.paypalobjects.com/webstatic/en_AU/i/buttons/btn_paywith_primary_m.png" value="PayPal">
</form> 

<?php /**PATH C:\xampp\htdocs\GitHub\ShoesShopWebsite\shoesshop\resources\views/pages/checkout/paypal.blade.php ENDPATH**/ ?>