<script type="text/javascript">
  function loginButton() {
    var loginObject = {
        userName: $('[name=username]').val(),
        password: $('[name=password]').val()
    };

    var request = $.post("<?= base_url('api/controller_login/userLogin') ?>", loginObject);

    request.done(function(response) {
     	var result = jQuery.parseJSON(response);

      const accountType = result.data.account_type;
      const resultError = result.error[0];
      const resultData = result.data;

      if (resultData) {
        if (accountType === "Admin") {
          console.log("account is admin");
        } else if (accountType === "Staff"){
          console.log("account is staff");
        } else {
          console.log("account is user");
        }
        window.location.href = "<?=base_url('dashboard')?>";
        $('#loginError').hide();
      } else {
        $('#loginError').show();
      }
      console.log(result);
    });
  }
</script>
