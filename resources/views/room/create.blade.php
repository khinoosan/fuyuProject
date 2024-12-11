@extends('layouts.app')

@section('title', '新規部屋登録')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>新規部屋登録</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('rooms.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="room_number" class="form-label">部屋番号</label>
                    <input type="text" class="form-control" id="room_number" name="room_number" value="{{ old('room_number') }}" required>
                </div>

                <div class="mb-3">
                    <label for="room_type" class="form-label">部屋タイプ</label>
                    <select id="room_type" name="room_type" required>
                        <option value="">選択してください</option>
                        <option value="1" {{ old('room_type') == 1 ? 'selected' : '' }}>one room</option>
                        <option value="2" {{ old('room_type') == 2 ? 'selected' : '' }}>two room</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="price" >価格</label>
                    <input type="number"  id="price" name="price" value="{{ old('price') }}" required min="0">
                </div>

                <div class="mb-3">
                    <a href="{{ route('rooms.index') }}" >戻る</a>
                    <button type="submit">登録</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
