<div id="addNewPost" class="container container-manager" style="display: none">
    <form class="needs-validation" action="{{route("sendPost")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="text-center">
            <button type="button" class="btn btn-back" onclick="back()">Voltar</button>
        </div>
        <h1 style="text-align: center">Nova públicação</h1>
        <hr style="width: 100%">
        <div class="form-row">
            <div class="col-8">
                <label for="validationCustom01">Titulo</label>
                <input name="title" type="text" class="custom-form form-control" id="validationCustom01" placeholder="Titulo" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-4">
                <label for="validationCustom01">Autor</label>
                <input name="author" type="text" class="custom-form form-control" id="validationCustom01" placeholder="Autor" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-4">
                <label for="exampleFormControlFile1">Imagem</label>
                <input type="file" name="image">
            </div>
            <div class="col-8">
                <label for="validationCustom01">Tags</label>
                <input name="tags" type="text" class=" custom-form form-control" id="validationCustom01" placeholder="Tags" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Postagem</label>
                <textarea name="text" class="custom-form form-control" id="exampleFormControlTextarea1" rows="10" cols="100"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-Post" style="float: right">Publicar</button>
    </form>
</div>
