@extends('layout.site')

@section('titulo','Cursos')


@section('conteudo')
<div class="container">
  <h3>Editando curso</h3>

  <div class="row">
    <form action="{{ route('admin.cursos.atualizar',$registro->id)}}" method="post" enctype="multpart/form-data">
    {{ csrf_field() }}
    @include('admin.cursos._form')
    <input type="hidden" name="_method" value="put">
    <button class="btn deep-orange">Atualizar</button>
    </form>
  </div>
  
  </div>

@endsection
