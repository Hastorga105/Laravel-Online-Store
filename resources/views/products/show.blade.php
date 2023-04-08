<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-2 gap-6">
            <div>
                
                <!-- Place somewhere in the <body> of your page -->
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="https://source.unsplash.com/random/640x480?sig=2">
                        <img src="https://source.unsplash.com/random/640x480?sig=2" />
                        </li>
                        <li data-thumb="https://source.unsplash.com/random/640x480?sig=3">
                        <img src="https://source.unsplash.com/random/640x480?sig=3" />
                        </li>
                        <li data-thumb="https://source.unsplash.com/random/640x480?sig=56"> 
                        <img src="https://source.unsplash.com/random/640x480?sig=56" />
                        </li>
                        <li data-thumb="https://source.unsplash.com/random/640x480?sig=43">
                        <img src="https://source.unsplash.com/random/640x480?sig=43" />
                        </li>

                        {{--@foreach ($product->image as $images)
                        <li data-thumb="{{Storage::url($images->url)}}">
                        <img src="{{Storage::url($images->url)}}" />
                        </li>
                        @endforeach
                        --}}
                    </ul>
                </div>
                    
                
            
            </div>
            <div>
                    <h1 class="text-x1 font-bold text-gray-700"> {{$product->name}}</h1>
                    <div class="flex">
                        <p class="text-gray-700">Brand: <a class="underline capitalize hover:text-indigo-700" href=""> {{$product->brand->name}}</a></p>
                        <p class="text-gray-700 mx-6 ">5 <i class="fa fa-star text-sm text-yellow-400"></i></p>
                        <p class="text-indigo-700 underline hover:text-indigo-900">Reviews 19</p>
                    </div>
                    <p class="text-2xl font-semibold text-gray-700">USD {{$product->price}}</p>
                    <div class="bg-white rounded-lg shadow-lg mb-6">
                        <div class="p-4 flex items-center">
                            <span class="flex items-center justify-center h-10 w-10 rounded-full bg-green-600">
                                <i class="fa fa-truck text-sm text-white"></i>
                            </span>
                            <div class="ml-4">
                                <p class="text-lg format-semibold text-green-600">Shipments are made to all of Mexico</p>
                                <p>Receive it on the {{Date::now()->addDay(3)->locale('es')->format('l j F')}}</p>
                            </div>
                        </div>
                    </div>
                    @if ($product->subcategory->size)
                        @livewire('add-cart-item-size', ['product' => $product])
                    @elseif ($product->subcategory->color)
                        @livewire('add-cart-item-color', ['product' => $product])
                    @else
                        @livewire('add-cart-item', ['product' => $product])
                    @endif
                    
            </div>
        </div>
    </div>

    @push('script')
        <script>
            // Can also be used with $(document).ready()
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>
    @endpush
    

</x-app-layout>