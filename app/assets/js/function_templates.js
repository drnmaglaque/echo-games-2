let listCardItems = {
	template: ``
};

function displayCardItems(item) {
    listCardItems.template += `
					<div class="card">
					  <img class="card-img-top" src="../assets/images/${item.image}" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">${item.name}</h5>
					    <p class="card-text">PHP ${item.price}</p>
					    <input type="number" class="form-control mb-2" value="1">
							<button data-id="${item['id']}" class="add-cart btn btn-sm btn-outline-primary">Add To Cart</button>
					  </div>
					</div>
				`;
 }


export { displayCardItems, listCardItems };