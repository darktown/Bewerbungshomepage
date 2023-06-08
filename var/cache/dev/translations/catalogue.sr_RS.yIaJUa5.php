<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sr_RS', array (
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Kontrolna tabla',
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => 'Izmena %entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Novi %entity_label_singular%',
    'page_title.exception' => 'Greška|Greške',
    'datagrid.hidden_results' => 'Neki rezultati ne mogu biti prikazani jer nemate dovoljne privilegije',
    'datagrid.no_results' => 'Nema pronađenin rezultata.',
    'paginator.first' => 'Prva',
    'paginator.previous' => 'Prethodna',
    'paginator.next' => 'Sledeća',
    'paginator.last' => 'Poslednja',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> od <strong>%results%</strong>',
    'paginator.results' => '{0} Nema rezultata|{1} <strong>1</strong> rezultat|]1,Inf] <strong>%count%</strong> rezultata',
    'label.true' => 'Da',
    'label.false' => 'Ne',
    'label.empty' => 'Prazno',
    'label.null' => 'Ništa',
    'label.nullable_field' => 'Ostavi prazno',
    'label.object' => 'PHP Objekat',
    'label.inaccessible' => 'Nedostupno',
    'label.inaccessible.explanation' => 'Getter metoda ne postoji za ovo polje ili je nedostupna',
    'label.form.empty_value' => 'Prazno',
    'field.code_editor.view_code' => 'Pregledaj kod',
    'field.text_editor.view_content' => 'Pregledaj sadržaj',
    'action.entity_actions' => 'Akcije',
    'action.new' => 'Dodaj %entity_label_singular%',
    'action.search' => 'Pretraži',
    'action.detail' => 'Prikaži',
    'action.edit' => 'Izmeni',
    'action.delete' => 'Izbriši',
    'action.cancel' => 'Otkaži',
    'action.index' => 'Nazad na listu',
    'action.deselect' => 'Odčekiraj',
    'action.add_new_item' => 'Dodaj novi zapis',
    'action.remove_item' => 'Ukloni zapis',
    'action.choose_file' => 'Odaberi datoteku',
    'action.close' => 'Zatvori',
    'action.create' => 'Napravi',
    'action.create_and_add_another' => 'Napravi i dodaj još jedan',
    'action.create_and_continue' => 'Napravi i nastavi sa izmenama',
    'action.save' => 'Sačuvaj izmene',
    'action.save_and_continue' => 'Sačuvaj i nastavi sa izmenama',
    'batch_action_modal.title' => 'Primenićete "%action_name%" na %num_items% stavki.',
    'batch_action_modal.content' => 'Ova operacija je nepovratna.',
    'batch_action_modal.action' => 'Nastavi',
    'delete_modal.title' => 'Da li sigurno želite da obrišete ovaj zapis?',
    'delete_modal.content' => 'Ova operacija je nepovratna.',
    'filter.title' => 'Filteri',
    'filter.button.clear' => 'Poništi postojeće filtere',
    'filter.button.apply' => 'Primeni',
    'filter.label.is_equal_to' => 'je jednako',
    'filter.label.is_not_equal_to' => 'nije jednako',
    'filter.label.is_greater_than' => 'je veće od',
    'filter.label.is_greater_than_or_equal_to' => 'je veće ili jednako',
    'filter.label.is_less_than' => 'je manje od',
    'filter.label.is_less_than_or_equal_to' => 'je manje ili jednako',
    'filter.label.is_between' => 'je između',
    'filter.label.contains' => 'sadrži',
    'filter.label.not_contains' => 'ne sadrži',
    'filter.label.starts_with' => 'počinje sa',
    'filter.label.ends_with' => 'završava se se',
    'filter.label.exactly' => 'je tačno',
    'filter.label.not_exactly' => 'je bilo šta osim',
    'filter.label.is_same' => 'je identično',
    'filter.label.is_not_same' => 'nije identično',
    'filter.label.is_after' => 'je nakon',
    'filter.label.is_after_or_same' => 'je nakon ili je tačno',
    'filter.label.is_before' => 'je pre',
    'filter.label.is_before_or_same' => 'je pre ili je tačno',
    'form.are_you_sure' => 'Niste sačuvali izmene na ovoj formi.',
    'form.tab.error_badge_title' => 'Jedan pogrešan unos|%count% pogrešnih unosa',
    'user.logged_in_as' => 'Ulogovan kao',
    'user.unnamed' => 'Korisnik bez imena',
    'user.anonymous' => 'Anonimni korisnik',
    'user.sign_out' => 'Izloguj se',
    'user.exit_impersonation' => 'Izađi iz oponašanja',
    'login_page.username' => 'Korisničko ime',
    'login_page.password' => 'Lozinka',
    'login_page.sign_in' => 'Prijavi se',
    'login_page.forgot_password' => 'Zaboravljena lozinka',
    'login_page.remember_me' => 'Zapamti me',
    'exception.entity_not_found' => 'Ovaj zapis više nije dostupan.',
    'exception.entity_remove' => 'Ovaj zapis ne može biti izbrisan zato što su drugi zapisi vezani za njega.',
    'exception.forbidden_action' => 'Ova akcija ne može biti primenjena na ovaj zapis.',
    'exception.insufficient_entity_permission' => 'Nemate dovoljne privilegije da vidite ovaj zapis.',
    'autocomplete.no-results-found' => 'Nema rezultata',
    'autocomplete.no-more-results' => 'Nema više rezultata',
    'autocomplete.loading-more-results' => 'Učitavanje rezultata . . .',
  ),
));

$catalogueSr = new MessageCatalogue('sr', array (
));
$catalogue->addFallbackCatalogue($catalogueSr);
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
));
$catalogueSr->addFallbackCatalogue($catalogueEn);

return $catalogue;
