$(".submit").each((index, add_cart) => {
    add_cart.addEventListener("click", () => {
        const id_sp = $(add_cart).data("id");
        const user_id = $(add_cart).data("user");
        const quantity = $(add_cart).data("qty");
        $.ajax({
            type: "POST",
            url: "cart_lists",
            data: {
                id_sp: id_sp,
                user_id: user_id,
                quantity: quantity
            },
            success: function(data) {
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                $(".cart_list").html(data);
            }
        });
    })
})