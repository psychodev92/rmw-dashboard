<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reviews') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                <div class="container mx-auto">
                    <form action="{{ route('reviews.store') }}" method="POST" class="flex flex-col gap-3">
                        @csrf
                        <div class="flex items-center">
                            <label class="flex-1 max-w-[100px]" for="title">Title</label>
                            <input type="text" id="title" name="title" class="flex-1 border rounded-md p-2 outline-none" required />
                        </div>

                        <div class="flex items-center">
                            <label class="flex-1 max-w-[100px]" for="slug">Slug</label>
                            <input type="text" id="slug" name="slug" class="flex-1 border rounded-md p-2 outline-none bg-gray-100 pointers-none" readonly />
                        </div>

                        <div class="flex items-center">
                            <label class="flex-1 max-w-[100px]" for="summary">Summary</label>
                            <textarea id="summary" name="summary" class="flex-1 border rounded-md p-2 outline-none"></textarea>
                        </div>

                        <div class="flex items-center">
                            <label class="flex-1 max-w-[100px]" for="content">Content</label>
                            <textarea id="content" name="content" class="flex-1 border rounded-md p-2 outline-none" required></textarea>
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
            </div>
        </div>
    </div>
</x-app-layout>
