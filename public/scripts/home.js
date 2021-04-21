// localStorage.setItem("shopingCart", JSON.stringify([1]));
let cartCountHandler = function () {
    shoppingCart = JSON.parse(localStorage.getItem("shopingCart"));
    $("#cart-item-cunt").text(shoppingCart.length);
};

let addCartHandler = function (id) {
    shoppingCart = JSON.parse(localStorage.getItem("shopingCart"));
    let index = shoppingCart.findIndex((element) => element === id);
    if (index === -1) {
        shoppingCart.push(id);
        localStorage.setItem("shopingCart", JSON.stringify(shoppingCart));
    }
    cartCountHandler();
};

cartCountHandler();
