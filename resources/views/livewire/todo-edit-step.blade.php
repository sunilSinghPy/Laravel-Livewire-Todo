<div>
    <p class="p-2 m-2 text-white bg-primary font-weight-bolder">Steps:</p>
    @foreach($todo->step as $step)
    <input type="text" class="form-control" name="step[{{$step->id}}]" value="{{$step->step_name}}">
    @endforeach
    <input type="submit" class="text-white form-control bg-primary" name="submit"
        style="margin-top:20px">
</div>
