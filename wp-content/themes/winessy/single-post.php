<?php get_header(); ?>
   
    <section class="single-page">
        <div class="container">
        <div class="blog page__content">
            <div class="blog-colum">
                <div class="single-page__wrap d-flex">
                    <a class="arrow" href="<?php echo home_url(); ?>"></a>
                    <div class="title">Blog</div>
                </div>
                
                <div class="artical">
                    <div class="artical-img">
                        <?php
                            if(has_post_thumbnail( )) {
                        ?>
                            <img src="<?php the_post_thumbnail_url( ); ?>">
                        <?php
                            } else {
                        ?>
                            <div></div>
                        <?php
                            }
                        ?>
                        </div>
                    <div class="artical-title"><?php the_title(); ?></div>
                    <div class="artical-atribute d-flex">
                        <div class="post-date"><?php the_time(); echo ' / '; echo get_the_date(); ?></div>
                        <div class="lable-wrap d-flex">
                            <div class="img"><img src="images/icon/lable.png" alt=""></div>
                            <?php 
                                                
                                $links = array_map( function ( $category ) {
                                    return sprintf(
                                        '<a href="%s" class="lable">%s</a>', // Шаблон вывода ссылки
                                        esc_url( get_category_link( $category ) ), // Ссылка на рубрику
                                        esc_html( $category->name ) // Название рубрики
                                    );
                                }, get_the_category() );
                                
                                echo implode( ', ', $links );

                            ?>
                        </div>
                    </div>
                    <div class="artical-text-prev">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

            <div class="nav-colum">
                <div class="title">Tags</div>
                <div class="list-lable">
                    <div class="lable">

                    <?php
                        $categories = get_categories();

                        foreach( $categories as $category ){

                            $option = '<a href="' . get_term_link( $category ) . '">';
                            $option .= $category->name . ' ';
                            $option .= '</a>';

                            echo $option;
                        }
                    ?>
                    </div>
                </div>

                <div class="title">New post</div>
                


                <?php
                    // параметры по умолчанию
                    $my_posts = get_posts( array(
                        'numberposts' => 5,
                        'category'    => 0,
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  =>'',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    global $post;

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );

                        ?>

                            <div class="new-post">
                                <div class="wrap">
                                    <div class="icon-prev">
                                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/icon/post-prev.png" alt="">
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="artical-title"><?php the_title(); ?></a>
                                </div>
                                <div class="post-date"><?php the_time(); echo ' / '; echo get_the_date(); ?></div>
                            </div>  
                        <?php
                    }
                    wp_reset_postdata(); // сброс
                ?>
                
            </div>
            </div>
        </div>
    </section>

    
   <?php get_footer(); ?>
