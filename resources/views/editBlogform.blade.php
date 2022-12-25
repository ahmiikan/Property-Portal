@extends('layouts.dashboardmaster')
@section('content')
    <!-- component -->

        @if ($message = Session::get('success'))
        <div class="">
            <p class="border border-gray-200">{{ $message }}</p>
        </div>
    @endif

    @if (count($errors) > 0)
    <br>
        <div class="alert alert-danger">
    
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
    
            <ul>
    
            @foreach ($errors->all() as $error)
    
                <li>{{ $error }}</li>
    
            @endforeach
    
            </ul>
    
        </div>
    
    @endif
    

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('posts.update', $post->slug) }}" method="Post" enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                            <input type="text" class="w-full p-2 border-2 border-gray-300" name="title" id="title"
                                value="{{ $post->title }}" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Description</label><br>
                            <input type="text" class="w-full p-2 border-2 border-gray-300" name="description"
                                id="description" placeholder="(Short Description)" value="{{ $post->desc }}" required>
                        </div>

                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                            <textarea id="summernote" name="content" class="border-2 border-gray-500">

                        </textarea>
                        </div>

                        <div class="flex justify-center mt-8">
                            <div class="max-w-full rounded-lg shadow-xl bg-gray-50">
                                <div class="m-4">
                                    <label class="inline-block mb-2 text-gray-500">Upload
                                        Image(jpg,png,svg,jpeg)</label>
                                    <div class="flex items-center justify-center w-full">
                                        <label
                                            class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                            <div class="flex flex-col items-center justify-center pt-7">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-12 h-12 text-gray-400 group-hover:text-gray-600"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <p
                                                    class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                    Select a photo</p>
                                            </div>
                                            <input type="file" name="cover" class="opacity-0" />
                                        </label>
                                    </div>
                                </div>
                                <div class="flex p-2 space-x-4">
                                    <button class="px-4 py-2 text-white bg-red-500 rounded shadow-xl">Cannel</button>
                                    <button class="px-4 py-2 text-white bg-green-500 rounded shadow-xl">Create</button>
                                </div>
                            </div>
                        </div>

                        <div class="flex p-1">
                            <select class="justify-center p-2 border-2 border-r border-gray-300" name="category"
                                value="value="{{ $post->category }}"">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach

                            </select>
                            <select class="justify-center p-2 border-2 border-r border-gray-300" name="action">
                                <option>Save and Publish</option>
                                <option>Save Draft</option>
                            </select>
                            <button role="submit" class="p-3 text-white bg-blue-500 hover:bg-blue-400"
                                required>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

        <script>
            $('#summernote').summernote({
                placeholder: 'Hello stand alone ui',
                tabsize: 2,
                height: 520,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', ]],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            }).summernote('code', `{!! $post->content !!}`);
        </script>
@endsection
