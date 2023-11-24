<?php


$all_category = $_REQUEST['value'];
$noofpost = $_REQUEST['noofpost'];

$author1 = $_REQUEST['author1'];
$orderby1 = $_REQUEST['orderby1'];
$adminenbale = $_REQUEST['adminenbale'];
$dateenbale = $_REQUEST['dateenbale'];
$commentenable = $_REQUEST['commentenable'];
$postreadenable = $_REQUEST['postreadenable'];
$posttimeenable = $_REQUEST['posttimeenable'];
$excerpt1 = $_REQUEST['excerpt1'];
$excerpt2 = $_REQUEST['excerpt2'];
$index = 1;
$all_query_args = array(
    'cat'	=> absint( $all_category ),
    'posts_per_page' => $noofpost,
    'author'       => esc_attr( $author1 ),
    'orderby' => array( esc_attr( $orderby1 ) => 'DSC', 'date' => 'DSC'),
);

$all_category_query = new WP_Query( $all_query_args );

?>
<!-- Single Tab -->
<div class="tab-pane fade <?php if( $index == 1 ) { ?> show active <?php } ?>" id="catlayout6<?php echo esc_attr( $index ); ?>" role="tabpanel">
    <div class="row">
        <?php $count1 = 0;
        while( $all_category_query->have_posts() ):
            $all_category_query->the_post();
            if( $count1 == 0 ):?>
                <div class="col-lg-7 col-md-7 col-12">
                    <!-- Single News -->
                    <div class="tab-first-news">
                        <!-- News Head -->
                        <?php if( has_post_thumbnail() ) :?>
                            <div class="news-head">
                                <?php the_post_thumbnail('just-news-469X469-thumbnail');?>
                            </div>
                        <?php endif;?>
                        <div class="justnews-content">
                            <!-- Trendnews Meta -->
                            <div class="justnews-meta">
                                <?php if($adminenable =='true'): ?>
                                <span class="author">
                                    
                                    <?php just_news_posted_by();?>
                                </span>
                                <?php endif; ?>
                                <?php if($dateenable =='true'): ?>
                                <span class="date">
                                    <i class="fa fa-clock-o"></i>
                                    <?php just_news_posted_on();?>
                                </span>
                                <?php endif; ?>
                                <?php if($commentenable =='true'): ?>
                                <span class="date"><i class="fa fa-comments"></i><?php just_news_post_comment();?></span>
                                <?php endif; ?>
                                
                                <!-- Added Featured -->
                                <?php 
                                if($postreadenable =='true'):
                                    just_news_count_content_words( get_the_ID());
                                endif;  
                                ?>
                            </div>
                            <h2 class="news-title medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <?php $contentExp = esc_html(get_the_content());?>
                            <p><?php echo substr($contentExp, 0,$excerpt1);?>
                        </div>
                    </div>
                    <!--/ End Single News -->
                </div>
            <?php endif;
            $count1 = $count1 + 1;
        endwhile;
        wp_reset_postdata();
        ?>
        <div class="col-lg-5 col-md-5 col-12">
            <div class="tab-news-right">
                <?php $count1 = 0;
                while( $all_category_query->have_posts() ):
                    $all_category_query->the_post();
                    if( $count1 > 0 ):

                        ?>
                        <div class="single-news">
                            <!-- News Head -->
                            <?php if( has_post_thumbnail() ) :?>
                                <div class="news-head">
                                    <?php the_post_thumbnail();?>
                                </div>
                            <?php endif;?>
                            <div class="justnews-content">
                                <div class="justnews-meta">
                                <?php if($adminenable =='true'): ?>
                                <span class="author">
                                    
                                    <?php just_news_posted_by();?>
                                </span>
                                <?php endif; ?>
                                <?php if($dateenable =='true'): ?>
                                <span class="date">
                                    <i class="fa fa-clock-o"></i>
                                    <?php just_news_posted_on();?>
                                </span>
                                <?php endif; ?>
                                <?php if($commentenable =='true'): ?>
                                <span class="date"><i class="fa fa-comments"></i><?php just_news_post_comment();?></span>
                                <?php endif; ?>
                                
                                <?php 
                                if($postreadenable =='true'):
                                    just_news_count_content_words( get_the_ID());
                                endif;  
                                ?>
                            </div>
                                <h4 class="news-title small"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                                <?php $contentExp = esc_html(get_the_content());?>
                            <p><?php echo substr($contentExp, 0,$excerpt2);?>
                            </div>
                        </div>
                        <!--/ End Single News -->
                        <?php
                    endif;
                    $count1 = $count1 + 1;
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
<!--/ End Single Tab -->