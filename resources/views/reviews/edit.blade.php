@extends('layouts.app')

@section('title', 'Create review')

@section('content')
    <div class="container mx-auto">
        <form action="{{ route('reviews.update', ['review' => $singleReview->id]) }}" method="POST" class="flex flex-col gap-3">
            @csrf
            @method('PUT')

            <div class="flex items-center">
                <label class="flex-1 max-w-[100px]" for="title">Title</label>
                <input type="text" value={{ addslashes($singleReview->title) }} id="title" name="title" class="rmw-toSlug flex-1 border rounded-md p-2 outline-none" required />
            </div>

            <div class="flex items-center">
                <label class="flex-1 max-w-[100px]" for="slug">Slug</label>
                <input type="text" value={{ $singleReview->slug }} id="slug" name="slug" class="rmw-slugInput flex-1 border rounded-md p-2 outline-none bg-gray-100 pointers-none" readonly />
            </div>

            <div class="flex items-center">
                <label class="flex-1 max-w-[100px]" for="summary">Summary</label>
                <textarea id="summary" name="summary" class="flex-1 border rounded-md p-2 outline-none">{{ $singleReview->summary }}</textarea>
            </div>

            <div class="flex items-center">
                <label class="flex-1 max-w-[100px]" for="content">Content</label>
                <textarea id="content" name="content" class="flex-1 border rounded-md p-2 outline-none" required>{{ $singleReview->content }}</textarea>
            </div>

            <div class="flex items-center">
                <label class="flex-1 max-w-[100px]" for="author">Author</label>
                <input type="text" id="author" name="author" class="flex-1 border rounded-md p-2 outline-none" />
            </div>

            <div class="flex items-center">
                <label class="flex-1 max-w-[100px]" for="category">Category</label>
                <input type="text" id="category" name="category" class="flex-1 border rounded-md p-2 outline-none" />
            </div>

            <div class="flex items-center">
                <label class="flex-1 max-w-[100px]" for="status">Status</label>
                <select id="status" name="status" class="flex-1 border rounded-md p-2 outline-none">
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                    <option value="archived">Archived</option>
                </select>
            </div>

            <div class="flex items-center">
                <label class="flex-1 max-w-[100px]" for="tags">Tags</label>
                <input type="text" id="tags" name="tags" class="flex-1 border rounded-md p-2 outline-none" />
            </div>

            <div class="flex justify-end">
                <button type="submit" class="border rounded p-2 px-5 text-white bg-blue-500">Create</button>
            </div>
        </form>
    </div>
@endsection
