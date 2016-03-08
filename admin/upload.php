<?php
session_start();
include('templates/header.php');
if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')){
   header("Location:index.php");
}
include('db_config.php');
?>


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
        <h3>Ready to make more sales, <?php echo $_SESSION['fname'];?>?</h3>
        <a href="#" data-toggle="modal" data-target="#add_m" class="btn btn-lg btn-light">Upload Product</a>
    </div>
</div>
</div>
</aside>
          <?php
            if(isset($_GET['msg']))
            {
              $message = $_GET['msg'];
              if($message == 1)
               {
                  echo"
                  <div style='position:absolute;' class='alert alert-danger alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'> &times;</span>
                    <strong> Error! </strong> Please fill in all the fields.
                  </button>
                  </div>";
               }
               if($message == 2)
               {
                  echo"
                  <div style='position:absolute;' class='alert alert-info alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'> &times;</span>
                    <strong> Information! </strong> The product already exists.
                  </button>
                  </div>";
               }
                if($message == 3)
               {
                  echo"
                  <div style='position:absolute;' class='alert alert-warning alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'> &times;</span>
                    <strong> Warning! </strong> Invalid Email Format.
                  </button>
                  </div>";
               }
                   if($message == 5)
               {
                  echo"
                  <div style='position:absolute;' class='alert alert-success alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'> &times;</span>
                    <strong> Sucess! </strong> Your product has been uploaded!
                  </button>
                  </div>";
               }
            }
            ?>

<!-- Portfolio -->
<section id="portfolio" class="portfolio">
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <p class="lead" style="color:#333;"><strong>Shop Name: </strong><?php echo $_SESSION['shop'];?></p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/rt.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/gbg.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/rt.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

<div class="row">
<?php
$email = $_SESSION['email'];
$products = mysql_query("SELECT * FROM products WHERE `by`='$email'");
if (!$products) {
   die('Could not get data: ' . mysql_error());
}
if(mysql_num_rows($products)>0)
{
while($row = mysql_fetch_assoc($products, MYSQL_ASSOC))
{
    echo "
                    <div class='col-sm-4 col-lg-4 col-md-4'>
                        <div class='thumbnail' style='min-height:320px;'>
                            <img src='{$row['image']}' width='320' height='150' alt='{$row['name']}'>
                            <div class='caption'>
                                <h4 class='pull-right' style='background:#fff;position: relative;padding-left: 5px;'>KSh<strong style='color: brown;'>{$row['price']}.00</strong></h4>
                                <h4><a href='#'>{$row['name']}</a></h4>
                                <p>{$row['description']}</p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>Available: {$row['volume']}</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    ";
}
} else{
    echo "<h2 style='color:red;'>Oops! No items in store :(</h2>";
}
?>


</div>

            </div>

        </div>

    </div>
    <!-- /.container -->


</section>
<!-- Footer -->
<?php include('templates/footer.php') ?>



<!-- MODALS -->
<!-- Modal -->
<div class="modal fade" id="add_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md" id="addPhoto">
<div class="modal-content">
    <div class="modal-header" id="ribbon_top">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h2 class="modal-title">Upload Products to Ecopoa </h2>
    </div>
    <div class="modal-body">
<form role="form" id="uploadForm" method="post" action="uploadImage.php">
<br><br>
<div class="row" id="ribbon_h">
  <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
         <input name="productImage" type="file" class="form-control input-lg" style="padding:0px; border:none;" tabindex="1">
      </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
          <button type="submit" class="btn btn-block btn-md"  tabindex="2"><strong style="padding: 0px 10px 10px 0px; top: -7px; position: relative;"> Add Selected </strong><i class="fa-2x fa fa-plus-square"></i></button>
      </div>
  </div>
</div>
<div class="row">
  <div class="text-center" style="max-height: 400px; overflow-y: auto;" id="displayLayer">
  </div>
  <div class="col-xs-12 col-md-4">

  </div>
</div>
</form>
    </div>
    <div class="modal-footer">
    <br>
    <a id="ribbon_f" href="#" data-toggle="modal" data-target="#upload_m" class="btn btn-lg btn-success btn-block
btn btn-success btn-block"><strong style="padding: 0px 10px 10px 0px; top: -7px; position: relative;"> Add Product Description</strong><i class="fa-2x fa fa-arrow-circle-o-right"></i></a>
    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="upload_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h2 class="modal-title">Add description to your product</h2>
    </div>
    <div class="modal-body">
<form role="form" id="productForm" method="post" action="saveDetails.php">
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
          <input type="text" name="product_name" id="product_name" class="form-control input-lg" placeholder="Product Name" tabindex="1">
      </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
          <input type="text" name="product_type" id="product_type" class="form-control input-lg" placeholder="Type/Model" tabindex="2">
      </div>
  </div>
</div>

<div class="form-group">
  <input type="text" name="sku" id="sku" class="form-control input-lg" placeholder="Product Code/sku" tabindex="3">
</div>

<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
          <input type="text" name="price" id="price" class="form-control input-lg" placeholder="Price(KSH: e.g 500,70000.99)" tabindex="1">
      </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
          <input type="text" name="volume" id="volume" class="form-control input-lg" placeholder="Available Units  (e.g 10, 80)" tabindex="2">
      </div>
  </div>
</div>
<div class="form-group">
  <textarea name="description" placeholder="Add brief product description" class="form-control"  tabindex="4" rows="4"></textarea>
</div>
<div class="row">
  <div class="col-xs-8 col-sm-9 col-md-9">
       By clicking <strong class="label label-primary">Save Product</strong>, you acertain to have added a standard product in accordance with our  <a href="#">quality agreement</a> as outlined by KEBS.
  </div>
</div>

<hr class="colorgraph">
    </div>
    <div class="modal-footer">
    <br>
 <button type="submit" name="save" class="btn btn-success btn-block btn-lg"><strong style="padding: 0px 10px 10px 0px; top: -7px; position: relative;"> Save Product</strong><i class="fa-2x fa fa-save"></i></button>
    </div>
</form>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script>
// Closes the sidebar menu
$("#menu-close").click(function(e) {
e.preventDefault();
$("#sidebar-wrapper").toggleClass("active");
});

// Opens the sidebar menu
$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#sidebar-wrapper").toggleClass("active");
});

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
//Image Upload
$(document).ready(function (e) {
    $("#ribbon_f").hide();
    $("#uploadForm").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
            url: "uploadImage.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
            $("#ribbon_h, #ribbon_top").hide();
            //$("#ribbon_top").remove();
            $("#displayLayer").html(data);
            $("#ribbon_f").show();
            },
            error: function()
            {
            }
       });
    }));
});
</script>

</body>

</html>
