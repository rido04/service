@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white shadow-lg rounded-2xl p-6 w-full max-w-lg">
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Input Data Pelayanan</h2>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('cs.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="jenis_pelayanan" class="block text-gray-700 font-medium mb-2">Jenis Pelayanan</label>
                <input type="text" id="jenis_pelayanan" name="jenis_pelayanan"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                       placeholder="Masukkan jenis pelayanan..." required>
            </div>

            <input type="hidden" name="tanggal" value="{{ now()->toDateString() }}">
            <input type="hidden" name="jam" value="{{ now()->toTimeString() }}">

            <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 rounded-lg transition duration-300">
                Simpan Data
            </button>
        </form>
    </div>
</div>
@endsection
