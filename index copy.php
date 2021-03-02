<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage CASINOS_7
 * @since casinos7 1.0
 */



$image = get_field('casino_imagem');
$picture = $image['sizes']['large'];

get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div id="post-<?php the_ID(); ?>" class="grid grid-cols-1 mb-20 rounded-2xl elevation-2 hover:elevation-4 md:grid-cols-4 mx-7">
      <div class="h-56 ">
        <a target="_blank" href="<?php the_field('casino_link') ?>" title="<?php the_title() ?>" class="relative block w-full h-56 overflow-hidden lg:rounded-bl-2xl lg:h-56 ">

          <img title="" src="<?php echo $picture ?>" class="block object-cover w-full h-full rounded-t-2xl md:rounded-tr-none" alt="" width="360" height="360">

          <?php if (get_field('recomendado')) : ?>
            <span class="absolute w-24 h-24 tip-recomended">Recomendado</span>

          <?php endif; ?>
        </a>
      </div>
      <div class="grid h-56 overflow-hidden overflow-ellipsis text-shadow-none bg-gray-50 md:col-span-3 md:rounded-tr-2xl lg:rounded-none lg:col-span-2">
        <div class="w-full p-5 my-auto">
          <h2 class="pb-3 text-2xl font-bold text-gray-800 uppercase raleway">
            <a class="text-gray-800" href="<?php the_field('casino_link') ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
          </h2>

          <p class="text-xs text-gray-800 sm:text-sm md:text-base lato"><?php the_field('casino_descricao') ?></p>
        </div>
      </div>
      <div class="h-56 text-center text-white bg-indigo-800 p-7 lato md:col-span-4 lg:col-span-1 lg:rounded-tr-2xl rounded-b-2xl sm:rounded-br-2xl lg:rounded-bl-none">
        <strong class="text-xl font-light leading-8 text-white uppercase text-shadow">
          Bónus
          <span class="block mt-5 text-5xl font-black leading-8 uppercase"><?php the_field('montante_bonus') ?>€</span>
        </strong>

        <a target="_blank" href="<?php the_field('casino_link') ?>" title="Abrir conta" class="block py-3 mt-5 text-sm font-bold text-white uppercase duration-150 ease-in-out transform rounded text-shadow elevation-2 hover:elevation-4 bg-limegreen-500 hover:bg-limegreen-600 hover:scale-110 " rel="nofollow">Abrir conta</a>
      </div>
    </div>


  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>