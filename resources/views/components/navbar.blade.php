<header class="bg-white fixed top-0 z-50 w-full border-b border-gray-100 shadow-sm ">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex-1 md:flex md:items-center md:gap-12">
                <a class="block text-teal-600" href="#">
                    <span class="sr-only">Home</span>
                    <svg class="h-8" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z"
                            fill="currentColor" />
                    </svg>
                </a>
            </div>

            {{-- <div class="md:flex md:items-center md:gap-12">
        <nav aria-label="Global" class="hidden md:block">
          <ul class="flex items-center gap-6 text-sm">
            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> About </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Careers </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> History </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Services </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Projects </a>
            </li>

            <li>
              <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Blog </a>
            </li>
          </ul>
        </nav>

        <div class="flex items-center gap-4">
          <div class="sm:flex sm:gap-4">
            <a
              class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow-sm"
              href="#"
            >
              Login
            </a>

            <div class="hidden sm:flex">
              <a
                class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600"
                href="#"
              >
                Register
              </a>
            </div>
          </div>

          <div class="block md:hidden">
            <button
              class="rounded-sm bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>
    </div> --}}
            <div x-data="{ open: false }" class="md:flex md:items-center md:gap-12">

                <!-- Navigation -->
                <nav aria-label="Global" class="hidden md:block">
                    <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> About </a>
                        </li>
                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Careers </a>
                        </li>
                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> History </a>
                        </li>
                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Services </a>
                        </li>
                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Projects </a>
                        </li>
                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Blog </a>
                        </li>
                    </ul>
                </nav>
                <!-- Mobile Menu -->
                {{-- <div :class="{ 'block': open, 'hidden': !open }" x-show="open" @click.away="open = false"
                    @keydown.escape.window="open = false"
                    class="absolute inset-x-0 top-full z-50 bg-white shadow-lg border-t border-gray-200 transition-all md:hidden">
                    <nav aria-label="Mobile" class="p-4">
                        <ul class="flex flex-col space-y-3 text-md text-center">
                            <li>
                                <a class="block px-4 py-2 rounded hover:bg-gray-100 text-gray-700 transition"
                                    href="#">About</a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 rounded hover:bg-gray-100 text-gray-700 transition"
                                    href="#">Careers</a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 rounded hover:bg-gray-100 text-gray-700 transition"
                                    href="#">History</a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 rounded hover:bg-gray-100 text-gray-700 transition"
                                    href="#">Services</a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 rounded hover:bg-gray-100 text-gray-700 transition"
                                    href="#">Projects</a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 rounded hover:bg-gray-100 text-gray-700 transition"
                                    href="#">Blog</a>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
                <div :class="{ 'block': open, 'hidden': !open }" x-show="open" @click.away="open = false"
                    @keydown.escape.window="open = false"
                    class="absolute inset-x-0 top-full z-50 bg-white shadow-lg border-t border-gray-200 transition-all md:hidden">
                    <nav aria-label="Mobile" class="p-4">
                        <ul class="space-y-1">
                            <li>
                                <a href="#"
                                    class="flex items-center gap-2 rounded-lg bg-gray-100 px-4 py-2 text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5 opacity-75 shadow-sm">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                                    </svg>


                                    <span class="text-sm font-medium"> About </span>
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class="flex items-center gap-2 rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5 opacity-75 shadow-sm">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                    </svg>


                                    <span class="text-sm font-medium"> Careers </span>
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class="flex items-center gap-2 rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5 opacity-75 shadow-sm">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                                    </svg>


                                    <span class="text-sm font-medium"> History </span>
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class="flex items-center gap-2 rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
                                    </svg>


                                    <span class="text-sm font-medium"> Services </span>
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class="flex items-center gap-2 rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="size-5 opacity-75 shadow-sm"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5 opacity-75 shadow-sm">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>


                                    <span class="text-sm font-medium"> Projects </span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center gap-2 rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5 opacity-75 shadow-sm">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                    </svg>


                                    <span class="text-sm font-medium"> Blog </span>
                                </a>
                            </li>
                            <li class="mt-4 sm:hidden">
                                <hr class="border-gray-200" />
                                <div class="mt-4 flex items-center justify-center gap-4">
                                    <a class="inline-block rounded-sm border border-teal-600 bg-teal-600 px-8 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-teal-600 focus:ring-3 focus:outline-hidden"
                                        href="#">
                                        Login
                                    </a>
                                    <a href="#"
                                        class="inline-block rounded-sm border border-teal-600 px-8 py-2 text-sm font-medium text-teal-600 hover:bg-teal-600 hover:text-white focus:ring-3 focus:outline-hidden">Register</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Action buttons + hamburger -->
                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">
                        <div class="hidden sm:flex">
                            <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow-sm"
                                href="#">
                                Login
                            </a>
                        </div>

                        <div class="hidden sm:flex">
                            <button
                                class="btn btn-outline btn-accent rounded-md px-5 py-2.5 text-sm font-medium">Register</button>
                        </div>
                    </div>
                    <!-- Hamburger Button -->
                    <div class="block md:hidden">
                        <button @click="open = !open"
                            class="rounded-sm bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
