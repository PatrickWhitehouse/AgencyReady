$(function(){

  $('#contact_form').validate({
    rules:{
      email:{
        required: true,
        email: true
      },
      name: "required",
      message: "required"
    },
    errorElement: "div", // default is 'label'
    errorPlacement: function(error, element) {
        error.insertAfter(element).css('color', 'red');
    }
  });

});
