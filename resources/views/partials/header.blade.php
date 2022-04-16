<header class="relative z-30 " x-data="Components.popover({ open: false, focus: true })" x-init="init()"
    @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">


    <div class="{{ is_front_page() || is_home() || is_single() ? "bg-black py-12" : "absolute top-0 left-0 right-0 pt-12  " }}">
    <x-container>
    <nav class="relative flex items-center justify-between" aria-label="Global">


        <div class="flex items-center flex-1">    
        <div class="flex items-center justify-between w-full md:w-auto">
            
            <a class="brand" href="{{ home_url('/') }}">
                <span class="sr-only">  {{ $siteName }}</span>
                <?php
                    $logo = get_field( 'logo', 'options' );
                    if ( $logo ) : ?>
                        <img  class="h-auto w-[235px] object-fit" src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                <?php endif; ?>
            </a>

            <div class="-mr-2 flex items-center md:hidden">
                <button type="button"
                    class="header__hamburger rounded-md p-2 inline-flex items-center justify-center text-primary-400 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white"
                    @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false"
                    :aria-expanded="open.toString()">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-8 w-8" x-description="Heroicon name: outline/menu"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

        </div>
        </div>

        <div class="hidden md:flex md:items-center md:space-x-6">
            {{-- <a href="#" class="text-base font-medium text-white hover:text-gray-300">Product</a --}}
            @if (has_nav_menu('main_navigation'))
                {!! wp_nav_menu([
                    'theme_location' => 'main_navigation', 
                    'menu_class' => 'main-nav lg:flex', 
                    'echo' => false
                ]) !!}
            @endif
        </div>


    </nav>
    </x-container>
    </div>


</header>

<div class="mobile-menu md:hidden bg-primary-800">

    <div class="mobile-menu__close">
        <svg class="w-6 text-white ml-auto" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z" class=""></path></svg>
    </div>

    @if (has_nav_menu('main_navigation'))
    {!! wp_nav_menu([
        'theme_location' => 'main_navigation', 
        'menu_class' => 'mobile-menu__ul', 
        'echo' => false
    ]) !!}
    @endif

</div>