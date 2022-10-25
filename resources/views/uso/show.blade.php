@extends('layouts.app')

@section('template_title')
    {{ $uso->name ?? 'Show Uso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Uso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Pase Id:</strong>
                            {{ $uso->pase_id }}
                        </div>
                        <div class="form-group">
                            <strong>Usado:</strong>
                            {{ $uso->usado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
