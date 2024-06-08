@if(isset($Fdproduct) && $Fdproduct->count() > 0)
        <div class="flex flex-wrap justify-center">
            @foreach($Fdproduct as $rs)
                <div class="w-full md:w-1/2 lg:w-1/4 p-4">
                    <div class="flex justify-center">
                        <img src="{{ (!empty($rs->pic))? url('storage/images/upload/'.$rs->pic):url('storage/images/no_image.jpg') }}" alt="{{ $rs->menu }}" class="md:h-60 lg:h-72 xl:h-60 lg:px-4 lg:py-2 hover:underline"/>
                    </div>
                    <div class="text-center mt-2">
                        <ul class="text-hijau text-2xl font-bold">
                            <li>{{ $rs->menu }}</li>
                        </ul>
                        <ul class="text-hijau text-2xl font-base mt-2">
                            <li>{{ $rs->price }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="text-center">Product not found, please include them in database with "FD" in $id_product</div>
    @endif
