<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste Produits API</title>
</head>
<body>

<h1>Liste des Produits via API</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix</th>
    </tr>

    @foreach($produits as $produit)
    <tr>
        <td>{{ $produit['id'] }}</td>
        <td>{{ $produit['name'] }}</td>
        <td>{{ $produit['description'] }}</td>
        <td>{{ $produit['price'] }} €</td>
    </tr>
    @endforeach
</table>

</body>
</html>
