<?php
// Pfad zur Datei
$file_path = 'form_data.txt';

// Überprüfen, ob die Datei existiert, sonst erstellen
if (!file_exists($file_path)) {
    // Datei im Schreibmodus öffnen (erstellt, falls nicht vorhanden)
    $file_handle = fopen($file_path, 'w');

    // Überprüfen, ob das Öffnen der Datei erfolgreich war
    if ($file_handle) {
        // Schreibzugriff wieder schließen
        fclose($file_handle);
    } else {
        // Fehlerbehandlung, wenn das Öffnen der Datei fehlschlägt
        die('Konnte die Datei nicht erstellen.');
    }
}

// Überprüfen, ob das Formular gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Daten aus dem Formular abrufen
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Daten in die Datei schreiben
    $data = "Email: $email\nName: $name\nHandynummer: $phone\nNachricht: $message\n\n";
    file_put_contents($file_path, $data, FILE_APPEND);

    // E-Mail-Nachricht erstellen
    $to = ''; //hier habe ich das Email angegeben
    $subject = 'Neue Kontaktanfrage';
    $body = "Eine neue Kontaktanfrage wurde erhalten:\n\nEmail: $email\nName: $name\nHandynummer: $phone\nNachricht: $message";

    // E-Mail senden
    if (mail($to, $subject, $body)) {
        echo 'Vielen Dank für Ihre Nachricht. Wir werden uns bald bei Ihnen melden.';
    } else {
        echo 'Beim Senden der Nachricht ist ein Fehler aufgetreten. Bitte versuchen Sie es später erneut.';
    }
}
?>
