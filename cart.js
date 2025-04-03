$(document).ready(function() {
    // Load cart items from localStorage
    var cartItems = JSON.parse(localStorage.getItem('cart')) || [];

    // Display cart items
    displayCartItems(cartItems);

    // Checkout button click event
    $('#checkout-btn').click(function() {
        // Simulate checkout process
        // Clear cart
        localStorage.removeItem('cart');
        // Show thank you message
        $('#cart-items').empty();
        $('#thank-you').show();
    });

    // Function to display cart items
    function displayCartItems(cartItems) {
        $('#cart-items').empty();
        if (cartItems.length === 0) {
            $('#cart-items').append('<p style="text-align:center;">No items in cart</p>');
        } else {
            cartItems.forEach(function(item) {
                $('#cart-items').append('<br><p style="text-align:center;">' + item.name + ' <br>Price: &#8377;' + item.price + '</p>');
               
            });
        }
    }
});
