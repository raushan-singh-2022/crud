@extends('layouts.app')
@section('main')
    <div class="container">
        <div class="text-right">
            <a href="products/create" class="btn btn-dark mt-2">New product</a>

        </div>
        <table class="table table-hover mt-2">
            <thead>
                <tr>
                    <th>SNo</th>
                    <th>name</th>
                    <th>Price</th>
                    <th>Old_price</th>
                    <th>image</th>
                    <th>Action</th>

                </tr>

            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td><a href="products/{{ $product->id }}/show" class="text-dark">{{ $product->name }}</a></td>
                        <td><a href="products/{{ $product->id }}/show" class="text-dark">{{ $product->price }}</a></td>
                        <td><a href="products/{{ $product->id }}/show"
                                class="text-dark"><del>{{ $product->old_price }}</del></a></td>


                        <td>
                            <img src="products/{{ $product->image }}" class="rounded-circle" width="30"
                                height="30" />
                        </td>
                        <td>
                            <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a>

                            <form action="products/{{ $product->id }}/delete" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>

                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>
        {{ $products->links() }}


    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
@endsection
