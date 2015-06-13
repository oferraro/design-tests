$(document).ready (function(){
	
	// Paneles colapsables
	// carga la página y se cierran los .toggle-content
	$('.toggle-content').hide();
	// click en el .toggle-tab y... 
	$('.toggle-tab').on('click', function() {
		//... le agregamos o quitamos la clase .active al .toggle-tab...
		$(this).toggleClass('active');
		// se abre o cierra el siguiente .toggle-content.
		$(this).next('.toggle-content').slideToggle();
	});
	
	// Acordeones
	// carga la página y se cierran los .accordion-content
	$('.accordion-tab').not('.active').next().hide();
	// click en el .accordion-tab y... 
	$('.accordion-tab').on('click', function(){
		//... si tiene la clase .active... 
		if ($(this).hasClass('active')) {
			//... le quitamos la clase .active y...
			$(this).removeClass('active');
			//... cerramos los .accordion-content vecinos 
			$(this).siblings('.accordion-content').slideUp();
		} 
		// si NO tiene la clase .active...
		else {
			//... agregamos la clase .active...
			$(this).addClass('active');
			//... a todos sus vecinos les quitamos la clase .active...
			$(this).siblings('.accordion-tab').removeClass('active');
			//... cerramos todos los .accordion-content...
			$(this).siblings('.accordion-content').slideUp();
			//... abrimos el .accordion-content siguiente.
			$(this).next('.accordion-content').slideDown();
		}
	});
	
	//Pestañas
	// Escondemos los .tab que no son .active
	$('.tab').not('.active').hide();
	// cuando hacemos click en un link de las pestañas...
    $('.tabs .tab-links a').on('click', function(e)  {
		// tomamos el valor del href del hipervínculo...
        var tomarElAncla = $(this).attr('href');
         //... mostramos el tab que tiene el ID del ancla y lo mostramos ...
        $('.tabs ' + tomarElAncla).fadeIn('slow')
			//... a sus .tab vecinos los ocultamos
			.siblings().hide();
         //... al <li> del link le agregamos la clase .active y se la quitamos a sus vecinos 
        $(this).parent('li').addClass('active').siblings().removeClass('active');
		// evitamos el comportamiento normal de los hipervínculos
        e.preventDefault();
	});
});