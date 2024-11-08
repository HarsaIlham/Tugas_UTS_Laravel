@extends('components.template')
@section('title')
    Create
@endsection
@section('content')
    <form action="{{ route('store-user') }}" method="post" class=" py-14 h-full">
        @csrf
        <div class=" py-3">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name">
        </div>
        <div class=" py-3">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <div class=" py-3">
            <label for="password">Password</label>
            <input type="text" name="password" id="password">
        </div>
        <div class=" py-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone">
        </div>

        <button type="submit" class=" bg-green-300 p-5 rounded-md">Kirim</button>
    </form>
@endsection