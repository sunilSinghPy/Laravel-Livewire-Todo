<div style="margin-top: 10px">
    @if (session()->has('error'))
        <div class="alert alert-danger " role="alert">
            {{ request()->session()->get('error') }}
        </div>
    @endif
    @if (session()->has('msg'))
        <div class="alert alert-success" role="alert">
            {{ request()->session()->get('msg') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
