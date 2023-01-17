{{-- <form method="POST" action="/categorys/{{ $category['id'] }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" />
    </div>


    <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Create Gig
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form> --}}

<form action="/categorys/{{ $category->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-6">
        <label for="company" class="inline-block text-lg mb-2">Company Name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
            value="{{ $category->name }}" />


    </div>


</form>
