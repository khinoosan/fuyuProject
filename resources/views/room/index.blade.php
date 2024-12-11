@extends('layouts.app')

@section('title', '部屋一覧')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>部屋一覧</h1>

            <a href="{{ route('rooms.create') }}">新規部屋登録</a>


            <div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>room_no</th>
                            <th>room_type</th>
                            <th>price</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rooms as $room)
                            <tr>
                                <td>{{ $room->id }}</td>
                                <td>{{ $room->room_number }}</td>
                                <td>{{ $room->room_type }}</td>
                                <td>¥{{ ($room->price) }}</td>
                                <td>
                                    <a href="{{ route('rooms.show', $room) }}">詳細</a>
                                    <a href="{{ route('rooms.edit', $room) }}">編集</a>
                                    <a href="{{ route('rooms.destroy', $room) }}">削除</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
