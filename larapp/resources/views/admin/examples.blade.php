@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col md8 offset-md-2">
                <h2>Conditionals (if-elseif-else)</h2>
                @php
                    $color = 'info';
                @endphp
                @if ($color == 'danger')
                    <div class="alert alert-danger">
                        {{ $color }}
                    </div>
                @elseif ($color == 'succes')
                    <div class="alert alert-succes">
                        {{ $color }}
                    </div>
                @else
                    <div class="alert alert-warning">
                        {{ $color }}
                    </div>
                @endif
                <h2>Conditionals (Switch)</h2>
                @php
                    $day = date('n');
                @endphp
                @switch($day)
                    @case(1)
                    <button class="btn btn-outline-dark">
                        January
                    </button>
                    @break
                    @case(2)
                    <button class="btn btn-outline-dark">
                        February
                    </button>
                    @break
                    @case(3)
                    <button class="btn btn-outline-dark">
                        March
                    </button>
                    @break
                    @case(4)
                    <button class="btn btn-outline-dark">
                        April
                    </button>
                    @break
                    @case(5)
                    <button class="btn btn-outline-dark">
                        May
                    </button>
                    @break
                    @default
                    <button class="btn btn-outline-dark">
                        July - August -September - October - November - December
                    </button>
                    @break
                @endswitch
                <h2>Ciclos</h2>
                <ul class="pagination justify-content-center">
                    @for($i=1;$i<=100;$i++)
                        <li class="page item">
                            <a href="" class="page-link">{{$i}}</a>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste aspernatur vitae aliquam ad odit, recusandae doloremque
    quisquam? Consequuntur, temporibus fuga esse inventore minima illum nemo perspiciatis porro quaerat exercitationem sit?
@endsection
