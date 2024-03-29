<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ca', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Aquest formulari no hauria de contenir camps addicionals.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'L\'arxiu pujat és massa gran. Per favor, pugi un arxiu més petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no és vàlid. Per favor, provi d\'enviar novament el formulari.',
    'This value is not a valid HTML5 color.' => 'Aquest valor no és un color HTML5 valid.',
    'Please enter a valid birthdate.' => 'Per favor introdueix una data d\'aniversari valida.',
    'The selected choice is invalid.' => 'L\'opció escollida és invalida.',
    'The collection is invalid.' => 'La col·lecció és invalida.',
    'Please select a valid color.' => 'Per favor selecciona un color vàlid.',
    'Please select a valid country.' => 'Per favor selecciona una ciutat vàlida.',
    'Please select a valid currency.' => 'Per favor selecciona una moneda vàlida.',
    'Please choose a valid date interval.' => 'Per favor escull un interval de dates vàlides.',
    'Please enter a valid date and time.' => 'Per favor introdueix una data i temps vàlid.',
    'Please enter a valid date.' => 'Per favor introdueix una data vàlida.',
    'Please select a valid file.' => 'Per favor selecciona un arxiu vàlid.',
    'The hidden field is invalid.' => 'El camp ocult és invàlid.',
    'Please enter an integer.' => 'Per favor introdueix un enter.',
    'Please select a valid language.' => 'Per favor selecciona un idioma vàlid.',
    'Please select a valid locale.' => 'Per favor seleccioneu una configuració regional vàlida',
    'Please enter a valid money amount.' => 'Per favor introdueix una quantitat de diners vàlids.',
    'Please enter a number.' => 'Per favor introdueix un número.',
    'The password is invalid.' => 'La contrasenya es invàlida.',
    'Please enter a percentage value.' => 'Per favor introdueix un valor percentual.',
    'The values do not match.' => 'Els valors no coincideixen.',
    'Please enter a valid time.' => 'Per favor introdueix un temps vàlid.',
    'Please select a valid timezone.' => 'Per favor selecciona una zona horària vàlida.',
    'Please enter a valid URL.' => 'Per favor introdueix una URL vàlida.',
    'Please enter a valid search term.' => 'Per favor introdueix un concepte de cerca vàlid.',
    'Please provide a valid phone number.' => 'Per favor introdueix un número de telèfon vàlid.',
    'The checkbox has an invalid value.' => 'La casella de selecció te un valor invàlid.',
    'Please enter a valid email address.' => 'Per favor introdueix un correu electrònic vàlid.',
    'Please select a valid option.' => 'Per favor selecciona una opció vàlida.',
    'Please select a valid range.' => 'Per favor selecciona un rang vàlid.',
    'Please enter a valid week.' => 'Per favor introdueix una setmana vàlida.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ha succeït un error d\'autenticació.',
    'Authentication credentials could not be found.' => 'No s\'han trobat les credencials d\'autenticació.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud d\'autenticació no s\'ha pogut processar per un problema del sistema.',
    'Invalid credentials.' => 'Credencials no vàlides.',
    'Cookie has already been used by someone else.' => 'La cookie ja ha estat utilitzada per una altra persona.',
    'Not privileged to request the resource.' => 'No té privilegis per solicitar el recurs.',
    'Invalid CSRF token.' => 'Token CSRF no vàlid.',
    'No authentication provider found to support the authentication token.' => 'No s\'ha trobat un proveïdor d\'autenticació que suporti el token d\'autenticació.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hi ha sessió disponible, ha expirat o les cookies no estan habilitades.',
    'No token could be found.' => 'No s\'ha trobat cap token.',
    'Username could not be found.' => 'No s\'ha trobat el nom d\'usuari.',
    'Account has expired.' => 'El compte ha expirat.',
    'Credentials have expired.' => 'Les credencials han expirat.',
    'Account is disabled.' => 'El compte està deshabilitat.',
    'Account is locked.' => 'El compte està bloquejat.',
    'Too many failed login attempts, please try again later.' => 'Massa intents d\'inici de sessió fallits, torneu-ho a provar més tard.',
    'Invalid or expired login link.' => 'Enllaç d\'inici de sessió no vàlid o caducat.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Massa intents d\'inici de sessió fallits, torneu-ho a provar en %minutes% minut.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Massa intents d\'inici de sessió fallits, torneu-ho a provar en %minutes% minuts.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Tauler de control',
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => 'Modificar %entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Crear %entity_label_singular%',
    'page_title.exception' => 'Error|Errors',
    'datagrid.hidden_results' => 'Alguns resultats no es poden mostrar perquè no tens prou permisos',
    'datagrid.no_results' => 'No s\'han trobat resultats.',
    'paginator.first' => 'Primera',
    'paginator.previous' => 'Anterior',
    'paginator.next' => 'Següent',
    'paginator.last' => 'Última',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> de <strong>%results%</strong>',
    'paginator.results' => '{0} Cap resultat|{1} <strong>1</strong> resultat|]1,Inf] <strong>%count%</strong> resultats',
    'label.true' => 'Sí',
    'label.false' => 'No',
    'label.empty' => 'Buit',
    'label.null' => 'Null',
    'label.nullable_field' => 'Deixar buit',
    'label.object' => 'Objecte PHP',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Aquest camp no té un mètode "getter" o la propietat associada no és pública',
    'label.form.empty_value' => 'Ningú',
    'field.code_editor.view_code' => 'Veure codi',
    'field.text_editor.view_content' => 'Veure contingut',
    'action.entity_actions' => 'Accions',
    'action.new' => 'Crear %entity_label_singular%',
    'action.search' => 'Buscar',
    'action.detail' => 'Veure',
    'action.edit' => 'Modificar',
    'action.delete' => 'Borrar',
    'action.cancel' => 'Cancel·lar',
    'action.index' => 'Tornar al llistat',
    'action.deselect' => 'Desseleccionar',
    'action.add_new_item' => 'Afegir un element',
    'action.remove_item' => 'Eliminar aquest element',
    'action.choose_file' => 'Tria un fitxer',
    'action.close' => 'Tancar',
    'action.create' => 'Crear',
    'action.create_and_add_another' => 'Crear i afegir-ne un altre',
    'action.create_and_continue' => 'Crear i continuar editant',
    'action.save' => 'Desar els canvis',
    'action.save_and_continue' => 'Desar i continuar editant',
    'batch_action_modal.title' => 'S\'aplicarà l\'acció %action_name% a %num_items% element(s).',
    'batch_action_modal.content' => 'Aquesta acció no es pot desfer.',
    'batch_action_modal.action' => 'Continuar',
    'delete_modal.title' => 'Realment vols esborrar aquest element?',
    'delete_modal.content' => 'Aquesta acció no es pot desfer.',
    'filter.title' => 'Filtres',
    'filter.button.clear' => 'Netejar',
    'filter.button.apply' => 'Aplicar',
    'filter.label.is_equal_to' => 'és igual a',
    'filter.label.is_not_equal_to' => 'no és igual a',
    'filter.label.is_greater_than' => 'és més gran que',
    'filter.label.is_greater_than_or_equal_to' => 'és més gran o igual a',
    'filter.label.is_less_than' => 'és menor que',
    'filter.label.is_less_than_or_equal_to' => 'és menor o igual a',
    'filter.label.is_between' => 'està entre',
    'filter.label.contains' => 'conté',
    'filter.label.not_contains' => 'no conté',
    'filter.label.starts_with' => 'comença amb',
    'filter.label.ends_with' => 'acaba amb',
    'filter.label.exactly' => 'exactament',
    'filter.label.not_exactly' => 'no exactament',
    'filter.label.is_same' => 'és el mateix',
    'filter.label.is_not_same' => 'no és el mateix',
    'filter.label.is_after' => 'és després',
    'filter.label.is_after_or_same' => 'és després o el mateix',
    'filter.label.is_before' => 'és abans',
    'filter.label.is_before_or_same' => 'és abans o el mateix',
    'form.are_you_sure' => 'No has desat els canvis fets en aquest formulari.',
    'form.tab.error_badge_title' => 'Una entrada no vàlida|%count% entrades no vàlides',
    'form.slug.confirm_text' => 'Si canvies l\'slug, pots trencar els enllaços d\'altres pàgines.',
    'user.logged_in_as' => 'Connectat com a',
    'user.unnamed' => 'Usuari sense nom',
    'user.anonymous' => 'Usuari anònim',
    'user.sign_out' => 'Tanca la sessió',
    'user.exit_impersonation' => 'Sortir de la suplantació',
    'login_page.username' => 'Nom d\'usuari',
    'login_page.password' => 'Contrasenya',
    'login_page.sign_in' => 'Iniciar sessió',
    'login_page.forgot_password' => 'Has oblidat la teva contrasenya?',
    'login_page.remember_me' => 'Recorda\'m',
    'exception.entity_not_found' => 'Aquest element ja no està disponible.',
    'exception.entity_remove' => 'Aquest element no es pot suprimir perquè altres elements en depenen.',
    'exception.forbidden_action' => 'L\'acció sol·licitada no es pot dur a terme en aquest element.',
    'exception.insufficient_entity_permission' => 'No tens permís per accedir a aquest element.',
    'autocomplete.no-results-found' => 'No s\'han trobat resultats',
    'autocomplete.no-more-results' => 'No hi ha més resultats',
    'autocomplete.loading-more-results' => 'Carregant més resultats…',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Eliminar?',
    'vich_uploader.link.download' => 'Descarregar',
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
