@extends('adminlte::page')

@section('title', 'Editar Página')

@section('content_header')
	<h1>Editar Página</h1>
@endsection

@section('content')
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Atenção!</h4>
            <h5>&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;:&nbsp;&nbsp;Ocorreu(ram) erro(s):</h5>
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header" style="font-size: 22px; font-weight: 400000;">
          &nbsp;:&nbsp;:&nbsp;Cadastrar
        </div>
        <div class="card-body">
            <form action={{ route('pages.update', ['page'=>$page->id]) }} class="form-horizontal" method="POST">
                @method('PUT')
                @csrf

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Título</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Informe o título da página" value="{{$page->title}}" >
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Corpo</label>

                  <div class="col-sm-10">
                      <textarea name="body" class="form-control bodyfield">{{$page->body}}</textarea>
                  </div>
                </div>


                <div class="form-group row">
                  <span class="col-sm-2 col-form-label"></span>

                  <span class="col-sm-10">
                    <button type="submit" class="btn btn-flat margin btn-success btn-normal" >Salvar</button>
                    <a href="{{ route('pages.index') }}" class="btn btn-flat margin btn-default btn-normal style="width: 250px;">Fechar</button>
                  </div>
                </div>
              </form>
        </div>
    </div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
<script>

tinymce.init({
    selector:'textarea.bodyfield',
    height:300,
    menubar: false,
    plugins:['link', 'table', 'image', 'autoresize', 'lists'],
    toolbar:'undo redo | formatselect | bold italic backcolor | aligncenter aligncenter alignright alignjustify | table | link image | bullist numlist ',
    content_css:[
        '{{asset('assets/css/content.css')}}'
    ],
    images_upload_url:'{{route('imageupload')}}',
    images_upload_credentials:true,
    convert_urls:false
});

</script>

@endsection
