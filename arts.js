$(document).ready(function() {
    // Add to cart button click event
    $('.add-to-cart').click(function() {
        var itemId = $(this).data('id');
        var itemName = $(this).data('name');
        var itemPrice = $(this).data('price');

        // Retrieve cart items from localStorage
        var cartItems = JSON.parse(localStorage.getItem('cart')) || [];

        // Add new item to cart
        cartItems.push({
            id: itemId,
            name: itemName,
            price: itemPrice
        });

        // Save updated cart items to localStorage
        localStorage.setItem('cart', JSON.stringify(cartItems));

        // Alert user that item has been added to cart 
        alert('Item added to cart!');

        // Optionally, redirect to cart page
        window.location.href = 'cart.php';
    });
});
