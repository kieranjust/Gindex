<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Distillery') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('distilleries.store')}}" method="post">
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
                            <label class="label" for="distillery_name">
                                <span class="label-text">Distillery Name</span>
                            </label>
                            <input type="text"
                                   name="name" id="distillery_name"
                                   placeholder="Distillery Name" class="input input-bordered"
                                   value="{{old('name')}}">
                        </div>
                        <br>
                        <div class="form-control">
                            <label class="label" for="country">
                                <span class="label-text">Country</span>
                            </label>
                            <select name="country" id="country"
                                    class="select select-bordered w-full max-w-xs">
                                <option value="" disabled selected>Select Country</option>
                                @foreach($countries as $key=>$country)
                                    <option @if(old("country")==$country->id)) selected @endif value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                            <br>
                            <br>
                            <button class="rounded bg-green-500 p-2 mr-2 my-1 text-gray-50"
                                    type="submit">Save New Distillery
                            </button>
                            <a class="rounded bg-indigo-500 p-2 mr-2 my-1 text-gray-50"
                               href="{{route('distilleries.index')}}">
                                Back to Distilleries
                            </a>
                            <button class="rounded bg-red-500 p-2 mr-2 my-1 text-gray-50" type="reset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
