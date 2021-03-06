<?php
/*
Template Name: Splash page
*/
?>
<?php get_header(); ?>

<div id="container" class="splash">

    <div class="visual">
        <hgroup class="org-name">
            <h1>Strana zelených</h1>
            <h2><?php get_bloginfo ( 'description' );  ?></h2>
        </hgroup>
        <div class="action-boxes">
            <div class="box box-info">
                <h3>Získejte informace</h3>
            </div>
            <div class="box box-fundraising">
                <h3>Podpořte nás</h3>
            </div>
        </div>
    </div>
    <a href="#" class="splash-continue">Pokračovat na web »</a>
    <div class="visual-footer">
        <p>Ing.Vilém Jurek, předseda KO  |  tel. 605 526 958  |  email: <a href="#">vilem.j@gmail.com</a></p>
    </div>

      <div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_post_thumbnail(); ?></div>
          <?php the_content(); ?></p>
        <?php endwhile; ?>
        <?php endif; ?>
<?php
 //logika zobrazování custom fieldu true/false
if( get_field('boxx') )
{
    echo "do something";
}else{
    echo '<div style="width: 200px; height: 200px; background: #000;">';
}
?>
      </div>

<?php get_footer(); ?>
