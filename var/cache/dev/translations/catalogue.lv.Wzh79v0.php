<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lv', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Šajā veidlapā nevajadzētu būt papildus ievades laukiem.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Augšupielādētā faila izmērs bija par lielu. Lūdzu mēģiniet augšupielādēt mazāka izmēra failu.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Dotais CSRF talons nav derīgs. Lūdzu mēģiniet vēlreiz iesniegt veidlapu.',
    'This value is not a valid HTML5 color.' => 'Šī vertība nav derīga HTML5 krāsa.',
    'Please enter a valid birthdate.' => 'Lūdzu, ievadiet derīgu dzimšanas datumu.',
    'The selected choice is invalid.' => 'Iezīmētā izvēle nav derīga.',
    'The collection is invalid.' => 'Kolekcija nav derīga.',
    'Please select a valid color.' => 'Lūdzu, izvēlieties derīgu krāsu.',
    'Please select a valid country.' => 'Lūdzu, izvēlieties derīgu valsti.',
    'Please select a valid currency.' => 'Lūdzu, izvēlieties derīgu valūtu.',
    'Please choose a valid date interval.' => 'Lūdzu, izvēlieties derīgu datumu intervālu.',
    'Please enter a valid date and time.' => 'Lūdzu, ievadiet derīgu datumu un laiku.',
    'Please enter a valid date.' => 'Lūdzu, ievadiet derīgu datumu.',
    'Please select a valid file.' => 'Lūdzu, izvēlieties derīgu failu.',
    'The hidden field is invalid.' => 'Slēptā lauka vērtība ir nederīga.',
    'Please enter an integer.' => 'Lūdzu, ievadiet veselu skaitli.',
    'Please select a valid language.' => 'Lūdzu, izvēlieties derīgu valodu.',
    'Please select a valid locale.' => 'Lūdzu, izvēlieties derīgu lokalizāciju.',
    'Please enter a valid money amount.' => 'Lūdzu, ievadiet derīgu naudas lielumu.',
    'Please enter a number.' => 'Lūdzu, ievadiet skaitli.',
    'The password is invalid.' => 'Parole ir nederīga.',
    'Please enter a percentage value.' => 'Lūdzu, ievadiet procentuālo lielumu.',
    'The values do not match.' => 'Vērtības nesakrīt.',
    'Please enter a valid time.' => 'Lūdzu, ievadiet derīgu laiku.',
    'Please select a valid timezone.' => 'Lūdzu, izvēlieties derīgu laika zonu.',
    'Please enter a valid URL.' => 'Lūdzu, ievadiet derīgu URL.',
    'Please enter a valid search term.' => 'Lūdzu, ievadiet derīgu meklēšanas nosacījumu.',
    'Please provide a valid phone number.' => 'Lūdzu, ievadiet derīgu tālruņa numuru.',
    'The checkbox has an invalid value.' => 'Izvēles rūtiņai ir nederīga vērtība.',
    'Please enter a valid email address.' => 'Lūdzu, ievadiet derīgu e-pasta adresi.',
    'Please select a valid option.' => 'Lūdzu, izvēlieties derīgu opciju.',
    'Please select a valid range.' => 'Lūdzu, izvēlieties derīgu diapazonu.',
    'Please enter a valid week.' => 'Lūdzu, ievadiet derīgu nedeļu.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Radās autentifikācijas kļūda.',
    'Authentication credentials could not be found.' => 'Autentifikācijas dati nav atrasti.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikācijas pieprasījums nevar tikt apstrādāts sistēmas problēmas dēļ.',
    'Invalid credentials.' => 'Nederīgi autentifikācijas dati.',
    'Cookie has already been used by someone else.' => 'Kāds cits jau izmantoja sīkdatni.',
    'Not privileged to request the resource.' => 'Nav tiesību ši resursa izsaukšanai.',
    'Invalid CSRF token.' => 'Nederīgs CSRF talons.',
    'No authentication provider found to support the authentication token.' => 'Nav atrasts, autentifikācijas talonu atbalstošs, autentifikācijas sniedzējs.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija nav pieejama - vai nu tā beidzās, vai nu sīkdatnes nav iespējotas.',
    'No token could be found.' => 'Nevar atrast nevienu talonu.',
    'Username could not be found.' => 'Nevar atrast lietotājvārdu.',
    'Account has expired.' => 'Konta derīguma termiņš ir beidzies.',
    'Credentials have expired.' => 'Autentifikācijas datu derīguma termiņš ir beidzies.',
    'Account is disabled.' => 'Konts ir atspējots.',
    'Account is locked.' => 'Konts ir slēgts.',
    'Too many failed login attempts, please try again later.' => 'Pārāk daudz atteiktu ieejas mēģinājumu, lūdzu, mēģiniet vēlreiz vēlāk.',
    'Invalid or expired login link.' => 'Ieejas saite ir nederīga vai arī tai ir beidzies derīguma termiņš.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Pārāk daudz nesekmīgu autentifikācijas mēģinājumu, lūdzu mēģiniet vēlreiz pēc %minutes% minūtes.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Pārāk daudz nesekmīgu autentifikācijas mēģinājumu, lūdzu mēģiniet vēlreiz pēc %minutes% minūtēm.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
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
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Dashboard',
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => 'Edit %entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Create %entity_label_singular%',
    'page_title.exception' => 'Error|Errors',
    'datagrid.hidden_results' => 'Some results can\'t be displayed because you don\'t have enough permissions',
    'datagrid.no_results' => 'No results found.',
    'paginator.first' => 'First',
    'paginator.previous' => 'Previous',
    'paginator.next' => 'Next',
    'paginator.last' => 'Last',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> of <strong>%results%</strong>',
    'paginator.results' => '{0} No results|{1} <strong>1</strong> result|]1,Inf] <strong>%count%</strong> results',
    'label.true' => 'Yes',
    'label.false' => 'No',
    'label.empty' => 'Empty',
    'label.null' => 'Null',
    'label.nullable_field' => 'Leave empty',
    'label.object' => 'PHP Object',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Getter method does not exist for this field or the field is not public',
    'label.form.empty_value' => 'None',
    'field.code_editor.view_code' => 'View code',
    'field.text_editor.view_content' => 'View content',
    'action.entity_actions' => 'Actions',
    'action.new' => 'Add %entity_label_singular%',
    'action.search' => 'Search',
    'action.detail' => 'Show',
    'action.edit' => 'Edit',
    'action.delete' => 'Delete',
    'action.cancel' => 'Cancel',
    'action.index' => 'Back to listing',
    'action.deselect' => 'Deselect',
    'action.add_new_item' => 'Add a new item',
    'action.remove_item' => 'Remove the item',
    'action.choose_file' => 'Choose file',
    'action.close' => 'Close',
    'action.create' => 'Create',
    'action.create_and_add_another' => 'Create and add another',
    'action.create_and_continue' => 'Create and continue editing',
    'action.save' => 'Save changes',
    'action.save_and_continue' => 'Save and continue editing',
    'batch_action_modal.title' => 'You are going to apply the "%action_name%" action to %num_items% item(s).',
    'batch_action_modal.content' => 'There is no undo for this operation.',
    'batch_action_modal.action' => 'Proceed',
    'delete_modal.title' => 'Do you really want to delete this item?',
    'delete_modal.content' => 'There is no undo for this operation.',
    'filter.title' => 'Filters',
    'filter.button.clear' => 'Clear',
    'filter.button.apply' => 'Apply',
    'filter.label.is_equal_to' => 'is equal to',
    'filter.label.is_not_equal_to' => 'is not equal to',
    'filter.label.is_greater_than' => 'is greater than',
    'filter.label.is_greater_than_or_equal_to' => 'is greater than or equal to',
    'filter.label.is_less_than' => 'is less than',
    'filter.label.is_less_than_or_equal_to' => 'is less than or equal to',
    'filter.label.is_between' => 'is between',
    'filter.label.contains' => 'contains',
    'filter.label.not_contains' => 'doesn\'t contain',
    'filter.label.starts_with' => 'starts with',
    'filter.label.ends_with' => 'ends with',
    'filter.label.exactly' => 'exactly',
    'filter.label.not_exactly' => 'not exactly',
    'filter.label.is_same' => 'is same',
    'filter.label.is_not_same' => 'is not same',
    'filter.label.is_after' => 'is after',
    'filter.label.is_after_or_same' => 'is after or same',
    'filter.label.is_before' => 'is before',
    'filter.label.is_before_or_same' => 'is before or same',
    'form.are_you_sure' => 'You haven\'t saved the changes made on this form.',
    'form.tab.error_badge_title' => 'One invalid input|%count% invalid inputs',
    'form.slug.confirm_text' => 'If you change the slug, you can break links on other pages.',
    'user.logged_in_as' => 'Logged in as',
    'user.unnamed' => 'Unnamed User',
    'user.anonymous' => 'Anonymous User',
    'user.sign_out' => 'Sign out',
    'user.exit_impersonation' => 'Exit impersonation',
    'login_page.username' => 'Username',
    'login_page.password' => 'Password',
    'login_page.sign_in' => 'Sign in',
    'login_page.forgot_password' => 'Forgot Your Password?',
    'login_page.remember_me' => 'Remember me',
    'exception.entity_not_found' => 'This item is no longer available.',
    'exception.entity_remove' => 'This item can\'t be deleted because other items depend on it.',
    'exception.forbidden_action' => 'The requested action can\'t be performed on this item.',
    'exception.insufficient_entity_permission' => 'You don\'t have permission to access this item.',
    'autocomplete.no-results-found' => 'No results found',
    'autocomplete.no-more-results' => 'No more results',
    'autocomplete.loading-more-results' => 'Loading more results…',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Delete?',
    'vich_uploader.link.download' => 'Download',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;