   
    <section class="footer" style="background:#222;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <h5 class="foot-title">Yangon Branch</h5>
                    <table>
                        <tbody>
                            <tr>
                            <td class="foot-address">
                                <img src="image/address.png" alt="">
                            </td>
                            <td class="address">
                                  No. 131, Yeiktha 3rd Street,   WaiZayandar Garden, Thingangyun Township, Yagon, Myanmar.
                            </td>
                        </tr>
                        <tr>
                            <td class="foot-address"><img src="image/phone.png" alt=""></td>
                            <td class="address">+95 9 777 3456 30, 9 777 3456 50</td>
                        </tr>
                        <tr>
                            <td class="foot-address"><img src="image/email.png" alt=""></td>
                            <td class="address">contacts@royalemeraldbagan.com</td>
                        </tr>
                        <tr>
                            <td class="foot-address"><img src="image/website.png" alt=""></td>
                            <td class="address">www.royalemeraldbagan.com</td>
                            
                        </tr>
                    </tbody>
                </table>
                </div>
                <div class="col-md-2 col-xs-12">
                    <h5 class="foot-title">Our Links</h5>
                    <ul class="address list-unstyled" style="padding-left: 3px;">
                        <li><i class="fa fa-caret-right foot-icon"></i><a href="#" class="list">About Us</a></li>

                        <li><i class="fa fa-caret-right foot-icon"></i><a href="/accomodation.php" class="list">Accomodation</a></li>
                        <li><i class="fa fa-caret-right foot-icon"></i><a href="#" class="list">Activities</a></li>
                        <li><i class="fa fa-caret-right foot-icon"></i><a href="#" class="list">Gallery</a></li>
                        <!-- <li><i class="fa fa-caret-right foot-icon"></i><a href="#" class="list">Reservation</a></li> -->
                        <li><i class="fa fa-caret-right foot-icon"></i><a href="/contact.php" class="list">Contact Us</a></li>
                        <!-- <li><i class="fa fa-caret-right foot-icon"></i><a href="#" class="list">Deal</a></li> -->
                    </ul>
                    <p>
                        <img src="image/social/icons8-facebook.png" alt="">
                        <img src="image/social/icons8-google_plus_squared.png" alt="">
                        <img src="image/social/icons8-linkedin.png" alt="">
                        <img src="image/social/icons8-twitter_squared.png" alt="">
                    </p>
                </div>
                <div class="col-md-3 col-xs-12">
                <br>
                    <!-- <h4 class="foot-title">Map</h4> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48620.84563973048!2d94.92037966691505!3d21.205765665022334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30b5fa76c8b60bdf%3A0x4fc145cc32cbc667!2sRoyal+Emerald+River+View+Resort!5e0!3m2!1smy!2smm!4v1515682875599" width="100%" height="279" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4 col-xs-12">
                <br>
                <!-- <iframe src="https://www.facebook.com/royalemeraldriverviewresort/?hc_ref=ARRVc9e2blGHr2dMdcTrxenjxs4H-NbR6Hly7yFHmoi2u0djgnCBMbNO7BSu0Pce5Ug" width="100%" height="279" frameborder="0" style="border:0" allowfullscreen></iframe> -->

                    <div class="fb-page" 
                        data-href="https://www.facebook.com/royalemeraldriverviewresort" 
                        data-tabs="timeline" 
                        data-small-header="false" 
                        data-adapt-container-width="true" 
                        data-hide-cover="false"
                        data-height="279"
                        data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                </div>
            </div>
        </div>
        <br>
    </section>
    <section style="background-color: #333333; height: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                <br>
                    <p style="text-align: center; font-size: 14px; color: #fff; font-family: 'Segoe UI', sans-serif;">Copyright 2017 <a href="#" style="color: #089f08; text-decoration: none; font-weight: bold; font-style: italic;" target="_blank">Royal Emerald River View Resort .</a> All Rights Reserved. Developed by <a href="https://www.hostmyanmar.net" style="color: #6aa7f3; text-decoration: none;" target="_blank">Host Myanmar</a>.</p>
        </div>
            </div>
        </div>
        
    </section>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="mdb/js/mdb.js"></script>
    <script src="js/wow.js"></script>
    <script src="album/js/classie.js"></script>
	<script src="album/js/photostack.js"></script>
    <script>
        new Photostack( document.getElementById( 'photostack-3' ), {
            callback : function( item ) {
            }
        });
    </script>
<script>
     $('#myCarousel').carousel({
        pause: 'none'
    });

        $(function(){
        $(".dropdown").hover(            
                function() {
                    $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                    $(this).toggleClass('open');
                    $('b', this).toggleClass("caret caret-up");                
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                    $(this).toggleClass('open');
                    $('b', this).toggleClass("caret caret-up");                
                });
        });
    
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/qz_MM/sdk.js#xfbml=1&version=v2.12';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    var wow = new WOW(
    {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
        // the callback is fired every time an animation is started
        // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
    }
    );
    wow.init();
</script>
</body>

</html>
