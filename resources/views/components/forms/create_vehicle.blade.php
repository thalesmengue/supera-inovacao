<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
        <h3 class="text-2xl font-bold text-center">Register a vehicle</h3>
        <form action="{{route('vehicles.store')}}" method="post">
            @csrf
            <div class="mt-4">
                <div>
                    <label class="block" for="Name">Owner<label>
                            <input type="text" placeholder="owner" name="owner"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("owner"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("owner") }}
                                </div>
                    @endif
                </div>
                <div class="mt-4">
                    <label class="block" for="email">Brand<label>
                            <input type="text" placeholder="brand" name="brand"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("brand"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("brand") }}
                                </div>
                    @endif
                </div>
                <div class="mt-4">
                    <label class="block" for="email">Model<label>
                            <input type="text" placeholder="model" name="model"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("email"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("email") }}
                                </div>
                    @endif
                </div>
                <div class="mt-4">
                    <label class="block" for="email">Version<label>
                            <input type="text" placeholder="version" name="version"
                                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                            @if($errors->has("version"))
                                <div class="text-center text-base text-red-600">
                                    {{ $errors->first("version") }}
                                </div>
                    @endif
                </div>
                <div class="mt-4">
                    <label class="block" for="email">Registration Plate<label>
                            <input type="text" placeholder="plate" name="plate"
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
