<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de l'envoi</title>
    <link href="Stylereception.css" rel="stylesheet">
</head>
<body>
    <div class="form-container">
        <h1>Votre message a bien été envoyé.
            Merci de nous avoir contacté !
        </h1>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['mail']);
            $message = htmlspecialchars($_POST['msg']);

            
        }
        ?>
    </div>
</body>
</html>
