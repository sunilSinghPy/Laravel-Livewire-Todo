@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="text-white card-header bg-info text-uppercase text-bold">Add work here</div>

                    <div class="card-body">
                        <form action="/todos/{{$todo->id}}" method="post">
                            @method('PUT')
                            @csrf
                            <input class="form-control" value="{{$todo->title}}" type="text" name="title">
                            <textarea class="mt-2 form-control"  value="{{$todo->body}}" name="body" >Enter despription</textarea>
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
