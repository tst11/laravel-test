@extends('layouts.master')

@section('content')
    <div class="centered">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis iure commodi enim dicta eaque molestiae necessitatibus similique voluptates omnis expedita adipisci saepe repellat inventore maiores minima, neque incidunt numquam recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, voluptatibus repellat! Officia sit, molestiae illum autem earum blanditiis impedit unde, rem, soluta fugit nostrum vero quibusdam culpa quisquam recusandae ipsam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, officiis. Placeat odit tempore sed consectetur ut nulla, commodi incidunt qui doloremque nemo! Veritatis, odio? Sit id unde provident possimus temporibus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam labore reiciendis perspiciatis atque repellat ipsam accusantium maiores nulla rerum. Dolorum, expedita. Qui perferendis ea suscipit itaque veniam adipisci sequi sapiente?
        </p>
        <ul>
            @for($i = 0; $i < 5; $i++)
                @if ($i % 2 === 0)
                    <li>Iteration {{ $i + 1 }}</li>
                @endif
            @endfor
        </ul>
        @foreach($actions as $action)
            <a href="{{ route('niceaction', ['action' => lcfirst($action->name) ]) }}">{{ $action->name }}</a>
        @endforeach
        <br><br>
        @if (count($errors) > 0)
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('add_action') }}" method="post">
            <label for="name">Name of Action:</label>
            <input id="name" type="text" name="name">
            <label for="niceness">Niceness:</label>
            <input id="niceness" type="text" name="niceness">
            <button type="submit">Do a nice action!</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>
        <br></br>
        <ul>
            @foreach($logged_actions as $logged_action)
                <li>{{ $logged_action->nice_action->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection