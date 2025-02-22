@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-semibold mb-6">Dashboard CS</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mb-6">
            <div class="md:flex">
                <div class="w-full p-8">
                    <h2 class="text-xl font-semibold mb-4">Tambah Jenis Pelayanan</h2>
                    <form action="{{ route('cs.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="jenis_pelayanan" class="block text-gray-700 text-sm font-bold mb-2">Jenis Pelayanan</label>
                            <input type="text" name="jenis_pelayanan" id="jenis_pelayanan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
                <div class="w-full p-8">
                    <h2 class="text-xl font-semibold mb-4">Data Pelayanan Hari Ini</h2>
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2">Jenis Pelayanan</th>
                                <th class="py-2">Tanggal</th>
                                <th class="py-2">Jam</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todayPelayanan as $pelayanan)
                                <tr>
                                    <td class="py-2">{{ $pelayanan->jenis_pelayanan }}</td>
                                    <td class="py-2">{{ $pelayanan->tanggal }}</td>
                                    <td class="py-2">{{ $pelayanan->jam }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
