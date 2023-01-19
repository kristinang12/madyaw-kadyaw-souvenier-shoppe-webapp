

                <!-- Navigation Links -->
        <div class="grap-5 p-4 ">
                   
                        
                            <div class="flex text-white origin-left font-medium text-xl duration-300 p-2">
                                
                                <svg class="fill-current h-4 w-4 text-yellow" fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M437.02,74.98C388.667,26.628,324.38,0,256,0S123.333,26.628,74.98,74.98C26.628,123.333,0,187.62,0,256 s26.628,132.667,74.98,181.02C123.333,485.372,187.62,512,256,512s132.667-26.628,181.02-74.98 C485.372,388.667,512,324.38,512,256S485.372,123.333,437.02,74.98z M256,478.609c-122.746,0-222.609-99.862-222.609-222.609 S133.254,33.391,256,33.391S478.609,133.254,478.609,256S378.746,478.609,256,478.609z"></path> </g> </g> <g> <g> <rect x="239.304" y="66.445" width="33.391" height="54.973"></rect> </g> </g> <g> <g> <rect x="144.041" y="97.397" transform="matrix(0.809 -0.5878 0.5878 0.809 -42.7066 118.3336)" width="33.391" height="54.973"></rect> </g> </g> <g> <g> <rect x="85.16" y="178.422" transform="matrix(0.309 -0.9511 0.9511 0.309 -125.4502 239.1576)" width="33.392" height="54.975"></rect> </g> </g> <g> <g> <rect x="74.387" y="289.382" transform="matrix(0.9511 -0.309 0.309 0.9511 -89.5896 46.456)" width="54.975" height="33.392"></rect> </g> </g> <g> <g> <rect x="393.426" y="278.583" transform="matrix(0.309 -0.9511 0.9511 0.309 -7.6944 601.5519)" width="33.393" height="54.975"></rect> </g> </g> <g> <g> <rect x="382.634" y="189.215" transform="matrix(0.9511 -0.309 0.309 0.9511 -43.5552 136.799)" width="54.975" height="33.393"></rect> </g> </g> <g> <g> <rect x="323.78" y="108.202" transform="matrix(0.5878 -0.809 0.809 0.5878 43.7479 335.6581)" width="54.973" height="33.391"></rect> </g> </g> <g> <g> <path d="M169.275,335.566v102.047h173.449V335.566H169.275z M309.333,404.222H202.666v-35.265h0h106.666V404.222z"></path> </g> </g> <g> <g> <path d="M272.696,233.859v-82.237h-33.391v82.237c-15.303,6.516-26.06,21.704-26.06,39.359c0,23.575,19.18,42.755,42.755,42.755 s42.755-19.18,42.755-42.755C298.755,255.564,287.999,240.376,272.696,233.859z M256,282.583c-5.163,0-9.364-4.201-9.364-9.364 c0-5.163,4.201-9.364,9.364-9.364c5.163,0,9.364,4.201,9.364,9.364C265.364,278.382,261.163,282.583,256,282.583z"></path> </g> </g> </g></svg>
                                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                    {{ __('Dashboard') }}
                                </x-nav-link>
                               
                            </div>
                                
                            <div class="flex text-white origin-left font-medium text-xl duration-300 p-2">
                                <svg  class="fill-current h-4 w-4"fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46"></path>
                                  </svg>
                                  <x-nav-link :href="url('add-announcement')" :active="request()->routeIs('add-announcement')">
                                    {{ __('Announcement') }}
                                </x-nav-link>
                            </div>
                            <div class="flex text-white origin-left font-medium text-xl duration-300 p-2">
                                <svg  class="fill-current h-4 w-4"fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46"></path>
                                  </svg>
                                  <x-nav-link :href="url('list-announcement')" :active="request()->routeIs('list-announcement')">
                                    {{ __('List Announcement') }}
                                </x-nav-link>
                            </div>

                            <div class="flex text-white origin-left font-medium text-xl duration-300 p-2">
                                @if(Auth::user()->is_admin)
                                <svg class=" fill-current h-4 w-4"id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 120.26"><title>admin</title><path d="M47,70.06a19,19,0,0,1-1.66-2c-1.23-1.68-2.37-3.44-3.49-5.21L36.35,54c-2.1-3.1-3.21-5.86-3.21-8.08s1.25-5.12,3.76-5.75a152.65,152.65,0,0,1-.22-15.93,21.05,21.05,0,0,1,.66-3.65A21,21,0,0,1,46.75,8.64,24.2,24.2,0,0,1,51.84,6.2C55.05,5,53.5.12,57,0,65.34-.22,79,6.87,84.26,12.62a20.91,20.91,0,0,1,5.42,13.61l-.33,14.49a4.12,4.12,0,0,1,3,3c.44,1.77,0,4.2-1.55,7.64h0c0,.11-.11.11-.11.22L84.37,62c-1.44,2.36-2.92,4.75-4.58,7-2,2.63-3.59,2.16-1.91,4.68a22,22,0,0,0,8.29,6.66,8.55,8.55,0,0,0-1.19.22h0A7.29,7.29,0,0,0,80.38,84l-2.27,3.93a7.63,7.63,0,0,0-.93,2.77h0a7.61,7.61,0,0,0,.18,2.84l0,.18a7.45,7.45,0,0,0,1.27,2.57l.06.09q-.24.15-.48.33a7.3,7.3,0,0,0-2,2.26,7.39,7.39,0,0,0-.95,2.85,7.93,7.93,0,0,0,.2,2.86h0l1.15,4.37a5.51,5.51,0,0,0,.37,1,7.55,7.55,0,0,0,1,1.73c.1.13.21.25.32.37s.37.38.56.56H0c0-33,35.5-22.55,47.58-39.15,1.39-2.08,1-1.88-.55-3.55Zm74.74,23.68a1.92,1.92,0,0,0-.91-1.2,1.86,1.86,0,0,0-1.48-.18l-2.87.76a14.86,14.86,0,0,0-1.06-1.73,18.15,18.15,0,0,0-1.28-1.59L115.78,87a1.9,1.9,0,0,0-.71-2.65l-3.5-2a1.89,1.89,0,0,0-1.46-.2,1.87,1.87,0,0,0-1.18.91l-1.48,2.55a14.06,14.06,0,0,0-2-.45,15.22,15.22,0,0,0-2-.19l-.87-3.15a1.78,1.78,0,0,0-.87-1.17,1.89,1.89,0,0,0-1.49-.19l-3.87,1a1.9,1.9,0,0,0-1.19.91A1.86,1.86,0,0,0,95,83.88l.77,2.87A13.36,13.36,0,0,0,94,87.81a16.31,16.31,0,0,0-1.6,1.28l-2.79-1.62a1.9,1.9,0,0,0-1.47-.2,1.85,1.85,0,0,0-1.18.92l-2,3.5a1.87,1.87,0,0,0-.19,1.45,1.81,1.81,0,0,0,.9,1.19l2.55,1.48a15.58,15.58,0,0,0-.45,2,15.35,15.35,0,0,0-.2,2l-3.13.83a1.76,1.76,0,0,0-1.18.88,1.9,1.9,0,0,0-.19,1.48l1,3.9a1.91,1.91,0,0,0,.92,1.16,1.88,1.88,0,0,0,1.46.22l2.89-.79a14.86,14.86,0,0,0,1.06,1.73c.4.55.83,1.08,1.28,1.59l-1.61,2.79a1.91,1.91,0,0,0-.21,1.47,1.88,1.88,0,0,0,.92,1.18l3.5,2a2,2,0,0,0,2.65-.71L98.44,115a14.1,14.1,0,0,0,2,.46,17.27,17.27,0,0,0,2,.2l.83,3.13a1.82,1.82,0,0,0,.89,1.19,1.77,1.77,0,0,0,1.47.17l3.91-1a2,2,0,0,0,1.37-2.39l-.79-2.88a14.07,14.07,0,0,0,1.73-1.06,19.77,19.77,0,0,0,1.59-1.28l2.79,1.61a1.92,1.92,0,0,0,2.65-.71l2-3.5a2,2,0,0,0-.71-2.65l-2.55-1.47a17.82,17.82,0,0,0,.44-2,14.25,14.25,0,0,0,.2-2l3.14-.86a1.79,1.79,0,0,0,1.18-.88,1.86,1.86,0,0,0,.19-1.48l-1-3.87Zm-14.86-.29a8,8,0,0,1,2.36,2.08,7.78,7.78,0,0,1,1.55,5.76A8,8,0,0,1,105,108a7.87,7.87,0,0,1-3,.2,8.06,8.06,0,0,1-5.35-3.09,7.79,7.79,0,0,1-1.54-5.75A8,8,0,0,1,98.16,94a7.78,7.78,0,0,1,5.76-1.55,8.09,8.09,0,0,1,3,1Z"/>
                                </svg>
                                
                                  <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                                    {{ __('Admin') }}
                                </x-nav-link>
                                @endif

                            </div>
                            <div class="flex text-white origin-left font-medium text-xl duration-300 p-2">
                                @if(Auth::user()->is_admin)
                                        <svg class=" fill-current h-4 w-4"version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                            <g><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"><path d="M4573.9,5015c-968.7-85.4-1848.2-431-2603.4-1027c-211.6-167-627.1-594.1-790.1-811.5c-671.7-895-1009.5-1951.1-968.7-3022.7C260.1-1044,729.9-2137,1566.7-2993.1c745.5-761,1803.5-1269.7,2861.6-1376.4c118.4-11.6,273.7-19.4,347.5-15.5l134,5.8l215.5,790.1l215.5,792.1l374.7,374.7l374.7,376.6l-44.6,75.7c-40.8,67.9-44.6,102.9-50.5,368.9l-7.8,293.1l126.2,182.5c147.5,213.5,295.1,487.3,380.5,706.7c52.4,134,71.8,161.1,139.8,200c99,56.3,203.8,198,242.7,328.1c23.3,83.5,29.1,184.4,23.3,533.9c-5.8,429-5.8,434.9-58.2,533.9c-29.1,54.4-62.1,106.8-73.8,112.6c-15.5,9.7-21.4,192.2-17.5,568.8c2,349.4-5.8,590.2-19.4,646.5C6583.2,3130,6125,3508.5,5379.5,3623.1c-269.9,40.8-863.9,25.2-1096.9-29.1c-526.1-124.3-869.7-366.9-1065.8-759.1C3094.5,2594.1,3079,2483.5,3079,1870v-549.4l-58.2-91.3c-87.4-137.8-101-242.7-93.2-687.2c5.8-380.5,7.8-401.9,56.3-504.8c27.2-58.2,75.7-133.9,106.8-167c38.8-40.8,79.6-128.1,120.4-252.4c79.6-238.8,221.3-528.1,363-743.5l106.8-165v-281.5c0-314.5-21.4-392.2-128.1-489.2c-31.1-27.2-374.7-223.3-764.9-434.9c-390.2-211.6-728-398-753.2-413.5c-42.7-27.2-50.5-21.4-213.6,143.7C1139.6-2072.9,706.6-1193.5,586.3-257.8C547.4,49,545.5,567.3,584.3,864.4c124.2,947.4,533.9,1797.7,1193.9,2479.1c665.9,691.1,1498.7,1127.9,2455.8,1289.1c300.9,50.5,1096.9,48.5,1378.4-1.9c648.4-116.5,1219.2-343.6,1725.9-687.2c267.9-178.6,456.2-335.9,693.1-580.5c236.8-242.7,359.2-392.2,528.1-646.5c452.3-685.3,700.8-1483.2,718.3-2318l5.8-289.3l87.4-56.3c46.6-33,116.5-89.3,155.3-126.2l69.9-66l11.6,102.9c7.8,56.3,13.6,207.7,13.6,335.9c0,1225-467.9,2393.7-1308.5,3267.3c-739.7,766.9-1683.2,1256.1-2729.6,1411.4C5387.3,5007.3,4752.5,5030.6,4573.9,5015z"/><path d="M8650.7-310.2c-27.2-7.8-75.7-29.1-106.8-46.6c-33-17.5-662-636.8-1401.7-1376.4L5798.8-3078.6l-178.6-660.1c-168.9-623.2-182.5-664-246.5-731.9c-85.4-91.2-95.1-182.5-23.3-258.2c69.9-73.8,172.8-67.9,267.9,17.5c66,60.2,128.1,81.5,722.2,244.6c357.2,99,664,186.4,679.5,194.1c17.5,9.7,627.1,615.4,1355.1,1347.3c834.8,840.6,1337.6,1360.9,1362.9,1409.4c60.2,116.5,69.9,244.6,29.1,380.5c-31.1,106.8-52.4,133.9-345.6,431C9248.7-529.5,9072-368.4,9029.3-347C8945.8-302.4,8734.2-283,8650.7-310.2z M9161.3-929.5c380.5-378.6,378.6-343.6,23.3-700.8l-262.1-264l-363,363l-365,365L8446.9-912c139.8,139.8,269.9,262.1,291.2,269.8C8817.7-607.2,8875.9-646,9161.3-929.5z M8320.7-1777.8l359.2-359.2l-879.4-879.4l-877.5-877.5l-363,365l-365,363l873.6,873.6c479.5,479.5,877.5,873.6,883.3,873.6S8122.7-1579.8,8320.7-1777.8z M6573.5-4041.5c0-11.7-724.1-211.6-733.8-203.8c-2,3.9,40.8,172.8,97.1,378.6l100.9,372.7l267.9-267.9C6453.1-3909.5,6573.5-4033.7,6573.5-4041.5z"/></g></g>
                                        </svg>
                                        <x-nav-link :href="route('list.dashboard')" :active="request()->routeIs('list.dashboard')">
                                            {{ __('List of User') }}
                                        </x-nav-link>
                                @endif
                            
                            </div>
                            
                            
                            <div class="flex text-white origin-left font-medium text-xl duration-300 p-2">
                                <svg class=" fill-current h-4 w-4"version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                    <g><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"><path d="M4573.9,5015c-968.7-85.4-1848.2-431-2603.4-1027c-211.6-167-627.1-594.1-790.1-811.5c-671.7-895-1009.5-1951.1-968.7-3022.7C260.1-1044,729.9-2137,1566.7-2993.1c745.5-761,1803.5-1269.7,2861.6-1376.4c118.4-11.6,273.7-19.4,347.5-15.5l134,5.8l215.5,790.1l215.5,792.1l374.7,374.7l374.7,376.6l-44.6,75.7c-40.8,67.9-44.6,102.9-50.5,368.9l-7.8,293.1l126.2,182.5c147.5,213.5,295.1,487.3,380.5,706.7c52.4,134,71.8,161.1,139.8,200c99,56.3,203.8,198,242.7,328.1c23.3,83.5,29.1,184.4,23.3,533.9c-5.8,429-5.8,434.9-58.2,533.9c-29.1,54.4-62.1,106.8-73.8,112.6c-15.5,9.7-21.4,192.2-17.5,568.8c2,349.4-5.8,590.2-19.4,646.5C6583.2,3130,6125,3508.5,5379.5,3623.1c-269.9,40.8-863.9,25.2-1096.9-29.1c-526.1-124.3-869.7-366.9-1065.8-759.1C3094.5,2594.1,3079,2483.5,3079,1870v-549.4l-58.2-91.3c-87.4-137.8-101-242.7-93.2-687.2c5.8-380.5,7.8-401.9,56.3-504.8c27.2-58.2,75.7-133.9,106.8-167c38.8-40.8,79.6-128.1,120.4-252.4c79.6-238.8,221.3-528.1,363-743.5l106.8-165v-281.5c0-314.5-21.4-392.2-128.1-489.2c-31.1-27.2-374.7-223.3-764.9-434.9c-390.2-211.6-728-398-753.2-413.5c-42.7-27.2-50.5-21.4-213.6,143.7C1139.6-2072.9,706.6-1193.5,586.3-257.8C547.4,49,545.5,567.3,584.3,864.4c124.2,947.4,533.9,1797.7,1193.9,2479.1c665.9,691.1,1498.7,1127.9,2455.8,1289.1c300.9,50.5,1096.9,48.5,1378.4-1.9c648.4-116.5,1219.2-343.6,1725.9-687.2c267.9-178.6,456.2-335.9,693.1-580.5c236.8-242.7,359.2-392.2,528.1-646.5c452.3-685.3,700.8-1483.2,718.3-2318l5.8-289.3l87.4-56.3c46.6-33,116.5-89.3,155.3-126.2l69.9-66l11.6,102.9c7.8,56.3,13.6,207.7,13.6,335.9c0,1225-467.9,2393.7-1308.5,3267.3c-739.7,766.9-1683.2,1256.1-2729.6,1411.4C5387.3,5007.3,4752.5,5030.6,4573.9,5015z"/><path d="M8650.7-310.2c-27.2-7.8-75.7-29.1-106.8-46.6c-33-17.5-662-636.8-1401.7-1376.4L5798.8-3078.6l-178.6-660.1c-168.9-623.2-182.5-664-246.5-731.9c-85.4-91.2-95.1-182.5-23.3-258.2c69.9-73.8,172.8-67.9,267.9,17.5c66,60.2,128.1,81.5,722.2,244.6c357.2,99,664,186.4,679.5,194.1c17.5,9.7,627.1,615.4,1355.1,1347.3c834.8,840.6,1337.6,1360.9,1362.9,1409.4c60.2,116.5,69.9,244.6,29.1,380.5c-31.1,106.8-52.4,133.9-345.6,431C9248.7-529.5,9072-368.4,9029.3-347C8945.8-302.4,8734.2-283,8650.7-310.2z M9161.3-929.5c380.5-378.6,378.6-343.6,23.3-700.8l-262.1-264l-363,363l-365,365L8446.9-912c139.8,139.8,269.9,262.1,291.2,269.8C8817.7-607.2,8875.9-646,9161.3-929.5z M8320.7-1777.8l359.2-359.2l-879.4-879.4l-877.5-877.5l-363,365l-365,363l873.6,873.6c479.5,479.5,877.5,873.6,883.3,873.6S8122.7-1579.8,8320.7-1777.8z M6573.5-4041.5c0-11.7-724.1-211.6-733.8-203.8c-2,3.9,40.8,172.8,97.1,378.6l100.9,372.7l267.9-267.9C6453.1-3909.5,6573.5-4033.7,6573.5-4041.5z"/></g></g>
                                </svg>
                                    
                                    <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-nav-link>
                            </div>
                            
                            <div class="flex text-white origin-below font-medium text-xl duration-300 p-4">
                                <svg class=" fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>

                            </div>
                            <!-- ======= Footer ======= -->
                        <footer id="footer">
                            <div class="container">
                            <div class="copyright">
                                &copy; ITE18 <strong><span>AppDev</span></strong>
                            </div>
                            
                        </footer><!-- End  Footer -->
                    
  
                    
                    
        </div>
