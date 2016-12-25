@if(count($errors))
    {{--取出第一条error--}}
    <div class="alert alert-danger">
        <ul>
                <li>{{ $errors->first() }}</li>
        </ul>
    </div>
    {{--取出所有error--}}
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif