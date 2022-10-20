<x-layouts.app title='Create Form'>
    <h1> Create New Post </h1>

    <form method="POST" action=" {{ route('posts.store') }} ">
        @csrf
        <label>
            title <br>
            <input name="title" type="text">
            <br>
            @error('title')
                <small style="color: red"> {{ $message }}</small>
            @enderror
        </label>
        <br>
        <label>
            Body <br>
            <textarea name="body" id="" cols="30" rows="10"></textarea>
        </label> <br>
        <button type="submit">Send</button>
    </form>
    <br>
    <a href=" {{ route('posts.index') }} "> Regresar </a>
</x-layouts.app>
