<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class('bg-background-base max-w-[100vw] overflow-x-hidden') ?>>
<?php wp_body_open(); ?>


    <header
      id="mobile_header"
      class="bg-[rgba(255,255,255,0.1)] w-0 h-[100vh] overflow-hidden fixed top-0 left-0 z-10"
    >
      <div class="h-16 w-full flex">
        <span
          id="mobile_close"
          class="inline-block h-10 w-32 bg-[#6f6f76] m-3 rounded-full hover:filter hover:brightness-110 cursor-pointer"
        >
          <span class="h-full w-32 flex items-center select-none">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="size-4 text-white left-2 stroke-4 relative bottom-0"
              width="15px"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.75 19.5 8.25 12l7.5-7.5"
                
              />
            </svg>
            <span
              class="text-white h-full w-full flex items-center justify-center text-sm font-semibold relative right-1 bottom-[1px]"
              >Close menu</span
            >
          </span>
        </span>
      </div>

      <div class="flex w-full h-16 bg-[rgba(0,0,0,.2)] justify-evenly">
        <a
          href="https://github.com/karolliszniewski"
          target="_blank"
          class="flex flex-col items-center justify-center group"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 50 50"
            width="30px"
            height="30px"
            fill="#FFDD95"
          >
            <path
              d="M17.791,46.836C18.502,46.53,19,45.823,19,45v-5.4c0-0.197,0.016-0.402,0.041-0.61C19.027,38.994,19.014,38.997,19,39 c0,0-3,0-3.6,0c-1.5,0-2.8-0.6-3.4-1.8c-0.7-1.3-1-3.5-2.8-4.7C8.9,32.3,9.1,32,9.7,32c0.6,0.1,1.9,0.9,2.7,2c0.9,1.1,1.8,2,3.4,2 c2.487,0,3.82-0.125,4.622-0.555C21.356,34.056,22.649,33,24,33v-0.025c-5.668-0.182-9.289-2.066-10.975-4.975 c-3.665,0.042-6.856,0.405-8.677,0.707c-0.058-0.327-0.108-0.656-0.151-0.987c1.797-0.296,4.843-0.647,8.345-0.714 c-0.112-0.276-0.209-0.559-0.291-0.849c-3.511-0.178-6.541-0.039-8.187,0.097c-0.02-0.332-0.047-0.663-0.051-0.999 c1.649-0.135,4.597-0.27,8.018-0.111c-0.079-0.5-0.13-1.011-0.13-1.543c0-1.7,0.6-3.5,1.7-5c-0.5-1.7-1.2-5.3,0.2-6.6 c2.7,0,4.6,1.3,5.5,2.1C21,13.4,22.9,13,25,13s4,0.4,5.6,1.1c0.9-0.8,2.8-2.1,5.5-2.1c1.5,1.4,0.7,5,0.2,6.6c1.1,1.5,1.7,3.2,1.6,5 c0,0.484-0.045,0.951-0.11,1.409c3.499-0.172,6.527-0.034,8.204,0.102c-0.002,0.337-0.033,0.666-0.051,0.999 c-1.671-0.138-4.775-0.28-8.359-0.089c-0.089,0.336-0.197,0.663-0.325,0.98c3.546,0.046,6.665,0.389,8.548,0.689 c-0.043,0.332-0.093,0.661-0.151,0.987c-1.912-0.306-5.171-0.664-8.879-0.682C35.112,30.873,31.557,32.75,26,32.969V33 c2.6,0,5,3.9,5,6.6V45c0,0.823,0.498,1.53,1.209,1.836C41.37,43.804,48,35.164,48,25C48,12.318,37.683,2,25,2S2,12.318,2,25 C2,35.164,8.63,43.804,17.791,46.836z"
            />
          </svg>
          <span class="text-white text-sm group-hover:text-yellow-theme"
            >Github</span
          >
        </a>

        <a
          href="https://www.youtube.com/channel/UClBicmLd-3GhmonZIHtcmjw"
          target="_blank"
          class="flex flex-col items-center justify-center group"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 50 50"
            width="30px"
            height="30px"
            fill="#FFDD95"
          >
            <path
              d="M 44.898438 14.5 C 44.5 12.300781 42.601563 10.699219 40.398438 10.199219 C 37.101563 9.5 31 9 24.398438 9 C 17.800781 9 11.601563 9.5 8.300781 10.199219 C 6.101563 10.699219 4.199219 12.199219 3.800781 14.5 C 3.398438 17 3 20.5 3 25 C 3 29.5 3.398438 33 3.898438 35.5 C 4.300781 37.699219 6.199219 39.300781 8.398438 39.800781 C 11.898438 40.5 17.898438 41 24.5 41 C 31.101563 41 37.101563 40.5 40.601563 39.800781 C 42.800781 39.300781 44.699219 37.800781 45.101563 35.5 C 45.5 33 46 29.398438 46.101563 25 C 45.898438 20.5 45.398438 17 44.898438 14.5 Z M 19 32 L 19 18 L 31.199219 25 Z"
            />
          </svg>

          <span class="text-white text-sm group-hover:text-yellow-theme"
            >Youtube</span
          >
        </a>

        <a
          href="https://www.linkedin.com/in/karolliszniewski/"
          target="_blank"
          class="flex flex-col items-center justify-center group"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 50 50"
            width="30px"
            height="30px"
            fill="#FFDD95"
          >
            <path
              d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"
            />
          </svg>
          <span class="text-white text-sm group-hover:text-yellow-theme"
            >LinkIn</span
          >
        </a>
      </div>

      <a
        href="/contact/"
        target="_blank"
        class="h-9 w-[90%] m-auto mt-3 mb-3 bg-[#222327] inline-block flex justify-center items-center rounded-full"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          width="30px"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            fill="#FFDD95"
            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"
          />
        </svg>

        <span class="text-white text-sm ml-1">Contact Me</span>
      </a>

      <nav>
        <div id="navigation">


          <?php
  wp_nav_menu(array(
    'theme_location' => 'header-menu',
    'menu_class' => 'w-full justify-between open_ul block',
    'container' => '',
    'walker' => new KarolPortfolio\inc\Customwalkermobile(),
  ));
                ?>
        </div>
      </nav>
    </header>






