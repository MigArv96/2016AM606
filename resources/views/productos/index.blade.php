
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>


    <div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive-md">
        <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>
                    <div class="row justify-content-start">
                        <div class="col-md-auto"><a class="btn btn-primary" href="{{route('create')}}">Agregar Nuevo Producto</a>
                        </div>
                    </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre del Producto</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Costo</th>
                            <th scope="col">Existencia</th>
                            <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php($countrow=1)
                        @foreach($dataproduct as $producto)
                            <tr>
                            <th scope="row">{{$countrow++}}</th>
                            <td>{{ $producto->codprod }}</td>
                            <td>{{ $producto->nombreprod }}</td>
                            <td>{{ $producto->descriprod }}</td>
                            <td>{{ $producto->typprod }}</td>
                            <td>{{ $producto->costunit }}</td>
                            <td>{{ $producto->cantprod }}</td>
                            <td class="d-flex">
                                <a class="btn btn-success btn-sm mx-1" href="{{url('productos/'.$producto->id.'update')}}">Editar</a>

                                <form action="{{ url('productos/'.$producto->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger btn-sm mx-1" type="submit" onclick="return confirm('¿Desea Eliminar este producto?')" value="Eliminar"></input>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


</x-app-layout>