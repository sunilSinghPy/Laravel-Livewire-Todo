<div class="card-body">
    <p class="p-2 shadow text-bold bg-lite">{{ $todo->body }}</p>
    <hr />
    <h3 class="justify-content-center d-flex">Add step here to complete Task
        <a href="#" wire:click="addStep">
            <i class="px-2 fa fa-plus-circle " style="color:green"></i>
        </a>
    </h3>
    <form action="/todos/{{ $todo->id }}" method="post">
        @method('PUT')
        @csrf

        @for ($i = 0; $i < $step && $i !=5 ; $i++)
        <div class="py-1 d-flex justify-content-center">
            <input class="form-control" value="" type="text" name="title" placeholder="Discribe step {{ $i + 1 }}">
            <span wire:click="removeStep" class="px-2 py-2 fa fa-times" style="font-size:20px ;color:red;cursor:pointer"></span>
        </div>
        @if($i == 4)
        <p class="text-danger bg-warning">Maximum number of Step added.</p>
        @endif
        @endfor



        <input type="submit" class="text-white form-control bg-primary" name="submit" style="margin-top:20px">
    </form>

</div>
