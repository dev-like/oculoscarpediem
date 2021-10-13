@extends('admin.main')

@section('page-caminho')
Linhas
@endsection
@section('page-title')
Editar Linha
@endsection


@section('content')
<div class="col-12">
  <div class="card-box">
    {{ Form::model($linha, ['route' => ['linha.update', $linha->id], 'method' => 'PUT', 'files' => true]) }}
        <div class="row">
          <div class="form-group col-md-12">
              {{ Form::label('nome', 'Nome') }}
              {{ Form::text('nome', null, array('class' => 'nome form-control','maxlength' => '255','required')) }}
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            {{ Form::label('imagem', 'Capa') }}
            {!! Form::file('imagem', null,array('class' => 'form-control',  'data-placeholder'=>'imagem', 'data-btnClass'=>'btn-light' )) !!}
          </div>

        </div>
        <div class="row">
          <div class="form-group col-md-12">
              {{ Form::label('descricao', 'Descrição') }}
              {!! Form::text('descricao', null, array('class' => 'nome form-control')) !!}
          </div>
        </div>

        <div class="row" style="margin-top: 20px">
          <div class="form-group col-12">
            <div class="text-center">
              <button class="btn btn-success" type="submit" value="Salvar"><i class="fa fa-save m-r-5"></i> Salvar</button>
              <a href="{{ route('linha.index') }}" class="btn btn-danger"><i class="fa fa-window-close m-r-5"></i> Cancelar</a>
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
<script src="{{ asset('template/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/plugins/tinymce/tinymce.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function(){
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;


      $('#add').click(function(){
           i++;
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
      });


      $(document).on('click', '.btn_remove', function(){
           var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
      });


      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      $('#submit').click(function(){
           $.ajax({
                url:postURL,
                method:"POST",
                data:$('#add_name').serialize(),
                type:'json',
                success:function(data)
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }
           });
      });


      function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });
      }
    });
</script>
<script>
var editor_config = {
  path_absolute : "/",
  selector: "textarea",
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
