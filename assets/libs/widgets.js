var bookVisitFlexWidgetScriptLoaded = false;
function bookVisitInitJQuery() {
	if (typeof (bvJQuery) == "undefined") {
		if (!bookVisitFlexWidgetScriptLoaded) {
			bookVisitFlexWidgetScriptLoaded = true;
			document.write("<scr" + "ipt charset=\"UTF-8\" type=\"text/javascript\" src=\"//online.bookvisit.com/Content/flexwidget/FlexWidgetFullScripts.min.js\"></scr" + "ipt>");
		}
		setTimeout("bookVisitInitJQuery()", 50);
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
bookVisitInitJQuery();