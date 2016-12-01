<?php

/**
 * @file
 * Permissions.settings.php.
 *
 * Implements acquia_permissions_map which provides the full list of drush-
 * generated roles/permissions used on the website. Keeping permissions
 * outside of features is preferrable as it gets extremely messy with
 * dependencies.
 */

/**
 * Function acquia_permissions_map().
 *
 * Implements acquia_permissions_map which contains a list of drush-generated
 * roles and permissions.
 */
function acquia_permissions_map() {
  return array(
    // Anonymous user role permissions.
    'anonymous user' => array(
      'access content',
      'access user profiles',
      'search content',
      'view any main profile',
      'view files',
    ),
    // Authenticated user role permissions.
    'authenticated user' => array(
      'access content',
      'access media browser',
      'access user profiles',
      'create files',
      'delete own image files',
      'edit own image files',
      'search content',
      'view any main profile',
      'view files',
      'view own files',
      'view own main profile',
    ),
    // Site Administrator role permissions.
    'Site Administrator' => array(
      'access administration menu',
      'access administration pages',
      'access draggableviews',
      'access media browser',
      'access user profiles',
      'access workbench',
      'administer custom tokens',
      'administer media wysiwyg view mode',
      'administer menu',
      'administer permissions',
      'administer profiles',
      'administer taxonomy',
      'administer users',
      'create application content',
      'create article content',
      'create department_profile content',
      'create event content',
      'create files',
      'create how_to content',
      'create landing_page content',
      'create listing_page content',
      'create post content',
      'create script_page content',
      'create tabbed_content content',
      'create topic_page content',
      'create url aliases',
      'delete any application content',
      'delete any article content',
      'delete any department_profile content',
      'delete any event content',
      'delete any how_to content',
      'delete any image files',
      'delete any landing_page content',
      'delete any listing_page content',
      'delete any post content',
      'delete any script_page content',
      'delete any tabbed_content content',
      'delete any topic_page content',
      'delete own application content',
      'delete own article content',
      'delete own department_profile content',
      'delete own event content',
      'delete own how_to content',
      'delete own image files',
      'delete own landing_page content',
      'delete own listing_page content',
      'delete own post content',
      'delete own script_page content',
      'delete own tabbed_content content',
      'delete own topic_page content',
      'delete revisions',
      'delete terms in news_tags',
      'delete terms in contact',
      'edit any application content',
      'edit any article content',
      'edit any department_profile content',
      'edit any event content',
      'edit any how_to content',
      'edit any image files',
      'edit any landing_page content',
      'edit any listing_page content',
      'edit any main profile',
      'edit any post content',
      'edit any script_page content',
      'edit any tabbed_content content',
      'edit any topic_page content',
      'edit meta tags',
      'edit own application content',
      'edit own article content',
      'edit own department_profile content',
      'edit own event content',
      'edit own how_to content',
      'edit own image files',
      'edit own landing_page content',
      'edit own listing_page content',
      'edit own main profile',
      'edit own post content',
      'edit own script_page content',
      'edit own tabbed_content content',
      'edit own topic_page content',
      'edit terms in news_tags',
      'edit terms in contact',
      'grant content access',
      'grant own content access',
      'list custom tokens',
      'moderate content from archive to draft',
      'moderate content from draft to needs_review',
      'moderate content from needs_review to draft',
      'moderate content from needs_review to published',
      'moderate content from published to archive',
      'moderate content from published to draft',
      'revert revisions',
      'use media wysiwyg',
      'use text format filtered_html',
      'use text format full_html',
      'use workbench_moderation my drafts tab',
      'use workbench_moderation needs review tab',
      'view all unpublished content',
      'view moderation history',
      'view moderation messages',
      'view own files',
      'view own private files',
      'view own unpublished content',
      'view revisions',
      'view the administration theme',
    ),
    // Content Editor role permissions.
    'Content Editor' => array(
      'access administration menu',
      'access administration pages',
      'access media browser',
      'access workbench',
      'administer media wysiwyg view mode',
      'create article content',
      'create department_profile content',
      'create event content',
      'create files',
      'create how_to content',
      'create post content',
      'create tabbed_content content',
      'edit any article content',
      'edit any department_profile content',
      'edit any event content',
      'edit any how_to content',
      'edit any image files',
      'edit any post content',
      'edit any tabbed_content content',
      'edit meta tags',
      'edit own article content',
      'edit own department_profile content',
      'edit own event content',
      'edit own how_to content',
      'edit own image files',
      'edit own post content',
      'edit own tabbed_content content',
      'moderate content from archive to draft',
      'moderate content from draft to needs_review',
      'moderate content from needs_review to draft',
      'moderate content from needs_review to published',
      'moderate content from published to archive',
      'moderate content from published to draft',
      'revert revisions',
      'use media wysiwyg',
      'use text format filtered_html',
      'use text format full_html',
      'use workbench_moderation my drafts tab',
      'use workbench_moderation needs review tab',
      'view all unpublished content',
      'view moderation history',
      'view moderation messages',
      'view own files',
      'view own private files',
      'view own unpublished content',
      'view revisions',
      'view the administration theme',
    ),
    // Guide Author role permissions.
    // Assumes user is at least a content author.
    'Guide Author' => array(
      'create topic_page content',
      'edit any topic_page content',
      'edit own topic_page content',
    ),
    // Landing Page Author role permissions.
    // Assumes user is at least a content author.
    'Landing Author' => array(
      'create landing_page content',
      'edit any landing_page content',
      'edit own landing_page content',
    ),
    // Content Author role permissions.
    'Content Author' => array(
      'access administration menu',
      'access administration pages',
      'access content',
      'access media browser',
      'access workbench',
      'administer media wysiwyg view mode',
      'create article content',
      'create department_profile content',
      'create event content',
      'create files',
      'create how_to content',
      'create post content',
      'create public_notice content',
      'create tabbed_content content',
      'edit any article content',
      'edit any department_profile content',
      'edit any event content',
      'edit any how_to content',
      'edit any image files',
      'edit any post content',
      'edit any public_notice content',
      'edit any tabbed_content content',
      'edit meta tags',
      'edit own article content',
      'edit own department_profile content',
      'edit own event content',
      'edit own how_to content',
      'edit own image files',
      'edit own post content',
      'edit own tabbed_content content',
      'edit own public_notice content',
      'moderate content from archive to draft',
      'moderate content from draft to needs_review',
      'moderate content from needs_review to draft',
      'moderate content from published to draft',
      'revert revisions',
      'use media wysiwyg',
      'use text format filtered_html',
      'use text format full_html',
      'use workbench_moderation my drafts tab',
      'view all unpublished content',
      'view moderation history',
      'view moderation messages',
      'view own files',
      'view own private files',
      'view own unpublished content',
      'view revisions',
      'view the administration theme',
    ),
    // Status Alert Editor role permissions.
    'Status Alert Editor' => array(
      'access administration menu',
      'access administration pages',
      'edit meta tags',
      'view the administration theme',
      'access workbench',
    ),
    // Developer role permissions.
    'Developer' => array(
      'access administration menu',
      'access administration pages',
      'access media browser',
      'access user profiles',
      'access workbench',
      'administer media wysiwyg view mode',
      'administer menu',
      'administer permissions',
      'administer profiles',
      'administer search',
      'administer taxonomy',
      'administer users',
      'create article content',
      'create department_profile content',
      'create files',
      'create landing_page content',
      'create listing_page content',
      'create post content',
      'create tabbed_content content',
      'create topic_page content',
      'create url aliases',
      'delete any article content',
      'delete any department_profile content',
      'delete any landing_page content',
      'delete any listing_page content',
      'delete any post content',
      'delete any topic_page content',
      'delete own article content',
      'delete own department_profile content',
      'delete own landing_page content',
      'delete own listing_page content',
      'delete own post content',
      'delete own topic_page content',
      'delete revisions',
      'delete terms in event_type',
      'delete terms in neighborhoods',
      'delete terms in news_tags',
      'delete terms in contact',
      'delete terms in topic_category',
      'delete terms in icons',
      'edit any article content',
      'edit any department_profile content',
      'edit any image files',
      'edit any landing_page content',
      'edit any listing_page content',
      'edit any main profile',
      'edit any post content',
      'edit any tabbed_content content',
      'edit any topic_page content',
      'edit meta tags',
      'edit own article content',
      'edit own department_profile content',
      'edit own image files',
      'edit own landing_page content',
      'edit own listing_page content',
      'edit own main profile',
      'edit own post content',
      'edit own tabbed_content content',
      'edit own topic_page content',
      'edit terms in news_tags',
      'edit terms in contact',
      'moderate content from archive to draft',
      'moderate content from draft to needs_review',
      'moderate content from needs_review to draft',
      'moderate content from needs_review to published',
      'moderate content from published to archive',
      'moderate content from published to draft',
      'revert revisions',
      'use media wysiwyg',
      'use text format filtered_html',
      'use text format full_html',
      'use workbench_moderation my drafts tab',
      'use workbench_moderation needs review tab',
      'view all unpublished content',
      'view moderation history',
      'view moderation messages',
      'view own files',
      'view own private files',
      'view own unpublished content',
      'view revisions',
      'view the administration theme',
    ),
    // Manager role permissions.
    'Manager' => array(
    ),
  );
}
