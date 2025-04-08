@extends("layouts.app")

@section('content')

    <div class="card mt-5">

        <div class="card-header pt-3"> <h4> Show product </h4>

            <div class="card-body">

                <a href="{{ route('products.index') }}" class="btn btn-info btn-sm mb-3"> Product list </a>

                <div class="mt-4">
                    <p> <strong> ID: </strong> {{ $product->id }} </p>
                    <p> <strong> Name: </strong> {{ $product->name }} </p>
                    <p> <strong> Detail: </strong> {{ $product->detail }} </p>
                </div>

            </div>

        </div>

    </div>

@endsection
