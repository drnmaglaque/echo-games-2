$(document).ready(function() {

    $(".item_quantity>input").on("input", function(e) {
        e.preventDefault();

        let item_id 			= $(e.target).data("id");
        let new_quantity 	= $(e.target).val();
        let price 				= $(e.target).parents("tr").find(".item_price").text();
        let subtotal 			= new_quantity * price;

        // Find the ancestor tr of the selected element and find the children named item_price

        console.log("item to edit " + item_id);
        console.log("New quantity " + new_quantity);
        console.log("Price " + price);
        console.log("New subtotal " + (price * new_quantity));

        $(e.target).parents("tr").find(".item_subtotal").text(subtotal.toFixed(2));

        // ajax sending to the controller
        $.ajax({
            "url"		: "../controllers/update_cart.php",
            "type"	: "POST",
            "data"	: {
                "item_id"						: item_id,
                "item_quantity"			: new_quantity,
                "ifFromCatalogPage"	: 0
            },
            "success": function(dataFromController) {
            	$("#cart-count").text(dataFromController);

            	let total = 0;
			      	$(".item_subtotal").each(function(e) { // for each element with class "item_subtotal"
			      			total += parseFloat($(this).text()); // caluclates the total after deleting an item
      				});
      				$("#total-price").text(total.toFixed(2));
            }
        });


    });

    // let clearBtn = $("#clear-btn");
    //    clearBtn.click(function(e) {
    //    	// e.preventDefault();

    //    	let item_id 			= $(".item_name");
    //    	let new_quantity 	= $(".item_quantity");
    //    	let price 				= $(".item_price");
    //    	let subtotal 			= $(".item_subtotal");

    //    	item_id.text("");
    //    	new_quantity.val();
    //    	price.text("");
    //    	subtotal.text("");

    //    });






});