window.odometerOptions = {
  format: '(ddd).dd'
};

var el = document.querySelector('.odometer_2');
var el_2 = document.querySelector('.odometer_3');

od = new Odometer({
  el: el,
  value: 0,
  // Any option (other than auto and selector) can be passed in here
  format: '',
});

od_2 = new Odometer({
  el: el_2,
  value: 0,
  // Any option (other than auto and selector) can be passed in here
  format: '',
});

$(document).ready(function(){
		$(window).scroll(function(){
			if(($(this).scrollTop() > 400)&&($(this).scrollTop() < 600)){
			$('.odometer').html(nbre_jour);
		od.update(nbre_pays_visites);
		od_2.update(nbre_km);
			}
		});
	});