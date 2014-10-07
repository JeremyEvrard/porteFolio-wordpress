$(function() {
  var error =false;
  var validateEmail = function ($email){
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(!emailReg.test($email)){
      return false;
    }else{
      return true;
    }
  };
  $('#contact_form').on('submit', function(e) {
    e.preventDefault();
    var $this = $(this);
		var email = $("input#email").val();
		if (!validateEmail(email) || email === "") {
      $('label[for=email]>.error').css('display', 'block');
      error = 1;
    }else{
      $('label[for=email]>.error').hide();
    }
		var message = $("#message").val();
		if (message === "") {
    $('label[for=message]>.error').css('display', 'block');
      error = 1;
    }else{
      $('label[for=message]>.error').hide();
    }

    if (error){return false;}

    $.ajax({
      url: "/wp-content/themes/pf/traitementMail.php",
      type: $this.attr('method'),
      data: $this.serialize(),
      success: function() {
        $('#contact_form').html('<div id="succeed" class="success"></div>');
        $('#succeed').html('<p>Votre Mail à bien été envoyé</p>')
        .hide()
        .fadeIn(1500);
      }
    });
  });

});
