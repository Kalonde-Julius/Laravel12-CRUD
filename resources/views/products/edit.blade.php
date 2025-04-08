@extends("layouts.app")

@section('content')

    <div class="card mt-5">

        <div class="card-header pt-3"> <h4>Edit product </h4>

            <div class="card-body">

                <a href="{{ route('products.index') }}" class="btn btn-info btn-sm mb-3"> Product list </a>

                <form action="{{ route('products.update', $product->id) }}" method="POST">

                    @csrf

                    @method('PUT')

                    <div class="form-group mt-2">
                        <label for=""> Name </label>
                        <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $product->name }}">
                        @error("name")
                            <span class="text-danger"> {{ message }} </span>
                        @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label for=""> Detail </label>
                        <textarea name="detail" placeholder="Detail" class="form-control"> {{ $product->detail }} </textarea>
                        @error("detail")
                            <span class="text-danger"> {{ message }} </span>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-success btn-sm" type="submit"> <i class="fa fa-save"> </i>
                            submit 
                        </button>
                    </div>

                </form>
            </div>

        </div>

    </div>
@endsection