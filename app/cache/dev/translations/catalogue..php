<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('', array (
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'The fields {{ fields }} were not expected.' => 'The fields {{ fields }} were not expected.',
    'The fields {{ fields }} are missing.' => 'The fields {{ fields }} are missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user current password.' => 'This value should be the user current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'fos_user.username.already_used' => 'The username is already used',
    'fos_user.username.blank' => 'Please enter a username',
    'fos_user.username.short' => '[-Inf,Inf]The username is too short',
    'fos_user.username.long' => '[-Inf,Inf]The username is too long',
    'fos_user.email.already_used' => 'The email is already used',
    'fos_user.email.blank' => 'Please enter an email',
    'fos_user.email.short' => '[-Inf,Inf]The email is too short',
    'fos_user.email.long' => '[-Inf,Inf]The email is too long',
    'fos_user.email.invalid' => 'The email is not valid',
    'fos_user.password.blank' => 'Please enter a password',
    'fos_user.password.short' => '[-Inf,Inf]The password is too short',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match',
    'fos_user.new_password.blank' => 'Please enter a new password',
    'fos_user.new_password.short' => '[-Inf,Inf]The new password is too short',
    'fos_user.current_password.invalid' => 'The entered password is invalid',
    'fos_user.group.blank' => 'Please enter a name',
    'fos_user.group.short' => '[-Inf,Inf]The name is too short',
    'fos_user.group.long' => '[-Inf,Inf]The name is too long',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Add new',
    'label_type_yes' => 'yes',
    'label_type_no' => 'no',
    'sonata_core_template_box_file_found_in' => 'This file can be found in',
    'label_type_equals' => 'is equal to',
    'label_type_not_equals' => 'is not equal to',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administration',
    'action_delete' => 'Delete',
    'btn_batch' => 'OK',
    'btn_create' => 'Create',
    'btn_create_and_edit_again' => 'Create',
    'btn_create_and_create_a_new_one' => 'Create and add another',
    'btn_create_and_return_to_list' => 'Create and return to list',
    'btn_filter' => 'Filter',
    'btn_update' => 'Update',
    'btn_update_and_edit_again' => 'Update',
    'btn_update_and_return_to_list' => 'Update and close',
    'link_delete' => 'Delete',
    'link_action_create' => 'Add new',
    'link_action_list' => 'Return to list',
    'link_action_show' => 'Show',
    'link_action_edit' => 'Edit',
    'link_add' => 'Add new',
    'link_list' => 'List',
    'link_reset_filter' => 'Reset',
    'title_create' => 'Create',
    'title_dashboard' => 'Dashboard',
    'title_edit' => 'Edit "%name%"',
    'title_list' => 'List',
    'link_next_pager' => 'Next',
    'link_previous_pager' => 'Previous',
    'link_first_pager' => 'First',
    'link_last_pager' => 'Last',
    'Admin' => 'Admin',
    'link_expand' => 'expand/collapse',
    'no_result' => 'No result',
    'confirm_msg' => 'Are you sure ?',
    'action_edit' => 'Edit',
    'action_show' => 'Show',
    'all_elements' => 'All elements',
    'flash_batch_empty' => 'Action aborted. No items were selected.',
    'flash_create_success' => 'Item "%name%" has been successfully created.',
    'flash_create_error' => 'An error has occurred during the creation of item "%name%".',
    'flash_edit_success' => 'Item "%name%" has been successfully updated.',
    'flash_edit_error' => 'An error has occurred during update of item "%name%".',
    'flash_batch_delete_success' => 'Selected items have been successfully deleted.',
    'flash_batch_delete_error' => 'An Error has occurred during selected items deletion.',
    'flash_delete_error' => 'An Error has occurred during deletion of item "%name%".',
    'flash_delete_success' => 'Item "%name%" has been deleted successfully.',
    'breadcrumb.link_dashboard' => '<i class="fa fa-home"></i>',
    'title_delete' => 'Confirm deletion',
    'message_delete_confirmation' => 'Are you sure you want to delete the selected element?',
    'btn_delete' => 'Yes, delete',
    'title_batch_confirmation' => 'Confirm batch action \'%action%\'',
    'message_batch_confirmation' => 'Are you sure you want to confirm this action and execute it for the selected element?|Are you sure you want to confirm this action and execute it for the %count% selected elements?',
    'message_batch_all_confirmation' => 'Are you sure you want to confirm this action and execute it for all the elements?',
    'btn_execute_batch_action' => 'Yes, execute',
    'label_type_yes' => 'yes',
    'label_type_no' => 'no',
    'label_type_contains' => 'contains',
    'label_type_not_contains' => 'does not contain',
    'label_type_equals' => 'is equal to',
    'label_type_not_equals' => 'is not equal to',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'is empty',
    'label_date_type_not_null' => 'is not empty',
    'label_date_type_between' => 'between',
    'label_date_type_not_between' => 'not between',
    'label_filters' => 'Filters',
    'delete_or' => 'or',
    'link_action_history' => 'Revisions',
    'td_action' => 'Action',
    'td_revision' => 'Revisions',
    'td_timestamp' => 'Date',
    'td_username' => 'Author',
    'label_view_revision' => 'View Revision',
    'list_results_count' => '1 result|%count% results',
    'label_export_download' => 'Download',
    'loading_information' => 'Loading information…',
    'btn_preview' => 'Preview',
    'btn_preview_approve' => 'Approve',
    'btn_preview_decline' => 'Decline',
    'label_per_page' => 'Per page',
    'list_select' => 'Select',
    'confirm_exit' => 'You have unsaved changes.',
    'link_edit_acl' => 'Edit ACL',
    'btn_update_acl' => 'Update ACL',
    'flash_acl_edit_success' => 'ACL has been successfuly updated.',
    'link_action_acl' => 'ACL',
    'short_object_description_placeholder' => 'No selection',
    'title_search_results' => 'Search results: %query%',
    'search_placeholder' => 'Search',
    'no_results_found' => 'no result found',
    'add_new_entry' => 'add new entry',
  ),
  'SonataMediaBundle' => 
  array (
    'default' => 'Default',
    'media' => 'Media',
    'gallery' => 'Gallery',
    'sonata_media' => 'Media Library',
    'no_provider_available' => 'No provider available',
    'title_select_provider' => 'Select media provider',
    'breadcrumb.link_media_create' => 'Create',
    'breadcrumb.link_media_list' => 'Media',
    'breadcrumb.link_media_edit' => 'Edit',
    'breadcrumb.link_media_view' => 'View',
    'breadcrumb.link_media_delete' => 'Delete',
    'breadcrumb.link_gallery_create' => 'Create',
    'breadcrumb.link_media_show' => 'Show',
    'breadcrumb.link_gallery_list' => 'Galleries',
    'breadcrumb.link_gallery_edit' => 'Edit',
    'breadcrumb.link_gallery_delete' => 'Delete',
    'description.roles_download_strategy' => 'The media can be retrieved by users with the following roles : %roles%.',
    'description.public_download_strategy' => 'The media can be retrieved by anyone.',
    'description.forbidden_download_strategy' => 'The media can be retrieved by nobody.',
    'filter.label_name' => 'Name',
    'filter.label_provider_reference' => 'Provider Reference',
    'filter.label_enabled' => 'Enabled',
    'filter.label_context' => 'Context',
    'filter.label_provider_name' => 'Provider Name',
    'form.label_enabled' => 'Enabled',
    'form.label_media' => 'Media',
    'form.label_position' => 'Position',
    'form.label_context' => 'Context',
    'form.label_name' => 'Name',
    'form.label_default_format' => 'Format',
    'form.label_gallery_has_medias' => 'Media',
    'form.label_author_name' => 'Author',
    'form.label_cdn_is_flushable' => 'Flush CDN',
    'form.label_description' => 'Description',
    'form.label_copyright' => 'Copyright',
    'form.label_binary_content' => 'File/Reference',
    'label.size' => 'Size',
    'label.length' => 'Length',
    'label.width' => 'Width',
    'label.height' => 'Height',
    'label.content_type' => 'Content type',
    'label.copyright' => 'Copyright',
    'label.author_name' => 'Author',
    'label.cdn' => 'CDN',
    'label.to_be_flushed' => 'Flushable',
    'label.flushed_at' => 'Flushed at',
    'label.public_url' => 'Public URL',
    'label.name' => 'Name',
    'label.file' => 'File',
    'label.author' => 'Author',
    'label.enabled' => 'Enabled',
    'label.cdn_is_flushable' => 'Flush CDN',
    'label.video_reference' => 'Change video',
    'label.description' => 'Description',
    'label.select_context' => 'Context: ',
    'label.select_provider' => 'Type : ',
    'label.protected_download_url' => 'Protected URL',
    'label.protected_download_url_notice' => 'Warning',
    'label.edit_with_pixlr' => 'Edit this media with Pixlr',
    'label.pixlr_warning' => '
                    
                        <span class="label label-warning">Important</span> you are going to expose the media to an <strong>external service</strong>. <br />
                        If you are working on confidentiel materials, please do not use this service.
                    
                ',
    'label.pixlr_express_editor' => '
                    
                        <strong>Pixlr Express Editor</strong> <br />
                        Simple interface for quick editing
                    
                ',
    'label.pixlr_advanced_editor' => '
                    
                        <strong>Pixlr Advanced Editor</strong> <br />
                        Experimented users only
                    
                ',
    'link.all_providers' => 'All',
    'link.test_protected_url' => 'Link Preview',
    'list.label_enabled' => 'Enabled',
    'list.label_name' => 'Name',
    'list.label_context' => 'Context',
    'list.label_default_format' => 'Format',
    'list.label__action' => 'Action',
    'list.label_custom' => 'Custom',
    'sidemenu.link_edit_media' => 'Edit',
    'sidemenu.link_media_view' => 'View',
    'sonata.media.provider.dailymotion' => 'DailyMotion',
    'sonata.media.provider.youtube' => 'YouTube',
    'sonata.media.provider.vimeo' => 'Vimeo',
    'sonata.media.provider.image' => 'Image',
    'sonata.media.provider.file' => 'File',
    'sonata.media.provider.dailymotion.description' => 'Add a video hosted on DailyMotion',
    'sonata.media.provider.youtube.description' => 'Add a video hosted on YouTube',
    'sonata.media.provider.vimeo.description' => 'Add a video hosted on Vimeo',
    'sonata.media.provider.image.description' => 'Add an image',
    'sonata.media.provider.file.description' => 'Add any type of file',
    'title.media_preview' => 'Preview',
    'title.media_thumbnail' => 'Thumbnail',
    'title.informations' => 'Information',
    'title.formats' => 'Formats',
    'link_media' => 'Link the object to a new media',
    'no_linked_media' => 'No media linked to the object',
    'sonata_media_gallery_index' => 'Gallery',
    'sonata_template_box_media_gallery_block' => 'This is the gallery media block. Feel free to override it.',
    'list.label_description' => 'Description',
    'list.label_size' => 'Size',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Invalid username or password',
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated',
    'group.flash.created' => 'The group has been created',
    'group.flash.deleted' => 'The group has been deleted',
    'security.login.username' => 'Username:',
    'security.login.password' => 'Password:',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Login',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

Regards,
the Team.
',
    'resetting.password_already_requested' => 'The password for this user has already been requested within the last 24 hours.',
    'resetting.check_email' => 'An email has been sent to %email%. It contains a link you must click to reset your password.',
    'resetting.request.invalid_username' => 'The username or email address "%username%" does not exist.',
    'resetting.request.username' => 'Username or email address:',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Logout',
    'layout.login' => 'Login',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name:',
    'form.username' => 'Username:',
    'form.email' => 'Email:',
    'form.current_password' => 'Current password:',
    'form.password' => 'Password:',
    'form.password_confirmation' => 'Verification:',
    'form.new_password' => 'New password:',
    'form.new_password_confirmation' => 'Verification:',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);


return $catalogue;
