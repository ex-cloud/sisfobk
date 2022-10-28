@section('content')
<div class="p-6 text-center">
    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin menghapus nya?</h3>
    <form action="{{ url('destroy', $siswa->id) }}" method="POST">
        <button data-modal-toggle="delete-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-3xl border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 mx-2">Tidak, batalkan</button>
        @csrf
        @method('delete')
        <button data-modal-toggle="delete-modal" type="submit" class="text-white bg-tosca-300 hover:bg-tosca-200 focus:ring-4 focus:outline-none focus:ring-tosca-300 font-medium rounded-3xl text-sm inline-flex items-center px-5 py-2.5 text-center mx-2">
            Ya, saya yakin
        </button>
    </form>
</div>
@endsection