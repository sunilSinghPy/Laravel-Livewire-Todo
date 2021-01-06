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
                    <x-alert />
                    @livewire('todo-step', ['todo' => $todo])

                </div>
            </div>
        </div>
    </div>
@endsection
