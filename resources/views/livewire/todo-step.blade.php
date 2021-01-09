<div class="card-body">


    <form action="{{ route('todos.store') }}" method="post">

        @csrf
        <input class="form-control "  type="text" name="title" placeholder="Enter Title Here">
        <textarea class="form-control"  type="text" name="body" placeholder="Enter Description here" ></textarea>
        <p class="justify-content-center d-flex">Add step here to complete Task
            <a href="#" wire:click="addStep">
                <i class="px-2 fa fa-plus-circle " style="color:green;font-size:25px"></i>
            </a>
        </p>

        @foreach ($steps as $step)

            <div wire:key="{{$loop->index}}" class="py-1 d-flex justify-content-center">
                {{ $loop->index }}
                <input class="form-control" value="" type="text" name="steps[]" placeholder="{{'step'.($loop->index+1)}}">
                <span wire:click="removeStep({{ $loop->index }})" class="px-2 py-2 fa fa-times"
                    style="font-size:20px ;color:red;cursor:pointer"></span>
            </div>
        @endforeach



        <input type="submit" class="text-white form-control bg-primary" name="submit" style="margin-top:20px">
    </form>
    <pre>{{var_dump($steps)}}</pre>

</div>
