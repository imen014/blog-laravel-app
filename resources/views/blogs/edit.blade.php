
<!DOCTYPE html>
<html>
<head>
<title>edit blog </title>
<meta charset="UTF-8" />
</head>
<body>
    <h2>Modifier le blog</h2>

    <form action="{{ route('blogs.update', $blog) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="auteur">auteur :</label>
        <input type="text" name="auteur" value="{{ $blog->auteur }}" required>

        <label for="commentaire">commentaire :</label>
        <textarea name="commentaire">{{ $email->commentaire }}</textarea>

        <label for="email">email :</label>
        <textarea name="email">{{ $blog->email}}</textarea>

        <button type="submit">Mettre à jour</button>
    </form>
    </body>
</html>
