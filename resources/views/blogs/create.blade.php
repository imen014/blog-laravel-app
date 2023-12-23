
<!DOCTYPE html>
<html>
<head>
<title>form.php</title>
<meta charset="UTF-8" />
</head>
<body>
    <h2>Créer une Tâche</h2>

    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf

        <label for="auteur">auteur :</label>
        <input type="text" name="auteur" required>

        <label for="commentairecommentaire">commentaire :</label>
        <textarea name="commentaire" required></textarea>

        <label for="email">email :</label>
        <input type="text" name="email" required>

        <button type="submit">Enregistrer</button>
    </form>
    
</body>
</html>