   @props(['products'])
   <section id="products">
       <div class="mx-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

           @foreach ($products as $product)
               <a href="{{ route('frontend.product.show', $product->slug) }}">
                   <div
                       class="border p-3 rounded-md bg-slate-100 hover:scale-105 transition-transform duration-300 ease-in-out cursor-pointer">
                       <img class="w-full aspect-square object-cover rounded"
                           src="{{ asset('storage/uploads/products/' . $product->image) }}" alt="">

                       <h4 class="mt-2 text-md text-blue-900 font-semibold">
                           {{ $product->name }}
                       </h4>

                       <p class="text-blue-500 font-medium">
                           {{ $product->currency }}{{ $product->price }}
                       </p>

                   </div>
               </a>
           @endforeach


       </div>
   </section>
