<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('nl', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Dit formulier mag geen extra velden bevatten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Het geüploade bestand is te groot. Probeer een kleiner bestand te uploaden.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'De CSRF-token is ongeldig. Probeer het formulier opnieuw te versturen.',
    'This value is not a valid HTML5 color.' => 'Dit is geen geldige HTML5 kleur.',
    'Please enter a valid birthdate.' => 'Vul een geldige geboortedatum in.',
    'The selected choice is invalid.' => 'Deze keuze is ongeldig.',
    'The collection is invalid.' => 'Deze collectie is ongeldig.',
    'Please select a valid color.' => 'Kies een geldige kleur.',
    'Please select a valid country.' => 'Kies een geldige landnaam.',
    'Please select a valid currency.' => 'Kies een geldige valuta.',
    'Please choose a valid date interval.' => 'Kies een geldig tijdinterval.',
    'Please enter a valid date and time.' => 'Vul een geldige datum en tijd in.',
    'Please enter a valid date.' => 'Vul een geldige datum in.',
    'Please select a valid file.' => 'Kies een geldig bestand.',
    'The hidden field is invalid.' => 'Het verborgen veld is incorrect.',
    'Please enter an integer.' => 'Vul een geldig getal in.',
    'Please select a valid language.' => 'Kies een geldige taal.',
    'Please select a valid locale.' => 'Kies een geldige locale.',
    'Please enter a valid money amount.' => 'Vul een geldig bedrag in.',
    'Please enter a number.' => 'Vul een geldig getal in.',
    'The password is invalid.' => 'Het wachtwoord is incorrect.',
    'Please enter a percentage value.' => 'Vul een geldig percentage in.',
    'The values do not match.' => 'De waardes komen niet overeen.',
    'Please enter a valid time.' => 'Vul een geldige tijd in.',
    'Please select a valid timezone.' => 'Vul een geldige tijdzone in.',
    'Please enter a valid URL.' => 'Vul een geldige URL in.',
    'Please enter a valid search term.' => 'Vul een geldige zoekterm in.',
    'Please provide a valid phone number.' => 'Vul een geldig telefoonnummer in.',
    'The checkbox has an invalid value.' => 'De checkbox heeft een incorrecte waarde.',
    'Please enter a valid email address.' => 'Vul een geldig e-mailadres in.',
    'Please select a valid option.' => 'Kies een geldige optie.',
    'Please select a valid range.' => 'Kies een geldig bereik.',
    'Please enter a valid week.' => 'Vul een geldige week in.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Er heeft zich een authenticatieprobleem voorgedaan.',
    'Authentication credentials could not be found.' => 'Authenticatiegegevens konden niet worden gevonden.',
    'Authentication request could not be processed due to a system problem.' => 'Authenticatieaanvraag kon niet worden verwerkt door een technisch probleem.',
    'Invalid credentials.' => 'Ongeldige inloggegevens.',
    'Cookie has already been used by someone else.' => 'Cookie is al door een ander persoon gebruikt.',
    'Not privileged to request the resource.' => 'Onvoldoende rechten om de aanvraag te verwerken.',
    'Invalid CSRF token.' => 'CSRF-code is ongeldig.',
    'No authentication provider found to support the authentication token.' => 'Geen authenticatieprovider gevonden die de authenticatietoken ondersteunt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Geen sessie beschikbaar, mogelijk is deze verlopen of cookies zijn uitgeschakeld.',
    'No token could be found.' => 'Er kon geen authenticatietoken worden gevonden.',
    'Username could not be found.' => 'Gebruikersnaam kon niet worden gevonden.',
    'Account has expired.' => 'Account is verlopen.',
    'Credentials have expired.' => 'Authenticatiegegevens zijn verlopen.',
    'Account is disabled.' => 'Account is gedeactiveerd.',
    'Account is locked.' => 'Account is geblokkeerd.',
    'Too many failed login attempts, please try again later.' => 'Te veel onjuiste inlogpogingen, probeer het later nogmaals.',
    'Invalid or expired login link.' => 'Ongeldige of verlopen inloglink.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Te veel onjuiste inlogpogingen, probeer het opnieuw over %minutes% minuut.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Te veel onjuiste inlogpogingen, probeer het opnieuw over %minutes% minuten.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Dashboard',
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => '%entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Maak nieuw(e) %entity_label_singular%',
    'page_title.exception' => 'Fout|Fouten',
    'datagrid.hidden_results' => 'Sommige resultaten konden niet worden weergegeven, toegang geweigerd.',
    'datagrid.no_results' => 'Geen resultaten gevonden.',
    'paginator.first' => 'Eerste',
    'paginator.previous' => 'Vorige',
    'paginator.next' => 'Volgende',
    'paginator.last' => 'Laatste',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> van <strong>%results%</strong>',
    'paginator.results' => '{0} Geen resultaten|{1} <strong>1</strong> resultaat|]1,Inf] <strong>%count%</strong> resultaten',
    'label.true' => 'Ja',
    'label.false' => 'Nee',
    'label.empty' => 'Leeg',
    'label.null' => 'Niets',
    'label.nullable_field' => 'Laat leeg',
    'label.object' => 'PHP Object',
    'label.inaccessible' => 'Niet toegankelijk',
    'label.inaccessible.explanation' => 'Getter bestaat niet voor dit veld of de eigenschap is niet public',
    'label.form.empty_value' => 'Geen',
    'field.code_editor.view_code' => 'Bekijk code',
    'field.text_editor.view_content' => 'Bekijk inhoud',
    'action.entity_actions' => 'Acties',
    'action.new' => 'Nieuw(e) %entity_label_singular%',
    'action.search' => 'Zoeken',
    'action.detail' => 'Bekijk',
    'action.edit' => 'Bewerken',
    'action.delete' => 'Verwijderen',
    'action.cancel' => 'Annuleren',
    'action.index' => 'Terug naar overzicht',
    'action.deselect' => 'Selectie ongedaan maken',
    'action.add_new_item' => 'Voeg een item toe',
    'action.remove_item' => 'Verwijder dit item',
    'action.choose_file' => 'Bestand kiezen',
    'action.close' => 'Sluiten',
    'action.create' => 'Aanmaken',
    'action.create_and_add_another' => 'Aanmaken en nieuwe toevoegen',
    'action.create_and_continue' => 'Aanmaken en verdergaan',
    'action.save' => 'Opslaan',
    'action.save_and_continue' => 'Opslaan en verdergaan',
    'batch_action_modal.title' => 'Wil je alle geselecteerde items bewerken?',
    'batch_action_modal.content' => 'Je kan deze actie niet ongedaan maken.',
    'batch_action_modal.action' => 'Verdergaan',
    'delete_modal.title' => 'Weet je zeker dat je dit item wilt verwijderen?',
    'delete_modal.content' => 'Deze actie kan niet ongedaan worden gemaakt.',
    'filter.title' => 'Filters',
    'filter.button.clear' => 'Wis filters',
    'filter.button.apply' => 'Toepassen',
    'filter.label.is_equal_to' => 'is gelijk aan',
    'filter.label.is_not_equal_to' => 'is niet gelijk aan',
    'filter.label.is_greater_than' => 'is groter dan',
    'filter.label.is_greater_than_or_equal_to' => 'is groter dan of gelijk aan',
    'filter.label.is_less_than' => 'is minder dan',
    'filter.label.is_less_than_or_equal_to' => 'is minder dan of gelijk aan',
    'filter.label.is_between' => 'ligt tussen',
    'filter.label.contains' => 'bevat',
    'filter.label.not_contains' => 'bevat niet',
    'filter.label.starts_with' => 'start met',
    'filter.label.ends_with' => 'eindigt met',
    'filter.label.exactly' => 'exact',
    'filter.label.not_exactly' => 'niet exact',
    'filter.label.is_same' => 'is hetzelfde',
    'filter.label.is_not_same' => 'is niet hetzelfde',
    'filter.label.is_after' => 'is na',
    'filter.label.is_after_or_same' => 'is na of gelijk aan',
    'filter.label.is_before' => 'is voor',
    'filter.label.is_before_or_same' => 'is voor of gelijk aan',
    'form.are_you_sure' => 'Je hebt de wijzigingen op dit formulier nog niet opgeslagen.',
    'form.tab.error_badge_title' => 'Een ongeldige input|%count% ongeldige inputs',
    'user.logged_in_as' => 'Aangemeld als',
    'user.unnamed' => 'Naamloze gebruiker',
    'user.anonymous' => 'Anonieme gebruiker',
    'user.sign_out' => 'Uitloggen',
    'user.exit_impersonation' => 'Verlaat verpersoonlijking',
    'login_page.username' => 'Gebruikersnaam',
    'login_page.password' => 'Wachtwoord',
    'login_page.sign_in' => 'Inloggen',
    'login_page.forgot_password' => 'Wachtwoord vergeten?',
    'login_page.remember_me' => 'Onthoud mij',
    'exception.entity_not_found' => 'Het item is niet langer beschikbaar.',
    'exception.entity_remove' => 'Dit item kan niet verwijderd worden omdat andere items ervan afhankelijk zijn.',
    'exception.forbidden_action' => 'De gevraagde actie kan niet worden uitgevoerd op dit item.',
    'exception.insufficient_entity_permission' => 'Je hebt geen toegang tot dit item.',
    'autocomplete.no-results-found' => 'Geen resultaten gevonden…',
    'autocomplete.no-more-results' => 'Niet meer resultaten gevonden…',
    'autocomplete.loading-more-results' => 'Meer resultaten laden…',
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
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
