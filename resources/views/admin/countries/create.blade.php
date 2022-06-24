<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Add Country')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{route('countries.store')}}" method="post">
                    @csrf
                    @if ($errors->any())
                        <div class="bg-red-300 border border-red-800 text-black rounded p-2 ">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-control">
                        <label class="label" for="name">
                            <span class="label-text">Country Name</span>
                        </label>
                        <input type="text"
                               name="name" id="name"
                               placeholder="Country Name" class="input input-bordered"
                               value="{{old('name')}}">
                    </div>

                    <div class="py-6">
                        <button class="rounded bg-green-500 p-2 mr-2 my-1 text-gray-50"
                                type="submit">Save New Country
                        </button>
                        <a class="rounded bg-indigo-500 p-2 mr-2 my-1 text-gray-50"
                           href="{{route('countries.index')}}">
                            Back to Countries
                        </a>
                        <button class="rounded bg-red-500 p-2 mr-2 my-1 text-gray-50" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>



    </div>
</x-app-layout>
