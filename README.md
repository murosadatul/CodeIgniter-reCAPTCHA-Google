# CodeIgniter-reCAPTCHA-Google
To Use reCAPTCHA, you need to sign up for an API key pair for your site.
<br> link : https://www.google.com/recaptcha/admin

<br>
Insert the site key that was created in <br><br>
  <i>function index in login controller</i><br>
  $data['sitekey']   = ''; // your site key
    
<br>
<br>
Insert the Secret key that was created in <br><br>
  <i>function validation in login controller</i><br>
  $keySecret = ''; // your Secret key
    
    
