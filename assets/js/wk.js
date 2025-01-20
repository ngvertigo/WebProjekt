// Warenkorb-Daten aus localStorage laden
function loadCart() {
    const cart = localStorage.getItem('cart');
    return cart ? JSON.parse(cart) : [];
}

// Warenkorb-Daten speichern
function saveCart(cart) {
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Update the quantity of an item in the cart
function updateCartItemQuantity(itemId, newQuantity) {
    const cart = loadCart();
    const item = cart.find(product => product.id === itemId);
    if (item) {
        item.quantity = newQuantity > 0 ? newQuantity : 1; // Ensure quantity is at least 1
        saveCart(cart);
        displayCart();
    }
}

// Remove an item from the cart
function removeFromCart(itemId) {
    let cart = loadCart();
    cart = cart.filter(product => product.id !== itemId);
    saveCart(cart);
    displayCart();
}

// Artikel in den Warenkorb hinzufügen
function addToCart(itemId, name, price) {
    const cart = loadCart();
    const existingItem = cart.find(item => item.id === itemId);

    if (existingItem) {
        // Menge erhöhen, wenn Artikel bereits im Warenkorb ist
        existingItem.quantity += 1;
    } else {
        // Neuen Artikel hinzufügen
        cart.push({
            id: itemId,
            name: name,
            price: parseFloat(price),
            quantity: 1
        });
    }

    saveCart(cart);
    alert(`${name} wurde zum Warenkorb hinzugefügt!`);
}

// Warenkorb anzeigen
function displayCart() {
    const cart = loadCart();
    const cartContainer = document.getElementById('cart-items');
    const subtotalElement = document.getElementById('subtotal');
    let subtotal = 0;

    cartContainer.innerHTML = '';
    cart.forEach(item => {
        const itemTotal = item.price * item.quantity;
        subtotal += itemTotal;

        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.name}</td>
            <td><input type="number" min="1" value="${item.quantity}" data-id="${item.id}" class="quantity-input"></td>
            <td>${item.price.toFixed(2)} €</td>
            <td>${itemTotal.toFixed(2)} €</td>
            <td><button data-id="${item.id}" class="remove-button">Entfernen</button></td>
        `;
        cartContainer.appendChild(row);
    });

    if (cart.length === 0) {
        cartContainer.innerHTML = '<tr><td colspan="5">Der Warenkorb ist leer.</td></tr>';
    }

    subtotalElement.textContent = `${subtotal.toFixed(2)} €`;
}

document.addEventListener('DOMContentLoaded', () => {
    // Check if the current page contains the cart-items element
    const cartContainer = document.getElementById('cart-items');
    if (cartContainer) {
        // If the element exists, display the cart
        displayCart();

        // Event listener for quantity changes
        cartContainer.addEventListener('input', (event) => {
            if (event.target.classList.contains('quantity-input')) {
                const itemId = event.target.getAttribute('data-id');
                const newQuantity = parseInt(event.target.value, 10);
                updateCartItemQuantity(itemId, newQuantity);
            }
        });

        // Event listener for item removal
        cartContainer.addEventListener('click', (event) => {
            if (event.target.classList.contains('remove-button')) {
                const itemId = event.target.getAttribute('data-id');
                removeFromCart(itemId);
            }
        });
    }

    // Existing code for handling add-to-cart buttons
    const productContainer = document.getElementById('products-list-section');
    if (productContainer) {
        productContainer.addEventListener('click', (event) => {
            if (event.target.classList.contains('add-to-cart-button')) {
                const button = event.target;
                const itemId = button.getAttribute('data-id');
                const name = button.getAttribute('data-name');
                const price = parseFloat(button.getAttribute('data-price'));

                addToCart(itemId, name, price);
            }
        });
    }
});

