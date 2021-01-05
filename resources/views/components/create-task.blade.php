<div>
    <div class="card">
        <div class="text-white card-header bg-info text-uppercase text-bold">Add work here</div>

        <div class="card-body">
            <form action="{{route('todos.store')}}" method="post">

                @csrf
                <input class="form-control" value="{{ old('title') }}" type="text" name="title" placeholder="Enter Title">
                <textarea class="mt-2 form-control"  value="{{ old('body') }}" name="body" >Enter despription</textarea>

                <input id="input1" type="submit" class="text-white form-control bg-primary" name="submit"
                    style="margin-top:20px" autofocus>

            </form>


        </div>
    </div>
</div>
