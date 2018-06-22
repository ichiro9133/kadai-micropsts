
@if (Auth::user()->is_favoring($micropost->id))
    {!! Form::open(['route' => ['user.unfavor', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavor', ['class' => "btn btn-danger btn-block-xs"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.favor', $micropost->id]]) !!}
        {!! Form::submit('favorite', ['class' => "btn btn-primary btn-block-xs"]) !!}
    {!! Form::close() !!}
@endif

