 <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
        <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto" />
          </a>
        </div>
        <div class="flex lg:hidden">
          <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="size-6">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          
          <a href="/" class= "<?= urlIs('/') ? 'bg-gray-200 text-black' : 'text gray-300' ?> text-sm/6 font-semibold text-gray-900">Home</a>
          <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-200 text-black' : 'text gray-300' ?> text-sm/6 font-semibold text-gray-900">About</a>
          <?php if ($_SESSION['user'] ?? false): ?>
          <a href="/notes" class="<?= urlIs('/notes') ? 'bg-gray-200 text-black' : 'text gray-300' ?> text-sm/6 font-semibold text-gray-900">Notes</a>
          <?php endif ?>
          <a href="/contact" class="<?= urlIs('/contact') ? 'bg-gray-200 text-black' : 'text gray-300' ?> text-sm/6 font-semibold text-gray-900">Contact</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <?php if ($_SESSION['user'] ?? false): ?>
          
            <?php else : ?>
              <div class="flex justify-center gap-6 mt-0">
                <a href="/register" class="<?= urlIs('/register') ? 'bg-gray-200 text-black' : 'text gray-300' ?> text-sm/6 font-semibold text-gray-900">Register</a>
                <a href="/login" class="<?= urlIs('/login') ? 'bg-gray-200 text-black' : 'text gray-300' ?> text-sm/6 font-semibold text-gray-900">Log in</a>
              </div>
            <?php endif; ?>
        </div>
          <?php if ($_SESSION['user'] ?? false): ?>
            <div class="ml-3">
              <form method="POST" action="/session">
                <input type="hidden" name="_method" value="DELETE">

                <button class="text-white">Log Out</button>
              </form>
            </div>
          <?php endif; ?>
      </nav>