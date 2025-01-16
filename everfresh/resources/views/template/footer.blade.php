
<section class="calltoactionSocial">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="calltoleftMenu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Solutions</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-right resTexleft">
                <h2 class="callTotextsocial">Follow us on</h2>
                <div class="calltoSocial">
                    <a target="_blank" href="https://www.facebook.com/mdnaushad.678"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="https://www.facebook.com/mdnaushad.678"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                    <a target="_blank" href="#"><i class="fa fa-vimeo"></i></a>
                    <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footerTopinfo">
                    <div class="row">
                        <div class="col-lg-2 col-sm-3 noPaddingRight">
                            <div class="logofoot">
                                <a href="#">
                                    <img src="{{asset('storage/'.$footerBanner->logo)}}" alt>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-9">
                            <div class="footinfText">
                                <p>
                                   {{$footerBanner->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footerwidgetWrap">
                <div class="col-lg-3 col-sm-6 noPaddingRight">
                    <div class="widget">
                        <h3 class="widgetTitle">Gift Certificates</h3>
                        <div class="textwidget">
                            <p>
                                {{$shortDesc->description}}
                            </p>
                        </div>
                        <a href="#" class="cleanBtn_style2">Gift of Time<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="widget">
                        <div class="widLink">
                            <ul>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Flickr Feeds</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="widget twitterFeedwrap">
                        <h3 class="widgetTitle">Latest Tweets</h3>
                        <div class="twitterFeed">
                            <div class="singTwi">
                                <i class="fa fa-twitter"></i>
                                <p>ifathemes: foxhost - powerless in a world of criminals who the law.</p>
                            </div>
                            <div class="singTwi">
                                <i class="fa fa-twitter"></i>
                                <p>ifathemes: foxhost - powerless in a world of criminals who the law.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget fotsearchWr">
                        <h3 class="widgetTitle sear">Find a Cleaning Service in Popular City</h3>
                        <div class="footerSearch">
                            <form action="#" method="post">
                                <input type="text" placeholder="Zip / Postal Code">
                                <button type="submit"><i class="icon-Search"></i></button>
                            </form>
                        </div>
                        <div class="fotaddress">
                            <p>Call now for Free Estimate</p>
                            <p class="phoneNum">+977 {{$homeTop->number}}</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</footer>

<section class="copyRightSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
               <p><a  style="color:#FF4800;margin-right:5px" target="_blank"
                    href="#">Design & Developed By: Irish Web Design.</a>© 2024 - All Rights Reserved.</p>
         
            </div>
        </div>
    </div>
</section>
<a href="#" id="backToTop"><i class="fa fa-angle-up"></i></a>

 
 
 
 
 <!-- Bootstrap 3.3.4 JS, jQuery -->

 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="js/jquery-ui.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
 <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
 <script type="text/javascript" src="js/owl.carousel.js"></script>
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
 <script type="text/javascript" src="js/gmaps.js"></script>
 <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
 <script type="text/javascript" src="js/wow.min.js"></script>
 <script type="text/javascript" src="js/mixer.js"></script>
 <script type="text/javascript" src="js/jquery.appear.js"></script>
 <script type="text/javascript" src="js/theme.js"></script>
 


 <script>
     $(document).ready(function () {
         var previousTab = null;

         // Function to show images in active tab immediately on page load
         function showActiveTabImages() {
             var activeTab = $('.nav-tabs .active a').attr('href'); // Get the href of the active tab
             $(activeTab + ' .portfolio-item').each(function (index) {
                 var delay = index * 100; // Incremental delay for staggering effect
                 setTimeout(function () {
                     $(activeTab + ' .portfolio-item').eq(index).addClass('active'); // Add class to animate zoom in
                 }, delay);
             });
         }

         // Call the function on page load
         showActiveTabImages();

         // When a tab is shown
         $('.nav-tabs a').on('shown.bs.tab', function (event) {
             var activeTab = $(event.target).attr('href'); // Get the href of the active tab

             if (previousTab !== null && previousTab !== activeTab) {
                 // Remove animation class from all items in previous tab
                 $(previousTab + ' .portfolio-item').removeClass('active');
             }

             // Add animation class to the newly active tab's items after a slight delay
             setTimeout(function () {
                 $(activeTab + ' .portfolio-item').each(function (index) {
                     var $currentItem = $(activeTab + ' .portfolio-item').eq(index);
                     var $existingItem = $(previousTab + ' .portfolio-item img[src="' + $currentItem.find('img').attr('src') + '"]');

                     if ($existingItem.length) {
                         // If the image exists in the previous tab, move it to the new position
                         var currentPosition = $existingItem.parent().index() + 1; // Get current position in previous tab
                         var newPosition = index + 1; // Get new position in active tab
                         if (currentPosition !== newPosition) {
                             // Move smoothly to new position
                             $existingItem.parent().css({
                                 'transform': 'translateY(' + (newPosition - currentPosition) * 100 + '%)',
                                 'opacity': 0
                             });
                             setTimeout(function () {
                                 $currentItem.addClass('active'); // Add class to animate zoom in
                             }, 300); // Adjust timing as per transition duration in CSS
                         } else {
                             // No movement needed, just zoom in
                             setTimeout(function () {
                                 $currentItem.addClass('active'); // Add class to animate zoom in
                             }, 100); // Delay to ensure previous transition ends smoothly
                         }
                     } else {
                         // Image doesn't exist in previous tab, simply zoom in
                         setTimeout(function () {
                             $currentItem.addClass('active'); // Add class to animate zoom in
                         }, 100); // Delay to ensure previous transition ends smoothly
                     }
                 });
             }, 50); // Delay to ensure proper removal of previous animation classes

             // Update previousTab to current active tab
             previousTab = activeTab;
         });
     });
 </script>

  <script>
     $(document).ready(function () {
         $('.swipebox').swipebox();
     });
 </script>
</body>

</html>