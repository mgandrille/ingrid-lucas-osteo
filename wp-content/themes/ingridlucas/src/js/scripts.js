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

	const popupContent = 'Ingrid Lucas <br> Ostéopathe D.O.'

	L.marker([45.598849, 4.807537]).addTo(map)
		.bindPopup(popupContent)
		.openPopup();
}

