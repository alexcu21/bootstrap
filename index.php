<?php get_header(); ?>


      <!--content-->
      <div class="container index">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Blog Posts
                </h3>
              </div>
                <div class="card-body">
                  <?php if(have_posts()): ?>
                    <?php while(have_posts()) : the_post() ?>
                      <article class="post">
                      <div class="row">
                        <?php if(has_post_thumbnail()): ?>
                        <div class="col-md-3">
                          <?php the_post_thumbnail(); ?>
                        </div>

                        <div class="col-md-9">

                            <h2>
                              <a href="<?php echo the_permalink(); ?>">
                              <?php echo the_title(); ?>
                              </a>
                            </h2>
                            <p class="meta">
                              posted at <?php the_time(); ?>
                              on <?php the_date(); ?>
                              by <strong><?php the_author(); ?></strong>
                            </p>
                            <div class="excerpt">
                              <?php echo get_the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Read More &raquo;</a>
                        </div>
                      <?php else: ?>
                        <div class="col-md-12">
                          <h2>
                            <a href="<?php echo the_permalink(); ?>">
                            <?php echo the_title(); ?>
                            </a>
                          </h2>
                          <p class="meta">
                            posted at <?php the_time(); ?>
                            on <?php the_date(); ?>
                            by <strong><?php the_author(); ?></strong>
                          </p>
                          <div class="excerpt">
                            <?php echo get_the_excerpt(); ?>
                          </div>
                          <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Read More &raquo;</a>
                        </div>
                        <?php endif; ?>
                      </div>
                    </article>
                    <?php endwhile ?>
                  <?php endif; ?>
                </div>

            </div>
          </div><!--.col-md-8-->
          <div class="col-md-4">
            <?php if(is_active_sidebar( 'sidebar' )): ?>
              <?php dynamic_sidebar( 'sidebar' ); ?>
            <?php endif; ?>
          </div><!--.col-md-4-->
        </div><!--row-->
      </div><!--container index-->

      <?php get_footer(); ?>
