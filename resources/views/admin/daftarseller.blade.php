<!--Memanggil admin template-->
<x-admin-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <!--Menampilkan variabel title yg dikirim dari controller-->
        {{ $title }}
    </h2>
    <div>
        <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1">
            <div class="grid grid-cols-12">
                <div class="col-span-6 p-4">
                    <!--manampilkan url utk menampilkan halaman imput seller-->
                    <a href="{{ route('seller.create') }}">
                        <button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">
                            Tambah
                        </button>
                    </a>
                    <a href="#">
                        <button class="px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green-200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none">
                            Publish
                        </button>
                    </a>
                    <a href="#">
                        <button class="px-4 py-1 text-sm rounded text-red-600 font-semibold border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none">
                            Delete
                        </button>
                    </a>
                </div>
                <div class="">
                    <!--PENCARIAN-->
                    <form action="{{ route('seller.index') }} " method="GET">
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div>
                                <!--memberikan filter berupa packages-->
                                <select id="package" name="package_id" class="block w-full py-2 px-4 border border-gray-400 bg-white rounded-l-2xl shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="">Pilih Package</option>
                                    <!--menampilkan list produk-->
                                    @foreach ($packages as $item )
                                        <option value="{{ $item->package_id }}"{{ (isset($_GET['package_id'])&&$_GET['package_id']==$item->package_id)?'selected':'' }}> {{ $item->package_name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div>
                            <!--memberikan kata kunci dengan nama s-->
                            <input type="text" name="s" value="{{ (isset($_GET['s']))?$_GET['s']:'' }}" class="px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300">
                            <button type="submit" class="rounded-r-md border border-l-0 px-4 py-1 border-gray-300 bg-gray-50 text-blue-600 hover:text-white hover:bg-blue-600">
                                Cari
                            </button>
                        </div>
                    </form>
                    <!--END PENCARIAN-->
                </div>
            </div>
            <div class="py-2 align-middle inline-block min-w-full sm:rounded-lg">
                <div class="shadow-overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Checklist
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Deskripsi
                                </th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($seller as $key=>$item)
                                <!--seller 1-->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <input type="checkbox" name="" id="">
                                            <div class="flex-shrink-0 h-15 w-15">
                                                <img class="h-20 w-20 rounded-full" src="{{ asset($item->image) }}" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <td>
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $item->seller_id}}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-sm text-gray-500">
                                                        {{ $item->seller_name}}
                                                    </div>
                                                </td>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $item->seller_desc }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form action="{{ route('seller.destroy' ,$item->seller_id) }}" method="POST">
                                            <!--form dengan token csrf utk method(DELETE)-->
                                            @csrf @method('DELETE')
                                            <!--link utk edit-->
                                            <a href="{{ route('seller.edit' ,$item->seller_id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            <!--button action utk delete-->
                                            <button class="text-red-600 hover:text-red-900" onclick="return confirm('Anda Yakin ?')" type="submit">Del</button>
                                        </form>
                                    </td>
                                </tr>

                                {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                <script>
                                    //fungsi utk konfirmasi delete
                                    function confirmDelete($item->seller_id, $item->seller_name){
                                        Swal.fire({
                                            title: 'Are you sure?',
                                            text: `You are about to delete seller "${seller_name}". This action cannot be undone!`,
                                            icon: 'warning', 
                                            showCancelButton: true,
                                            confirmButtonColor: '#d33',
                                            cancelButtonColor: '#3085d6',
                                            confirmButtonText: 'Yes, delete it!',
                                            cancelButtonText: 'Cancel'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire(
                                                    'Deleted!',
                                                    `Seller "${seller_name}" has been deleted.`,
                                                    'success'
                                                );
                                            }
                                        });
                                    }
                                </script> --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--PAGINATION-->
            <div class="m-4">{{ $seller->appends(request()->query())->links() }}</div>
            <!--END PAGINATION-->
        </div>
    </div>
</x-admin-layout>