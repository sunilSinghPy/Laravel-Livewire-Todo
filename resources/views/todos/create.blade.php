@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-create-task />

                <x-alert />
                <div class="text-white d-flex justify-content-between card-header bg-info text-uppercase text-bold">
                    todo list:-
                    <a href="{{ route('todos.index') }}" style="text-decoration:none;">
                        <span class="px-2 fa fa-arrow-left bg-light">Back</span>
                    </a>

                </div>
                @include('layouts.todos')
            </div>
        </div>
    </div>
@endsection
