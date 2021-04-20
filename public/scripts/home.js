(function cartCountHandler() {
    shoppingCart = JSON.parse(localStorage.getItem("shopingCart"));
    $("#cart-item-cunt").text(shoppingCart.length);
})();
function addCartHandler(id) {
    shoppingCart = JSON.parse(localStorage.getItem("shopingCart"));
    shoppingCart.push(id);
    localStorage.setItem("shopingCart", JSON.stringify(shoppingCart));
}
