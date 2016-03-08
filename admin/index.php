<?php include('templates/header2.php') ?>
<!-- Header -->
<header id="top" class="header">
<div class="text-vertical-center">
<!-- <h1>Ecopoa e-Shop</h1>
<h3>Shop green. Save the planet</h3> -->
<br>
<!-- <a style="top: 194px;position: absolute;left: 650px;" href="#about" class="btn btn-dark btn-lg">Explore</a> -->
</div>
</header>

<!-- About -->
<section id="about" class="about">
<div class="container">
<div class="row">
    <div class="col-lg-12 text-center">
        <h2>Get your Green Product on Market!</h2>
        <p class="lead">We help you reach your customers.
        </p>
          <?php
            if(isset($_GET['response']))
            {
              $message = $_GET['response'];
              if($message == 'blank')
               {
                  echo"
                  <div style='position:absolute;' class='alert alert-danger alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'> &times;</span>
                    <strong> Error! </strong> Please fill in all the fields.
                  </button>
                  </div>";
               }
              if($message == 'wrong')
               {
                  echo"
                  <div style='position:absolute;' class='alert alert-danger alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'> &times;</span>
                    <strong> Error! </strong> Wrong Email/Password. Forgotten your password?
                  </button>
                  </div>";
               }
               if($message == 'notMember')
               {
                  echo"
                  <div style='position:absolute;' class='alert alert-info alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'> &times;</span>
                    <strong> Warning! </strong> The user email is NOT registered.
                  </button>
                  </div>";
               }
               if($message == 'memberAlready')
               {
                  echo"
                  <div style='position:absolute;' class='alert alert-info alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'> &times;</span>
                    <strong> Information! </strong> The user email is already registered.
                  </button>
                  </div>";
               }
                if($message == 'invalid')
               {
                  echo"
                  <div style='position:absolute;' class='alert alert-warning alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'> &times;</span>
                    <strong> Warning! </strong> Invalid Email Format.
                  </button>
                  </div>";
               }
                   if($message == 'success')
               {
                  echo"
                  <div style='position:absolute;' class='alert alert-success alert-dismissible' role='alert'>
                  <p><button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'> &times;</span>
                    <strong> Sucess! </strong> Registration Successful!
                  </button></p>
                  </div>";
               }
            }
            ?>
    </div>
</div>
<!-- /.row -->
</div>
<!-- /.container -->
</section>

<!-- INstructions -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="instruction" class="services bg-primary">
<div class="container">
<div class="row text-center">
    <div class="col-lg-10 col-lg-offset-1">
        <h2>Instructions</h2>
        <hr class="small">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-key fa-stack-1x text-primary"></i>
                </span>
                    <h4>
                        <strong>Create Account</strong>
                    </h4>
                    <strong><p>REGISTER for a free account</p></strong>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-sign-in fa-stack-1x text-primary"></i>
                </span>
                    <h4>
                        <strong>Login</strong>
                    </h4>
                    <strong><p>GO to your created account</p></strong>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-cloud-upload fa-stack-1x text-primary"></i>
                </span>
                    <h4>
                        <strong>Upload Proucts</strong>
                    </h4>
                    <strong><p>ADD product with description </p></strong>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-clipboard fa-stack-1x text-primary"></i>
                </span>
                    <h4>
                        <strong>Publish Product</strong>
                    </h4>
                    <strong><p>RELAX for review by Ecopoa </p></strong>

                </div>
            </div>
        </div>
        <!-- /.row (nested) -->
    </div>
    <!-- /.col-lg-10 -->
</div>
<!-- /.row -->
</div>
<!-- /.container -->
</section>

<!-- Call to Action -->
<aside class="call-to-action bg-primary">
<div class="container">
<div class="row">
    <div class="col-lg-12 text-center">
        <h3>Ready to Make Sales?</h3>
        <a href="#" data-toggle="modal" data-target="#signin_m" class="btn btn-lg btn-light">Login</a>
        <a href="#" data-toggle="modal" data-target="#register_m" class="btn btn-lg btn-dark">Register</a>
    </div>
