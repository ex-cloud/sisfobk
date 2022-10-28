@section('content')

<form class="space-y-6 my-10" action="{{ route('siswa.update.siswa') }}" method="POST">
        @csrf
        <div class="mx-4 mb-5">
            <input type="hidden" id="id" value="{{ $siswa->id }}" name="id"> 
            <label for="nis" class="text-xs text-gray-400">NIS :</label>
            <input type="text" name="nis" id="nis"  value="{{ $siswa->nis}}" class="bg-white border border-gray-300 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 mt-1 mb-2 font-light drop-shadow-sm  text-gray-500 hover:bg-gray-50 duration-200" required="">
            <label for="nama" class="text-xs text-gray-400">Nama :</label>
            <input type="text" name="nama" id="nama" value="{{ $siswa->nama}}" class="bg-white border border-gray-300 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 mt-1 mb-2 font-light drop-shadow-sm text-gray-500 hover:bg-gray-50 duration-200" required="">
            <label for="kelas" class="text-xs text-gray-400">Kelas :</label>
            <select type="text" name="kelas" id="kelas" value="{{ $siswa->kelas}}" class="bg-white border border-gray-300 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 mt-1 mb-2 font-light drop-shadow-sm text-gray-500 hover:bg-gray-50 duration-200" required="">
                <option selected>{{ $siswa->kelas}}</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            <label for="id_jurusan" class="text-xs text-gray-400">Jurusan :</label>
            <select type="text" name="id_jurusan" id="id_jurusan" value="{{ $siswa->jurusan->jurusan }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full py-2.5 mt-1 mb-2 font-light drop-shadow-sm placeholder:text-gray-300 hover:bg-gray-50 duration-200" required="">
                <option disabled selected >{{ $siswa->jurusan->jurusan }}</option>
                @foreach ($jurusans as $jurusan)
                    <option value="{{ $jurusan->id }}">{{ $jurusan->jurusan }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="w-80 mx-4 text-white bg-tosca-300 hover:bg-tosca-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-md px-5 py-2.5 text-center">Simpan Data</button>
</form>
@endsection


<div id="edit-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center " aria-modal="true" role="dialog">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-1 mt-5 text-center text-4xl font-medium text-tosca-300 dark:text-white">Edit Data</h3>
                <h6 class="mb-4 text-center text-sm font-medium text-tosca-300 dark:text-white">SMK Negeri 6 Bandung</h6>
                <hr>
              
            </div>
        </div>
    </div>
</div>