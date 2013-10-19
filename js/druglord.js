// Creation Date: 19 Oct 2013
// Author: Fernando Canizo (aka conan) - http://conan.muriandre.com/


var druglord = {}

druglord.drug2cityPrices = true;

$(document).ready(function() {
	$('button#switch_prices').on('click', function() {
		var button = this;
		if(druglord.drug2cityPrices) {
			$(button).text('See city -> drug prices')
				.removeClass('btn-info')
				.addClass('btn-success');
		} else {
			$(button).text('See drug -> city prices')
				.removeClass('btn-success')
				.addClass('btn-info');
		}
		// switch
		druglord.drug2cityPrices = ! druglord.drug2cityPrices;
	});
})
