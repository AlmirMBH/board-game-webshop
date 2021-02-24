let orders, currency, subTotal, cartOrders, cartQuantity, total, itemQuantity;

const removeAllButton =
    "<button onclick='deleteAllOrders()' class=\"theme-btn btn btn-primary\">Alles Entfernen</button>"

const isCartEmptyMessage =
    "<section class='notice'>" +
    "<div class='container'>" +
    "<div class='row justify-content-center align-items-center my-5'>" +
    "<div class='col-md-8'>" +
    "<div class='alert alert-warning mb-4 d-flex justify-content-between align-items-center' role='alert'>" +
    "<p class='mb-0'>Ihr Warenkorb ist gegenwärtig leer.</p>" +
    "<a href='" + route_web_shop + "' class='btn btn-warning theme-btn'>Zurück zum WebShop</a>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</section>";

$(document).ready(function () {
    fetchOrders();
});

function deleteSingleOrder(id) {
    $.ajax({
        url: base_url + '/api/delete/order/' + id + '/' + session_id,
        data: {
            format: 'json',
        },
        type: 'POST',
        success: function (data) {
            orders = "";
            subTotal = data[1]
            cartOrders = data[0];
            cartOrders.forEach(listOrders);

            $("#list-cart-orders").empty().append(orders);

            if (subTotal != null) {

                orderCalculationAndShipping();

                $("#cartQuantity").empty().append(cartQuantity);
                $("#subTotal").empty().append(subTotal.toFixed(2));
                $("#order-number").empty().append(cartOrders.length);

                if (total !== undefined) $("#total").empty().append(total.toFixed(2));
            } else {
                ifNoExistsOrdersDisplayMessage();
            }
        }
    })
}

function deleteAllOrders() {
    $.ajax({
        url: base_url + '/api/delete/all/orders/' + session_id,
        data: {
            format: 'json',
        },
        type: 'POST',
        success: function (data) {
            if (data === undefined) {
                ifNoExistsOrdersDisplayMessage();
            }
        }
    });
}

function fetchOrders() {
    $.ajax({
        url: base_url + '/api/listing/cart/' + session_id,
        data: {
            format: 'json',
        },
        type: 'GET',
        success: function (data) {
            cartOrders = data[0];
            currency = data[2];
            subTotal = data[1];
            cartOrders.forEach(listOrders)

            orderCalculationAndShipping();

            $("#list-cart-orders").append(orders);
            $("#remove-all-btn").append(removeAllButton);
            $(".currency").append(currency);
            $("#cartQuantity").append(cartQuantity);

            if (total !== undefined) $("#total").append(total.toFixed(2));
            if (subTotal != null) $("#subTotal").append(subTotal.toFixed(2));
        }
    })
}

function listOrders(row) {
    orders += "<tr>" +
        "<td class='product-image'><img width='200px' src='" + asset + "/" + row.item_image + "' alt='' class='img-thumbnail'></td>" +
        "<td class='product-name'>" + row.item_name + "</td>" +
        "<td class='product-quantity'>" + row.item_quantity + "</td>" +
        "<td class='product-price'>" + row.item_price + "</td>" +
        "<td class='product-subtotal'> "+ row.item_sub_total + "</td>" +
        "<td onclick='deleteSingleOrder(" + row.id + ")' class='remove'>" +
        "<span id='remove-order-x'><button class=\"btn btn-primary theme-btn-delete-order\"><i class=\"far fa-trash-alt\"></i></button></span>" +
        "</td>" +
        "</tr>"
}

function ifNoExistsOrdersDisplayMessage() {
    $("#subTotal").empty().append(subTotal);
    $("#order-number").empty();
    $(".cart-items-wrapper").remove();
    $(".cart-collaterals").remove();
    $("#isCartEmpty").append(isCartEmptyMessage);
}

function orderCalculationAndShipping() {
    if (cartOrders.length >= 3) {
        freeShipping();
    } else {
        additionItemsQuantity();
        if (itemQuantity < 3) {
            willBeCharged();
        } else {
            freeShipping();
        }
    }
}

function freeShipping() {
    cartQuantity = 'Kostenlos';
    total = subTotal;
}

function willBeCharged() {
    cartQuantity = 'CHF 7.00';
    total = subTotal + 7;
}

function additionItemsQuantity() {
    itemQuantity = 0;
    cartOrders.forEach(function (objectItem) {
        itemQuantity += objectItem.item_quantity;
    })
}
