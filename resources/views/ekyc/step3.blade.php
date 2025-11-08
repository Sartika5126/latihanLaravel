<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow mt-8">
        <h2 class="text-xl font-semibold mb-4">E-KYC - Langkah 3: Pendidikan</h2>

    <div class="max-w-xl mx-auto mt-8 bg-white p-6 rounded-lg shadow">
        @if (session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('ekyc.step3.store') }}" enctype="multipart/form-data">
            @csrf

            {{-- Asal SD --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Asal Sekolah SD</label>
                <input type="text" name="asal_sd" value="{{ old('asal_sd', $data->asal_sd) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md">
            </div>

            {{-- Asal SMP --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Asal Sekolah SMP</label>
                <input type="text" name="asal_smp" value="{{ old('asal_smp', $data->asal_smp) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md">
            </div>

            {{-- Asal SMA --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Asal Sekolah SMA</label>
                <input type="text" name="asal_sma" value="{{ old('asal_sma', $data->asal_sma) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md">
            </div>

            {{-- Upload KK --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Upload Kartu Keluarga (KK)</label>
                <input type="file" name="file_kk" class="mt-1 block w-full border-gray-300 rounded-md">
                @if ($data && $data->file_kk)
                    <p class="text-sm mt-1 text-gray-500">File saat ini:
                        <a href="{{ asset('storage/' . $data->file_kk) }}" target="_blank"
                            class="text-blue-600 underline">Lihat</a>
                    </p>
                @endif
            </div>

            {{-- Upload Ijazah --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Upload Ijazah Terakhir</label>
                <input type="file" name="file_ijazah" class="mt-1 block w-full border-gray-300 rounded-md">
                @if ($data && $data->file_ijazah)
                    <p class="text-sm mt-1 text-gray-500">File saat ini:
                        <a href="{{ asset('storage/' . $data->file_ijazah) }}" target="_blank"
                            class="text-blue-600 underline">Lihat</a>
                    </p>
                @endif
            </div>

            <div class="flex justify-between items-center mt-6"> 
                {{-- Link "Kembali" di sisi kiri --}}
                <a href="{{ route('ekyc.step2') }}" class="text-sm text-gray-500 hover:text-gray-700">
                    ← Kembali ke Step 2
                </a>
                <div class="flex justify-end">
                    @if ($data && $data->status === 'submitted')
                        <a href="{{ route('ekyc.step4') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                            Lanjut ke Step 4
                        </a>
                    @else
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            Simpan & Lanjut Step 4
                        </button>
                    @endif
                </div>
            </div>
        </form>
</div>
    </div>
</x-app-layout>
