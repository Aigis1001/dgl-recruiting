const marqueeHTML = `
<!-- MARQUEE -->
<div class="overflow-hidden bg-yellow-400 text-black border-y-2 border-black">
  <div class="animate-marquee whitespace-nowrap py-3 sm:py-4">

    <div class="flex shrink-0 items-center">
      <span class="font-en italic font-black text-lg sm:text-2xl px-5">
        CREATE MORE THAN MOMENTS.
      </span>
      <span class="text-xl">★</span>
      <span class="font-en italic font-black text-lg sm:text-2xl px-5">
        CREATE MORE THAN MOMENTS.
      </span>
      <span class="text-xl">★</span>
      <span class="font-en italic font-black text-lg sm:text-2xl px-5">
        CREATE MORE THAN MOMENTS.
      </span>
      <span class="text-xl">★</span>
      <span class="font-en italic font-black text-lg sm:text-2xl px-5">
        CREATE MORE THAN MOMENTS.
      </span>
      <span class="text-xl">★</span>
    </div>

    <div class="flex shrink-0 items-center">
      <span class="font-en italic font-black text-lg sm:text-2xl px-5">
        CREATE MORE THAN MOMENTS.
      </span>
      <span class="text-xl">★</span>
      <span class="font-en italic font-black text-lg sm:text-2xl px-5">
        CREATE MORE THAN MOMENTS.
      </span>
      <span class="text-xl">★</span>
      <span class="font-en italic font-black text-lg sm:text-2xl px-5">
        CREATE MORE THAN MOMENTS.
      </span>
      <span class="text-xl">★</span>
      <span class="font-en italic font-black text-lg sm:text-2xl px-5">
        CREATE MORE THAN MOMENTS.
      </span>
      <span class="text-xl">★</span>
    </div>

    <div class="flex shrink-0 items-center">
      <span class="font-en italic font-black text-lg sm:text-2xl px-5">
        CREATE MORE THAN MOMENTS.
      </span>
      <span class="text-xl">★</span>
      <span class="font-en italic font-black text-lg sm:text-2xl px-5">
        CREATE MORE THAN MOMENTS.
      </span>
      <span class="text-xl">★</span>
      <span class="font-en italic font-black text-lg sm:text-2xl px-5">
        CREATE MORE THAN MOMENTS.
      </span>
      <span class="text-xl">★</span>
      <span class="font-en italic font-black text-lg sm:text-2xl px-5">
        CREATE MORE THAN MOMENTS.
      </span>
      <span class="text-xl">★</span>
    </div>

  </div>
</div>
`;

const marqueeContainer = document.getElementById('marquee-container');

if (marqueeContainer) {
  marqueeContainer.innerHTML = marqueeHTML;
}