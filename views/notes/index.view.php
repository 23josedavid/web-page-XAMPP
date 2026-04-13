<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

    <div class="relative isolate px-6 pt-14 lg:px-8">
      <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56 text-center">
      <h1 class="text-5xl font-semibold text-gray-900 sm:text-6xl"> My Notes</h1>
      <p class="mt-8 text-lg text-gray-500 sm:text-xl">Information from my notes</p>
      <?php foreach($notes as $note): ?>
           <ul>
              <li>
                 <a href="/note?id=<?= $note['id'] ?>"class="text-blue-500 hover:underline">
                     <?=htmlspecialchars( $note ['body'] )?>
                  </a> 
               </li>
           
              <?php endforeach; ?> 
            </ul>
        <p> 
           <a href="/notes/create" class="text-blue-500 hover:underline"> Create note </a>
        </p>
        
      <div class="mt-10 flex justify-center gap-x-6">
        <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white hover:bg-indigo-500">Get started</a>
          <a href="#" class="text-sm font-semibold text-gray-900">Learn more →</a>
        </div>
      </div>
    </div>
    
   <?php require base_path('views/partials/footer.php') ?>
