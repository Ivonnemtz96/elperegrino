<script
      data-cfasync="false"
      src="https://demo.egenslab.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/jquery-ui.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/swiper-bundle.min.js"></script>
    <script src="/assets/js/jquery.nice-select.js"></script>
    <script src="/assets/js/jquery.fancybox.min.js"></script>
    <script src="/assets/js/odometer.min.js"></script>
    <script src="/assets/js/viewport.jquery.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/SmoothScroll.js"></script>
    <script src="/assets/js/jquery.nice-number.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.js"></script>
    <script src="/assets/js/masonry.pkgd.min.js"></script>
    <script src="/assets/js/main.js"></script>

    <!-- icons de redes sociales -->
<script src="https://kit.fontawesome.com/a66c8c86d9.js" crossorigin="anonymous"></script>
<!-- pop up -->
<script>
  $(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>El Peregrino</small>';
			}
		}
	});
});
</script>