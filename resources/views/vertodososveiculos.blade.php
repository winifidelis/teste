@extends(layout())

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Todos os veiculos</div>

                <div class="card-body">
                    <div class="form-group row">

                        <label for="modelo" class="col-sm-4 col-form-label text-md-center"><b>Proprietário</b></label>
                        <label for="modelo" class="col-sm-4 col-form-label text-md-center"><b>Veículo</b></label>
                        <label for="modelo" class="col-sm-4 col-form-label text-md-center"></label>
                        @foreach($veiculos as $v)
                        <label for="modelo" class="col-sm-4 col-form-label text-md-center">{{$v->user->name}}</label>
                        <label for="modelo" class="col-sm-4 col-form-label text-md-center">{{$v->modelo}}</label>
                        <label for="modelo" class="col-sm-4 col-form-label text-md-center">
                            <a href="{{ route('admin.editarveiculos',['id_veiculo'=>$v->id]) }}"><button class="btn btn-primary btn-labeled">Editar</button></a>
                            <a href="{{ route('admin.excluirveiculos',['id_veiculo'=>$v->id]) }}"><button class="btn btn-danger btn-labeled">Excluir</button></a>
                        </label>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
