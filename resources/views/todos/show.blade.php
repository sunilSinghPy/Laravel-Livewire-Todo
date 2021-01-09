@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div
                        class="text-white d-flex justify-content-between card-header bg-primary text-uppercase font-weight-bold">
                        Task Details:
                        <a href="{{ route('todos.index') }}" style="text-decoration:none;">
                            <span class="px-2 fa fa-arrow-left bg-light">Back</span>
                        </a>
                    </div>
                    <div class="card-body">

                        <h3 class="text-gray ">
                            <i class="text-white badge badge-info text-uppercase">Task Name:</i>
                            {{ $todo->title }}
                        </h3>
                        <h3 class="text-gray ">
                            <i class="text-white badge badge-info text-uppercase">Description:</i>
                            {{ $todo->body }}
                        </h3>
                        <h3 class="px-1 text-white bg-primary">Steps To Follow:<h3>
                                @foreach ($todo->step as $step)

                                    <h3 class="text-gray ">
                                        <i class="badge badge-light text-uppercase">Steps {{($loop->index)+1}}:</i>
                                        {{ $step->step_name }}
                                    </h3>
                                @endforeach

                    </div>
                    <x-alert />

                </div>
            </div>
        </div>
    </div>
@endsection
