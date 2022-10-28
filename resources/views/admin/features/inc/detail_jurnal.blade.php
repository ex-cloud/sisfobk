@section('content')
<div class="mx-4 mb-5">
    <input type="hidden" id="id" value="{{ $jurnal->id }}" name="id"> 
    <label for="tanggal" class="text-xs text-gray-400">Tanggal Kegiatan :</label>
    <input disabled type="date" name="tanggal" id="tanggal" value="{{ $jurnal->tanggal }}" class="border border-gray-300 text-gray-500 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full pl-3 p-2.5 px-4 my-3 rounded-xl">
    <label for="sasaran_kegiatan" class="text-xs text-gray-400">Sasaran Kegiatan :</label>
    <input disabled type="text" name="sasaran_kegiatan" id="sasaran_kegiatan" value="{{ $jurnal->sasaran_kegiatan }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full py-2.5 px-4 my-3 font-light drop-shadow-sm duration-200" required="">
    <label for="layanan_kegiatan" class="text-xs text-gray-400">Kegiatan Layanan :</label>
    <textarea disabled type="text" name="layanan_kegiatan" id="layanan_kegiatan" value="{{ $jurnal->layanan_kegiatan }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-35 py-2.5 px-4 my-3 font-light drop-shadow-sm duration-200" required=""> </textarea>
    <label for="hasil_kegiatan" class="text-xs text-gray-400">Hasil yang Dicapai :</label>
    <textarea disabled type="text" name="hasil_kegiatan" id="hasil_kegiatan" value="{{ $jurnal->hasil_kegiatan }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-35 py-2.5 px-4 my-3 font-light drop-shadow-sm duration-200 align-text-top" required=""> </textarea>
    <div class="flex mb-5 justify-between w-full">
        <div class="mr-2">
            <label for="guru" class="text-xs text-gray-400">Guru BK/ Konselor :</label>
            <input disabled type="text" name="guru" id="guru" value="{{ $jurnal->guru }}" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full py-2.5 my-3 font-light drop-shadow-sm duration-200" required="">
        </div>
        <div class="pt-7 ml-2">
            <button type="submit" class="w-full h-10 text-white bg-orange-300 hover:bg-orange-200 focus:ring-1 focus:outline-none focus:ring-orange-300 font-medium rounded-xl text-sm py-2.5 px-3 text-center">Simpan Data</button>
        </div>
    </div>
</div>

@endsection