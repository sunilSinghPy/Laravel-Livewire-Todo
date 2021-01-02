<div>
    <div class="card">
        <div class="card-header bg-info text-white text-uppercase text-bold">Add work here</div>

        <div class="card-body">
            <form action="/todos/store" method="post">
                @csrf
                <input class="form-control" value="{{ old('title') }}" type="text" name="title">

                <input id="input1" type="submit" class="form-control bg-primary text-white" name="submit"
                    style="margin-top:20px" autofocus>
            </form>

        </div>
    </div>
</div>
