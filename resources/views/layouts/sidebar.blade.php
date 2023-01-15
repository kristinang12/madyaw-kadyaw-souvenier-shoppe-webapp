

                <!-- Navigation Links -->
                <div class="w-full flex flex-col grap-5 p-4">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="url('add-announcement')" :active="request()->routeIs('add-announcement')">
                        {{ __('Add Announcement') }}
                    </x-nav-link>
                </div>
