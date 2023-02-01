<x-app-layout>

<div class="flex flex-wrap bg-gray-100 w-full h-screen">
    <div class="w-3/12 bg-white rounded p-3 shadow-lg">
        <div class="flex items-center space-x-4 p-2 mb-5">
            <img class="h-12 rounded-full" src="https://www.nicepng.com/png/detail/128-1280406_view-user-icon-png-user-circle-icon-png.png" alt="James Bhatta">
            <div>
                <x-dropdown align="left" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                <span class="text-sm tracking-wide flex items-center space-x-1">
                    <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg><span class="text-gray-600">Verified</span>
                </span>
            </div>
        </div>
        <ul class="space-y-2 text-sm">
            <li>
                <a href="/dashboard" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <span>{{ ('Dashboard') }}</span>
                </a>
            </li>
            <li>
                
                <a href="" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 ">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                    </span>
                    <span>Announcement</span>
                </a>
            </li>
            <li>
                
                <a href="/users" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <span>Users</span>
                </a>
            </li>
        </ul>
    </div>
<!-- ======= content ======= -->
    <div class="w-9/12">
        <div class="p-4 text-gray-500">
        <section class="section main-section">
            <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
              <div class="card">
                <div class="card-content">
                  <div class="flex items-center justify-between">
                    <div class="widget-label">
                      <h3>
                        Clients
                      </h3>
                      <h1>
                        512
                      </h1>
                    </div>
                    <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-content">
                  <div class="flex items-center justify-between">
                    <div class="widget-label">
                      <h3>
                        Sales
                      </h3>
                      <h1>
                        $7,770
                      </h1>
                    </div>
                    <span class="icon widget-icon text-blue-500"><i class="mdi mdi-cart-outline mdi-48px"></i></span>
                  </div>
                </div>
              </div>
        
              <div class="card">
                <div class="card-content">
                  <div class="flex items-center justify-between">
                    <div class="widget-label">
                      <h3>
                        Performance
                      </h3>
                      <h1>
                        256%
                      </h1>
                    </div>
                    <span class="icon widget-icon text-red-500"><i class="mdi mdi-finance mdi-48px"></i></span>
                  </div>
                </div>
              </div>
            </div>
        
            <div class="card mb-6">
              <header class="card-header">
                <p class="card-header-title">
                  <span class="icon"><i class="mdi mdi-finance"></i></span>
                  Performance
                </p>
                <a href="#" class="card-header-icon">
                  <span class="icon"><i class="mdi mdi-reload"></i></span>
                </a>
              </header>
              <div class="card-content">
                <div class="chart-area">
                  <div class="h-full">
                    <div class="chartjs-size-monitor">
                      <div class="chartjs-size-monitor-expand">
                        <div></div>
                      </div>
                      <div class="chartjs-size-monitor-shrink">
                        <div></div>
                      </div>
                    </div>
                    <canvas id="big-line-chart" width="2992" height="1000" class="chartjs-render-monitor block" style="height: 400px; width: 1197px;"></canvas>
                  </div>
                </div>
              </div>
            </div>
        
        
           
        
        </div>
    </div>
</div>
</x-app-layout>
