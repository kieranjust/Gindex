<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Edit Distillery')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{route('distilleries.update', [$distillery->id])}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-control">
                        <label class="label" for="name">
                            <span class="label-text">Distillery Name</span>
                        </label>
                        <input type="text"
                               name="name" id="name"
                               placeholder="Distillery Name" class="input input-bordered"
                               value="{{old('name') ?? $distillery->name }}">
                    </div>
                    <br>
                    <div class="form-control">
                        <label class="label" for="country">
                            <span class="label-text">Country</span>
                        </label>
                        <select name="country" id="country"
                                class="select select-bordered w-full max-w-xs">
                            <option value="" disabled @if($distillery->country_id ?? false) selected @endif >Select Country</option>
                            @foreach($countries as $key=>$country)
                                <option value="{{$country->id}}"
                                        @if($distillery->country_id == $country->id) selected @endif >{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="py-6">
                        <button class="rounded bg-green-500 p-2 mr-2 my-1 text-gray-50"
                                type="submit">Update Distillery
                        </button>
                        <a class="rounded bg-indigo-500 p-2 mr-2 my-1 text-gray-50"
                           href="{{route('distilleries.index')}}">
                            Back to Distillery
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
