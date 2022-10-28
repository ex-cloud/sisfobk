@section('content')
    <div class="mx-4 my-5">
        <input type="hidden" name="id" value="{{ $individu->id }}" id="id">
        <label for="id_siswa" class="text-xs text-gray-400">NIS</label>
        <input disabled type="text" name="id_siswa" id="id_siswa" value="{{ $individu->siswa->nis }}" class="border border-gray-300 text-gray-500 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full pl-3 p-2.5 px-4 my-3 rounded-xl cursor-default">
        <label for="id_siswa" class="text-xs text-gray-400">Nama Siswa</label>
        <input disabled type="text" name="id_siswa" id="id_siswa" value="{{ $individu->siswa->nama }}" class="border border-gray-300 text-gray-500 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full pl-3 p-2.5 px-4 my-3 rounded-xl cursor-default">
        <label for="tanggal" class="text-xs text-gray-400">Tanggal :</label>
        <input disabled type="date" name="tanggal" id="tanggal" value="{{ $individu->tanggal }}" class="border border-gray-300 text-gray-500 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full pl-3 p-2.5 px-4 my-3 rounded-xl cursor-default">
        <label for="pertemuan" class="text-xs text-gray-400">Pertemuan ke- :</label>
        <input disabled type="number" name="pertemuan" id="pertemuan" value="{{ $individu->pertemuan }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm duration-200" >
        <label for="waktu" class="text-xs text-gray-400">Waktu :</label>
        <input disabled type="time" name="waktu" id="waktu" value="{{ $individu->waktu }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm duration-200" >
        <label for="tempat" class="text-xs text-gray-400">Tempat :</label>
        <input disabled type="text" name="tempat" id="tempat" value="{{ $individu->tempat }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm duration-200">
        <label for="pendekatan" class="text-xs text-gray-400">Pendekatan dan teknik konseling yang digunakan :</label>
        <textarea disabled type="text" name="pendekatan" id="pendekatan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm duration-200" > 
            {{ $individu->pendekatan }}
        </textarea>
        <label for="hasil" class="text-xs text-gray-400">Hasil yang Dicapai :</label>
        <textarea disabled type="text" name="hasil" id="hasil" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm duration-200"> 
            {{ $individu->hasil }}
        </textarea>
        <label for="guru" class="text-xs text-gray-400">Guru BK/ Konselor :</label>
        <input disabled type="text" name="guru" id="guru" value="{{ $individu->guru }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full py-2.5 px-4 my-3 font-light drop-shadow-sm duration-200">
    </div>
        
@endsection