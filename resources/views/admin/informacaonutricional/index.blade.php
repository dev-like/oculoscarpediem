@extends('admin.main')

@section('page-caminho')
Produtos
@endsection

@section('page-title')
Informações Nutricionais
@endsection

@section('styles')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Sweet Alert css -->
  <link href="{{ asset('template/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="col-12">

  <div class="card-box">
    <a href="{{ route('informacaonutricional.create',$produto) }}" style="margin-bottom: 15px" class="btn btn-info waves-effect waves-light pull-right"><i class="fa fa-plus m-r-5"></i> Adicionar</a>
      <h4 class="m-t-0 header-title">Listagem de Informações Nutricionais</h4>

    <table class="table table-striped">
        <thead>
        <tr>
          <th>Garantias</th>
          <th>p/p (%)</th>
          <th>p/v (g/L)</th>
        </tr>
        </thead>
        <tbody>
          @forelse($informacaonutricional as $informacaonutricional)
            <tr>
                <td>{{ $informacaonutricional -> elemento }}</td>
                <td>{{ $informacaonutricional -> pp }}</td>
                <td>{{ $informacaonutricional -> pv }}</td>
                <td width="10%">

                    <span class="hint--top" aria-label="Editar Infomação Nutricional"><a href="{{ route('informacaonutricional.edit', $informacaonutricional->id) }}" style="border-radius: 50%" class="btn btn-warning waves-effect"> <i class="fa fa-pencil m-r-5"></i></a></span>
                    <span class="hint--top" aria-label="Deletar Informação Nutricional"><button type="button" onclick="goswet({{$informacaonutricional->id}}, '{{$informacaonutricional->nome}}')" style="border-radius: 50%" class="btn btn-danger waves-effect"> <i class="fa fa-trash m-r-5"></i></button></span>
                </td>
            </tr>
          @empty
            <tr>
                <td colspan="5" class="text-center">Nenhum Item cadastrado</td>
            </tr>
          @endforelse
        </tbody>
    </table>


@endsection

@section('scripts')
<script>
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  function goswet(id, elemento){
    swal.setDefaults({
      reverseButtons: true
    })
    swal({
        title: "Deseja excluir "+elemento+"?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Deletar"
    }).then(
      function(){
        $.ajax({
          type: "DELETE",
          url: "{{ url('admin/informacaonutricional') }}/"+id,
          data: {'id': id},
          success: function(data){
            swal({
             title: "Elemento deletado!",
             type: "success",
             timer: 2000,
             showConfirmButton: false
           }).then(
             function () {
             },
             function(){
               window.location = "{{ route('informacaonutricional.index',$produto) }}";
             }
           );
          },
          error: function(xhr,status, data) {
            swal("Não foi possível deletar item");
          }

        });
      }
    );
  }
</script>
@endsection
