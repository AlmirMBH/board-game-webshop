let orders, currency, grandTotal, cartOrders;

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

function deleteSingleOrder(id) {
    $.ajax({
        url: base_url + '/api/delete/order/' + id + '/' + session_id,
        data: {
            format: 'json',
        },
        type: 'POST',
        success: function (data) {
            orders = "";
            grandTotal = data[1]
            cartOrders = data[0];
            cartOrders.forEach(listOrders);

            $("#list-cart-orders").empty().append(orders);

            if (grandTotal != null) {
                $("#grandTotal").empty().append(grandTotal.toFixed(2));
                $("#order-number").empty().append(cartOrders.length)
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
            grandTotal = data[1];
            cartOrders.forEach(listOrders)

            $("#list-cart-orders").append(orders);
            $("#remove-all-btn").append(removeAllButton);
            $("#currency").append(currency);

            if (grandTotal != null) $("#grandTotal").append(grandTotal.toFixed(2));
        }
    })
}

function ifNoExistsOrdersDisplayMessage() {
    $("#grandTotal").empty().append(grandTotal);
    $("#order-number").empty();
    $(".cart-items-wrapper").remove();
    $(".cart-collaterals").remove();
    $("#isCartEmpty").append(isCartEmptyMessage);
}
