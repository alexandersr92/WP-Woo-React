<?php get_sidebar(); ?>

<footer id="footer" role="contentinfo">
  <div id="copyright">
    &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
  </div>
</footer>

<?php wp_footer(); ?>
</main>
</body>

</html>