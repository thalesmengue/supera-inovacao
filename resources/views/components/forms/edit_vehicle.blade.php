@props(['vehicle'])
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
        <h3 class="text-2xl font-bold text-center">Edit a vehicle</h3>
        <form action="{{route('vehicles.update', $vehicle->id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mt-4">
                <div>
                    <label class="block" for="owner">Owner<label>
                            <input type="text" placeholder="owner" name="owner" value="{{$vehicle->owner}}" id="owner"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("owner"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("owner") }}
                                </div>
                    @endif
                </div>
                <div class="mt-4">
                    <label class="block" for="brand">Brand<label>
                            <input type="text" placeholder="brand" name="brand" value="{{$vehicle->brand}}" id="brand"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("brand"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("brand") }}
                                </div>
                    @endif
                </div>
                <div class="mt-4">
                    <label class="block" for="model">Model<label>
                            <input type="text" placeholder="model" name="model" value="{{$vehicle->model}}" id="model"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("model"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("model") }}
                                </div>
                    @endif
                </div>
                <div class="mt-4">
                    <label class="block" for="model">Model Year<label>
                            <input type="text" placeholder="model year" name="model_year" value="{{$vehicle->model_year}}" id="model_year"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("model_year"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("model_year") }}
                                </div>
                    @endif
                </div>
                <div class="mt-4">
                    <label class="block" for="version">Version<label>
                            <input type="text" placeholder="version" name="version" value="{{$vehicle->version}}" id="version"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("version"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("version") }}
                                </div>
                    @endif
                </div>
                <div class="mt-4">
                    <label class="block" for="plate">Registration Plate<label>
                            <input type="text" placeholder="plate" name="plate" value="{{$vehicle->plate}}" id="plate"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("plate"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("plate") }}
                                </div>
                    @endif
                </div>
                <div class="flex justify-center items-center">
                    <button class="px-6 py-2 mt-4 text-white bg-indigo-600 rounded-lg hover:bg-indigo-900">register
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
