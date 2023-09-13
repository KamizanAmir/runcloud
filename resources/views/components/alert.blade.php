<div>
    @if(session()->has('success'))
        {{ session()->get('success') }}
    @endif
</div>