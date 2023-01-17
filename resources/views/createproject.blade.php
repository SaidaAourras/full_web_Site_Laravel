<form method="POST" action="/projects" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label for="link" class="inline-block text-lg mb-2">link</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="link" />

    </div>
    <div class="mb-6">
        <label for="image" class="inline-block text-lg mb-2"></label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="image" />

    </div>
    <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" />

    </div>
    <div class="mb-6">
        <label for="discp" class="inline-block text-lg mb-2">discp</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="discp" />

    </div>

    <label for="discp" class="inline-block text-lg mb-2">category</label>

    {{-- <select>
        @foreach ($categorys as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select> --}}





    <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Create Gig
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>