<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-EXAMPLEHASH=" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Stil für das Kontaktformular */
        #contact-form {
            margin-top: 50px;
        }

        #contact-form label {
            font-weight: bold;
        }

        #contact-form textarea {
            resize: vertical;
        }
    </style>
</head>
<body>
    <!-- Hier wird das Menü von JavaScript hinzugefügt -->
    <header>
        <script src="menu.js"></script>
    </header>

    <!-- Bootstrap Container für zentriertes Layout -->
    <div class="container">
        <!-- Banner -->
        <div class="banner">
            <img src="assets/banner/kinder-banner.jpg" alt="Kinder Banner">
        </div>

        <h1 class="text-center">Kinderkollektion</h1>

        <!-- Kontaktformular -->
        <div id="contact-form">
            <h2 class="text-center">Kontaktiere uns</h2>
            <form action="kontaktformular.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">E-Mailadresse<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="handynummer" class="form-label">Handynummer</label>
                    <input type="tel" class="form-control" id="handynummer" name="handynummer">
                </div>
                <div class="mb-3">
                    <label for="nachricht" class="form-label">Nachricht (mindestens 10 Wörter, maximal 500 Wörter)<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="nachricht" name="nachricht" rows="5" minlength="10" maxlength="500" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Senden</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
