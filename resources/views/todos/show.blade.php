@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="text-white d-flex justify-content-between card-header bg-info text-uppercase text-bold">
                        {{ $todo->title }}
                        <a href="{{ route('todos.index') }}" style="text-decoration:none;">
                            <span class="px-2 fa fa-arrow-left bg-light">Back</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="p-2 shadow text-bold bg-lite">{{ $todo->body }}</p>
                        <hr/>
                        <h3 class="justify-content-center d-flex">Add step here
                            <a href="#">
                                <i class="px-2 fa fa-plus-circle " style="color:green"></i>
                            </a>
                        </h3>
                        <form action="/todos/{{ $todo->id }}" method="post">
                            @method('PUT')
                            @csrf
                            <input class="form-control" value="{{ $todo->title }}" type="text" name="title">
                            <input type="submit" class="text-white form-control bg-primary" name="submit"
                                style="margin-top:20px">
                        </form>
                        <x-alert />
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
