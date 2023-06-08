<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ar', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'هذا النموذج يجب الا يحتوى على اى حقول اضافية.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'مساحة الملف المرسل كبيرة. من فضلك حاول ارسال ملف اصغر.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'قيمة رمز الموقع غير صحيحة. من فضلك اعد ارسال النموذج.',
    'This value is not a valid HTML5 color.' => 'هذه القيمة ليست لون HTML5 صالحًا.',
    'Please enter a valid birthdate.' => 'الرجاء ادخال تاريخ ميلاد صالح.',
    'The selected choice is invalid.' => 'الاختيار المحدد غير صالح.',
    'The collection is invalid.' => 'المجموعة غير صالحة.',
    'Please select a valid color.' => 'الرجاء اختيار لون صالح.',
    'Please select a valid country.' => 'الرجاء اختيار بلد صالح.',
    'Please select a valid currency.' => 'الرجاء اختيار عملة صالحة.',
    'Please choose a valid date interval.' => 'الرجاء اختيار فاصل زمني صالح.',
    'Please enter a valid date and time.' => 'الرجاء إدخال تاريخ ووقت صالحين.',
    'Please enter a valid date.' => 'الرجاء إدخال تاريخ صالح.',
    'Please select a valid file.' => 'الرجاء اختيار ملف صالح.',
    'The hidden field is invalid.' => 'الحقل المخفي غير صالح.',
    'Please enter an integer.' => 'الرجاء إدخال عدد صحيح.',
    'Please select a valid language.' => 'الرجاء اختيار لغة صالحة.',
    'Please select a valid locale.' => 'الرجاء اختيار لغة صالحة.',
    'Please enter a valid money amount.' => 'الرجاء إدخال مبلغ مالي صالح.',
    'Please enter a number.' => 'الرجاء إدخال رقم.',
    'The password is invalid.' => 'كلمة المرور غير صحيحة.',
    'Please enter a percentage value.' => 'الرجاء إدخال قيمة النسبة المئوية.',
    'The values do not match.' => 'القيم لا تتطابق.',
    'Please enter a valid time.' => 'الرجاء إدخال وقت صالح.',
    'Please select a valid timezone.' => 'الرجاء تحديد منطقة زمنية صالحة.',
    'Please enter a valid URL.' => 'أدخل عنوان الرابط صحيح من فضلك.',
    'Please enter a valid search term.' => 'الرجاء إدخال مصطلح البحث ساري المفعول.',
    'Please provide a valid phone number.' => 'يرجى تقديم رقم هاتف صالح.',
    'The checkbox has an invalid value.' => 'خانة الاختيار لها قيمة غير صالحة.',
    'Please enter a valid email address.' => 'رجاء قم بإدخال بريد الكتروني صحيح',
    'Please select a valid option.' => 'الرجاء تحديد خيار صالح.',
    'Please select a valid range.' => 'يرجى تحديد نطاق صالح.',
    'Please enter a valid week.' => 'الرجاء إدخال أسبوع صالح.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'حدث خطأ اثناء الدخول.',
    'Authentication credentials could not be found.' => 'لم استطع العثور على معلومات الدخول.',
    'Authentication request could not be processed due to a system problem.' => 'لم يكتمل طلب الدخول نتيجه عطل فى النظام.',
    'Invalid credentials.' => 'معلومات الدخول خاطئة.',
    'Cookie has already been used by someone else.' => 'ملفات تعريف الارتباط(cookies) تم استخدامها من قبل شخص اخر.',
    'Not privileged to request the resource.' => 'ليست لديك الصلاحيات الكافية لهذا الطلب.',
    'Invalid CSRF token.' => 'رمز الموقع غير صحيح.',
    'No authentication provider found to support the authentication token.' => 'لا يوجد معرف للدخول يدعم الرمز المستخدم للدخول.',
    'No session available, it either timed out or cookies are not enabled.' => 'لا يوجد صلة بينك و بين الموقع اما انها انتهت او ان متصفحك لا يدعم خاصية ملفات تعريف الارتباط (cookies).',
    'No token could be found.' => 'لم استطع العثور على الرمز.',
    'Username could not be found.' => 'لم استطع العثور على اسم الدخول.',
    'Account has expired.' => 'انتهت صلاحية الحساب.',
    'Credentials have expired.' => 'انتهت صلاحية معلومات الدخول.',
    'Account is disabled.' => 'الحساب موقوف.',
    'Account is locked.' => 'الحساب مغلق.',
    'Too many failed login attempts, please try again later.' => 'عدد كبير جدا من محاولات الدخول الفاشلة، يرجى المحاولة مرة أخرى في وقت لاحق.',
    'Invalid or expired login link.' => 'رابط تسجيل الدخول غير صالح أو منتهي الصلاحية.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'عدد كبير جدا من محاولات الدخول الفاشلة، يرجى اعادة المحاولة بعد %minutes% دقيقة.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'عدد كبير جدا من محاولات الدخول الفاشلة، يرجى اعادة المحاولة بعد %minutes% دقيقة.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'لوحة التحكم',
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => '%entity_label_singular% تعديل',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => '"%entity_label_singular%" جديد',
    'page_title.exception' => '{1} خطأ|{2} خطأن|]2,Inf] أخطاء ',
    'datagrid.hidden_results' => 'لا يمكنك عرض بعض النتائج لأنك لا تملك أذونات كافية',
    'datagrid.no_results' => 'لا توجد أيّ نتائج',
    'paginator.first' => 'الأول',
    'paginator.previous' => 'السابق',
    'paginator.next' => 'التالي',
    'paginator.last' => 'الأخير',
    'paginator.counter' => '<strong>%results%</strong> / <strong>%end%</strong> - <strong>%start%</strong>',
    'paginator.results' => '{0} لا توجد أيّ نتائج |{1} <strong>1</strong> نتيجة|]1,Inf] <strong>%count%</strong> نتائج',
    'label.true' => 'نعم',
    'label.false' => 'لا',
    'label.empty' => 'فارغ',
    'label.null' => 'لا شيء',
    'label.nullable_field' => 'اتركه فارغ',
    'label.object' => 'Objet PHP',
    'label.inaccessible' => 'لا يمكن الوصول إليها',
    'label.inaccessible.explanation' => 'لا يوجد وصف الوصول لهذه الخاصية أو أنها ليست عامة.',
    'label.form.empty_value' => 'لا شيء',
    'field.code_editor.view_code' => 'رؤية الكود',
    'field.text_editor.view_content' => 'رؤية المحتوى',
    'action.entity_actions' => 'إجراءات',
    'action.new' => '%entity_label_singular% جديد',
    'action.search' => 'بحث',
    'action.detail' => 'إطلاع',
    'action.edit' => 'تعديل',
    'action.delete' => 'حذف',
    'action.cancel' => 'الغاء',
    'action.index' => 'رجوع إلى القائمة',
    'action.deselect' => 'الغاء تحديد',
    'action.add_new_item' => 'إضافة عنصر جديد',
    'action.remove_item' => 'حذف العنصر',
    'action.choose_file' => 'اختيار ملفّ',
    'action.close' => 'أغلاق',
    'action.create' => 'أنشاء',
    'action.create_and_add_another' => 'أنشاء و أضافة اخرى',
    'action.create_and_continue' => 'أنشاء و متابعة',
    'action.save' => 'حفظ',
    'action.save_and_continue' => 'حفظ و متابعة',
    'batch_action_modal.title' => 'سوف تقوم بتطبيق الأجراء "%action_name%" على %num_items% عنصر',
    'batch_action_modal.content' => 'لا يمكنك التراجع عن هذا الإجراء.',
    'batch_action_modal.action' => 'استمرار',
    'delete_modal.title' => 'هل تريد حذف هذا العنصر؟',
    'delete_modal.content' => 'هذا الإجراء غير قابل للإلغاء.',
    'filter.title' => 'عوامل التصفية',
    'filter.button.clear' => 'أعادة التعيين',
    'filter.button.apply' => 'تطبيق',
    'filter.label.is_equal_to' => 'يساوي',
    'filter.label.is_not_equal_to' => 'لا يساوي ',
    'filter.label.is_greater_than' => 'اكبر من',
    'filter.label.is_greater_than_or_equal_to' => 'اكبر من او يساوي',
    'filter.label.is_less_than' => 'أصغر من',
    'filter.label.is_less_than_or_equal_to' => 'أصغر من أو يساوي',
    'filter.label.is_between' => 'بين',
    'filter.label.contains' => 'يحتوي',
    'filter.label.not_contains' => 'لا يحتوي',
    'filter.label.starts_with' => 'يبدء بـ',
    'filter.label.ends_with' => 'ينتهي بـ',
    'filter.label.exactly' => 'تماما كـ',
    'filter.label.not_exactly' => 'ليس تماما كـ',
    'filter.label.is_same' => 'مطابق',
    'filter.label.is_not_same' => 'غير مطابق',
    'filter.label.is_after' => 'بعد',
    'filter.label.is_after_or_same' => 'بعد أو مطابق',
    'filter.label.is_before' => 'قبل',
    'filter.label.is_before_or_same' => 'قبل أو مطابق',
    'form.are_you_sure' => 'لم يتّم حفظ التغييرات.',
    'form.tab.error_badge_title' => 'حقل واحد غير صالح|%count% حقول غير صالحة',
    'user.logged_in_as' => 'تسجيل الدخول بإسم',
    'user.unnamed' => 'مستخدم بدون إسم',
    'user.anonymous' => 'مستخدم مجهول',
    'user.sign_out' => 'تسجيل الخروج',
    'user.exit_impersonation' => 'خروج وهمي',
    'login_page.username' => 'إسم المستخدم',
    'login_page.password' => 'كلمة السّر',
    'login_page.sign_in' => 'تسجيل الدخول',
    'login_page.forgot_password' => 'نسيت كلمة المرور الخاصة بك ؟ ',
    'login_page.remember_me' => 'تذكرنى',
    'exception.entity_not_found' => 'هذا العنصر لم يعد متوفر',
    'exception.entity_remove' => 'لا يمكنك حذف هذا العنصر لأن العناصر الأخرى تعتمد عليه.',
    'exception.forbidden_action' => 'لا يمكنك تنفيذ الإجراء المطلوب على هذا العنصر.',
    'exception.insufficient_entity_permission' => 'أنت لا تملك صلاحيات كافية للوصول الى هذا العنصر',
    'autocomplete.no-results-found' => 'لم يتم العثور على أي نتائج',
    'autocomplete.loading-more-results' => 'جاري تحميل نتائج إضافية…',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'حذف ؟',
    'vich_uploader.link.download' => 'تحميل',
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
