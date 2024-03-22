<?php
// Verbindung zur Datenbank herstellen
include_once 'database.php';

// Session starten
session_start();

// Hier sollten Sie überprüfen, ob ein POST-Request gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Überprüfen, ob ein Benutzer angemeldet ist und eine gültige Benutzer-ID in der Session hat
    if (isset($_SESSION['user_id'])) {
        // Benutzer ist angemeldet, die Benutzer-ID aus der Session lesen
        $user_id = $_SESSION['user_id'];
        
        // Produkt-ID und andere relevante Daten vom POST-Request lesen
        $product_id = $_POST['product_id']; // Sie müssen den Namen des POST-Parameters anpassen, je nachdem wie er in Ihrem HTML-Formular definiert ist
        
        // Das Produkt zum Warenkorb des Benutzers hinzufügen
        $query = "INSERT INTO order_items (order_id, product_id, quantity, price) 
                  VALUES (NULL, '$product_id', 1, (SELECT price FROM products WHERE id = '$product_id'))";
        
        if ($conn->query($query) === TRUE) {
            echo "Produkt erfolgreich zum Warenkorb hinzugefügt.";
        } else {
            echo "Fehler beim Hinzufügen des Produkts zum Warenkorb: " . $conn->error;
        }
    } else {
        // Benutzer ist nicht angemeldet oder keine gültige Benutzer-ID in der Session
        // Hier können Sie entsprechend reagieren, z. B. eine Fehlermeldung anzeigen
        echo "Fehler: Benutzer nicht angemeldet.";
    }
}
?>