</div>
</div>
</aside>

<!-- Footer -->
<?php include('templates/footer2.php') ?>





<!--ALL MODALS -->

<!-- Modal -->
<div class="modal fade" id="signin_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md">
<div class="modal-content">
    <div class="modal-header" style="background: lightgrey;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h2 class="modal-title">Login  <small>to upload products.</small></h2>
    </div>
    <div class="modal-body">
  <div class="col-xs-6">
      <div class="well">
          <form id="loginForm" method="POST" action="login_action.php" novalidate="novalidate">
              <div class="form-group">
                  <label for="username" class="control-label">Username</label>
                  <input  type="email" name="email" id="email" class="form-control" value="" required="" title="Please enter you username" placeholder="example@example.com">
                  <span class="help-block"></span>
              </div>
              <div class="form-group">
                  <label for="password" class="control-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                  <span class="help-block"></span>
              </div>
              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="remember" id="remember"> Remember login
                  </label>
                  <p class="help-block">(if this is a private computer)</p>
              </div>
              <button type="submit" class="btn btn-success btn-block">Login</button>
              <a href="#" class="btn btn-default btn-block">Help to login</a>
          </form>
      </div>
  </div>
  <div class="col-xs-6">
      <p class="lead">Register now for <span class="text-success">FREE</span></p>
      <ul class="list-unstyled" style="line-height: 2">
          <li><span class="fa fa-check text-success"></span> See all your products</li>
          <li><span class="fa fa-check text-success"></span> Fast re-order</li>
          <li><span class="fa fa-check text-success"></span> Get assitance</li>
          <li><span class="fa fa-check text-success"></span> Fast checkout</li>
          <li><span class="fa fa-check text-success"></span> Get an offer <small>(only new customers)</small></li>
          <li><a href="#"><u>Read more</u></a></li>
      </ul>
      <p><a data-toggle="modal" data-target="#register_m"  class="btn btn-info btn-block">Yes please, register now!</a></p>
  </div>
    </div>
    <div class="modal-footer">
        <!-- <button type="submit" class="btn btn-success btn-block btn-lg">Sign In</button> -->
    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="register_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h2 class="modal-title">Ecopoa e-Shop <small>It's free and always will be.</small></h2>
    </div>
    <div class="modal-body">
<form role="form" method="post" action="register_action.php">
<hr class="colorgraph">
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
          <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
      </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
          <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
      </div>
  </div>
</div>
<div class="form-group">
  <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Shop Name" tabindex="3">
</div>
<div class="form-group">
  <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
</div>
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
          <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
      </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
          <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
      </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-4 col-sm-3 col-md-3">
      <span class="button-checkbox">
          <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
          <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
      </span>
  </div>
  <div class="col-xs-8 col-sm-9 col-md-9">
       By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#">Terms and Conditions</a> set out by Ecopoa e-Shop, including our Cookie Use.
  </div>
</div>

<hr class="colorgraph">
<div class="row">
  <div class="col-xs-12 col-md-6">
  <!-- <input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"> --></div>
  <div class="col-xs-12 col-md-6">
  <!-- <input type="submit"class="btn btn-success btn-block btn-lg" value="Create Account"></div> -->
</div>
    </div>
    <div class="modal-footer">
       <input type="submit"class="btn btn-success btn-block btn-lg" value="Create Account">
    </div>
</form>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--END OF MODALS-->



<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/price-range.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/main.js"></script>

<!-- Custom Theme JavaScript -->
<script>
// Scrolls to the selected menu item on the page
$(function() {
$('a[href*=#]:not([href=#])').click(function() {
if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
        $('html,body').animate({
            scrollTop: target.offset().top
        }, 1000);
        return false;
    }
}
});
});





//Forms Script
$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {
            updateDisplay();
            // Inject the icon if applicable
            if ($button.find('.state-icon').length === 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});

</script>

</body>

</html>
