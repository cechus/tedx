<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Post</title>
</head>
<body>
	<form method="post" action="/post" files="true">
		{{ csrf_field() }}
		<label for="title">Titulo: </label>
		<input type="text" name="title" id="title">
		<label for="description">Descripcion: </label>
		<textarea id="description" name="description"></textarea>
		<select multiple="true" name="tags">
			@foreach($tags as $tag)
				<option value="{{ $tag->id }}">{{ $tag->name }}</option>
			@endforeach
		</select>
		<input type="file" name="image">
		<button type="submit">Crear Post</button>

	</form>
</body>
</html>