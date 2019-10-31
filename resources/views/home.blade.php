@extends('layouts.app')

@section('content')
<link href="{{ elixir('css/painel.css') }}" type='text/css' rel='stylesheet'>

    <div id='main'>
        <main class="flexbox">
        
            <Board id="board-1">
                <Card id="card-1" draggable="true">
                    Test2
                </Card>
            </Board>
            <Board id="board-2">
                <Card id="card-2" draggable="true">
                    Test1
                </Card>
            </Board>
            <Board id="board-3">
                <Card id="card-3" draggable="true">
                    Test3
                </Card>
            </Board>
        </main>
    </div>
<script src="{{ elixir('js/app.js') }}"></script>
@endsection