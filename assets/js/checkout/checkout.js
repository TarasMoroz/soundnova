

jQuery('#payment-tabs li a:not(:first)').addClass('inactive');
jQuery('.payment-tab-container').hide();
jQuery('.payment-tab-container:first').show();

jQuery('#payment-tabs li a').click(function(){

    var t = jQuery(this).parent().index();
  if(jQuery(this).hasClass('inactive')){ //this is the start of our condition 
    jQuery('#payment-tabs li a').addClass('inactive');           
    jQuery(this).removeClass('inactive');
    
    jQuery('.payment-tab-container').hide();
    jQuery('.payment-tab-container').eq(t).fadeIn('slow');
 }
  });
  