<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Ingreso de Productos') }}</div>
                <div class="card-body">
                    <form method = "post" action = "{{ route('store')}}">
                        @csrf
                        @include('productos.formprods')
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>