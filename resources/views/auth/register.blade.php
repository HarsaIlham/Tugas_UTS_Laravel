@extends('components.template')
@section('title')
    Register
@endsection
@section('content')

    <div class="h-screen bg-gradient-to-t from-teal-800 to-fuchsia-800 flex justify-center items-center">
        <div class="lg:w-2/5 md:w-1/2 w-2/3 mt-10">
            <form action="{{ route('register') }}" method="POST" id="regis" class="bg-gray-600 p-5 rounded-lg shadow-lg min-w-full">
                <div class="font-medium self-center text-xl sm:text-2xl uppercase text-white text-center">REGISTER</div>
                <div class="relative mt-2 h-px bg-gray-300"></div>
                <div>
                    <label class="text-white font-semibold block my-3 text-md" for="username">Username</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="username"
                        id="username" placeholder="Username" required/>
                </div>
                <div>
                    <label class="text-white font-semibold block my-3 text-md" for="email">Email</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email"
                        id="email" placeholder="@E-mail Address" required/>
                </div>
                <div>
                    <label class="text-white font-semibold block my-3 text-md" for="confirm">Phone</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="confirm"
                        id="phone" placeholder="Phone Number" required/>
                </div>
                <div>
                    <label class="text-white font-semibold block my-3 text-md" for="password">Password</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password"
                        id="password" placeholder="Password" required/>
                </div>
                <button type="submit"
                    class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans hover:bg-white transition duration-150 ease-in hover:text-indigo-600">Register</button>
                <a href="login">
                    <button type="button" class="w-full flex items-center justify-center focus:outline-none mt-6 mb-3 bg-green-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans hover:bg-white transition duration-150 ease-in hover:text-green-600">
                        <span class="mr-2 uppercase">Login</span>
                                <span>
                                    <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                    </button>
                </a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const form = document.getElementById('regis');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Registration Successful!',
                icon: 'success',
                confirmButtonText: 'Okay'
            });
            form.reset();
        });
    </script>
@endsection
