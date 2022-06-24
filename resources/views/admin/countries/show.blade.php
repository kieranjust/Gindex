<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Country Details')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <dl class="grid grid-cols-6 gap-2">
                        <dt class="col-span-1">ID</dt>
                        <dd class="col-span-5">{{$country->id}}</dd>
                        <dt class="col-span-1">Name</dt>
                        <dd class="col-span-5">{{$country->name}}</dd>
                        <dt class="col-span-1">Actions</dt>
                        <dd class="col-span-5">
                            <form
                                action="{{route('countries.destroy', ['country'=>$country])}}"
                                method="post">
                                @csrf
                                @method('delete')
                                <a href="{{route('countries.edit', ['country'=>$country->id])}}"
                                   class="rounded bg-green-500 p-2 mr-2 text-gray-50">Update</a>
                                <button onclick="return confirm('Are you sure you want to delete this country?')"
                                        class="rounded bg-red-500 p-2 mr-2 text-gray-50">Delete
                                </button>
                                </a>
                            </form>
                        </dd>
                    </dl>
                </div>
                <p class="pt-6">
                    <a href="{{route('countries.index')}}"
                       class="rounded bg-indigo-500 p-2 mr-2 text-gray-50">Back to Countries</a>
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
