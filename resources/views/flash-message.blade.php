@if ($message = Session::get('success'))
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 m-1 mb-4">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-1 pr-3">
            <div class="bg-green-100 text-gray-900 rounded-sm  p-2 m-1 w-full">
                <strong>{{ $message }}</strong>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 m-1 mb-4">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-1 pr-3">
            <div class="bg-red-100 text-gray-900 rounded-sm  p-2 m-1 w-full">
                <strong>{{ $message }}</strong>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 m-1 mb-4">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-1 pr-3">
            <div class="bg-blue-100 text-gray-900 rounded-sm  p-2 m-1 w-full">
                <strong>{{ $message }}</strong>
            </div>
        </div>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 m-1 mb-4">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-1 pr-3">
            <div class="bg-cyan-100 text-gray-900 rounded-sm  p-2 m-1 w-full">
                <strong>{{ $message }}</strong>
            </div>
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 m-1 mb-4">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-1 pr-3">
            <div class="bg-red-100 text-gray-900 rounded-sm  p-2 m-1 w-full">
                Please check the form below for errors
            </div>
        </div>
    </div>
@endif
