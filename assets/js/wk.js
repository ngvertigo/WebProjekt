// Warenkorb-Daten aus localStorage laden
function loadCart() {
    return JSON.parse(localStorage.getItem('cart')) || [];
}

// Warenkorb-Daten speichern
function saveCart(cart) {
    localStorage.setItem('cart', JSON.stringify(cart));
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
            price: price,
            quantity: 1
        });
    }

    saveCart(cart);
    alert(`${name} wurde zum Warenkorb hinzugefügt!`);
}

// Warenkorb anzeigen (optional)
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

	if (!cart.length) {
    document.getElementById('cart-items').innerHTML = '<tr><td colspan="5">Der Warenkorb ist leer.</td></tr>';
}


    subtotalElement.textContent = `${subtotal.toFixed(2)} €`;
}

// Initiales Laden des Warenkorbs
document.addEventListener('DOMContentLoaded', () => {
    displayCart();

    // Event-Listener für Mengenänderung
    document.addEventListener('input', (e) => {
        if (e.target.classList.contains('quantity-input')) {
            const cart = loadCart();
            const itemId = parseInt(e.target.dataset.id);
            const item = cart.find(i => i.id === itemId);
            if (item) {
                item.quantity = Math.max(1, parseInt(e.target.value, 10));
                saveCart(cart);
                displayCart();
            }
        }
    });

    // Event-Listener für Entfernen
    document.addEventListener('click', (e) => {
        if (e.target.classList.contains('remove-button')) {
            const cart = loadCart();
            const itemId = parseInt(e.target.dataset.id);
            const updatedCart = cart.filter(i => i.id !== itemId);
            saveCart(updatedCart);
            displayCart();
        }
    });

    // Event-Listener für alle "add-to-cart-button"  ?? in php??
    document.querySelectorAll('.add-to-cart-button').forEach(button => {
        button.addEventListener('click', () => {
            const itemId = parseInt(button.dataset.id);
            const name = button.dataset.name;
            const price = parseFloat(button.dataset.price);

            // Artikel in den Warenkorb hinzufügen
            addToCart(itemId, name, price);
        });
    });

	window.addEventListener('storage', () => {
		displayCart();
    });
});

