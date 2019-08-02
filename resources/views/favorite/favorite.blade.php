    @if (Auth::user()->is_okiniiri($micropost->id))
        {!! Form::open(['route' => ['microposts.unokiniiri', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('♥', ['class' => "btn btn-danger btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['microposts.okiniiri', $micropost->id]]) !!}
            {!! Form::submit('♡', ['class' => "btn btn-default btn-sm"]) !!}
        {!! Form::close() !!}
    @endif