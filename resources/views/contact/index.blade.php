@extends('components.template')

@section('title')

@section('content')

<div class="md:px-32 py-8 w-full my-20">
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white text-left">
                <tr>
                    <th class="w-1/3 py-3 px-4 uppercase font-semibold text-sm">No.</th>
                    <th class="w-1/3 py-3 px-4 uppercase font-semibold text-sm">Name</th>
                    <th class= py-3 px-4 uppercase font-semibold text-sm">Email</td>
                    <th class= py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                </tr>
            </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($contacts as $index => $contact)
                        <tr class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-sky-100">
                            <td class="w-1/3 text-left py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $contact['name'] }}</td>
                            <td class="text-left py-3 px-4">{{ $contact['email'] }}</td>
                            <td class="text-left py-3 px-4">{{ $contact['phone'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
        </div>
    </div>
@endsection

