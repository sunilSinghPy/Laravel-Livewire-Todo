<div>
    <div class="card">
        <div class="text-white d-flex justify-content-between card-header bg-info text-uppercase text-bold">
            Add Work Here
            <a href="{{ route('todos.index') }}" style="text-decoration:none;">
                <span class="px-2 fa fa-arrow-left bg-light">Back</span>
            </a>
        </div>

        @livewire('todo-step')
    </div>
</div>
