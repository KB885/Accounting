            <header class="flex-grow">
                <h1 class="py-6 px-4 text-gray-100 text-base font-medium">Banking Inc.</h1>
            </header>
            <nav class="overflow-y-auto h-full flex-grow">
                <header>
                    <span class="text-sm text-gray-500 block font-medium py-4 px-6 uppercase">overview</span>
                </header>
                <ul class="font-medium px-4 text-left">
                    <li class="text-gray-100">
                        <a href="{{ route('company.show', $team) }}"
                            class=" rounded text-sm text-left block py-3 px-6 hover:bg-gray-800 w-full text-gray-400 hover:text-gray-100  focus:outline-none">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                                </svg>
                                <span class="">Overblik</span>
                            </div>
                        </a>
                        <a href="{{ route('invoice.index', $team)}}"
                            class="rounded text-sm text-left block py-3 px-6 hover:bg-gray-800 w-full text-gray-400 hover:text-gray-100 focus:outline-none">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                                <span class="">Faktura</span>
                            </div>
                        </a>
                        <a href="{{ route('accounting.index', $team) }}"
                            class="rounded text-sm text-left block py-3 px-6 hover:bg-gray-800 w-full text-gray-400 hover:text-gray-100  focus:outline-none">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="">Bogføring</span>
                            </div>
                        </a>
                        <a href="{{ route('contact.index', $team) }}"
                            class="rounded text-sm text-left block py-3 px-6 hover:bg-gray-800 w-full text-gray-400 hover:text-gray-100  focus:outline-none">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                    </path>
                                </svg>
                                <span class="">Kontakter</span>
                            </div>
                        </a>
                        <a href="{{ route('bank.index', $team) }}"
                            class="rounded text-sm text-left block py-3 px-6 hover:bg-gray-800 w-full text-gray-400 hover:text-gray-100  focus:outline-none">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg> <span class="">Bank</span>
                            </div>
                        </a>
                        <a href="{{ route('integration.index', $team) }}"
                            class="rounded text-sm text-left block py-3 px-6 hover:bg-gray-800 w-full text-gray-400 hover:text-gray-100  focus:outline-none">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5">
                                    </path>
                                </svg>
                                <span class="">Integrationer</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>

            <footer class="p-4 bg-dark-3 border-t border-solid border-gray-800">
                <h4 class="pb-2 text-gray-100 text-sm">Banking LTD.</h4>
                <p class="text-gray-500 text-xs leading-normal">
                    Version 1.0.0a</p>
            </footer>
