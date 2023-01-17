{{-- <div class="text-xl font-bold mb-4">{{ $category->name }}</div>
<h1>{{ $category['name'] }}</h1> --}}


<form method="POST" action="categorys/{{ $category->id }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-2">Company Name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" />
    </div>


    <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Create Gig
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>


{{-- @foreach ($categorys as $category)
      {{ $category['name'] }}
      @endforeach
   --}}


{{-- <form method="POST" action="/projects" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
          <label for="link" class="inline-block text-lg mb-2">Company Name</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="link" />
  
        </div>
        <div class="mb-6">
          <label for="image" class="inline-block text-lg mb-2">Company image</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="image" />
  
        </div>
        <div class="mb-6">
          <label for="title" class="inline-block text-lg mb-2">Company title</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" />
  
        </div>
        <div class="mb-6">
          <label for="discp" class="inline-block text-lg mb-2">Company discp</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="discp" />
  
        </div>

  
       
        <div class="mb-6">
          <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Create Gig
          </button>
  
          <a href="/" class="text-black ml-4"> Back </a>
        </div>
      </form> --}}
