$(document).ready(function() {


		
    $(document).on('click', '.item-remove', function(e) {
        e.stopPropagation();
        item_id = $(e.target).data('id');

      // get data from php and run success function once successful  
      $.ajax({
      	"url": "../controllers/update_cart.php",
      	"type": 'POST',
      	"data": {
      		"item_id": item_id,
      		"item_quantity": 0,
      		"ifFromCatalogPage": 0,
      	},
      	"success": function(dataFromController){

      		// removes the parent of the target element, so the entire row would be deleted
      		$(e.target).parents("tr").remove();
      		$("#cart-count").text(dataFromController);
      		
					// update total
					// get all the .item_subtotal's values and add them all up. 

      		let total = 0;
			     $(".item_subtotal").each(function(e) { // for each element with class "item_subtotal"
			    	total += parseFloat($(this).text()); // caluclates the total after deleting an item
      			});     		
      		$("#total-price").text(total.toFixed(2));

      	}
      });
        


    });




});