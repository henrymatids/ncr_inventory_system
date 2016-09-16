<script type="text/javascript">

  var loginButton = function() {
    var loginObject = {
        userName: $('[name=username]').val(),
        password: $('[name=password]').val()
    };

    var request = $.post("<?= base_url('api/controller_login/userLogin') ?>", loginObject, 'json');

    request.done(function(response) {
     	var result = jQuery.parseJSON(response);

      const accountType = result.data.account_type;
      const resultError = result.error[0];
      const resultData = result.data;

      if (resultData) {
        window.location.href = "<?=base_url('dashboard')?>";
        $('#loginError').hide();
      } else {
        $('#loginError').show();
      }
      console.log(result);
    });
  }

  // When Enter key is pressed
  $(".onKeyEvent").keyup(function(event){
    if(event.keyCode == 13){
        $("#loginBtn").click();
    }
  });

</script>
