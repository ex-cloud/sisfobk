@section('content')

<section class="container mx-auto font-sans">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
            <thead>
                <tr class="text-sm font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                    <th class="px-4 py-3 text-center">No</th>
                    <th class="px-4 py-3 text-center">NIS</th>
                    <th class="px-4 py-3 text-center">
                        <div class="flex items-center justify-center">
                            @sortablelink('nama', 'Nama Siswa')
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                        </div>
                    </th>
                    <th class="px-4 py-3 text-center">
                        <div class="flex items-center justify-center">
                            Kelas
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                        </div>
                    </th>
                    <th class="px-4 py-3 text-center">
                        <div class="flex items-center justify-center">
                            Jurusan
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div></th>
                    <th class="px-4 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white w-full">
                @php
                    $id = 1;
                @endphp
                    @foreach ($dtsiswa as $siswa)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border text-center">
                            {{ $id++ }}
                        </td>
                        <td class="px-4 py-3 text-sm font-semibold border text-center">
                            {{ $siswa->nis }}
                        </td>
                        <td class="px-4 py-3 text-xs border">
                            <div class="flex items-center text-sm">
                                <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                    <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p class="font-semibold text-black capitalize">{{ $siswa->nama }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm border text-center">{{ $siswa->kelas }}</td>
                        <td class="px-4 py-3 text-sm border text-center">{{ $siswa->jurusan->jurusan}}</td>
                        <td class="px-4 py-3 text-sm border">
                            <div class="flex justify-center ">
                                <button onclick="forEditSiswa(this, event)"  value="{{ $siswa->id }}" class="w-7 h-7 bg-yellow-200 border-yellow-400 border p-1 rounded-md mx-1 hover:bg-yellow-300 duration-200" type="button">
                                    <img src="../../../../Edit.svg" alt="">
                                </button>
                                <button onclick="forShowSiswa(this, event)" value="{{ $siswa->id }}" class="w-7 h-7 bg-green-200 border-green-400 border p-1 rounded-md mx-1 hover:bg-green-500 duration-200 " type="button">
                                    <img src="../../../../About.svg" alt="">
                                </button>
                                <form action="{{ route('destroy.siswa', $siswa->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="w-7 h-7 bg-red-200 border-red-400 border p-1 rounded-md mx-1 hover:bg-red-600 duration-200" type="submit" >
                                        <img src="../../../../Trash.svg" alt="">
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection