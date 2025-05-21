<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <x-nav sticky full-width>

        <x-slot:brand>
            {{-- Drawer toggle for "main-drawer" --}}
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-icon name="o-bars-3" class="cursor-pointer" />
            </label>

            {{-- Brand --}}
            <x-button label="Home" icon="o-home" link="/" class="btn-ghost btn-sm" responsive />
        </x-slot:brand>

        {{-- Right side actions --}}
        <x-slot:actions>
            <x-button label="Welcome" icon="o-envelope" link="welcome" class="btn-ghost btn-sm" responsive />
            <x-button label="volttest" icon="o-bell" link="volttest" class="btn-ghost btn-sm" responsive />
        </x-slot:actions>
    </x-nav>
</div>