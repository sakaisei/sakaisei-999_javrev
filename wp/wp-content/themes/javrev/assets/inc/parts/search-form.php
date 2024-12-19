<form class="form__search <?php echo esc_attr(get_query_var('search_form_class', '')); ?>" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <label for="search-input" class="hidden__visually">キーワード検索</label>
  <input type="text" id="search-input" name="s" placeholder="キーワード検索">
  <button type="submit" class="search-btn">
    <span class="hidden__visually">検索</span>
  </button>
</form>
