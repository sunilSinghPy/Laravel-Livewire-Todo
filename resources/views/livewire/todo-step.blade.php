<div class="card-body">


    <form action="{{ route('todos.update', $todo->id) }}" method="post">
        @method('PUT')
        @csrf
        <input class="form-control " value="{{$todo->title}}" type="text" name="title" >
        <textarea class="form-control"  type="text" name="body" >{{$todo->body}}</textarea>
        <p class="justify-content-center d-flex">Add step here to complete Task
            <a href="#" wire:click="addStep">
                <i class="px-2 fa fa-plus-circle " style="color:green;font-size:25px"></i>
            </a>
        </p>

        @foreach ($steps as $index => $step)

            <div class="py-1 d-flex justify-content-center">
                {{ $index }}
                <input class="form-control" value="" type="text" name="steps[]" placeholder="{{'step'.($index+1)}}">
                <span wire:click="removeStep({{ $index }})" class="px-2 py-2 fa fa-times"
                    style="font-size:20px ;color:red;cursor:pointer"></span>
            </div>


        @endforeach



        <input type="submit" class="text-white form-control bg-primary" name="submit" style="margin-top:20px">
    </form>

</div>
