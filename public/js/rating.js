$(document).ready(function(){
  
  $('#ModalEdit').on('show.bs.modal',function(event){
    console.log('Modal Opened');
    var button = $(event.relatedTarget)
    var id = button.data('fid')
    var stars = button.data('fstars')
    var name = button.data('fname')
    var message = button.data('fmessage')
    var confirm = button.data('fconfirm')

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #stars2').val(stars)
    modal.find('.modal-body #message').val(message)
    modal.find('.modal-body #name').val(name)
    modal.find('.modal-body #confirm_rating').val(confirm)
  })

  $('#validasiConfirm').on('show.bs.modal',function(event){
    console.log('Modal Opened');
    var button = $(event.relatedTarget)
    var id = button.data('fid')
    var confirm = button.data('fconfirm')

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #confirm_rating').val(confirm)
  })

  $('#cancelConfirm').on('show.bs.modal',function(event){
    console.log('Modal Opened');
    var button = $(event.relatedTarget)
    var id = button.data('fid')
    var confirm = button.data('fconfirm')

    var modal = $(this)
    modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #confirm_rating').val(confirm)
  })
    /* 1. Visualizing things on Hover - See next part for action on click */
    $('#stars li').on('mouseover', function(){
      var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
     
      // Now highlight all the stars that's not after the current hovered star
      $(this).parent().children('li.star').each(function(e){
        if (e < onStar) {
          $(this).addClass('hover');
        }
        else {
          $(this).removeClass('hover');
        }
      });
      
    }).on('mouseout', function(){
      $(this).parent().children('li.star').each(function(e){
        $(this).removeClass('hover');
      });
    });
    
    
    /* 2. Action to perform on click */
    $('#stars li').on('click', function(){
      var onStar = parseInt($(this).data('value'), 10); // The star currently selected
      var stars = $(this).parent().children('li.star');
      var rating = $(this).data('star');
      
      for (i = 0; i < stars.length; i++) {
        $(stars[i]).removeClass('selected');
        $('#stars2').val(rating);
      }
      
      for (i = 0; i < onStar; i++) {
        $(stars[i]).addClass('selected');
        $('#stars2').val(i+1);
      }
      
      // JUST RESPONSE (Not needed)
    //   var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    //   var msg = "";
    //   if (ratingValue > 1) {
    //       msg = "Thanks! You rated this " + ratingValue + " stars.";
    //   }
    //   else {
    //       msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    //   }
    //   responseMessage(msg);
      
    });
    
    
  });
  
  
//   function responseMessage(msg) {
//     $('.success-box').fadeIn(200);  
//     $('.success-box div.text-message').html("<span>" + msg + "</span>");
//   }