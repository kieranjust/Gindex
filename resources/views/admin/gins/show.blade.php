<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Track Details')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <dl class="grid grid-cols-5 gap-2">
                        <dt class="col-span-1">ID</dt>
                        <dd class="col-span-5">{{$gin->id}}</dd>
                        <dt class="col-span-1">Name</dt>
                        <dd class="col-span-5">{{$gin->name}}</dd>
                        <dt class="col-span-1">Distillery</dt>
                        <dd class="col-span-5">{{$gin->distillery->name}}</dd>
                        <dt class="col-span-1">Rating</dt>
                        <dd class="col-span-5">{{$gin->rating}}</dd>
                        <dt class="col-span-1">Status</dt>
                        <dd class="col-span-5">{{$gin->status}}</dd>
                            <form
                                method="post" )>
                                @csrf
                                @method('delete')
                                <a href="{{route('gins.edit', ['gin'=>$gin->id])}}"
                                   class="rounded bg-green-500 p-2 mr-2 my-1 text-gray-50">Update</a>
                                <button onclick="return confirm('Are you sure you want to delete this gin?')"
                                        class="rounded bg-red-500 p-2 mr-2 my-1 text-gray-50">Delete
                                </button>
                                </a>
                            </form>
                        </dd>

                    </dl>
                </div>
                <p class="pt-6">
                    <a href="{{url('admin/gins')}}"
                       class="rounded bg-indigo-500 p-2 mr-2 my-1 text-gray-50">Back to Gins</a>
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
