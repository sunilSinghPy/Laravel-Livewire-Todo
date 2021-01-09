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
                            <p class="p-2 m-2 text-white bg-primary font-weight-bolder">Steps:</p>
                            @foreach($todo->step as $step)
                            <input type="text" class="form-control" name="step[]" value="{{$step->step_name}}">
                            @endforeach
                            <input type="submit" class="text-white form-control bg-primary" name="submit"
                                style="margin-top:20px">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
