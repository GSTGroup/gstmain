/* $Id:$ */
/* 
    Document   : gstmain.js
    Created on : 8/19/2011
    Author     : fields
    Description:
        GSTMain JavaScript Util Library        
*/

(function ($) {
/* Hover over TABLE.TR
 ----------------------------------------------------------------- */ 
  $(function()
   {
    $("table tr").hover(
     function()
     {
      $(this).addClass("highlight");
     },
     function()
     {
      $(this).removeClass("highlight");
     }
    )
   }
  )


  //
  // Description at top of Textarea
  //
  function gst_movedescription_processing(context) {
    // Each Element that has class="gst-description-top" will be processed.
    // If there is a "text-format-wrapper" with a "description" in it, it will be
    //  moved to BEFORE the form-textarea-wrapper.
    //
    $('.vertical-tabs-pane').each(function(){
      var $ele = $(this),
        ele_desc = $ele.find('.text-format-wrapper div.description'),
        ele_form_textarea_wrapper = $ele.find('.text-format-wrapper div.form-textarea-wrapper');

      // Insert the "description" div BEFORE the form-textarea-wrapper div      
      $(ele_form_textarea_wrapper).before(ele_desc.clone().addClass('top'));
      ele_desc.addClass('bottom');
    });
  }

  Drupal.behaviors.gst_movedescription = {
    attach: function(context) {
      $(".gst-description-top:not(.gst-description-top-processed)", context).addClass("gst-description-top-processed").each(function () {
        gst_movedescription_processing(this); // pass in the context of the element being processed
      });    
    }
  }
  
  
  //
  // Add Ajax Button Process to handle Field Widgets with Ajax
  //
  function gst_has_ajax_button_processing(context) {
    
    var $ele = $(context),
      ab_id = $ele.attr('id'),
      ab_widget_id = $ele.attr('ajax-button-id');

    //console.log($ele, ab_id, ab_widget_id); // Outputs to Firebug Console
    $('select', context).change(function(){            
      $('#' + ab_widget_id).trigger('click').trigger('mousedown');      
    });
    $('input.form-text', context).blur(function(){            
      $('#' + ab_widget_id).trigger('click').trigger('mousedown');      
    });    
    $('input.form-textarea', context).blur(function(){            
      $('#' + ab_widget_id).trigger('click').trigger('mousedown');      
    });            
  }
  
  Drupal.behaviors.gst_has_ajax_button = {
    attach: function(context) {
      $(".has-ajax-button:not(.has-ajax-button-processed)", context).addClass("has-ajax-button-processed").each(function () {
        gst_has_ajax_button_processing(this); // pass in the context of the element being processed
      });    
    }
  }  
  
})(jQuery);