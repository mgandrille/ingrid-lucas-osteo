jQuery(document).ready(() => {

	// Sticky Menu
	jQuery(window).on('scroll', () => {stickyMenu()});

	const sticky = jQuery("#navbar").position().top;

	function stickyMenu() {
		if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky")
		} else {
			navbar.classList.remove("sticky");
		}
    }

});
