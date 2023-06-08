<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('de', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Dieses Formular sollte keine zusätzlichen Felder enthalten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Die hochgeladene Datei ist zu groß. Versuchen Sie bitte eine kleinere Datei hochzuladen.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Der CSRF-Token ist ungültig. Versuchen Sie bitte, das Formular erneut zu senden.',
    'This value is not a valid HTML5 color.' => 'Dieser Wert ist keine gültige HTML5 Farbe.',
    'Please enter a valid birthdate.' => 'Bitte geben Sie ein gültiges Geburtsdatum ein.',
    'The selected choice is invalid.' => 'Die Auswahl ist ungültig.',
    'The collection is invalid.' => 'Diese Gruppe von Feldern ist ungültig.',
    'Please select a valid color.' => 'Bitte geben Sie eine gültige Farbe ein.',
    'Please select a valid country.' => 'Bitte wählen Sie ein gültiges Land aus.',
    'Please select a valid currency.' => 'Bitte wählen Sie eine gültige Währung aus.',
    'Please choose a valid date interval.' => 'Bitte wählen Sie ein gültiges Datumsintervall.',
    'Please enter a valid date and time.' => 'Bitte geben Sie ein gültiges Datum samt Uhrzeit ein.',
    'Please enter a valid date.' => 'Bitte geben Sie ein gültiges Datum ein.',
    'Please select a valid file.' => 'Bitte wählen Sie eine gültige Datei.',
    'The hidden field is invalid.' => 'Das versteckte Feld ist ungültig.',
    'Please enter an integer.' => 'Bitte geben Sie eine ganze Zahl ein.',
    'Please select a valid language.' => 'Bitte wählen Sie eine gültige Sprache.',
    'Please select a valid locale.' => 'Bitte wählen Sie eine gültige Locale-Einstellung aus.',
    'Please enter a valid money amount.' => 'Bitte geben Sie einen gültigen Geldbetrag ein.',
    'Please enter a number.' => 'Bitte geben Sie eine gültige Zahl ein.',
    'The password is invalid.' => 'Das Kennwort ist ungültig.',
    'Please enter a percentage value.' => 'Bitte geben Sie einen gültigen Prozentwert ein.',
    'The values do not match.' => 'Die Werte stimmen nicht überein.',
    'Please enter a valid time.' => 'Bitte geben Sie eine gültige Uhrzeit ein.',
    'Please select a valid timezone.' => 'Bitte wählen Sie eine gültige Zeitzone.',
    'Please enter a valid URL.' => 'Bitte geben Sie eine gültige URL ein.',
    'Please enter a valid search term.' => 'Bitte geben Sie einen gültigen Suchbegriff ein.',
    'Please provide a valid phone number.' => 'Bitte geben Sie eine gültige Telefonnummer ein.',
    'The checkbox has an invalid value.' => 'Das Kontrollkästchen hat einen ungültigen Wert.',
    'Please enter a valid email address.' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
    'Please select a valid option.' => 'Bitte wählen Sie eine gültige Option.',
    'Please select a valid range.' => 'Bitte wählen Sie einen gültigen Bereich.',
    'Please enter a valid week.' => 'Bitte geben Sie eine gültige Woche ein.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Es ist ein Fehler bei der Authentifikation aufgetreten.',
    'Authentication credentials could not be found.' => 'Es konnten keine Zugangsdaten gefunden werden.',
    'Authentication request could not be processed due to a system problem.' => 'Die Authentifikation konnte wegen eines Systemproblems nicht bearbeitet werden.',
    'Invalid credentials.' => 'Fehlerhafte Zugangsdaten.',
    'Cookie has already been used by someone else.' => 'Cookie wurde bereits von jemand anderem verwendet.',
    'Not privileged to request the resource.' => 'Keine Rechte, um die Ressource anzufragen.',
    'Invalid CSRF token.' => 'Ungültiges CSRF-Token.',
    'No authentication provider found to support the authentication token.' => 'Es wurde kein Authentifizierungs-Provider gefunden, der das Authentifizierungs-Token unterstützt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keine Session verfügbar, entweder ist diese abgelaufen oder Cookies sind nicht aktiviert.',
    'No token could be found.' => 'Es wurde kein Token gefunden.',
    'Username could not be found.' => 'Der Benutzername wurde nicht gefunden.',
    'Account has expired.' => 'Der Account ist abgelaufen.',
    'Credentials have expired.' => 'Die Zugangsdaten sind abgelaufen.',
    'Account is disabled.' => 'Der Account ist deaktiviert.',
    'Account is locked.' => 'Der Account ist gesperrt.',
    'Too many failed login attempts, please try again later.' => 'Zu viele fehlgeschlagene Anmeldeversuche, bitte versuchen Sie es später noch einmal.',
    'Invalid or expired login link.' => 'Ungültiger oder abgelaufener Anmelde-Link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Zu viele fehlgeschlagene Anmeldeversuche, bitte versuchen Sie es in einer Minute noch einmal.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Zu viele fehlgeschlagene Anmeldeversuche, bitte versuchen Sie es in %minutes% Minuten noch einmal.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Dashboard',
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => '%entity_label_singular% bearbeiten',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => '%entity_label_singular% erstellen',
    'page_title.exception' => 'Fehler',
    'datagrid.hidden_results' => 'Einige Ergebnisse können aufgrund fehlender Berechtigungen nicht angezeigt werden.',
    'datagrid.no_results' => 'Keine Ergebnisse gefunden.',
    'paginator.first' => 'Erste',
    'paginator.previous' => 'Zurück',
    'paginator.next' => 'Nächste',
    'paginator.last' => 'Letzte',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> von <strong>%results%</strong>',
    'paginator.results' => '{0} Keine Ergebnisse|{1} <strong>1</strong> Ergebnis|]1,Inf] <strong>%count%</strong> Ergebnisse',
    'label.true' => 'Ja',
    'label.false' => 'Nein',
    'label.empty' => 'Leer',
    'label.null' => 'Null',
    'label.nullable_field' => 'Feld leer lassen',
    'label.object' => 'PHP-Objekt',
    'label.inaccessible' => 'Nicht zugreifbar',
    'label.inaccessible.explanation' => 'Es gibt keine Getter-Methode für diese Eigenschaft oder die Eigenschaft ist nicht public',
    'label.form.empty_value' => 'kein Wert',
    'field.code_editor.view_code' => 'Code anzeigen',
    'field.text_editor.view_content' => 'Inhalt anzeigen',
    'action.entity_actions' => 'Aktionen',
    'action.new' => '%entity_label_singular% erstellen',
    'action.search' => 'Suchen',
    'action.detail' => 'Anzeigen',
    'action.edit' => 'Ändern',
    'action.delete' => 'Löschen',
    'action.cancel' => 'Abbrechen',
    'action.index' => 'Zurück zur Übersicht',
    'action.deselect' => 'Auswahl aufheben',
    'action.add_new_item' => 'Neues Element hinzufügen',
    'action.remove_item' => 'Element entfernen',
    'action.choose_file' => 'Datei auswählen',
    'action.close' => 'Schließen',
    'action.create' => 'Erstellen',
    'action.create_and_add_another' => 'Erstellen und weiteres Element hinzufügen',
    'action.create_and_continue' => 'Erstellen und weiter bearbeiten',
    'action.save' => 'Speichern',
    'action.save_and_continue' => 'Speichern und weiter bearbeiten',
    'batch_action_modal.title' => 'Möchten Sie die ausgewählten Elemente wirklich verändern?',
    'batch_action_modal.content' => 'Diese Aktion kann nicht rückgängig gemacht werden.',
    'batch_action_modal.action' => 'Fortfahren',
    'delete_modal.title' => 'Soll das Element wirklich gelöscht werden?',
    'delete_modal.content' => 'Diese Aktion kann nicht rückgängig gemacht werden.',
    'filter.title' => 'Filtern',
    'filter.button.clear' => 'Zurücksetzen',
    'filter.button.apply' => 'Anwenden',
    'filter.label.is_equal_to' => 'ist gleich',
    'filter.label.is_not_equal_to' => 'ist nicht gleich',
    'filter.label.is_greater_than' => 'ist größer als',
    'filter.label.is_greater_than_or_equal_to' => 'ist größer oder gleich',
    'filter.label.is_less_than' => 'ist kleiner als',
    'filter.label.is_less_than_or_equal_to' => 'ist kleiner oder gleich',
    'filter.label.is_between' => 'ist zwischen',
    'filter.label.contains' => 'enthält',
    'filter.label.not_contains' => 'enthält nicht',
    'filter.label.starts_with' => 'beginnt mit',
    'filter.label.ends_with' => 'endet mit',
    'filter.label.exactly' => 'ist genau',
    'filter.label.not_exactly' => 'ist nicht genau',
    'filter.label.is_same' => 'ist gleich',
    'filter.label.is_not_same' => 'ist nicht gleich',
    'filter.label.is_after' => 'ist nach',
    'filter.label.is_after_or_same' => 'ist nach oder gleich',
    'filter.label.is_before' => 'ist vor',
    'filter.label.is_before_or_same' => 'ist vor oder gleich',
    'form.are_you_sure' => 'Vorgenommene Änderungen wurden noch nicht gespeichert.',
    'form.tab.error_badge_title' => 'Eine ungültige Eingabe|%count% ungültige Eingaben',
    'form.slug.confirm_text' => 'Wenn Sie den Slug ändern, kann dies Links auf anderen Seiten beschädigen.',
    'user.logged_in_as' => 'Angemeldet als',
    'user.unnamed' => 'Unbenannter Benutzer',
    'user.anonymous' => 'Anonymer Benutzer',
    'user.sign_out' => 'Abmelden',
    'user.exit_impersonation' => 'Benutzerimitation verlassen',
    'login_page.username' => 'Benutzername',
    'login_page.password' => 'Passwort',
    'login_page.sign_in' => 'Login',
    'login_page.forgot_password' => 'Passwort vergessen?',
    'login_page.remember_me' => 'Beim nächsten Mal automatisch anmelden',
    'exception.entity_not_found' => 'Dieses Element ist nicht mehr verfügbar.',
    'exception.entity_remove' => 'Dieses Element kann nicht gelöscht werden, weil andere Elemente davon abhängen.',
    'exception.forbidden_action' => 'Die gewünschte Aktion kann mit diesem Element nicht ausgeführt werden.',
    'exception.insufficient_entity_permission' => 'Sie haben keine Berechtigung, auf dieses Element zuzugreifen.',
    'autocomplete.no-results-found' => 'Keine Übereinstimmungen gefunden',
    'autocomplete.no-more-results' => 'Keine weiteren Ergebnisse',
    'autocomplete.loading-more-results' => 'Lade mehr Ergebnisse…',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Löschen?',
    'vich_uploader.link.download' => 'herunterladen',
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
