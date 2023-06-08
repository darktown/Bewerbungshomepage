<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('it', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Questo form non dovrebbe contenere nessun campo extra.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Il file caricato è troppo grande. Per favore, carica un file più piccolo.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Il token CSRF non è valido. Prova a reinviare il form.',
    'This value is not a valid HTML5 color.' => 'Il valore non è un colore HTML5 valido.',
    'Please enter a valid birthdate.' => 'Per favore, inserisci una data di compleanno valida.',
    'The selected choice is invalid.' => 'La scelta selezionata non è valida.',
    'The collection is invalid.' => 'La collezione non è valida.',
    'Please select a valid color.' => 'Per favore, seleziona un colore valido.',
    'Please select a valid country.' => 'Per favore, seleziona un paese valido.',
    'Please select a valid currency.' => 'Per favore, seleziona una valuta valida.',
    'Please choose a valid date interval.' => 'Per favore, scegli a valid date interval.',
    'Please enter a valid date and time.' => 'Per favore, inserisci a valid date and time.',
    'Please enter a valid date.' => 'Per favore, inserisci a valid date.',
    'Please select a valid file.' => 'Per favore, seleziona un file valido.',
    'The hidden field is invalid.' => 'Il campo nascosto non è valido.',
    'Please enter an integer.' => 'Per favore, inserisci un numero intero.',
    'Please select a valid language.' => 'Per favore, seleziona una lingua valida.',
    'Please select a valid locale.' => 'Per favore, seleziona una lingua valida.',
    'Please enter a valid money amount.' => 'Per favore, inserisci un importo valido.',
    'Please enter a number.' => 'Per favore, inserisci un numero.',
    'The password is invalid.' => 'La password non è valida.',
    'Please enter a percentage value.' => 'Per favore, inserisci un valore percentuale.',
    'The values do not match.' => 'I valori non corrispondono.',
    'Please enter a valid time.' => 'Per favore, inserisci un orario valido.',
    'Please select a valid timezone.' => 'Per favore, seleziona un fuso orario valido.',
    'Please enter a valid URL.' => 'Per favore, inserisci un URL valido.',
    'Please enter a valid search term.' => 'Per favore, inserisci un termine di ricerca valido.',
    'Please provide a valid phone number.' => 'Per favore, indica un numero di telefono valido.',
    'The checkbox has an invalid value.' => 'La casella di selezione non ha un valore valido.',
    'Please enter a valid email address.' => 'Per favore, indica un indirizzo email valido.',
    'Please select a valid option.' => 'Per favore, seleziona un\'opzione valida.',
    'Please select a valid range.' => 'Per favore, seleziona un intervallo valido.',
    'Please enter a valid week.' => 'Per favore, inserisci una settimana valida.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Si è verificato un errore di autenticazione.',
    'Authentication credentials could not be found.' => 'Impossibile trovare le credenziali di autenticazione.',
    'Authentication request could not be processed due to a system problem.' => 'La richiesta di autenticazione non può essere processata a causa di un errore di sistema.',
    'Invalid credentials.' => 'Credenziali non valide.',
    'Cookie has already been used by someone else.' => 'Il cookie è già stato usato da qualcun altro.',
    'Not privileged to request the resource.' => 'Non hai i privilegi per richiedere questa risorsa.',
    'Invalid CSRF token.' => 'CSRF token non valido.',
    'No authentication provider found to support the authentication token.' => 'Non è stato trovato un valido fornitore di autenticazione per supportare il token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Nessuna sessione disponibile, può essere scaduta o i cookie non sono abilitati.',
    'No token could be found.' => 'Nessun token trovato.',
    'Username could not be found.' => 'Username non trovato.',
    'Account has expired.' => 'Account scaduto.',
    'Credentials have expired.' => 'Credenziali scadute.',
    'Account is disabled.' => 'L\'account è disabilitato.',
    'Account is locked.' => 'L\'account è bloccato.',
    'Too many failed login attempts, please try again later.' => 'Troppi tentativi di login falliti, riprova tra un po\'.',
    'Invalid or expired login link.' => 'Link di login scaduto o non valido.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Troppi tentativi di login falliti, riprova tra %minutes% minuto.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Troppi tentativi di login falliti, riprova tra %minutes% minuti.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => 'Modifica %entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Crea %entity_label_singular%',
    'page_title.exception' => 'Errore|Errori',
    'datagrid.no_results' => 'Nessun risultato trovato.',
    'paginator.first' => 'Prima',
    'paginator.previous' => 'Precedente',
    'paginator.next' => 'Successiva',
    'paginator.last' => 'Ultima',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> di <strong>%results%</strong>',
    'paginator.results' => '{0} Nessun risultato|{1} <strong>1</strong> risultato|]1,Inf] <strong>%count%</strong> risultati',
    'label.true' => 'Si',
    'label.false' => 'No',
    'label.empty' => 'Vuoto',
    'label.null' => 'Null',
    'label.nullable_field' => 'Lascia vuoto',
    'label.object' => 'Oggetto PHP',
    'label.inaccessible' => 'Inaccessibile',
    'label.inaccessible.explanation' => 'Il metodo getter non esiste per questo campo o la proprietà non è pubblica',
    'label.form.empty_value' => 'Nessun valore',
    'action.entity_actions' => 'Azioni',
    'action.new' => 'Crea %entity_label_singular%',
    'action.search' => 'Cerca',
    'action.detail' => 'Vedi',
    'action.edit' => 'Modifica',
    'action.delete' => 'Elimina',
    'action.cancel' => 'Annulla',
    'action.index' => 'Torna alla lista',
    'action.deselect' => 'Deseleziona',
    'action.add_new_item' => 'Aggiungi un nuovo elemento',
    'action.remove_item' => 'Rimuovi l\'elemento',
    'action.choose_file' => 'Scegli file',
    'action.close' => 'Chiudi',
    'action.create' => 'Crea',
    'action.create_and_add_another' => 'Crea ed aggiungi',
    'action.create_and_continue' => 'Crea e continua',
    'action.save' => 'Salva',
    'action.save_and_continue' => 'Salva e continua a modificare',
    'delete_modal.title' => 'Vuoi eliminare questo elemento?',
    'delete_modal.content' => 'Questa azione è irreversibile.',
    'filter.title' => 'Filtri',
    'filter.button.clear' => 'Cancella',
    'filter.button.apply' => 'Applica',
    'filter.label.is_equal_to' => 'è uguale a',
    'filter.label.is_not_equal_to' => 'non è uguale a',
    'filter.label.is_greater_than' => 'è maggiore di',
    'filter.label.is_greater_than_or_equal_to' => 'è maggiore o uguale di',
    'filter.label.is_less_than' => 'è minore di',
    'filter.label.is_less_than_or_equal_to' => 'è minore o uguale di',
    'filter.label.contains' => 'contiene',
    'filter.label.not_contains' => 'non contiene',
    'filter.label.starts_with' => 'inizia con',
    'filter.label.ends_with' => 'finisce con',
    'filter.label.exactly' => 'esattamente',
    'filter.label.not_exactly' => 'non esattamente',
    'filter.label.is_same' => 'è uguale',
    'filter.label.is_not_same' => 'non è uguale',
    'filter.label.is_after' => 'è successivo',
    'filter.label.is_after_or_same' => 'è successivo o uguale',
    'filter.label.is_before' => 'è precedente',
    'filter.label.is_before_or_same' => 'è precedente o uguale',
    'form.are_you_sure' => 'Non hai salvato le modifiche apportate su questo modulo.',
    'form.tab.error_badge_title' => 'Un campo non è valido|%count% campi non sono validi',
    'user.logged_in_as' => 'Connesso come',
    'user.unnamed' => 'Utente senza nome',
    'user.anonymous' => 'Utente anonimo',
    'user.sign_out' => 'Esci',
    'user.exit_impersonation' => 'Esci dall\'impersonazione',
    'login_page.username' => 'Nome utente',
    'login_page.password' => 'Password',
    'login_page.sign_in' => 'Accedi',
    'login_page.forgot_password' => 'Password dimenticata?',
    'login_page.remember_me' => 'Ricordami',
    'exception.entity_not_found' => 'Questo elemento non è più disponibile.',
    'exception.entity_remove' => 'L\'elemento selezionato non può essere cancellato perché altri elementi dipendono da questo.',
    'exception.forbidden_action' => 'L\'azione richiesta non può essere eseguita su questo elemento.',
    'autocomplete.no-results-found' => 'Nessun risultato trovato',
    'autocomplete.no-more-results' => 'Non ci sono altri risultati',
    'autocomplete.loading-more-results' => 'Caricando più risultati…',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Rimuovere?',
    'vich_uploader.link.download' => 'Scaricare',
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
