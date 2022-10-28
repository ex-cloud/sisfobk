@section('content')

<div class="space-y-6 my-5">
    <div class="mx-4 mb-5">
        <input type="hidden" id="id" value="{{ $siswa->id }}" name="id"> 
        <label for="nis" class="text-xs text-gray-400">NIS :</label>
        <input type="text" name="nis" id="nis" onfocus="this.value=''" value="{{ $siswa->nis}}" disabled class="bg-white border border-gray-300 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 mt-1 mb-2 font-light drop-shadow-sm  text-gray-500 duration-200">
        <label for="nama" class="text-xs text-gray-400">Nama :</label>
        <input type="text" name="nama" id="nama" onfocus="this.value=''" value="{{ $siswa->nama}}" disabled class="bg-white border border-gray-300 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 mt-1 mb-2 font-light drop-shadow-sm text-gray-500 duration-200" >
        <label for="kelas" class="text-xs text-gray-400">Kelas :</label>
        <input type="text" name="kelas" id="kelas" value="{{ $siswa->kelas}}" disabled class="bg-white border border-gray-300 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 mt-1 mb-2 font-light drop-shadow-sm text-gray-500 duration-200">        
        <label for="jurusan" class="text-xs text-gray-400">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" value="{{ $siswa->jurusan->jurusan}}" disabled class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 mt-1 mb-2 font-light drop-shadow-sm placeholder:text-gray-300 duration-200">
    </div>
    <a href="{{ route('print.siswa', $siswa->id) }}" type="button" class="w-80 mx-4 text-white bg-tosca-300 hover:bg-tosca-200 duration-200 focus:ring-4 focus:outline-none focus:ring-tosca-400 font-medium rounded-xl text-md px-5 py-2.5 text-center">Cetak Data</a>
</div>

@endsection