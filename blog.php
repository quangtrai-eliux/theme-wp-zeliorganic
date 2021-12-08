    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="<?php bloginfo('template_url'); ?>/assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Blog</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <?php get_sidebar(); ?>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                    <?php 
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                        $args = array(
                            'posts_per_page' => 8,
                            'post_type' => 'post',
                            'paged' => $paged
                        );
                        $getposts = new WP_query($args);
                        global $wp_query; $wp_query->in_the_loop = true;
                        while ($getposts->have_posts()) : $getposts->the_post();?>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> <?php echo get_the_date('M d, Y'); ?></li>
                                        <li><i class="fa fa-comment-o"> <?php echo get_comments_number() ?></i> </li>
                                    </ul>
                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;?>
                    <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                            <?php  
                                echo paginate_links( array(
                                    'total' => $getposts->max_num_pages,
                                    'prev_text' => '<i class="fa fa-long-arrow-left"></i>',
                                    'next_text' => '<i class="fa fa-long-arrow-right"></i>'
                                ))
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->