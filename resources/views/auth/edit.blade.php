@extends('components.template')
@section('title')
    Edit-User
@endsection
@section('content')
    <form action="{{ route('update-user', $user->id) }}" method="post" class=" py-14 h-full">
        @csrf
        @method("PUT")
        <div class=" py-3">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}">
        </div>
        <div class=" py-3">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="{{ $user->email }}">
        </div>
        <div class=" py-3">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" value="{{ $user->password }}">
        </div>
        <div class=" py-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" value="{{ $user->phone }}">
        </div>

        <button type="submit" class=" bg-green-300 p-5 rounded-md">Kirim</button>
    </form>
@endsection