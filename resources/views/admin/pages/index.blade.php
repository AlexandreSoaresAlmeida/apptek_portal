@extends('adminlte::page')

@section('title', 'Páginas')

@section('content')

<div class="card">
    <div class="card-header" style="font-size: 27px; font-weight: 400000;">
      &nbsp;:&nbsp;:&nbsp;Minhas Páginas <a href="{{ route('pages.create') }}" class="btn btn-sm btn-success">Nova Página</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
              <tr>
                <th width="50">ID</th>
                <th>Título</th>
                <th width="200">Ações</th>
              </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)
                <tr>
                    <td>{{$page->id}}</td>
                    <td>{{$page->title}}</td>
                    <td>
                        <a href="" target="_blank" class="btn btn-sm btn-success">Ver</a>
                        <a href="{{ route('pages.edit', ['page' => $page->id]) }}" class="btn btn-sm btn-info">Editar</a>
                        <form class="d-inline"
                         method="POST"
                         action="{{ route('pages.destroy', ['page' => $page->id]) }}"
                         onsubmit="return confirm('Tem certeza que deseja excluir?')"
                        >
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="d-flex justify-content-center">
    {{ $pages->links() }}
</div>

@endsection
