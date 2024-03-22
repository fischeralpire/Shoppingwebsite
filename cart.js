// Funktion zum Abrufen von Produkten aus der Datenbank
function fetchCartItemsFromDatabase() {
    fetch('get_cart_items.php') // Ändern Sie den Dateinamen entsprechend Ihrer Implementierung
        .then(response => response.json())
        .then(cartItems => {
            // Hier werden die erhaltenen Produkte im Warenkorb angezeigt
            const cartItemsDiv = document.getElementById('cart-items');
            if (cartItems.length > 0) {
                // Anzahl der Artikel im Warenkorb aktualisieren
                cartItemCount = cartItems.length;

                cartItems.forEach(item => {
                    // Erstelle ein HTML-Element für jeden Artikel und füge es dem DOM hinzu
                    const itemElement = document.createElement('div');
                    itemElement.innerHTML = `
                        <p>${item.name} - ${item.price}</p>
                        <!-- Hier weitere Informationen zum Artikel einfügen -->
                    `;
                    cartItemsDiv.appendChild(itemElement);
                });
            } else {
                // Falls der Warenkorb leer ist
                cartItemsDiv.textContent = 'Der Warenkorb ist leer.';
            }
        })
        .catch(error => console.error('Fehler beim Abrufen der Warenkorbartikel:', error));
}

// Wenn die Seite geladen wird, rufen Sie die Funktion zum Abrufen von Warenkorbartikeln aus der Datenbank auf
window.onload = function () {
    fetchCartItemsFromDatabase();
};
