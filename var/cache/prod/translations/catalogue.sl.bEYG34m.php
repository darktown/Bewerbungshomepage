<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sl', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ta obrazec ne sme vsebovati dodatnih polj.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Naložena datoteka je prevelika. Prosimo, poizkusite naložiti manjšo.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF vrednost je napačna. Prosimo, ponovno pošljite obrazec.',
    'This value is not a valid HTML5 color.' => 'Ta vrednost ni veljavna barva HTML5.',
    'Please enter a valid birthdate.' => 'Prosimo, vnesite veljaven rojstni datum.',
    'The selected choice is invalid.' => 'Izbira ni veljavna.',
    'The collection is invalid.' => 'Zbirka ni veljavna.',
    'Please select a valid color.' => 'Prosimo, izberite veljavno barvo.',
    'Please select a valid country.' => 'Prosimo, izberite veljavno državo.',
    'Please select a valid currency.' => 'Prosimo, izberite veljavno valuto.',
    'Please choose a valid date interval.' => 'Prosimo, izberite veljaven datumski interval.',
    'Please enter a valid date and time.' => 'Prosimo, vnesite veljaven datum in čas.',
    'Please enter a valid date.' => 'Prosimo, izberite veljaven datum.',
    'Please select a valid file.' => 'Prosimo, izberite veljavno datoteko.',
    'The hidden field is invalid.' => 'Skrito polje ni veljavno.',
    'Please enter an integer.' => 'Prosimo, vnesite celo število.',
    'Please select a valid language.' => 'Prosimo, izberite veljaven jezik.',
    'Please select a valid locale.' => 'Prosimo, izberite veljavne področne nastavitve.',
    'Please enter a valid money amount.' => 'Prosimo, vnesite veljaven denarni znesek.',
    'Please enter a number.' => 'Prosimo, vnesite številko.',
    'The password is invalid.' => 'Geslo ni veljavno.',
    'Please enter a percentage value.' => 'Prosimo, vnesite odstotno vrednost.',
    'The values do not match.' => 'Vrednosti se ne ujemajo.',
    'Please enter a valid time.' => 'Prosimo, vnesite veljaven čas.',
    'Please select a valid timezone.' => 'Prosimo, izberite veljaven časovni pas.',
    'Please enter a valid URL.' => 'Prosimo, vnesite veljaven URL.',
    'Please enter a valid search term.' => 'Prosimo, vnesite veljaven iskalni izraz.',
    'Please provide a valid phone number.' => 'Prosimo, podajte veljavno telefonsko številko.',
    'The checkbox has an invalid value.' => 'Potrditveno polje vsebuje neveljavno vrednost.',
    'Please enter a valid email address.' => 'Prosimo, vnesite veljaven e-poštni naslov.',
    'Please select a valid option.' => 'Prosimo, izberite veljavno možnost.',
    'Please select a valid range.' => 'Prosimo, izberite veljaven obseg.',
    'Please enter a valid week.' => 'Prosimo, vnesite veljaven teden.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Prišlo je do izjeme pri preverjanju avtentikacije.',
    'Authentication credentials could not be found.' => 'Poverilnic za avtentikacijo ni bilo mogoče najti.',
    'Authentication request could not be processed due to a system problem.' => 'Zahteve za avtentikacijo ni bilo mogoče izvesti zaradi sistemske težave.',
    'Invalid credentials.' => 'Neveljavne pravice.',
    'Cookie has already been used by someone else.' => 'Piškotek je uporabil že nekdo drug.',
    'Not privileged to request the resource.' => 'Nimate privilegijev za zahtevani vir.',
    'Invalid CSRF token.' => 'Neveljaven CSRF žeton.',
    'No authentication provider found to support the authentication token.' => 'Ponudnika avtentikacije za podporo prijavnega žetona ni bilo mogoče najti.',
    'No session available, it either timed out or cookies are not enabled.' => 'Seja ni na voljo, ali je potekla ali pa piškotki niso omogočeni.',
    'No token could be found.' => 'Žetona ni bilo mogoče najti.',
    'Username could not be found.' => 'Uporabniškega imena ni bilo mogoče najti.',
    'Account has expired.' => 'Račun je potekel.',
    'Credentials have expired.' => 'Poverilnice so potekle.',
    'Account is disabled.' => 'Račun je onemogočen.',
    'Account is locked.' => 'Račun je zaklenjen.',
    'Too many failed login attempts, please try again later.' => 'Preveč neuspelih poskusov prijave, poskusite znova pozneje.',
    'Invalid or expired login link.' => 'Neveljavna ali potekla povezava prijave.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Preveč neuspelih poskusov prijave, poskusite znova čez %minutes% minuto.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Preveč neuspelih poskusov prijave, poskusite znova čez %minutes% minut.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => '%entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Dodaj %entity_label_singular%',
    'page_title.exception' => '%count% napaka|%count% napaki|%count% napake|%count% napak',
    'datagrid.no_results' => 'Nobenih rezultatov ni najdenih.',
    'paginator.first' => 'Prva',
    'paginator.previous' => 'Prejšnja',
    'paginator.next' => 'Naslednja',
    'paginator.last' => 'Zadnja',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> od <strong>%results%</strong>',
    'label.true' => 'Da',
    'label.false' => 'Ne',
    'label.empty' => 'Prazno',
    'label.null' => 'Null',
    'label.nullable_field' => 'Pusti prazno',
    'label.object' => 'PHP objekt',
    'label.inaccessible' => 'Nedostopno',
    'label.inaccessible.explanation' => 'Getter metoda ne obstaja za to polje ali pa lastnost ni javna',
    'label.form.empty_value' => 'Noben',
    'action.entity_actions' => 'Dejanja',
    'action.new' => 'Dodaj %entity_label_singular%',
    'action.search' => 'Iskanje',
    'action.detail' => 'Prikaži',
    'action.edit' => 'Uredi',
    'action.delete' => 'Izbriši',
    'action.cancel' => 'Prekliči',
    'action.index' => 'Nazaj na seznam',
    'action.add_new_item' => 'Dodaj nov element',
    'action.remove_item' => 'Odstrani element',
    'action.choose_file' => 'Izberite datoteko',
    'delete_modal.title' => 'Ali res želite izbrisati ta element?',
    'delete_modal.content' => 'Razveljavitev za to operacijo ne obstaja.',
    'form.are_you_sure' => 'Sprememb, ki ste jih naredili na tem obrazcu, niste shranili.',
    'user.logged_in_as' => 'Prijavljeni kot',
    'user.unnamed' => 'Neimenovani uporabnik',
    'user.anonymous' => 'Anonimni uporabnik',
    'user.sign_out' => 'Odjava',
    'login_page.username' => 'uporabniško ime',
    'login_page.password' => 'Geslo',
    'login_page.sign_in' => 'Prijava',
    'login_page.forgot_password' => 'Ste pozabili geslo?',
    'login_page.remember_me' => 'Zapomni si me',
    'exception.entity_not_found' => 'Ta element ni več na voljo.',
    'exception.entity_remove' => 'Tega elementac ni mogoče izbrisati, ker so ostali elementi odvisni od njega.',
    'exception.forbidden_action' => 'Zahtevanega dejanja ni mogoče izvršiti na tem elementu.',
    'autocomplete.no-results-found' => 'Ni zadetkov',
    'autocomplete.loading-more-results' => 'Nalagam več zadetkov…',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Izbris?',
    'vich_uploader.link.download' => 'Prenesi',
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