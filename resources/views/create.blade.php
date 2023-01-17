<form method="POST" action="/categorys" enctype="multipart/form-data">
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



<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>action</th>
    </tr>
    @foreach ($categorys as $category)
        <tr>
            <td>{{ $category['id'] }}</td>
            <td>{{ $category['name'] }}</td>
            <td>
              <form method="POST" action="/categorys/{{$category->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
              </form>
            </td>
        </tr>
    @endforeach

</table>
