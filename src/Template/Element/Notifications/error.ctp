<!-- Error Notification -->

<div class="row error-notification">
    <div class="col col-xs-12 col-sm-12 col-md-6 col-xl-5">
        <div class="notification">
            <p class="notification-message">This is an error and of high importance, do not ignore me.</p>
        </div>
    </div>
</div>

<script>
  $('.error-notification .notification').append('<i class="fa fa-times close-me" aria-hidden="true"></i>');
  $('.close-me')
    .css({
      'float': 'right',
      'position': 'relative',
      'top': '-48px',
      'left': '18px',
      'color': 'rgb(188, 188, 188)',
      'cursor': 'pointer'
  })
    .click(function(){
        $('.error-notification').hide();
    })

</script>