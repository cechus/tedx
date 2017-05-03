{{ csrf_field() }}
<div class="box-body">
    <div class="form-group">
        <label class="col-sm-2 control-label">Título</label>
        <div class="col-sm-10">
            <input name="title" type="text" class="form-control" id="titulo">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Imagen de encabezado</label>
        <div class="col-sm-10">
            <input name="image" type="file" id="image">
        </div>
    </div>
    <div class="form-group">
        <label for="descripcion" class="col-sm-2 control-label">Contenido</label>
        <div class="col-sm-10">
            <textarea name="description" rows="10" class="form-control" id="content" placeholder="Password"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
            <label>
                <input name="posted" type="checkbox"> Publicar
            </label>
            </div>
        </div>
    </div>
</div>
