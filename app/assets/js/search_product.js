import { displayCardItems, listCardItems } from "./function_templates.js";

$(document).ready(function() {

	const searchForm = $("#search-form");
	searchForm.keypress(function(e){
		if(e.which == 13){
			$.ajax({
				"url": "../controllers/search_product.php",
				"type": "POST",
				"data": {
					"search": searchForm.val()
				},
				"success": getResults
			})
		}
	function getResults(jsondata) {
		if(jsondata !== "") {
			const result = JSON.parse(jsondata);
			let cardColumns = ``;
			listCardItems.template = ``;

			result.forEach(displayCardItems);
				cardColumns = `
					<div class="card-columns">
						${listCardItems.template}
					</div>
				`;
				$(".products-container").html(cardColumns);
			} else {
				$(".products-container").html("There's nothing to show");
			};
		}
	});

});