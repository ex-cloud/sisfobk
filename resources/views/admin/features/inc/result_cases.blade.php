@section('content')
<form class="space-y-6 my-5" action="{{ route('cases.update.cases') }}" method="POST">
    @csrf
    <div class="mx-4 mb-5">
        <input type="hidden" name="id" id="id" value="{{ $cases->id }}">
        <label for="tanggal" class="text-xs text-gray-400 ">Tanggal :</label>
        <input disabled type="date" name="tanggal" id="tanggal" value="{{ $cases->tanggal }}" class="border border-gray-300 text-gray-400 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full pl-3 p-2.5 px-4 my-3 rounded-xl cursor-default">
        <label for="id_siswa" class="text-xs text-gray-400">NIS</label>
        <input disabled type="text" name="id_siswa" id="id_siswa" value="{{ $cases->siswa->nis }}" class="border border-gray-300 text-gray-400 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full pl-3 p-2.5 px-4 my-3 rounded-xl cursor-default">
        <label for="id_siswa" class="text-xs text-gray-400">Nama Siswa</label>
        <input disabled type="text" name="id_siswa" id="id_siswa" value="{{ $cases->siswa->nama }}" class="border border-gray-300 text-gray-400 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full pl-3 p-2.5 px-4 my-3 rounded-xl cursor-default">
        <label for="kasus" class="text-xs text-gray-400">Kasus:</label>
        <input type="text" name="kasus" id="kasus" value="{{ $cases->kasus }}" class="bg-white border border-gray-300 text-gray-600 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200"> 
    </div>
    <div class="flex mx-4 mb-5 justify-between">
        <div class="">
            <label for="guru" class="text-xs text-gray-400">Guru BK/ Konselor :</label>
            <input type="text" name="guru" id="guru" value="{{ $cases->guru }}" class="bg-white border border-gray-300 text-gray-600 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-40 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200">
        </div>
        <div class="pt-7">
            <button type="submit" class="w-36 h-10 text-white bg-orange-300 hover:bg-orange-200 focus:ring-1 focus:outline-none focus:ring-orange-300 font-medium rounded-xl text-sm p-auto text-center border border-orange-100 duration-200">Simpan Data</button>
        </div>
    </div>
</form>

@endsection