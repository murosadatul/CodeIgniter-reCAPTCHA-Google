<!DOCTYPE html>
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CodeIngiter reCAPTCHA  Login</title>
</head>
<body>
<div>
    
    <?php  var_dump($this->session->flashdata()); ?>
  
  <h3>Login User</h3>
    <?= form_open('login/validation',['autocomplete'=>'off']); ?>
      <div class="form-group">
          <?= form_input(['name'=>'username', 'autocomplete'=>'off', 'value'=>$this->session->flashdata('username'), 'type'=>'text', 'class'=>'form-control input-lg','placeholder'=>'Username', 'id'=>'username','autofocus'=>'auto']); ?>
        <span class="fa fa-user-secret fa-lg form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <!--//form_input('password',$password,'class="form-control input-lg"'); ?>-->
        <?= form_input(['name'=>'password','autocomplete'=>'off', 'type'=>'text', 'class'=>'form-control input-lg','placeholder'=>'Password', 'id'=>'password']); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
    
      <div class="form-group">
          <div class="g-recaptcha" data-sitekey="<?= $sitekey; ?>"></div>
      </div>

      <div class="row">
        <div class=" col-xs-12">
           <?= form_input(['name'=>'save', 'type'=>'submit', 'class'=>'btn btn-warning btn-block btn-flat btn-lg','value'=>'Login']); ?>
        </div>
        <!-- /.col -->
      </div>

    <?= form_close(); ?>
</div>
    
    
<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--reCAPTCHA-->
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
