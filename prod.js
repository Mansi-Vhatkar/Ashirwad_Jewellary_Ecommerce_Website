// Cart
let cartIcon = document.querySelector('#cart-icon');
let cart = document.querySelector('.cart');
let closeCart = document.querySelector('#close-cart');

//Open cart
cartIcon.onclick = () => {
    cart.classList.add("active");
};

//Close cart
closeCart.onclick = () => {
    cart.classList.remove("active");
};


//Cart Working Js
if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready);
} else {
    ready();
}

//Making Function
function ready() {

    //Remove Items from cart
    var removeCartButtons = document.getElementsByClassName("cart-remove");
    console.log(removeCartButtons);
    for (var i = 0; i < removeCartButtons.length; i++) {
        var button = removeCartButtons[i];
        button.addEventListener('click', removeCartItem);
    }

    // Quantity Changes
    var quantityInputs = document.getElementsByClassName("cart-quantity");
    for  (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener("change", quantityChanged);
    }

    // Add to Cart
    var addCart = document.getElementsByClassName("add-cart");
    for  (var i = 0; i < addCart.length; i++) {
        var button = addCart[i];
        button.addEventListener("click", addCartClicked);
    }
// Buy button work
document.getElementsByClassName("btn-buy")[0]
.addEventListener("click", buyButtonClicked);
}

function buyButtonClicked() {
  alert("your order is placed");
      var cartContent = document.getElementsByClassName("cart-content")[0];
      while (cartContent.hasChildNodes()) {
        cartContent.removeChild(cartContent.firstElementChild);  
        updateTotal();
      }    
}


  //Remove Items from cart
  function removeCartItem(event) {
    var buttonClicked =event.target;
    buttonClicked.parentElement.remove();
    updateTotal();
  }

  // Quantity Changes
  function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updateTotal();
  }

  // Add To Cart
  function addCartClicked(event) {
    var button = event.target;
    var shopProducts = button.parentElement;
    var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
    var price = shopProducts.getElementsByClassName("price")[0].innerText;
    var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
    addProductToCart(title, price, productImg);
    updateTotal();
  }

  function addProductToCart(title, price, productImg) {
   var  cartShopBox = document.createElement("div");
     cartShopBox.classList.add("cart-box");
        var cartItems = document.getElementsByClassName("cart-content")[0];
        var cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
        for  (var i = 0; i < cartItemsNames.length; i++) {
            if (cartItemsNames[i].innerText == title) {
            alert("You have already added this item to the cart");
            return; 
        } 
    }
       
  var cartBoxContent = `
                        <img src="${productImg}" alt="" class="cart-img">
                        <div class="detail-box">
                            <div class="cart-product-title">${title}</div>
                            <div class="cart-price">${price}</div>
                            <input type="number" value="1" class="cart-quantity">
                        </div>

                        <!-- Remove Cart -->
                        <i class="fa-solid fa-trash cart-remove"></i>`;

   cartShopBox.innerHTML = cartBoxContent;
   cartItems.append(cartShopBox);
   cartShopBox
   .getElementsByClassName("cart-remove")[0]
   .addEventListener("click", removeCartItem);
   cartShopBox
   .getElementsByClassName("cart-quantity")[0]
   .addEventListener("change", quantityChanged);

}


  //Update Total
  function updateTotal() {
    var cartContent = document.getElementsByClassName("cart-content")[0];
    var cartBoxes = cartContent.getElementsByClassName("cart-box");
    var total = 0;
    for (var i = 0; i < cartBoxes.length; i++) {
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName("cart-price")[0];
        var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
        var price = parseFloat(priceElement.innerText.replace("₹", ""));
        var quantity = quantityElement.value;
        total = total + price * quantity;
      }
  // If price Contain some Cents Value
        total = Math.round(total * 100) / 100;
        document.getElementsByClassName("total-price")[0].innerText = "₹" + total; 
  }