@extends(layout())

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Todos os veiculos</div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="modelo" class="col-sm-3 col-form-label text-md-center"><b>Modelo</b></label>
                        <label for="modelo" class="col-sm-2 col-form-label text-md-center"><b>Placa</b></label>
                        <label for="modelo" class="col-sm-2 col-form-label text-md-center"><b>Marca</b></label>
                        <label for="modelo" class="col-sm-2 col-form-label text-md-center"><b>Ano</b></label>
                        <label for="modelo" class="col-sm-3 col-form-label text-md-center"><b>Renavam</b></label>
                        @foreach($veiculos as $v)
                        <label for="modelo" class="col-sm-3 col-form-label text-md-center">{{$v->modelo}}</label>
                        <label for="modelo" class="col-sm-2 col-form-label text-md-center">{{$v->placa}}</label>
                        <label for="modelo" class="col-sm-2 col-form-label text-md-center">{{$v->marca}}</label>
                        <label for="modelo" class="col-sm-2 col-form-label text-md-center">{{$v->ano}}</label>
                        <label for="modelo" class="col-sm-3 col-form-label text-md-center">{{$v->renavam}}</label>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
