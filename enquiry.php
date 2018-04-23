<?php include('header.php');?>

    <section style="margin-top:40px;padding:40px 0px;">

        <div class="container">

            <div class="row">

                 <div class="col-md-12">

                <h3 style="color:#fff;">Contact Us</h3>

                <!-- <hr> -->

                </div>

            </div>

        </div>

    </section>

    <section id="contact" style="background:#fff;">

  <div class="container">

    <!-- <div class="well well-sm">

      <h3><strong>Contact Us</strong></h3>

    </div> -->

	<br>

	<div class="row">

	  <div class="col-md-7">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48620.84563973048!2d94.92037966691505!3d21.205765665022334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30b5fa76c8b60bdf%3A0x4fc145cc32cbc667!2sRoyal+Emerald+River+View+Resort!5e0!3m2!1smy!2smm!4v1515682875599" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
    
    </div>
    <?php
      $success = $pkname = "";
     ?>

      <div class="col-md-5">

          <h4><strong>Get in Touch</strong></h4>
            <?php if (isset($_GET["do"]) AND $_GET["do"]=="success") { ?>
              <p><span class="error">Message has been sent using SMTP</span></p>
          <?php }  ?>
           
        <form method="post" action="mail.php">

          <div class="form-group inline">

            <input type="text" class="form-control" name="name" value="" placeholder="Name *" required>
           

          </div>

          <div class="form-group">

            <input type="email" class="form-control" name="email" value="" placeholder="E-mail *" required>
            
          </div>

          <div class="form-group">

            <input type="tel" class="form-control" name="phone" value="" placeholder="Phone *" required>
          </div>
          <div class="form-group">
          <?php
          if (isset($_GET['pkname'])) {
            $pkname =  $_GET['pkname'];
          }
          ?>
            <input type="text" class="form-control" name="pkname" value="<?php echo $pkname  ?>">

          </div>

          <div class="form-group">

            <textarea class="form-control" name="message" rows="3" placeholder="Message" required></textarea>

          </div>

          <button class="btn btn-success btn-lg" type="submit" name="button">

              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Send

          </button>

        </form>

      </div>

    </div>

  </div>

  <br>

<br>

</section>

<?php include('footer.php');?> 


