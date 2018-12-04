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
			console.log(result);

			let cardColumns = ``;
			let listItems = ``;
			result.forEach(function(item) {
				listItems += `
					<div class="card">
					  <img class="card-img-top" src="../assets/images/${item.image}" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">${item.name}</h5>
					    <p class="card-text">PHP ${item.price}</p>
					    <a href="#" class="btn btn-sm btn-outline-primary">Add To Cart</a>
					  </div>
					</div>
				`;
				cardColumns = `
					<div class="card-columns">
						${listItems}
					</div>
				`;
				$(".products-container").html(cardColumns);
			});
		}
	} 
	});

});