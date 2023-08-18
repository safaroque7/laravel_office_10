<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-full">

        <!-- header part -->
        <div class="flex bg-gray-500 justify-between shadow-lg py-5">
            <div class="w-1/6 text-2xl ml-5">
                <h2 class="p-2 text-white hover:underline"> <a href="{{ url('/') }}"> Dashboard </a> </h2>
            </div>
            <div class="w-4/6 flex items-center">
                <div class="w-full">

                    <form action="#">
                        <div class="flex items-center">
                            <div class="w-11/12">
                                <input type="text" name="" id="" placeholder="Search here"
                                    class="p-2 outline-none w-full text-2xl rounded-lg">
                            </div>

                            <div
                                class="w-1/12 flex items-center justify-center cursor-pointer hover:scale-125 duration-500">
                                <a href="#" class="text-white text-5xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="w-1/6 flex justify-center items-center mr-5">
                <h2 class="text-white mr-5 hover:underline"> <a href="#"> S A Faroque </a> </h2>
                <div class="w-10 h-10 overflow-hidden rounded-full">
                    <a href="#"> <img src="{{ url('/images/user.jpeg') }}" alt="user"
                            class="hover:scale-150 ease-in duration-300"> </a>
                </div>
                <span class="text-white ml-3 cursor-pointer relative" id="profileSignoutId"> <svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                    <nav class="list-none absolute bg-gray-500 w-24 mt-4 p-2 rounded-sm navPs" id="prfileAndsignout">
                        <li> <a class="hover:underline" href="#"> Profile </a> </li>
                        <li> <a class="hover:underline" href="#"> Sign Out </a> </li>
                    </nav>
                </span>
            </div>
        </div>

        <!-- body part -->
        <div class="flex">
            <div class="w-1/12 bg-gray-500">
                <nav class="text-white overflow-auto h-screen">

                    <!-- per menu -->
                    <li class="list-none flex border-b last:border-0 py-2 px-2 hover:bg-gray-950 duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                        </svg>
                        <a class="pl-2 block" href="{{ url('/addClients') }}"> Add Clients </a>
                    </li>

                    <!-- per menu -->
                    <li class="list-none flex border-b last:border-0 py-2 px-2 hover:bg-gray-950 duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                        <a class="pl-2 block" href="{{ url('/') }}"> All Clients </a>
                    </li>

                </nav>
            </div>

            <div class="w-11/12 p-2">
                <form method="post" action="{{route('addclients')}}" class="p-5">
                    @csrf
                    <label for="name" class="mb-5 block">
                        Name
                        <input type="text" name="name" id="name" class="addClientForm">
                    </label>

                    <label for="phone" class="mb-5 block">
                        Phone
                        <input type="text" name="phone" id="phone" class="addClientForm">
                    </label>

                    <label for="phone" class="mb-5 block">
                        Email
                        <input type="email" name="email" id="email" class="addClientFormWc">
                    </label>

                    <label for="address" class="mb-5 block">
                        Address
                        <input type="text" name="address" id="address" class="addClientForm">
                    </label>


                    <input type="submit" value="Submit"
                        class="rounded-none bg-gray-500 px-3 py-2 block-inline text-white cursor-pointer hover:bg-green-800 duration-500">
                    <input type="submit" value="Cancel"
                        class="rounded-none bg-gray-500 px-3 py-2 block-inline text-white cursor-pointer hover:bg-red-800 duration-500">
                </form>
            </div>


        </div>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
