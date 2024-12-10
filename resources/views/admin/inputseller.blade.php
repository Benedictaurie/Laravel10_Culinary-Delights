<x-admin-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    <!-- menampilkan variabel title yang dikirim dari controller-->
        {{$title}}
    </h2>
    <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 ">
        <div class="container mx-auto">
            <form enctype="multipart/form-data" action="{{ (isset($seller))?route('seller.update', $seller->seller_id):route('seller.store') }}" method="POST">
                @CSRF
                @if(isset($seller))@method('PUT')@endif
                <div class="px-2 py-8 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" id="name" name="seller_name" placeholder="Nama Lengkap" required value="{{(isset($seller))?$seller->seller_name:old('seller_name')}}"class="mt-1 focus: ring-indigo-500 focus: border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('seller_name')
                                <div class=" text-xs text-red-800">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="id" class="block text-sm font-medium text-gray-700">ID</label>
                            <input type="number" name="seller_id" id="id" placeholder="ID Seller" required value="{{(isset($seller))?$seller->seller_id:old('seller_id')}}"class="mt-1 focus: ring-indigo-500 focus: border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                            @error('seller_id')
                                <div class=" text-xs text-red-800">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="desc" class="block text-sm font-medium text-gray-700">Description</label>
                            <input type="text" name="seller_desc" placeholder="Deskripsi" id="desc" value="{{(isset($seller))?$seller->seller_desc:old('seller_desc')}}"class="mt-1 focus: ring-indigo-500 focus: border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('seller_desc')
                                <div class=" text-xs text-red-800">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="package" class="block text-sm font-medium text-gray-700">Product</label>
                            <select id="package" name="package_id"class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus: outline-none focus: ring-indigo-500 focus: border-indigo-500 sm:text-sm">
                                <option value="">Choose Product</option>
                                @foreach ($packages as $item)
                                    <option value="{{$item->package_id}}"{{((isset($seller) &&$seller->package_id==$item->package_id) || old('package_id')==$item->package_id)? 'selected': ''}}> {{$item->package_name}}</option>
                                @endforeach
                            </select>
                            @error('package_id')
                                <div class=" text-xs text-red-800">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="image" class="block text-sm font-medium text-gray-700">Photo</label>
                            <input type="file" name="image" id="image"class="mt-1 focus: ring-indigo-500 focus: border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('image')
                                <div class=" text-xs text-red-800">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <input type="radio" checked {{((isset($seller)&&$seller->status=='Y') || old('status')=='Y')?'checked': ''}} name="status" value="Y" class="focus: ring- indigo-500 h-4 w-4 text-indigo-600 border-gray-300 "> Aktif &nbsp; &nbsp;
                            <input type="radio" {{((isset($seller) &&$seller->status=='N') || old('status')=='N')?'checked': ''}} name="status" value="N" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"> 
                            Non Aktif
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-white text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center w-24 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md ring bg-indigo-600 hover:bg-indigo-700 text-white">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>