var widgetHMHotel = false;
function widgetHMHotelInitJQuery() {
	if (typeof (bvJQuery) == "undefined") {
		if (!widgetHMHotel) {
			widgetHMHotel = true;
			document.write("<scr" + "ipt charset=\"UTF-8\" type=\"text/javascript\" src=\"//online.bookvisit.com/Content/flexwidget/FlexWidgetFullScripts.min.js\"></scr" + "ipt>");
		}
		setTimeout("widgetHMHotelInitJQuery()", 50);
	}
	else {
		var baseUrl = "//online.bookvisit.com/v2/widget/getwidget";
		(
			function ($) {
				$.getJSON(
					baseUrl + "?channelId=53a0e225-de68-481f-a229-ff5563dcf956&culture=es-ES&containerId=widgetHMHotel&layout=Standard1Column&openOption=redirect&displayPromoCode=false&displayCorpCode=false&displayIATACode=false&jsoncallback=?",
					function (json) {
						$("#widgetHMHotel").html(json.Widget);
					}
				);                                
			}
		)(bvJQuery);
	}
}
widgetHMHotelInitJQuery();

var widgetMontroi_City = false;
function widgetMontroi_CityInitJQuery() {
	if (typeof (bvJQuery) == "undefined") {
		if (!widgetMontroi_City) {
			widgetMontroi_City = true;
			document.write("<scr" + "ipt charset=\"UTF-8\" type=\"text/javascript\" src=\"//online.bookvisit.com/Content/flexwidget/FlexWidgetFullScripts.min.js\"></scr" + "ipt>");
		}
		setTimeout("widgetMontroi_CityInitJQuery()", 50);
	}else {
		var baseUrl = "//online.bookvisit.com/v2/widget/getwidget";
		(
			function ($) {
				$.getJSON(
					baseUrl + "?channelId=2bc08c22-5ec2-4440-92db-8caed7906647&culture=es-ES&containerId=widgetMontroi_City&layout=Standard1Column&openOption=redirect&displayPromoCode=false&displayCorpCode=false&displayIATACode=false&jsoncallback=?",
					function (json) {
						$("#widgetMontroi_City").html(json.Widget);
					}
				);
			}
		)(bvJQuery);
	}
}
widgetMontroi_CityInitJQuery();

var widgetEL_HOTELITO = false;
function widgetEL_HOTELITOInitJQuery() {
	if (typeof (bvJQuery) == "undefined") {
		if (!widgetEL_HOTELITO) {
			widgetEL_HOTELITO = true;			
                        document.write("<scr" + "ipt charset=\"UTF-8\" type=\"text/javascript\" src=\"//online.bookvisit.com/Content/flexwidget/FlexWidgetFullScripts.min.js\"></scr" + "ipt>");
		}
		setTimeout("widgetEL_HOTELITOInitJQuery()", 50);
	}else {
		var baseUrl = "//online.bookvisit.com/v2/widget/getwidget";
		(
			function ($) {
                                $.getJSON(
					baseUrl + "?channelId=0a2c95bd-3202-4493-b24c-fbeca7d1bcda&culture=es-ES&containerId=widgetEL_HOTELITO&layout=Standard1Column&openOption=redirect&displayPromoCode=false&displayCorpCode=false&displayIATACode=false&jsoncallback=?",
                            function (json) {
						$("#widgetEL_HOTELITO").html(json.Widget);
					}
				);
			}
		)(bvJQuery);
	}
}
widgetEL_HOTELITOInitJQuery();

var widgetMontroi_Express = false;
function widgetMontroi_ExpressInitJQuery() {
	if (typeof (bvJQuery) == "undefined") {
		if (!widgetMontroi_Express) {
			widgetMontroi_Express = true;			
                        document.write("<scr" + "ipt charset=\"UTF-8\" type=\"text/javascript\" src=\"//online.bookvisit.com/Content/flexwidget/FlexWidgetFullScripts.min.js\"></scr" + "ipt>");
		}
		setTimeout("widgetMontroi_ExpressInitJQuery()", 50);
	}else {
		var baseUrl = "//online.bookvisit.com/v2/widget/getwidget";
		(
			function ($) {
                                $.getJSON(
					baseUrl + "?channelId=b885cf9c-ab87-46b6-8a77-a9e4dde24303&culture=es-ES&containerId=widgetMontroi_Express&layout=Standard1Column&openOption=redirect&displayPromoCode=false&displayCorpCode=false&displayIATACode=false&jsoncallback=?",
                            function (json) {
						$("#widgetMontroi_Express").html(json.Widget);
					}
				);
			}
		)(bvJQuery);
	}
}
widgetMontroi_ExpressInitJQuery();