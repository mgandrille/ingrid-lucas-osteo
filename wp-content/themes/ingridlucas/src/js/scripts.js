jQuery(document).ready(() => {

	// Sticky Menu
	const sticky = jQuery("#navbar").position().top;
	jQuery(window).on('scroll', () => {stickyMenu(sticky)});

	// Leaflet
	getMap();




});

// Sticky Menu
function stickyMenu(sticky) {
	if (window.pageYOffset >= sticky) {
		navbar.classList.add("sticky")
	} else {
		navbar.classList.remove("sticky");
	}
}


// Leaflet
function getMap() {
	const map = L.map('map').setView([45.598849, 4.807537], 16);

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OSM/Wikimedia</a> contributors'
	}).addTo(map);

	const popupContent = '<h6>Ingrid Lucas</h6><h6>Ostéopathe D.O.</h6><p>24 bis rue de Chassagne <br> 69360 Ternay</p><a href="tel:+33627584026"><i class="fas fa-phone-alt"></i>06 27 58 40 26</a>'

	L.marker([45.598849, 4.807537]).addTo(map)
		.bindPopup(popupContent)
		.openPopup();
}

