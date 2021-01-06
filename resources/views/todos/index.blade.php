@extends('../layouts.app')

@section('content')




    <div class="container">
        <div class="row justify-content-center">

            <div class="border col-md-8 border-primary ">

                <h3 class="my-4 text-center bg-warning">
                    List of Task
                    <small class="text-muted">You should compelete</small>
                    <a href="{{ route('todos.create') }}"><i class="fa fa-plus-circle"
                            style="font-size: 24px;color:green"></i></a>
                </h3>

                <div>
                    <x-alert />
                    @include('layouts.todos')
                </div>
                @auth
                    <div class="mb-4">
                        <x-createTask />
                    </div>
                @endauth


            </div>
        </div>
    </div>


@endsection
@section('scripts')
    <script>
        document.onload = function() {
            // document.getElementById("input1").focus();
            alert('page is loaded');
        }

    </script>
@endsection
