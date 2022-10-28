@section('content')

<form class="space-y-6 my-5" action="{{ route('visit.update.visit') }}" method="POST">
    @csrf
    <div class="mx-4 mb-5">
        <input type="hidden" id="id" value="{{ $visit->id }}" name="id"> 

        <div class="flex justify-between">
            <div>
                <label for="id_siswa" class="text-xs text-gray-400 uppercase">Nis</label>
                <input disabled name="id_siswa" id="id_siswa" value="{{ $visit->siswa->nis }}" class=" bg-white border border-gray-300 text-gray-400 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200">
            </div>
            <div>
                <label for="id_siswa" class="text-xs text-gray-400">Nama Siswa</label>
                <input disabled name="id_siswa" id="id_siswa" value="{{ $visit->siswa->nama }}" class=" bg-white border border-gray-300 text-gray-400 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200">
            </div>
        </div>
        <div class="flex justify-between">
            <div>
                <label for="bidang_layanan" class="text-xs text-gray-400">Bidang Layanan :</label>
                <input type="text" name="bidang_layanan" id="bidang_layanan" value="{{ $visit->bidang_layanan }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
            </div>
            <div>
                <label for="fungsi_layanan" class="text-xs text-gray-400">Fungsi Layanan :</label>
                <input type="text" name="fungsi_layanan" id="fungsi_layanan" value="{{ $visit->fungsi_layanan }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
            </div>
        </div>
        <label for="topik" class="text-xs text-gray-400">Topik/ Permasalahan :</label>
        <input type="text" name="topik" id="topik" value="{{ $visit->topik }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
        <label for="tujuan_kegiatan" class="text-xs text-gray-400">Tujuan Kegiatan :</label>
        <textarea type="text" name="tujuan_kegiatan" id="tujuan_kegiatan" aria-valuetext="{{ $visit->tujuan_kegiatan }}" class="align-left bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> 
            {{ $visit->tujuan_kegiatan }}
        </textarea>
        <label for="gambaran" class="text-xs text-gray-400">Gambaran Ringkasan Masalah :</label>
        <textarea type="text" name="gambaran" id="gambaran" aria-valuetext="{{ $visit->gambaran }}" class=" bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> 
            {{ $visit->gambaran }}
        </textarea>
        <label for="alamat" class="text-xs text-gray-400">Alamat Kunjungan :</label>
        <input type="text" name="alamat" id="alamat" value="{{ $visit->alamat }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> 
        <label for="tanggal" class="text-xs text-gray-400">Tanggal :</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ $visit->tanggal }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> 
        <label for="lama_kunjungan" class="text-xs text-gray-400">Lama kunjungan :</label>
        <input type="text" name="lama_kunjungan" id="lama_kunjungan" value="{{ $visit->lama_kunjungan }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> 
        <label for="anggota_keluarga" class="text-xs text-gray-400">Anggota keluarga yang dikunjungi :</label>
        <input type="text" name="anggota_keluarga" id="anggota_keluarga" value="{{ $visit->anggota_keluarga }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> 
        <label for="evaluasi" class="text-xs text-gray-400">Rencana Evaluasi :</label>
        <textarea type="text" name="evaluasi" id="evaluasi" aria-valuetext="{{ $visit->evaluasi }}" class="input bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> 
            {{ $visit->evaluasi }}
        </textarea>
        <label for="tindak_lanjut" class="text-xs text-gray-400">Tindak Lanjut :</label>
        <textarea type="text" name="tindak_lanjut" id="tindak_lanjut" aria-valuetext="{{ $visit->tindak_lanjut }}" class="input bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> 
            {{ $visit->tindak_lanjut }}
        </textarea>
        <label for="catatan" class="text-xs text-gray-400">Catatan Khusus :</label>
        <textarea type="text" name="catatan" id="catatan" aria-valuetext="{{ $visit->catatan }}" class="input bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> 
            {{ $visit->catatan }}
        </textarea>
    </div>
    <div class="flex mx-4 mb-5 justify-between">
        <div class="">
            <label for="guru" class="text-xs text-gray-400">Guru BK/ Konselor :</label>
            <input type="text" name="guru" id="guru" value="{{ $visit->guru }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
        </div>
        <div class="pt-7">
            <button type="submit" class="w-32 h-10 text-white bg-orange-300 hover:bg-orange-200 focus:ring-1 focus:outline-none focus:ring-orange-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center">Simpan Data</button>
        </div>
    </div>
</form>
@endsection