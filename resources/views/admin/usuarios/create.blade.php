@extends('admin.main')

@section('page-caminho')
  Usuários
@endsection

@section('page-title')
  Cadastro
@endsection

@section('content')
<div class="col-12">
  <div class="card-box">
    <h4 class="m-t-0 header-title"><b>Cadastro de usuários</b></h4>

        {{ Form::open(['route' => 'usuario.store']) }}
            <div class="row">
                <div class="col-md-6 offset-md-3">
                  {{ Form::label('nome', 'Nome do usuário') }}
                  {{ Form::text('nome', null, array('class' => 'form-control','maxlength' => '255','required')) }}
                </div>
                <div class="col-md-6 offset-md-3">
                  {{ Form::label('email', 'Email do usuário') }}
                  {{ Form::email('email', null, array('class' => 'form-control','maxlength' => '255','required')) }}
                </div>
                <div class="col-md-6 offset-md-3">
                  {{ Form::label('nivel', 'Usuário administrador?') }}
                  <br>
                  <p class="p-v-xs">
                      <input name="nivel" type="radio" value="0" id="op1" checked  />
                      <label for="op1">Não</label>
                      <input name="nivel" type="radio" value="1" id="op2" />
                      <label for="op2">Sim</label>
                  </p>
                </div>
                <div class="col-md-6 offset-md-3">
                  {{ Form::label('password', 'Senha') }}
                  {{ Form::password('password', array('class' => 'form-control','maxlength' => '255','required')) }}
                </div>
                <div class="col-md-6 offset-md-3">
                  {{ Form::label('password_confirmation', 'Confirmar senha:') }}
                  {{ Form::password('password_confirmation', array('class' => 'form-control','maxlength' => '255','required')) }}
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
              <div class="form-group col-12">
                <div class="text-center">
                  <button class="btn btn-success" type="submit" value="Salvar"><i class="fa fa-save m-r-5"></i> Salvar</button>
                  <a href="{{ route('usuario.index') }}" class="btn btn-danger"><i class="fa fa-window-close m-r-5"></i> Cancelar</a>
                </div>
              </div>
            </div>
        {{ Form::close() }}

  </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('template/js/pages/form_elements.js') }}"></script>
@endsection
