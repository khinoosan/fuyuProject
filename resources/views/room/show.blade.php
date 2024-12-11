@extends('layouts.app')

@section('title', '部屋詳細')

@section('content')
<div>
    <div>
        <div>
            <h1>部屋詳細</h1>

            <div>
                <div>
                    <h5>部屋番号: {{ $room->room_number }}</h5>
                    <p>
                        <strong>部屋タイプ：</strong>
                        @switch($room->room_type)
                            @case(1)
                                1 room
                                @break
                            @case(2)
                                2 room
                                @break
                            @case(3)
                                3 room
                                @break
                            @case(4)
                                4 room
                                @break
                            @default
                                不明
                        @endswitch
                        <br>
                        <strong>価格：</strong> ¥{{ ($room->price) }}
                    </p>
                </div>
            </div>

            <div class="mt-3">
                <a href="{{ route('rooms.index') }}" >戻る</a>
                <a href="{{ route('rooms.edit', $room) }}">編集</a>
                <a href="{{ route('rooms.destroy', $room) }}">削除</a>
            </div>
        </div>
    </div>
</div>
@endsection
