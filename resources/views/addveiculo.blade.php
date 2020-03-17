@extends(layout())

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar novo veículo</div>
                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.storeveiculo') }}">
                        @csrf
                        <div class="form-group row">

                            <label for="modelo" class="col-sm-6 col-form-label text-md-right">Proprietário</label>
                            <div class="col-md-6">
                                <select class="col-sm-6 col-form-label text-md-right" name="user_id" id="user_id">
                                    @foreach($proprietarios as $p)
                                    <option value="{{$p->id}}">{{$p->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label for="modelo" class="col-sm-6 col-form-label text-md-right">Modelo</label>
                            <div class="col-md-6">
                                <input id="modelo" type="text" name="modelo" value="{{ old('modelo') }}" required autofocus>
                                @if ($errors->has('modelo'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('modelo') }}</strong>
                                </span>
                                @endif
                            </div>

                            <label for="marca" class="col-sm-6 col-form-label text-md-right">Marca</label>
                            <div class="col-md-6">
                                <input id="marca" type="text" name="marca" value="{{ old('marca') }}" required autofocus>
                                @if ($errors->has('marca'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('marca') }}</strong>
                                </span>
                                @endif
                            </div>

                            <label for="placa" class="col-sm-6 col-form-label text-md-right">Placa</label>
                            <div class="col-md-6">
                                <input id="placa" type="text" name="placa" value="{{ old('placa') }}" required autofocus>
                                @if ($errors->has('placa'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('placa') }}</strong>
                                </span>
                                @endif
                            </div>

                            <label for="ano" class="col-sm-6 col-form-label text-md-right">Ano</label>
                            <div class="col-md-6">
                                <input id="ano" type="text" name="ano" value="{{ old('ano') }}" required autofocus>
                                @if ($errors->has('ano'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('ano') }}</strong>
                                </span>
                                @endif
                            </div>

                            <label for="renavam" class="col-sm-6 col-form-label text-md-right">Renavam</label>
                            <div class="col-md-6">
                                <input id="renavam" type="text" name="renavam" value="{{ old('renavam') }}" required autofocus>
                                @if ($errors->has('renavam'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('renavam') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('auth.cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
