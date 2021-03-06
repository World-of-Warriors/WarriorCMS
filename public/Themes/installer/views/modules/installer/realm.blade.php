@extends('layouts.master')

@section('title', 'Realm')

@section('content')
    <div class="content-container">
        <div class="flex-container">
            <h1 class="poppins text-white">{{ __('installer::general.addrealm') }}</h1>
            <div class="break"></div>
            <form method="POST" action="/installer/server/addrealm" class="mt-25">
                @csrf

                <h3 class="category"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="settings"></i>  {{ __('installer::general.general') }}</span></h3>
                <div class="mt-4">
                    <x-installer::label for="realmname" :value="__('installer::general.realmname')" class="poppins" />
                    <div class="break"></div>
                    <x-installer::input class="input full text-white" name="realmname" id="realmname" type="text" placeholder="WarriorsBFA" />
                </div>

                <div class="mt-4">
                    <x-installer::label for="realmportal" :value="__('installer::general.realmportal')" class="poppins" />
                    <div class="break"></div>
                    <x-installer::input class="input full text-white" name="realmportal" id="realmportal" type="text" placeholder="logon.warriorsbfa.com" />
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

                <div class="mt-4">
                    <x-installer::label for="authref" :value="__('installer::general.authdb')" class="poppins" />
                    <div class="break"></div>
                    <select class="select text-white full" name="authref" id="authref">

                        @if ($connected == false)

                            <option disabled>No db connecton</option>

                            @else

                                @if ($auths->count() > 0 )

                                @foreach($auths as $auth)
                                    <option class="text-black" value="{{ $auth->id }}">{{ $auth->dbname }}</option>
                                @endforeach

                                @else 

                                <option disabled>No auth db entrys</option>

                                @endif

                            @endif
                    </select>
                </div>

                <h3 class="category mt-25"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="settings"></i> Character {{ __('installer::general.database') }}</span></h3>
                 <!-- Database Settings -->
                <div class="mt-4">
                    <div class="group">
                        <!-- Database Hostname -->
                        <div class="group-item">
                            <x-installer::label for="realmdbhost" :value="__('installer::general.database_host')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="realmdbhost" id="realmdbhost" type="text" placeholder="127.0.0.1" />
                        </div>
                        <!-- Database Port -->
                        <div class="group-item ml-10" style="border-left: 10px solid transparent">
                            <x-installer::label for="realmdbport" :value="__('installer::general.database_port')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="realmdbport" id="realmdbport" type="text" placeholder="3306" />
                        </div>
                    </div>
                    <!-- Database Name -->
                    <div class="">
                            <x-installer::label for="realmdbname" :value="__('installer::general.database_name')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="realmdbname" id="realmdbname" type="text" placeholder="warriorcms" />
                    </div>
                    <div class="group mt-4">
                        <!-- Database Username -->
                        <div class="group-item">
                            <x-installer::label for="realmdbuser" :value="__('installer::general.database_user')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="realmdbuser" id="realmdbuser" type="text" placeholder="admin" />
                        </div>
                        <!-- Database Password -->
                        <div class="group-item ml-10" style="border-left: 10px solid transparent">
                            <x-installer::label for="realmdbpass" :value="__('installer::general.database_pass')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="realmdbpass" id="realmdbpass" type="password" placeholder="1234" />
                        </div>
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