<table class="table table-hover">
    <tr>
        @foreach ($todos as $todo)
            @if ($todo->completed)
                <td>
                    <form action="{{route('todos.complete',$todo)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <button type="submit" class="btn"><i class="fas fa-calendar-check"
                                style="font-size: 24px;color:green"></i></button>
                    </form>
                </td>
                <td class="text-muted"><strike>{{ $todo->title }}</strike></td>
            @else
                <td>
                    <form action="{{route('todos.complete',$todo)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <button type="submit" class="btn"><i class="fas fa-calendar-check"
                                style="font-size: 36px;color:tomato"></i></button>
                    </form>
                </td>
                <td><a href="{{route('todos.show',$todo)}}" >{{ $todo->title }}</a></td>
            @endif
            <td>
                {{$todo->user->name}}  <span class="shadow badge badge-primary badge-pill">{{ $todo->updated_at->diffForHumans() }}
                </span></td>
            <td>

                    <a href="{{route('todos.edit',$todo->id)}}"><i class="fas fa-edit text-info"
                        style="font-size: 24px"></i></button></a>

            </td>
            <td>
                <button class="btn " data-toggle="modal"
                    data-target="#exampleModal"><i class="fas fa-trash text-danger"
                    style="font-size: 24px"></i></button>
            </td>
    </tr>

    <form style="display:none" id="delete-todo-{{ $todo->id }}" action="/todos/{{ $todo->id }}"
        method="POST">
        @method("DELETE")
        @csrf
        <input class="btn btn-danger" type="submit" value="delete" style="display:none">
    </form>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are You Sure to delete this todo

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form style="display:none" id="delete-todo-{{ $todo->id }}"
                        action="/todos/{{ $todo->id }}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @endforeach

</table>
