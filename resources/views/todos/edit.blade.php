@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-info text-white text-uppercase text-bold">Add work here</div>

                    <div class="card-body">
                        <form action="/todos/{{$todo->id}}" method="post">
                            @method('PUT')
                            @csrf
                            <input class="form-control" value="{{$todo->title}}" type="text" name="title">
                            <input type="submit" class="form-control bg-primary text-white" name="submit"
                                style="margin-top:20px">
                        </form>
                        <x-alert />
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
