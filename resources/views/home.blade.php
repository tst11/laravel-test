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
        <a href="{{ route('greet') }}">Greet</a>
        <a href="{{ route('hug') }}">Hug</a>
        <a href="{{ route('kiss') }}">Kiss</a>
    </div>
@endsection