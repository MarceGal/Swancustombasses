jQuery(document).load(function() {

    /*jQuery('div[data-anchor="row-video"] .inner-wrap').addClass('using-image animated-in'); 
    jQuery('div[data-anchor="row-video"] .row-bg').removeClass('using-bg-color disable_ken_burns').addClass('using-image');
	
    jQuery('div[data-anchor="detras-de-un-swan"] .inner-wrap').addClass('using-image animated-in'); 
    jQuery('div[data-anchor="detras-de-un-swan"] .row-bg').removeClass('using-bg-color disable_ken_burns').addClass('using-image');*/
    //console.log(a);
});

jQuery(document).ready(function() {
    //jQuery('a#logo').attr('href','//google.com');

    jQuery('.nectar-icon-list-item').each(function(i) {

        jQuery(this).attr('id', 'list-item-' + i);

    });

    jQuery('.nectar_hotspot_wrap').each(function(i) {

        //jQuery(this).addClass('spot-' + i);

        jQuery(this).on("click", function() {
            //alert("Enter your "+i+" js here!" );

            jQuery('html, body').animate({
                scrollTop: jQuery("#list-item-" + i).offset().top - 250
            }, 800);
        });

    });
});

jQuery(window).scroll(function() {
    jQuery('#header-outer.small-nav #logo img.stnd').css({ 'height': '50px' });
    //jQuery('#header-outer.small-nav #logo img.stnd').css({'transition' : 'none'});
});