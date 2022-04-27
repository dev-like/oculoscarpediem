@extends('admin.main')

@section('page-caminho')
Quem Somos
@endsection

@section('page-title')
Cadastro
@endsection

@section('script-bottom')
<link href="{{ asset('template/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('template/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="col-12">
  <div class="card-box">

      @if(!isset($quemsomos->id))
        <p id="req-cad">
          As informações da empresa ainda não foram cadastradas,
          <a id="cad" class="text-success" href="#">Clique aqui para Realizar Cadastro</a>
        </p>
        <div id="form-cad" class="col-sm-12 col-xs-12" style="display:none">
          {{ Form::open(['route' => 'quemsomos.store', 'enctype'=>'multipart/form-data']) }}
      @else
          <div id="form-cad" class="col-sm-12 col-xs-12">
          {{ Form::model($quemsomos, ['route' => ['quemsomos.update', $quemsomos->id], 'enctype'=>'multipart/form-data','method' => 'PUT']) }}
      @endif

      <div class="row">
        <div class="form-group col-md-3">
          {{ Form::label('razaosocial', 'Razão Social') }}
          {{ Form::text('razaosocial', null, array('class' => 'form-control','maxlength' => '255')) }}
        </div>
        <div class="form-group col-md-3">
          {{ Form::label('nomefantasia', 'Nome Fantasia') }}
          {{ Form::text('nomefantasia', null, array('class' => 'form-control','maxlength' => '255','required')) }}
        </div>
        <div class="form-group col-md-3">
          {{ Form::label('cnpj', 'CNPJ') }}
          {{ Form::text('cnpj', null, array('class'=>'cnpj form-control', 'onfocusout' => 'buscarCNPJ()', 'autofocus','maxlength' => '23')) }}
        </div>
        <div class="form-group col-md-3">
          {{ Form::label('ie', 'Inscrição Estadual') }}
          {{ Form::text('ie', null, array('class' => 'form-control','maxlength' => '45')) }}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-3">
          {{ Form::label('email', 'E-mail') }}
          {{ Form::email('email', null, array('class' => 'form-control','maxlength' => '255','required')) }}
        </div>
        <div class="form-group col-md-3">
          {{ Form::label('telefone1', 'Telefone') }}
          {{ Form::text('telefone1', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group col-md-3">
          {{ Form::label('telefone2', 'Telefone 2') }}
          {{ Form::text('telefone2', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group col-md-3">
          {{ Form::label('facebook', 'Facebook') }}
          {{ Form::url('facebook', null, array('class' => 'form-control','maxlength' => '255')) }}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-3">
          {{ Form::label('instagram', 'Instagram') }}
          {{ Form::url('instagram', null, array('class' => 'form-control','maxlength' => '255')) }}
        </div>
        <div class="form-group col-md-3">
          {{ Form::label('linkedin', 'LinkedIn') }}
          {{ Form::url('linkedin', null, array('class' => 'form-control','maxlength' => '255')) }}
        </div>
        <div class="form-group col-md-6">
          {{ Form::label('youtube', 'YouTube') }}
          {{ Form::text('youtube', null, array('class' => 'form-control')) }}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6" style="margin-top: 20px">
          {!! Form::label('missao', 'Missão') !!}
          {!! Form::textarea('missao', null, array('class' => 'form-control','maxlength' => '2500','rows'=>'8')) !!}
        </div>
        <div class="form-group col-md-6" style="margin-top: 20px">
          {!! Form::label('visao', 'Visão') !!}
          {!! Form::textarea('visao', null, array('class' => 'form-control','maxlength' => '2500')) !!}
        </div>
        
    </div>
    <div class="row">
        <div class="form-group col-md-12" style="margin-top: 20px">
          {!! Form::label('valores', 'Valores') !!}
          {!! Form::textarea('valores', null, array('class' => 'form-control','maxlength' => '2500')) !!}
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-12" style="margin-top: 20px">
        {!! Form::label('end1', 'Endereço Imperatriz') !!}
        {!! Form::url('end1', null, array('class' => 'form-control','maxlength' => '2500','rows'=>'8')) !!}
      </div>

  </div>
    <div class="row">
      @if($quemsomos->imagem1)
      <div class="form-group col-md-3">
      <img src="{{ asset('uploads/quemsomos/'. $quemsomos->imagem1) }}" class="form-control banner" style="height:auto">
      </div>
      @endif
      <div class="form-group col-md-6">
        {{ Form::label('imagem1','Imagem') }}
        <input type="file" name="imagem1" id="imagem1" class="filestyle" data-buttonText="Carregar" data-placeholder="{!!$quemsomos->imagem1!!}" data-btnClass="btn-light" >
      </div>
      @if($quemsomos->imagem2)
      <div class="form-group col-md-3">
      <img src="{{ asset('uploads/quemsomos/'. $quemsomos->imagem2) }}" class="form-control banner" style="height:auto">
      </div>
      @endif
      <div class="form-group col-md-6">
        {{ Form::label('imagem2','Imagem') }}
        <input type="file" name="imagem2" id="imagem2" class="filestyle" data-buttonText="Carregar" data-placeholder="{!!$quemsomos->imagem2!!}" data-btnClass="btn-light" >
      </div>
    </div>


      <div class="row">
        <div class="form-group col-md-12" style="margin-top: 20px">
          {!! Form::label('quemsomos', 'Quem Somos') !!}
          {!! Form::textarea('quemsomos', null, array('class' => 'form-control')) !!}
        </div>
      </div>


      <div class="row" style="margin-top: 20px">
        <div class="col-12">
          <div class="text-center">
            <button class="btn btn-success" type="submit" value="Salvar"><i class="fa fa-save m-r-5"></i> Salvar</button>
            <a href="{{ route('quemsomos.index') }}" class="btn btn-danger"><i class="dripicons-cross"></i> Cancelar</a>
          </div>
        </div>
      </div>

  </div>
</div>

    {{ Form::close() }}
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('template/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('template/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('template/js/pages/form_elements.js') }}"></script>
<script src="{{ asset('template/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/plugins/tinymce/tinymce.min.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function() {

      $('.js-example-basic-single').select2();
      $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
      $('.cpf').mask('000.000.000-00', {reverse: true});
      $('.cep').mask('00000-000');
    })

  function buscarCNPJ() {
      var url = "https://www.receitaws.com.br/v1/cnpj/"+$('.cnpj').cleanVal(); // the script where you handle the form input.

      $.ajax({
             type: "POST",
             dataType: 'jsonp',
             url: url,
             data: $("#idForm").serialize(), // serializes the form's elements.
             success: function(data)
             {
                 console.log(data); // show response from the php script.
                 document.getElementById("cnpj").value = data.cnpj;
                 document.getElementById("razaosocial").value = data.nome;
                 document.getElementById("nomefantasia").value = data.fantasia;
                //  document.getElementById("email").value =  data.email;
                 if ((data.telefone).length > 14){
                   var res = data.telefone.split(" / ");
                   document.getElementById("telefone1").value =  res[0];
                   document.getElementById("telefone2").value =  res[1];

                 }

             }
           });

      return false; // avoid to execute the actual submit of the form.
  }

</script>

<script type="text/javascript">
  $(document).ready(function () {
    $("#cad").click(function(event){
      event.preventDefault();
      $("#req-cad").slideUp();
      $("#form-cad").slideDown();
    });
    $("#can-cad").click(function(event){
      if($("#cad").length > 0) {
      event.preventDefault();
      $("#form-cad").slideUp();
      $("#req-cad").slideDown();
      }
    });
  });
</script>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea#quemsomos",
    height:350,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

    tinymce.init(editor_config);
  </script>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea#valores",
    height:350,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

    tinymce.init(editor_config);
  </script>
@endsection
