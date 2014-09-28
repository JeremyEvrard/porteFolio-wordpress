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
		if (!validateEmail(email)) {
      if (!$('label[for=email]>.error').length()) {$("label[for=email]").append('<span class="error">Sans une adresse mail valide je ne pourrai pas vous recontacter</span>');}
      $("input#email").focus();
      error = 1;
    }else{
      $('label[for=email]>.error').hide();
    }
		var message = $("#message").val();
		if (message === "") {
    if (!$('label[for=message]>.error').length()){
      $("label[for=message]").append('<span class="error">Vous ne pouvez pas envoyez un mail sans un message</span>');
    }
      $("#message").focus();
      error = 1;
    }else{
      $('label[for=message]>.error').hide();
    }

    if (error){return false;}

    $.ajax({
      url: "http://localhost:8888/wordpress/wp-content/themes/pf/traitementMail.php", // Le nom du fichier indiqué dans le formulaire
      type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
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
