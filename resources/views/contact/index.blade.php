@extends('components.template')

@section('title')

@section('content')

<div class="md:px-32 py-8 w-full my-20">
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white text-left">
                <tr>
                    <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm">No.</th>
                    <th class="w-1/3 py-3 px-4 uppercase font-semibold text-sm">Name</th>
                    <th class= py-3 px-4 uppercase font-semibold text-sm">Email</td>
                    <th class= py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                    <th class= py-3 px-4 uppercase font-semibold text-sm">Action</th>
                </tr>
            </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($users as $index => $user)
                        <tr class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-sky-100">
                            <td class="w-1/12 text-left py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $user['name'] }}</td>
                            <td class="text-left py-3 px-4">{{ $user['email'] }}</td>
                            <td class="text-left py-3 px-4">{{ $user['phone'] }}</td>
                            <td class="text-left py-3 px-4"><button class=" bg-slate-500 p-4 rounded-md text-white"><a href="{{ route('edit-user', $user->id )}}">Edit</a></td></button>
                            <td class="text-left py-3 px-4"><button class=" bg-red-500 p-4 rounded-md text-white"><a href="{{ route('delete-user', $user->id )}}">Hapus</a></button></td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
        </div>
        <a href="{{ route('create') }} " class=" bg-sky-300 rounded-xl p-4">Create User</a>
    </div>
@endsection

