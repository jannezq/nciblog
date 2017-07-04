var limitImagesPreview = function(selector) {
  const max_height = 200; // maximum height of images.
  var limited_image = '<div class="limited-parent-image"></div>';
  var limited_description = '<span class="limited-expand">'+
                              '<i class="glyphicon glyphicon-resize-full"></i>'+
                            '</span>';
  var limited_modal = '<div class="limited-modal">'+
                      '  <span class="limited-close-modal">×</span>'+
                      '  <img class="limited-modal-content-image">'+
                      '</div>';
  $(selector).each(function(i, block){
    var images = $(block).find('img');
    for (var i = 0; i < images.length; i++) {
      var image = $(images[i]);
      image.addClass('limited-origin-image');

      if ((image.height() > max_height) ||
          (image.get(0).height > max_height) ||
          (image.get(0).naturalHeight > max_height)) {
        image.wrap(limited_image);
        image.closest('.limited-parent-image').append(limited_description);
        image.closest('.limited-parent-image').after(limited_modal);
      }else { // this condition if image isn't loaded with complete
        image.load(function(){
          if(this.height > max_height) {
            image.wrap(limited_image);
            image.closest('.limited-parent-image').append(limited_description);
            image.closest('.limited-parent-image').after(limited_modal);
          }
        });
      }
    }//end for
  });
};

// Click to Expand the image.
$(document).on('click', '.limited-parent-image', function() {
  var nextElement = $(this).next().attr({'style':'display:block'});
  nextElement.find('.limited-modal-content-image').attr({
    'src': $(this).find('.limited-origin-image').attr('src'),
    'alt': $(this).find('.limited-origin-image').attr('alt')
  });
});
$(document).on('click', '.limited-close-modal', function() {
  $(this).closest('.limited-modal').attr({'style':'display:none'});
});
$(document).on('click', '.limited-modal', function() {
  $(this).get(0).style.display = 'none';
});
// EOF

// Set parent div element
limitImagesPreview('.thread-parent');