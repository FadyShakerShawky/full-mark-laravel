(function getCartData() {
    shoppingCart = localStorage.getItem("shopingCart");
    if (shoppingCart) {
        $.ajax({
            url: "http://localhost:8000/groups.data",
            data: { shoppingCart },
            contentType: "application/json",
            success: (res) => {
                console.log(res);
                res.forEach((group) => {
                    document.getElementById(
                        "shopping-cart-body"
                    ).innerHTML += `<span>Course name</span>
                    <span>:</span>
                    <span>${group.name}</span>
                    <span>Price</span>
                    <span>:</span>
                    <span>${group.price}</span>
                    <span></span>
                    <span></span>
                    <span>
                        <a href="#" class="btn btn-success">Proceed with payment</a>
                    </span>`;
                });
            },
            error: (err) => {
                console.log(err);
            },
        });
    }
})();
