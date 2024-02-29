<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation de l'API</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Documentation de l'API</h1>
        <p>Voici les différentes routes disponibles avec leurs utilisations :</p>
        <ul>
            <li><strong>GET /api/boxs</strong>: Récupère toutes les boîtes.</li>
            <li><strong>GET /api/box</strong>: Récupère une boîte spécifique.</li>
            <li><strong>DELETE /api/box</strong>: Supprime une boîte spécifique.</li>
            <li><strong>POST /api/box</strong>: Crée une nouvelle boîte.</li>
            <li><strong>PUT /api/box</strong>: Met à jour une boîte existante.</li>
        </ul>
        <h2>Champs attendus pour POST et PUT</h2>
        <p>Pour les méthodes POST et PUT, les données doivent être envoyées au format JSON avec les champs suivants :</p>
        <ul>
            <li><strong>name</strong>: Nom de la boîte.</li>
            <li><strong>image</strong>: URL de l'image de la boîte.</li>
            <li><strong>price</strong>: Prix de la boîte.</li>
            <li><strong>pieces</strong>: Nombre de pièces dans la boîte.</li>
        </ul>
    </div>

</body>

</html>