<?php
function practice_areas(){
    $query = new WP_query(
        array(
            'post_type' => 'practice-areas',
            'post_status' => 'publish',
            'post_per_page' => '-1',
            'order' => 'ASC',
            'orderby' => 'menu_order'
        )
    );
    $i = 1;
    $str = '<div class="elementor-image" style="display:flex;justify-content:center">';
    while($query->have_posts()):
        $query->the_post();
        $str .='<div class="elementor-image" style="display:flex;justify-content:center">
</div>';
        if($i % 3  == 0):
            $str .= '</div>';
            $str .= '<div class="elementor-image">';
        endif;
    endwhile;
    wp_reset_postdata();
    return $str;
} 

add_shortcode('practice_areas', 'practice_areas'); 

function practice_areas_link(){
    $query = new WP_query(
        array(
            'post_type' => 'practice-areas',
            'post_status' => 'publish',
            'post_per_page' => '-1',
            'order' => 'ASC',
            'orderby' => 'menu_order'
        )
    );
    $links = '';
    while($query->have_posts()):
        $query->the_post();
        $links .= '<a href="'.get_the_permalink().'"title"'.get_the_title().'">'.get_the_title().'</a><br>';
    endwhile;
    wp_reset_postdata();
    return $links;
    
}

add_shortcode('practice_areas_link', 'practice_areas_link'); 
?>

