<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <div class="post-pagination">
                <?php the_posts_pagination(
                    array(
                        "screen_reader_text" => " ",
                        "prev_text" => __("Latest Posts", "saf"),
                        "next_text" => __("Old Posts", "saf")
                    )
                ) ?>
            </div>
        </div>
    </div>
</div>