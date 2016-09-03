<script type="text/javascript">
  function loginButton() {
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
</script>
