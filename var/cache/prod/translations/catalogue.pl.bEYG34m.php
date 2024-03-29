<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('pl', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Ten formularz nie powinien zawierać dodatkowych pól.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Wgrany plik był za duży. Proszę spróbować wgrać mniejszy plik.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Token CSRF jest nieprawidłowy. Proszę spróbować wysłać formularz ponownie.',
    'This value is not a valid HTML5 color.' => 'Ta wartość nie jest prawidłowym kolorem HTML5.',
    'Please enter a valid birthdate.' => 'Proszę wprowadzić prawidłową datę urodzenia.',
    'The selected choice is invalid.' => 'Wybrana wartość jest nieprawidłowa.',
    'The collection is invalid.' => 'Zbiór jest nieprawidłowy.',
    'Please select a valid color.' => 'Proszę wybrać prawidłowy kolor.',
    'Please select a valid country.' => 'Proszę wybrać prawidłowy kraj.',
    'Please select a valid currency.' => 'Proszę wybrać prawidłową walutę.',
    'Please choose a valid date interval.' => 'Proszę wybrać prawidłowy przedział czasowy.',
    'Please enter a valid date and time.' => 'Proszę wprowadzić prawidłową datę i czas.',
    'Please enter a valid date.' => 'Proszę wprowadzić prawidłową datę.',
    'Please select a valid file.' => 'Proszę wybrać prawidłowy plik.',
    'The hidden field is invalid.' => 'Ukryte pole jest nieprawidłowe.',
    'Please enter an integer.' => 'Proszę wprowadzić liczbę całkowitą.',
    'Please select a valid language.' => 'Proszę wybrać prawidłowy język.',
    'Please select a valid locale.' => 'Proszę wybrać prawidłową lokalizację.',
    'Please enter a valid money amount.' => 'Proszę wybrać prawidłową ilość pieniędzy.',
    'Please enter a number.' => 'Proszę wprowadzić liczbę.',
    'The password is invalid.' => 'Hasło jest nieprawidłowe.',
    'Please enter a percentage value.' => 'Proszę wprowadzić wartość procentową.',
    'The values do not match.' => 'Wartości się nie zgadzają.',
    'Please enter a valid time.' => 'Proszę wprowadzić prawidłowy czas.',
    'Please select a valid timezone.' => 'Proszę wybrać prawidłową strefę czasową.',
    'Please enter a valid URL.' => 'Proszę wprowadzić prawidłowy adres URL.',
    'Please enter a valid search term.' => 'Proszę wprowadzić prawidłowy termin wyszukiwania.',
    'Please provide a valid phone number.' => 'Proszę wprowadzić prawidłowy numer telefonu.',
    'The checkbox has an invalid value.' => 'Pole wyboru posiada nieprawidłową wartość.',
    'Please enter a valid email address.' => 'Proszę wprowadzić prawidłowy adres email.',
    'Please select a valid option.' => 'Proszę wybrać prawidłową opcję.',
    'Please select a valid range.' => 'Proszę wybrać prawidłowy zakres.',
    'Please enter a valid week.' => 'Proszę wybrać prawidłowy tydzień.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Wystąpił błąd uwierzytelniania.',
    'Authentication credentials could not be found.' => 'Dane uwierzytelniania nie zostały znalezione.',
    'Authentication request could not be processed due to a system problem.' => 'Żądanie uwierzytelniania nie mogło zostać pomyślnie zakończone z powodu problemu z systemem.',
    'Invalid credentials.' => 'Nieprawidłowe dane.',
    'Cookie has already been used by someone else.' => 'To ciasteczko jest używane przez kogoś innego.',
    'Not privileged to request the resource.' => 'Brak uprawnień dla żądania wskazanego zasobu.',
    'Invalid CSRF token.' => 'Nieprawidłowy token CSRF.',
    'No authentication provider found to support the authentication token.' => 'Nie znaleziono mechanizmu uwierzytelniania zdolnego do obsługi przesłanego tokenu.',
    'No session available, it either timed out or cookies are not enabled.' => 'Brak danych sesji, sesja wygasła lub ciasteczka nie są włączone.',
    'No token could be found.' => 'Nie znaleziono tokenu.',
    'Username could not be found.' => 'Użytkownik o podanej nazwie nie istnieje.',
    'Account has expired.' => 'Konto wygasło.',
    'Credentials have expired.' => 'Dane uwierzytelniania wygasły.',
    'Account is disabled.' => 'Konto jest wyłączone.',
    'Account is locked.' => 'Konto jest zablokowane.',
    'Too many failed login attempts, please try again later.' => 'Zbyt dużo nieudanych prób logowania, proszę spróbować ponownie później.',
    'Invalid or expired login link.' => 'Nieprawidłowy lub wygasły link logowania.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Zbyt wiele nieudanych prób logowania, spróbuj ponownie po upływie %minutes% minut.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Zbyt wiele nieudanych prób logowania, spróbuj ponownie po upływie %minutes% minut.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => '%entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Dodaj nowy %entity_label_singular%',
    'page_title.exception' => 'Błąd|Błędy',
    'datagrid.hidden_results' => 'Nie można wyświetlić niektórych wyników, ponieważ nie masz odpowiednich uprawnień',
    'datagrid.no_results' => 'Brak wyników.',
    'paginator.first' => 'Pierwsza',
    'paginator.previous' => 'Poprzednia',
    'paginator.next' => 'Następna',
    'paginator.last' => 'Ostatnia',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> z <strong>%results%</strong>',
    'paginator.results' => '<strong>%count%</strong> wynik|<strong>%count%</strong> wyniki|<strong>%count%</strong> wyników|{0} Brak wyników',
    'label.true' => 'Tak',
    'label.false' => 'Nie',
    'label.empty' => 'Pusty',
    'label.null' => 'Brak',
    'label.nullable_field' => 'Zostaw niewypełnione',
    'label.object' => 'Obiekt PHP',
    'label.inaccessible' => 'Niedostępny',
    'label.inaccessible.explanation' => 'Metoda pobierająca (<i>ang. getter</i>) nie istnieje  dla tego pola lub właściwość (<i>ang. field</i>) nie jest publiczna',
    'label.form.empty_value' => 'Pusta wartość',
    'field.code_editor.view_code' => 'Pokaż kod',
    'field.text_editor.view_content' => 'Pokaż zawartość',
    'action.entity_actions' => 'Akcje',
    'action.new' => 'Dodaj %entity_label_singular%',
    'action.search' => 'Szukaj',
    'action.detail' => 'Pokaż',
    'action.edit' => 'Edytuj',
    'action.delete' => 'Usuń',
    'action.cancel' => 'Anuluj',
    'action.index' => 'Wróć do listy',
    'action.deselect' => 'Odznacz',
    'action.add_new_item' => 'Dodaj nową pozycję',
    'action.remove_item' => 'Usuń pozycję',
    'action.choose_file' => 'Wybierz plik',
    'action.close' => 'Zamknij',
    'action.create' => 'Dodaj',
    'action.create_and_add_another' => 'Zapisz i dodaj kolejny',
    'action.create_and_continue' => 'Zapisz i kontynuuj',
    'action.save' => 'Zapisz',
    'action.save_and_continue' => 'Zapisz i kontynuuj',
    'batch_action_modal.title' => 'Czy na pewno chcesz zastosować do wybranych elementów?',
    'batch_action_modal.content' => 'Nie można cofnąć tej operacji.',
    'batch_action_modal.action' => 'Wykonaj',
    'delete_modal.title' => 'Czy na pewno chcesz usunąć ten element?',
    'delete_modal.content' => 'Tej operacji nie można cofnąć.',
    'filter.title' => 'Filtry',
    'filter.button.clear' => 'Wyczyść',
    'filter.button.apply' => 'Zatwierdź',
    'filter.label.is_equal_to' => 'równe',
    'filter.label.is_not_equal_to' => 'różne od',
    'filter.label.is_greater_than' => 'większy niż',
    'filter.label.is_greater_than_or_equal_to' => 'większy lub równy',
    'filter.label.is_less_than' => 'mniejszy niż',
    'filter.label.is_less_than_or_equal_to' => 'mniejszy lub równy',
    'filter.label.is_between' => 'pomiędzy',
    'filter.label.contains' => 'zawiera',
    'filter.label.not_contains' => 'nie zawiera',
    'filter.label.starts_with' => 'zaczyna się od',
    'filter.label.ends_with' => 'kończy się na',
    'filter.label.exactly' => 'dokładnie jak',
    'filter.label.not_exactly' => 'nie dokładnie jak',
    'filter.label.is_same' => 'takie samo jak',
    'filter.label.is_not_same' => 'inne niż',
    'filter.label.is_after' => 'późniejsza niż',
    'filter.label.is_after_or_same' => 'taka sama lub późniejsza niż',
    'filter.label.is_before' => 'wcześniejsza niż',
    'filter.label.is_before_or_same' => 'taka sama lub wcześniejsza niż ',
    'form.are_you_sure' => 'Nie zapisano zmian wprowadzonych w tym formularzu.',
    'form.tab.error_badge_title' => 'Wystąpił jeden błąd|Ilość błędów: %count%',
    'form.slug.confirm_text' => 'Jeśli zmienisz slug, linki mogą przestać działać na innych stronach.',
    'user.logged_in_as' => 'Zalogowany jako',
    'user.unnamed' => 'Użytkownik bez nazwy',
    'user.anonymous' => 'Anonimowy użytkownik',
    'user.sign_out' => 'Wyloguj',
    'user.exit_impersonation' => 'Opuść tryb maskowania',
    'login_page.username' => 'Użytkownik',
    'login_page.password' => 'Hasło',
    'login_page.sign_in' => 'Zaloguj się',
    'login_page.forgot_password' => 'Nie pamiętasz hasła?',
    'login_page.remember_me' => 'Zapamiętaj mnie',
    'exception.entity_not_found' => 'Ten obiekt nie jest już dostępny.',
    'exception.entity_remove' => 'Ten obiekt nie może być usunięty ponieważ istnieją inne, które są z nim powiązane.',
    'exception.forbidden_action' => 'Na tej pozycji nie można wykonać wybranej akcji.',
    'exception.insufficient_entity_permission' => 'Nie masz uprawnień do tego obiektu.',
    'autocomplete.no-results-found' => 'Brak wyników',
    'autocomplete.loading-more-results' => 'Trwa ładowanie…',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Usunąć?',
    'vich_uploader.link.download' => 'Pobierz',
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
