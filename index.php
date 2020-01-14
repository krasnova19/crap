    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


        <meta name="author" content="Chris Perez - Webdesigner - www.peyotedesign.ch">
        <meta name="description" content="Secure user login and registration">
        <title>Technical Test</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

        <!-- Responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">

        <!--Custom Styles-->
        <link href="css/style.css" rel="stylesheet">

        <!--Icon home Screen Touch -->
        <link rel="apple-touch-icon-precomposed" href="icon.png">


    </head>


    <body>



        <div class="container-fluid" id="mainwrapper">
            <div class="container-fluid" id="content">
                <h1>Technical Test</h1>
                  <p>Login Form</p>
                  <!--LoginForm-->
                <div class="row-fluid">
                    <div class="span4 offset3">

                      <form action="secure/process_login.php" method="post" name="login_form" class="form-horizontal">
                          <div class="control-group">
                            <label class="control-label" for="inputName">Name</label>
                            <div class="controls">
                              <input type="text" id="name" name="name"placeholder="Name">
                          </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputColor">Favorite Color</label>
                        <div class="controls">
                          <input type="text" name="color" id="color" placeholder="Favorite Color">
                      </div>
                  </div>

                  <div class="control-group">
                        <label class="control-label" for="inputPet">Cats or Dogs</label>
                        <div class="controls">
                          <input type="text" name="pet" id="pet" placeholder="Better Pet">
                      </div>
                  </div>

                  <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn" onclick="formhash(this.form, this.form.name);">Submit</button>
                            <!-- if login failed show this -->
                            <?php if(isset($_GET['error'])) {?>
                              <div class="alert alert-error fade in error">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>Ups! Name is not unique...</strong>
                            </div>
                          <?php }?>   
                    </div>
                </div>
            </form>
        </div><!--/span4-->
    </div><!--/row-fluid-->
<!--Scripts-->
<script src="js/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="secure/sha512.js"></script>
<script src="secure/forms.js"></script>

     
   <script>
   //FADE IN MESSAGES
             
        $(document).ready(function () {
      $(".error").fadeIn("slow");
      $("#success").fadeIn("slow");
    });
    </script>
</body>
</html>