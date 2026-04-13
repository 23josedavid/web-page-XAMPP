<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

<div class="w-full max-w-2xl pt-10 text-left px-6">
    <h1 class="text-xl font-semibold text-gray-900 sm:text-xl text-left">Create a note</h1>
    <form method="POST" action="/notes/create">
        <div class="col-span-full">
          <label for="body" class="block text-sm/6 font-medium text-gray-900">body</label>
          
          <div class="mt-2">
          
          <textarea   
          id="body"   
          name="body"   
          rows="3"  
          class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" 
          placeholder="Here's an idea for a note..."  
          ><?= $_POST['body'] ?? '' ?></textarea>
          
          <?php if (isset($errors['body'])): ?>
              <p class=" text-red-500 text-xs mt-2"> <?= $errors['body'] ?> </p>
              <?php endif; ?>
        </div>
        
      </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>
    <div class="mt-10 flex justify-center gap-x-6">
        <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white hover:bg-indigo-500">Get started</a>
          <a href="#" class="text-sm font-semibold text-gray-900">Learn more →</a>
        </div>
      </div>
    </div>
    
  <?php require base_path('views/partials/footer.php') ?>
