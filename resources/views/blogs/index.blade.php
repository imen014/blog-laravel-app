<!DOCTYPE html>
<html>
<head>
<title>form.php</title>
<meta charset="UTF-8" />
</head>
<body>
<ul>
@foreach($blogs as $blog)

<li> {{ $blog  }} - <a href="{{ route('blogs.edit', $blog )}}">Modifier</a>  | <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $blog->id }}').submit();">Supprimer</a> 
<form id="delete-form-{{ $blog->id }}" action="{{ route('blogs.destroy', $blog) }}" method="POST" style="display: none;">
@csrf
@method('DELETE')
</form>
</li>

@endforeach


</body>
</html>



      
           
       
    