<header class="pointer-events-none relative z-50 flex flex-none flex-col" style="height:var(--header-height);margin-bottom:var(--header-mb)">
    <div class="top-0 z-10 h-16 pt-6" style="position:var(--header-position)">
        <div class="sm:px-8 top-[var(--header-top,theme(spacing.6))] w-full" style="position:var(--header-inner-position)">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
                <div class="relative px-4 sm:px-8 lg:px-12">
                    <div class="mx-auto max-w-2xl lg:max-w-5xl">
                        <div class="relative flex gap-4">
                            <div class="flex flex-1">
                                <div class="h-10 w-10 rounded-full">
                                    <a aria-label="Home" class="pointer-events-auto" href="{{ route('home') }}">
                                        <img alt="" fetchpriority="high" width="512" height="512" decoding="async" class="rounded-full bg-zinc-100 object-cover dark:bg-zinc-800 h-10 w-10" style="color:transparent" sizes="2.25rem" src="/img/bob.jpeg">
                                    </a>
                                </div>
                            </div>
                            <div class="flex flex-1 justify-end md:justify-center">
                                <div class="pointer-events-auto md:hidden" x-data="{ open: false }">
                                    <button @click="showModal = true" class="group flex items-center rounded-full bg-white/90 px-4 py-2 text-sm font-medium text-zinc-800 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10 dark:hover:ring-white/20" type="button" aria-expanded="false">
                                        Menu
                                        <svg viewBox="0 0 8 6" aria-hidden="true" class="ml-3 h-auto w-2 stroke-zinc-500 group-hover:stroke-zinc-700 dark:group-hover:stroke-zinc-400">
                                            <path d="M1.75 1.75 4 4.25l2.25-2.5" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <!--Dialog for mobile nav-->
                                    <div x-show="showModal" :class="{ showModal }" class="fixed w-full h-full top-0 left-0 flex z-50 bg-zinc-800/40 backdrop-blur-sm dark:bg-black/80" x-show="showModal" @click.away="showModal = false" x-transition:enter="ease-out duration-150" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                                        <div class="fixed inset-x-4 top-8 z-60 origin-top rounded-3xl bg-white p-8 ring-1 ring-zinc-900/5 dark:bg-zinc-900 dark:ring-zinc-800">
                                            <div class="flex flex-row-reverse items-center justify-between">
                                                <button @click="showModal = false" aria-label="Close menu" class="-m-1 p-1" type="button" data-headlessui-state="open">
                                                    <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 text-zinc-500 dark:text-zinc-400">
                                                        <path d="m17.25 6.75-10.5 10.5M6.75 6.75l10.5 10.5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </button>
                                                <h2 class="text-sm font-medium text-zinc-600 dark:text-zinc-400">Navigation</h2>
                                            </div>
                                            <nav class="mt-6">
                                                <ul class="-my-2 divide-y divide-zinc-100 text-base text-zinc-800 dark:divide-zinc-100/5 dark:text-zinc-300">
                                                    <li><a class="block py-2" href="{{ route('home') }}">Home</a></li>    
                                                    <li><a class="block py-2" href="{{ route('about') }}">About</a></li>
                                                    <li><a class="block py-2" href="/whitepaper.pdf">Whitepaper</a></li>
                                                    <li><a class="block py-2" href="{{ route('memes') }}">Memes</a></li>
                                                    <li><a class="block py-2" href="{{ route('chart') }}">Chart</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div style="position:fixed;top:1px;left:1px;width:1px;height:0;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0;display:none"></div>
                                <nav x-show="open" class="pointer-events-auto hidden md:block">
                                    <ul class="flex rounded-full bg-white/90 px-3 text-sm font-medium text-zinc-800 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10">
                                        {{-- <li><a class="relative block px-3 py-2 transition text-teal-500 dark:text-teal-400" href="{{ route('about') }}">About<span class="absolute inset-x-1 -bottom-px h-px bg-gradient-to-r from-teal-500/0 via-teal-500/40 to-teal-500/0 dark:from-teal-400/0 dark:via-teal-400/40 dark:to-teal-400/0"></span></a></li> --}}
                                        <li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400" href="{{ route('home') }}">Home</a></li>
                                        <li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400" href="{{ route('about') }}">About</a></li>
                                        <li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400" href="/whitepaper.pdf">Whitepaper</a></li>
                                        <li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400" href="{{ route('memes') }}">Memes</a></li>
                                        <li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400" href="{{ route('chart') }}">Chart</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="flex justify-end md:flex-1">
                                <div class="pointer-events-auto">
                                    <button @click="darkMode = !darkMode" type="button" aria-label="Switch to light theme" class="group rounded-full bg-white/90 px-3 py-2 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur transition dark:bg-zinc-800/90 dark:ring-white/10 dark:hover:ring-white/20">
                                        <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 fill-zinc-100 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700 dark:hidden [@media(prefers-color-scheme:dark)]:fill-teal-50 [@media(prefers-color-scheme:dark)]:stroke-teal-500 [@media(prefers-color-scheme:dark)]:group-hover:fill-teal-50 [@media(prefers-color-scheme:dark)]:group-hover:stroke-teal-600">
                                            <path d="M8 12.25A4.25 4.25 0 0 1 12.25 8v0a4.25 4.25 0 0 1 4.25 4.25v0a4.25 4.25 0 0 1-4.25 4.25v0A4.25 4.25 0 0 1 8 12.25v0Z"></path>
                                            <path d="M12.25 3v1.5M21.5 12.25H20M18.791 18.791l-1.06-1.06M18.791 5.709l-1.06 1.06M12.25 20v1.5M4.5 12.25H3M6.77 6.77 5.709 5.709M6.77 17.73l-1.061 1.061" fill="none"></path>
                                        </svg><svg viewBox="0 0 24 24" aria-hidden="true" class="hidden h-6 w-6 fill-zinc-700 stroke-zinc-500 transition dark:block [@media(prefers-color-scheme:dark)]:group-hover:stroke-zinc-400 [@media_not_(prefers-color-scheme:dark)]:fill-teal-400/10 [@media_not_(prefers-color-scheme:dark)]:stroke-teal-500">
                                            <path d="M17.25 16.22a6.937 6.937 0 0 1-9.47-9.47 7.451 7.451 0 1 0 9.47 9.47ZM12.75 7C17 7 17 2.75 17 2.75S17 7 21.25 7C17 7 17 11.25 17 11.25S17 7 12.75 7Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>