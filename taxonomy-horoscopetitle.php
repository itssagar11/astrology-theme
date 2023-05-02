<?php
get_header();
$horoscope = get_queried_object();

$selected_date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
?>
<main>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-8">
                <h2><?php echo $horoscope->name ?></h2>
                <!--  date -->
                <form method="GET" action="<?php echo esc_url(get_term_link($horoscope)) ?>">
                    <div class="form-group my-3">
                        <label for="datepicker">Select Date:</label>
                        <div class="input-group date" data-provide="datepicker">
                            <input type="date" class="form-control" id="datepicker" name="date" placeholder="MM/DD/YYYY" value="<?php echo $selected_date; ?>">
                            <div class="input-group-addon">
                            <button type="submit" class="btn btn-outline-success btn-sm fas fa-search"> </button>
                            </div>
                        </div>
                    </div>
                    
                </form>
               
                <article>
                    <div class="article-content">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'horoscope',
                            'post_status' => 'publish',
                            'tex_query'=> array(
                                array(
                              [      'taxonomy'=>'horoscopetitle','field'=>'term_id','terms'=>$horoscope->term_id]
                                )
                                ),
                            'meta_query' => array(
                                array(
                                    'key' => 'horoscope_date',
                                    'value' => $selected_date,
                                    'compare' => '=',
                                    'type' => 'DATE'
                                )
                            )
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                the_content();
                            }
                        } else {
                            echo 'No horoscope available for this date.';
                        }
                        print_r($horoscope);
                        wp_reset_postdata();
                        ?>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <aside>
                    <div class="sidebar">
                        <h5 class="sidebar-heading">Horoscopes</h5>
                        <ul class="list-unstyled">
                            <?php
                            $HoroscopeCat = get_terms(['taxonomy' => 'horoscopetitle', 'hide_empty' => false]);
                            foreach ($HoroscopeCat as $horoscopeData) {
                                $icon = get_wp_term_image($horoscopeData->term_id)
                            ?>
                                <li>
                                    <a href="<?php echo get_category_link($horoscopeData->term_id) ?>">
                                        <img src="<?php echo $icon ?>" style="width: 50px; height: 60px;">
                                        <?php echo $horoscopeData->name ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</main>






<?php get_footer() ?>