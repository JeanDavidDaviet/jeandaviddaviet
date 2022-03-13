<?php $testimonies = new WP_Query(['post_type' => 'temoignage', 'posts_per_page' => 2, 'order' => 'ASC']); if ( $testimonies->have_posts() ) : ?>
<div class="relative before:absolute before:content-[''] before:text-[15rem] before:opacity-15 before:text-light-blue before:z-1 before:top-[-40px] before:left-[-30px] md:before:text-[10rem] md:before:left-0 md:before:rotate-20 md:before:origin-center md:before:h-[70px]">
  <div class="w-[34px] h-[68px] right-0 absolute z-1 outline-0 pointer-none md:w-full md:h-[34px] md:right-auto md:top-1/2 md:translate-y-1/2">
    <svg class="testimony-arrow testimony-left absolute p-2 cursor-pointer transition-all outline-0 bg-transparent-blue rounded-full fill-white pointer-events-auto focus:outline-1 rotate-180 origin-center top-0 left-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492 492" width="34" height="34"><path d="M382.7 226.8l-219-219c-5-5-11.8-7.8-19-7.8s-14 2.8-19 7.9l-16.2 16a27 27 0 000 38.1L293.4 246l-184 184a26.8 26.8 0 000 38l16 16.2a26.9 26.9 0 0038 0L382.8 265c5-5 7.8-11.9 7.8-19 0-7.3-2.7-14.1-7.8-19.2z"/></svg>
    <svg class="testimony-arrow testimony-right absolute p-2 cursor-pointer transition-all outline-0 bg-transparent-blue rounded-full fill-white pointer-events-auto focus:outline-1 right-0 top-[40px] md:top-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492 492" width="34" height="34"><path d="M382.7 226.8l-219-219c-5-5-11.8-7.8-19-7.8s-14 2.8-19 7.9l-16.2 16a27 27 0 000 38.1L293.4 246l-184 184a26.8 26.8 0 000 38l16 16.2a26.9 26.9 0 0038 0L382.8 265c5-5 7.8-11.9 7.8-19 0-7.3-2.7-14.1-7.8-19.2z"/></svg>
  </div>
  <div class="testimony-slider">
    <?php while ( $testimonies->have_posts() ) : $testimonies->the_post(); ?>
    <div class="testimony pr-10 md:px-8">
    <?php the_content(); ?>
    </div>
    <?php endwhile; ?>
  </div>
</div>
<?php endif; ?>
