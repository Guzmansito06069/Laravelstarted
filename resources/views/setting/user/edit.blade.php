<x-app-layout>
    <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
                <div class="bg-white shadow-md rounded my-6 p-5">
                    <form method="POST" action="{{ route('admin.users.update',$user->id)}}">
                        @csrf
                        @method('put')
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col space-y-2">
                                <label for="name" class="text-gray-700 select-none font-medium">User Name</label>
                                <input id="name" type="text" name="name" value="{{ old('name',$user->name) }}"
                                    placeholder="Enter name"
                                    class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                                />
                            </div>

                            <div class="flex flex-col space-y-2">
                                <label for="email" class="text-gray-700 select-none font-medium">Email</label>
                                <input id="email" type="text" name="email" value="{{ old('email',$user->email) }}"
                                    placeholder="Enter email"
                                    class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                                />
                            </div>

                            <div class="flex flex-col space-y-2">
                                <label for="apaterno" class="text-gray-700 select-none font-medium">Apellido Paterno</label>
                                <input id="apaterno" type="text" name="apaterno" value="{{ old('apaterno',$user->apaterno) }}"
                                    placeholder="Enter Apellido Paterno"
                                    class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                                />
                            </div>

                            <div class="flex flex-col space-y-2">
                                <label for="amaterno" class="text-gray-700 select-none font-medium">Apellido Materno</label>
                                <input id="amaterno" type="text" name="amaterno" value="{{ old('amaterno',$user->amaterno) }}"
                                    placeholder="Enter Apellido Materno"
                                    class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                                />
                            </div>

                            <div class="flex flex-col space-y-2">
                                <label for="fechanacimiento" class="text-gray-700 select-none font-medium">Fecha de Nacimiento</label>
                                <input id="fechanacimiento" type="date" name="fechanacimiento" value="{{ old('fechanacimiento',$user->fechanacimiento) }}"
                                    class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                                />
                            </div>

                            <div class="flex flex-col space-y-2 col-span-2">
                                <label for="password" class="text-gray-700 select-none font-medium">Password</label>
                                <input id="password" type="password" name="password" value="{{ old('password') }}"
                                    placeholder="Enter password"
                                    class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                                />
                            </div>

                            <div class="flex flex-col space-y-2 col-span-2">
                                <label for="password_confirmation" class="text-gray-700 select-none font-medium">Confirm Password</label>
                                <input id="password_confirmation" type="password" name="password_confirmation"
                                    placeholder="Re-enter password"
                                    class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                                />
                            </div>

                            <div class="flex flex-col space-y-2 col-span-2">
                                <label for="fechanacimiento" class="text-gray-700 select-none font-medium">Selecciona el rol</label>
                                <select name="roles[]">
                                    @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="text-center mt-16 mb-16">
                            <button type="submit"
                                class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>


