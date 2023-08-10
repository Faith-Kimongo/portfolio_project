@extends('layouts.users')

@section('content')
<div class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center z-10" id="overlay">
  <div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800" >
      <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 animate-spin">
        <ion-icon name="thumbs-up-outline" class="h-6 w-6 text-indigo-600" ></ion-icon>
          
      </div>
      <div class="mt-3 text-center sm:mt-5">
          <p>Successfully Added to Cart</p>
      </div>
      <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense" id="buttons">
          <button type="button" id="close-modal" class="close mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-indigo-300 text-base font-medium text-gray-900 hover:bg-indigo-900 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm" >Continue Shopping</button>
          <a href="cart.html">
          <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600  text-base font-medium text-white hover:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">Go to Cart</button> 
        </a>
          
      </div>
  </div>
</div>



      <script>
        window.addEventListener('DOMContentLoaded', () => {
          const overlay = document.querySelector('#overlay')
          const openBtn = document.querySelector('#open-btn')
          const closeBtn = document.querySelector('#close-modal')

          
          var elem = document.getElementsByClassName('add-cart')
          for(var i=0; i<elem.length; i++) {
            elem[i].addEventListener('click', function(){
              overlay.classList.toggle('flex')
              overlay.classList.toggle('hidden')
            })
          }
      
          // openBtn.addEventListener('click', () => {
          //   overlay.classList.toggle('flex')
          //   overlay.classList.toggle('hidden')
            
          // })

          closeBtn.addEventListener('click', () => {
            overlay.classList.toggle('hidden')
            overlay.classList.toggle('flex')
            
          })
        })
        
      </script>

      <!-- modal end -->
      
          <div class="-mx-px border-l border-gray-200 grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
            <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
              <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                <img src="images/ice-cream.jpg" alt="TODO" class="w-80 h-40 object-center object-cover">
              </div>
              <div class="pt-10 pb-4 text-center">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Ice Cream
                  </a>
                </h3>
                <p class="mt-4 text-base font-medium text-gray-900">$4</p>

                <div class="mt-6">
                  <a href="#" class="add-cart relative flex bg-indigo-200 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-gray-900 hover:text-white hover:bg-indigo-600">Add to Cart<span class="sr-only"></span></a>
                </div> 


              </div>
            </div>

            <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
                <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                  <img src="images/cake.jpg" alt="TODO" class="w-80 h-40 object-center object-cover">
                </div>
                <div class="pt-10 pb-4 text-center">
                  <h3 class="text-sm font-medium text-gray-900">
                    <a href="#">
                      <span aria-hidden="true" class="absolute inset-0"></span>
                      Fruit Cake
                    </a>
                  </h3>
                  <p class="mt-4 text-base font-medium text-gray-900">$20</p>
  
                  <div class="mt-6">
                    <a href="#" class="add-cart relative flex bg-indigo-200 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-gray-900 hover:text-white hover:bg-indigo-600">Add to Cart<span class="sr-only"></span></a>
                  </div> 
                </div>
              </div>
      
            <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
              <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                <img src="images/strawberry-dessert.jpg" alt="TODO" class="w-80 h-40 object-center object-cover">
              </div>
              <div class="pt-10 pb-4 text-center">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Strawberry
                  </a>
                </h3>
                
                <p class="mt-4 text-base font-medium text-gray-900">$4</p>

                <div class="mt-6">
                  <a href="#" class="add-cart relative flex bg-indigo-200 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-gray-900 hover:text-white hover:bg-indigo-600">Add to Cart<span class="sr-only"></span></a>
                </div> 
              </div>
            </div>
      
            <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
              <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                <img src="images/sweet-arab-baklava.jpg" alt="TODO" class="w-80 h-40 object-center object-cover">
              </div>
              <div class="pt-10 pb-4 text-center">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Sweet Arab Baklava
                  </a>
                </h3>
                <p class="mt-4 text-base font-medium text-gray-900">$6</p>

                <div class="mt-6">
                  <a href="#" class="add-cart relative flex bg-indigo-200 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-gray-900 hover:text-white hover:bg-indigo-600">Add to Cart<span class="sr-only"></span></a>
                </div> 
              </div>
            </div>
      
            <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
              <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                <img src="images/cheesecake.jpg" alt="TODO" class="w-80 h-40 object-center object-cover">
              </div>
              <div class="pt-10 pb-4 text-center">
                <h3 class="text-sm font-medium text-gray-900">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Cheesecake
                  </a>
                </h3>
                <p class="mt-4 text-base font-medium text-gray-900">$9</p>

                <div class="mt-6">
                  <a href="#" class="add-cart relative flex bg-indigo-200 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-gray-900 hover:text-white hover:bg-indigo-600">Add to Cart<span class="sr-only"></span></a>
                </div> 
              </div>
            </div>

            <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
                <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                  <img src="images/macarons.jpg" alt="TODO" class="w-80 h-40 object-center object-cover">
                </div>
                <div class="pt-10 pb-4 text-center">
                  <h3 class="text-sm font-medium text-gray-900">
                    <a href="#">
                      <span aria-hidden="true" class="absolute inset-0"></span>
                      Macarons
                    </a>
                  </h3>
                  <p class="mt-4 text-base font-medium text-gray-900">$6</p>
  
                  <div class="mt-6">
                    <a href="#" class="add-cart relative flex bg-indigo-200 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-gray-900 hover:text-white hover:bg-indigo-600">Add to Cart<span class="sr-only"></span></a>
                  </div> 
                </div>
              </div>

              <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
                <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                  <img src="images/muffins.jpg" alt="TODO" class="w-80 h-40 object-center object-cover">
                </div>
                <div class="pt-10 pb-4 text-center">
                  <h3 class="text-sm font-medium text-gray-900">
                    <a href="#">
                      <span aria-hidden="true" class="absolute inset-0"></span>
                      Muffins
                    </a>
                  </h3>
                  <p class="mt-4 text-base font-medium text-gray-900">$3</p>
  
                  <div class="mt-6">
                    <a href="#" class="add-cart relative flex bg-indigo-200 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-gray-900 hover:text-white hover:bg-indigo-600">Add to Cart<span class="sr-only"></span></a>
                  </div> 
                </div>
              </div>

             
      
            <!-- More products... -->
          </div>
        </div>
      </div>
@endsection