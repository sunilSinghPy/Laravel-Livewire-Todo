@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="text-white d-flex justify-content-between card-header bg-info text-uppercase text-bold">
                        add work hehe
                        <a href="{{ route('todos.index') }}" style="text-decoration:none;">
                            <span class="px-2 fa fa-arrow-left bg-light">Back</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <x-alert />
                        <form action="{{ route('todos.update', $todo) }}" method="post">
                            @method('PUT')
                            @csrf
                            <input class="form-control" value="{{ $todo->title }}" type="text" name="title">
                            <textarea class="mt-2 form-control" name="body">{{ $todo->body }}</textarea>
                            @livewire('todo-edit-step',['todo'=>$todo])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
