@extends('admin.main')

@section('page-title')
Editar Parceiro
@endsection

@section('page-caminho')
Parceiros
@endsection

@section('script-bottom')
<link href="{{ asset('template/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
<div class="col-12">
  <div class="card-box">
    {{ Form::model($parceiro, ['route' => ['parceiro.update', $parceiro->id], 'method' => 'PUT', 'files' => true]) }}

          <div class="modal fade" id="modal-default">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-12">
                          <img src="{{ asset('uploads/parceiro/'. $parceiro->imgprod1) }}" style="width: 50%">
                        </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal fade" id="modal-default2">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                      </div>

                  </div>
              </div>
          </div>
          <div class="row">

            <div class="form-group col-md-12">
              {{ Form::label('nome', 'Nome') }}
              {{ Form::text('nome', $parceiro->nome, array('class' => 'form-control','maxlength' => '200')) }}
            </div>

          </div>

          <div class="row">
            <div class="form-group col-md-5">
              {!! Form::label('imagem', 'Enviar Imagem') !!}
              <input type="file" name="imagem" class="filestyle" data-placeholder="{!! $parceiro->imagem !!}" data-btnClass="btn-light">
            </div>
            <div class="form-group col-md-7">
              @if($parceiro->imagem)
              <h6>Imagem Parceiro</h6>
              <img src="{{ asset('uploads/parceiro/'. $parceiro->imagem) }}" style="width: 30%">
              @endif
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              {{ Form::label('site', 'Site') }}
              {{ Form::text('site', $parceiro->site, array('class' => 'form-control','maxlength' => '255')) }}
            </div>

          </div>


          <div class="row" style="margin-top: 20px">
            <div class="form-group col-12">
              <div class="text-center">
                <button class="btn btn-success" type="submit" value="Salvar"><i class="fa fa-save m-r-5"></i> Atualizar</button>
                <a href="{{ route('parceiro.index') }}" class="btn btn-danger"><i class="fa fa-window-close m-r-5"></i> Cancelar</a>
              </div>
            </div>
          </div>
    {{ Form::close() }}
  </div>
</div>

@endsection

@section('scripts')

<script src="{{ asset('template/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('template/js/autosize.js') }}" type="text/javascript"></script>
<script>
$(document).ready(function() {
  $('.js-example-basic-multiple').select2();
});
	autosize(document.querySelectorAll('textarea'));
</script>
@endsection
