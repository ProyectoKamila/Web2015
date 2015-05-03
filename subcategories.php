<?php
$args = array(
 
    'child_of' => 0,
    'parent' => '',
    'orderby' => 'name',
    'order' => 'ASC',
    'hide_empty' => 1,
    'hierarchical' => 1,
    'exclude' => '',
    'include' => '',
    'number' => '',
    'taxonomy' => 'proyecto',
    'pad_counts' => false
);
?>
<?php $categories = get_categories($args); ?>
<ul class="nav nav-pills portafolio">

    <li role="presentation"><a href="<?php echo home_url('portafolio'); ?>" title="Ver todos los portafolio">Todos</a></li>
    <?php foreach ($categories as $category) { ?>
        <li><a href="<?php echo get_category_link(get_term_by("slug", $category->slug, "proyecto")); ?>"><?php echo $category->name; ?></a></li>
    <?php }
    wp_reset_query(); ?>
