@extends('installer::layouts.master')

@section('title', 'Auth')

@section('content')
    <div class="content-container">
        <div class="flex-container">
            <h1 class="poppins text-white">{{ __('installer::general.addauth') }}</h1>
            <div class="break"></div>
            <form method="POST" action="/installer/server/addauth" class="mt-25">
                @csrf

                <h3 class="category mt-25"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="settings"></i> Auth {{ __('installer::general.database') }}</span></h3>
                 <!-- Database Settings -->
                <div class="mt-4">
                    <div class="group">
                        <!-- Database Hostname -->
                        <div class="group-item">
                            <x-installer::label for="dbhost" :value="__('installer::general.database_host')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="dbhost" id="dbhost" type="text" placeholder="127.0.0.1" />
                        </div>
                        <!-- Database Port -->
                        <div class="group-item ml-10" style="border-left: 10px solid transparent">
                            <x-installer::label for="dbport" :value="__('installer::general.database_port')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="dbport" id="dbport" type="text" placeholder="3306" />
                        </div>
                    </div>
                    <!-- Database Name -->
                    <div class="">
                            <x-installer::label for="dbname" :value="__('installer::general.database_name')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="dbname" id="dbname" type="text" placeholder="warriorcms" />
                    </div>
                    <div class="group mt-4 mb-4">
                        <!-- Database Username -->
                        <div class="group-item">
                            <x-installer::label for="dbuser" :value="__('installer::general.database_user')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="dbuser" id="dbuser" type="text" placeholder="admin" />
                        </div>
                        <!-- Database Password -->
                        <div class="group-item ml-10" style="border-left: 10px solid transparent">
                            <x-installer::label for="dbpass" :value="__('installer::general.database_pass')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="dbpass" id="dbpass" type="password" placeholder="1234" />
                        </div>
                    </div>
                    <x-installer::label for="authtype" :value="__('installer::general.authtype')" class="poppins mt-10" />
                    <div class="break"></div>
                    <div class="select-wrapper mb-10">
                        <select class="select text-white full" name="authtype" id="authtype">
                            <option class="text-black" value="bnet">Battlenet</option>
                            <option class="text-black" value="hex">Hex</option>
                            <option class="text-black" value="srp6">SRP6</option>
                            <option class="text-black" value="old">Old TrinityCore</option>
                        </select>
                    </div>
                    <x-installer::label for="exp" :value="__('installer::general.expansion')" class="poppins mt-10" />
                    <div class="break"></div>
                    <div class="select-wrapper mb-10">
                        <select class="select text-white full" name="exp" id="exp">
                            <option class="text-black" value=0>Classic</option>
                            <option class="text-black" value=1>The Burning Crusade (TBC)</option>
                            <option class="text-black" value=2>Wrath of the Lichking (WOTLK)</option>
                            <option class="text-black" value=3>Cataclysm</option>
                            <option class="text-black" value=4>Mist of Pandaria (MOP)</option>
                            <option class="text-black" value=5>Warlords of Draenor (WOD)</option>
                            <option class="text-black" value=6>Legion</option>
                            <option class="text-black" value=7>Battle for Azeroth (BFA)</option>
                            <option class="text-black" value=8>Shadowlands</option>
                        </select>
                    </div>
                </div>
                <x-installer::button class="mt-25 full submit text-white mb-4">
                <span class="poppins text-uppercase text-bold">{{ __('installer::general.add') }}</span>
                </x-installer::button>
            </form>
            <x-installer::button class="mt-25 half submit text-white poppins mb-4" onclick="location.href = '/installer/server'">
            {{ __('installer::general.back') }}
            </x-installer::button>
        </div>
    </div>
@endsection