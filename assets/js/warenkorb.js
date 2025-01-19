        document.addEventListener('DOMContentLoaded', () => {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartItemsContainer = document.getElementById('cart-items');
            const subtotalElement = document.getElementById('subtotal');

            function updateCart() {
                cartItemsContainer.innerHTML = '';
                let subtotal = 0;

                cart.forEach(item => {
                    const total = item.quantity * item.price;
                    subtotal += total;

                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${item.name}</td>
                        <td><input type="number" min="1" value="${item.quantity}" data-id="${item.id}" class="quantity-input"></td>
                        <td>${item.price.toFixed(2)} €</td>
                        <td>${total.toFixed(2)} €</td>
                        <td><button data-id="${item.id}" class="remove-button">Entfernen</button></td>
                    `;
                    cartItemsContainer.appendChild(row);
                });

                subtotalElement.textContent = `${subtotal.toFixed(2)} €`;
            }

            document.addEventListener('click', (e) => {
                if (e.target.classList.contains('remove-button')) {
                    const itemId = e.target.dataset.id;
                    const index = cart.findIndex(item => item.id === itemId);
                    if (index > -1) {
                        cart.splice(index, 1);
                        localStorage.setItem('cart', JSON.stringify(cart));
                        updateCart();
                    }
                }
            });

            document.addEventListener('input', (e) => {
                if (e.target.classList.contains('quantity-input')) {
                    const itemId = e.target.dataset.id;
                    const item = cart.find(item => item.id === itemId);
                    if (item) {
                        item.quantity = Math.max(1, parseInt(e.target.value, 10));
                        localStorage.setItem('cart', JSON.stringify(cart));
                        updateCart();
                    }
                }
            });

            updateCart();
        });

