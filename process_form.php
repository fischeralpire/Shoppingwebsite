<?php
// Überprüfen, ob das Formular gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Überprüfen, ob die erforderlichen Felder gesetzt sind
    if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['message'])) {
        // Formulardaten speichern
        $email = $_POST['email'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        // Speichern der Formulardaten in einer Datei
        $file = 'form_data.txt';
        $current_data = file_get_contents($file);
        $current_data .= "Name: $name\n";
        $current_data .= "E-Mail: $email\n";
        $current_data .= "Handynummer: $phone\n";
        $current_data .= "Nachricht: $message\n";
        $current_data .= "----------------------------------------\n";
        file_put_contents($file, $current_data);

        // Optional: Umleitung auf eine Dankesseite
        header('Location: thank_you.html');
        exit;
    } else {
        // Wenn erforderliche Felder nicht gesetzt sind, weiterleiten auf die Startseite oder eine Fehlerseite
        header('Location: index.html');
        exit;
    }
} else {
    // Wenn das Formular nicht gesendet wurde, weiterleiten auf die Startseite oder eine Fehlerseite
    header('Location: index.html');
    exit;
}
?>
