<?php
/**
 * @file
 * Default theme implementation to display a term.
 *
 * Available variables:
 * - $name: (deprecated) The unsanitized name of the term. Use $term_name
 *   instead.
 * - $content: An array of items for the content of the term (fields and
 *   description). Use render($content) to print them all, or print a subset
 *   such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $term_url: Direct URL of the current term.
 * - $term_name: Name of the current term.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - taxonomy-term: The current template type, i.e., "theming hook".
 *   - vocabulary-[vocabulary-name]: The vocabulary to which the term belongs to.
 *     For example, if the term is a "Tag" it would result in "vocabulary-tag".
 *
 * Other variables:
 * - $term: Full term object. Contains data that may not be safe.
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $page: Flag for the full page state.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the term. Increments each time it's output.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_taxonomy_term()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<a href="<?php print $term_url; ?>">
  <div id="taxonomy-term-<?php print $term->tid; ?>" class="<?php print $classes; ?>">
    <?php hide($content['field_os2web_kult_venue_address']); ?>

    <div class="content">
      <?php
        if (empty($content['field_os2web_kult_venue_image_lg'])) {
          $field_instance = field_info_instance('taxonomy_term', 'field_os2web_kult_venue_image_lg', 'os2web_kulturnaut_venue');
          $image_style = $field_instance['display']['os2sub_spotbox_list']['settings']['image_style'];

          print theme('image_style', array('style_name' => $image_style, 'path' => 'public://knactivity_image_stub.png'));
        }
      ?>

      <?php print render($content); ?>

    </div>
    <?php if ( $related_activities > 0 ): ?>
      <div class="upper-part">
        <span class="activities-count">
          <?php print $related_activities; ?>
        </span>
        <?php print t('Aktiviterer'); ?>
      </div>
    <?php endif; ?>
    <div class="bottom-part">
      <?php if ( !$page ): ?>
        <header>
          <?php if ( !$page ): ?>
            <h2><?php print $term_name; ?></h2>
          <?php endif; ?>
        </header>
        <?php print render($content['field_os2web_kult_venue_address'])
        ?>
      <?php endif; ?>
    </div>
  </div>
</a>
