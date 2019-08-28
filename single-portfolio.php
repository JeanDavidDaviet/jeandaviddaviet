<?php get_header(); ?>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <article itemscope itemtype="https://schema.org/Article">
  
      <div class="wrapper--narrow">
        <div class="article__title">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 988.44 447">
            <defs>
              <linearGradient id="linear" x1="0%" y1="50%" x2="100%" y2="50%">
                <stop offset="0%" stop-color="#5df9ff"></stop>
                <stop offset="100%" stop-color="#b5deff"></stop>
              </linearGradient>
              <clipPath id="test"  clipPathUnits="objectBoundingBox">
                <path d="M0.6444 0.9799a0.3592 0.7942 0 0 0 0.3480 -0.6532c0.0051 -0.0738 0.0051 -0.1544 -0.0121 -0.2170c-0.0223 -0.0805 -0.0688 -0.1119 -0.1113 -0.1096s-0.0830 0.0358 -0.1244 0.0582c-0.0941 0.0515 -0.1922 0.0515 -0.2873 0.0201C0.3925 0.0559 0.3288 0.0201 0.2630 0.0089S0.1012 0.0089 0.0728 0.0805C0.0283 0.1365 -0.0101 0.2461 0.0020 0.3557c0.0091 0.0805 0.0415 0.1365 0.0688 0.1946c0.0263 0.0604 0.0486 0.1298 0.0759 0.1879c0.0334 0.0738 0.0739 0.1253 0.1214 0.1096c0.0556 -0.0157 0.1123 0.0089 0.1659 0.0403c0.0617 0.0358 0.1224 0.0805 0.1862 0.0895l0.0243 0.0022z"></path>
              </clipPath>
            </defs>
            <path class="catchphrase__pathunder" fill="#f2fdff" d="M4.21,223.44c-.15.48-.31,1-.46,1.46-9.48,31.23.19,65.36,15.8,94,29.67,54.52,81.81,95.82,140.91,114.19,69,21.44,145.86,6.8,214.72-8.86,50.63-11.51,100.25-27.15,149-44.89,99-36,194.69-80.49,293.34-117.39,30.58-11.44,61.81-22.33,88.8-40.7s49.72-45.61,54.84-77.85c5.76-36.34-12.27-73.73-40.14-97.76S856.8,9.47,820.42,4C730.93-9.64,640.05,13.88,554.48,43.41S384.57,108.94,294.94,121.6C228.17,131,159,127.43,94.75,147.8,55.79,160.14,16.75,184.68,4.21,223.44Z"></path>
            <path class="catchphrase__path" fill="url(#linear)" d="M 637 438 a 355 355 0 0 0 344-292 c 5-33 5-69-12-97-22-36-68-50-110-49 s -82 16-123 26 c -93 23-190 23-284 9 C 388 25 325 9 260 4 S 100 4 72 36 C 28 61-10 110 2 159 c 9 36 41 61 68 87 26 27 48 58 75 84 33 33 73 56 120 49 55-7 111 4 164 18 61 16 121 36 184 40 l 24 1 z"></path>
          </svg>

          <picture class="catchphrase__image">
            <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/src/img/paddy.webp" style="clip-path: url(#test);">
            <source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/src/img/paddy.jpg" style="clip-path: url(#test);">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/paddy.jpg" srcset="<?php echo get_template_directory_uri(); ?>/src/img/paddy@2x.jpg 2x" alt="" style="clip-path: url(#test);">
          </picture>
          <h1 itemprop="name"><?php the_title(); ?></h1>
        </div>
      </div>

      <div class="article__content">
				<?php the_post_thumbnail('post-thumbnail', array('class' => 'portfolio-big-thumbnail')); ?>
				<?php the_content(); ?>
      </div>
    </article>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>