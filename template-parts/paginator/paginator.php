<div id="paginator">
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-12">
                hola
                <?php
                $total_pages = $loop->max_num_pages;

                if ($total_pages > 1) {

                    $current_page = max(1, get_query_var('paged'));

                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        // 'format' => '/page/%#%',
                        'current' => $current_page,
                        'total' => $total_pages,
                        'prev_text'    => __('« prev'),
                        'next_text'    => __('next »'),
                    ));
                }
                ?>
                hello
            </div>
        </div>
    </div>
</div>