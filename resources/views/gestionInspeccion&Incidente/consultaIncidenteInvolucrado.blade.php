@extends('adminlte::page')
@section('tituloform', 'Seguimiento consultado')
@section('content')
 <!-- Fonts -->
 <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    @if (session('success'))
        <div id="successMessage" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Agrega esto en tu vista para mostrar los resultados -->
    @if (isset($incidenteInvolucrados) && is_array($incidenteInvolucrados))
        <h2>Resultados de la Consulta</h2>
        <ul>
            @foreach ($incidenteInvolucrados as $incidenteInvolucrado)
                <li>
                    - Proyecto: {{$incidenteInvolucrado->Proyecto}}
                    - Incidente: {{ $incidenteInvolucrado->Incidente }}
                    - Involucrado: {{ $incidenteInvolucrado->Involucrado }}
                    - Justificacion sobre que le paso al involucrado: {{ $incidenteInvolucrado->Justificacion }}
                    - Fecha y hora del incidente: {{ $incidenteInvolucrado->{"Fecha y hora del incidente"} }}
                </li>
            @endforeach
        </ul>
    @endif
@endsection
@section('js')
    <!-- Agrega tus scripts personalizados aquí -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
@stop