<?php wp_body_open(); ?>
<div
      id="fixed-cover-full-screen"
      class="h-[100vh] w-full fixed top-0 left-0"
    ></div>
<main id="bluryDiv" class="relative transition-filter">
    <header class="h-12 md:h-20 flex justify-center items-center">
        <div class="bg-stone-gray h-full w-full max-w-screen-xl mx-10 shadow-sm flex justify-between">
        <div class="h-[100%] flex">
            <div
              class="w-16 md:w-20 bg-yellow-theme flex justify-center items-center h-[100%]"
            >
              <span
                class="logo text-2xl md:text-5xl right-1 relative select-none"
                >K</span
              >
            </div>
            <div
              class="relative font-bold text-white text-2xl md:text-4xl ml-4 h-full flex items-center select-none"
            >
              Karol
            </div>
          </div>

            <div  class="justify-center items-center w-[50%] open_HamburgerContainer .blur-background hidden md:flex">
                <?php
  wp_nav_menu(array(
    'theme_location' => 'header-menu',
    'menu_class' => 'flex w-full justify-between open_ul',
    'container' => '',
    'walker' => new KarolPortfolio\inc\Customwalker(),
  ));
                ?>
            </div>

            <div
            id="mobile_open"
            class="w-16 md:w-20 bg-yellow-theme flex justify-center items-center h-[100%] hover:filter hover:brightness-110 transition duration-300 cursor-pointer"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="black"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-8 md:h-16"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
              />
            </svg>
          </div>
        </div>
    </header>

 

