<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Post</title>
</head>
<body>
	<form method="post" action="/posts" enctype="multipart/form-data">
		{{ csrf_field() }}
		<label for="title">Titulo: </label>
		<input type="text" name="title" id="title">
		<label for="description">Descripción: </label>
		<textarea name="editor1" id="editor1" rows="10" cols="80">
            This is my textarea to be replaced with CKEditor.
        </textarea>
		<!-- <textarea id="description" name="description"></textarea> -->
		<select multiple="true" name="tags">
			@foreach($tags as $tag)
				<option value="{{ $tag->id }}">{{ $tag->name }}</option>
			@endforeach
		</select>
		<input type="file" name="image">
		<button type="submit">Crear Post</button>

	</form>
	<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
</body>
</html>
