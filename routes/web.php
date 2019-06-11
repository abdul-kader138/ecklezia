<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    return view('welcome');
});

Auth::routes();

// Home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home', 'HomeController@index')->name('admin.home');
Route::get('/admin/home_content', 'HomeController@home')->name('admin.home_content');

// Posters
Route::get('/admin/posters', function () {
    return view('admin.pages.clergy.posters.index');
});


Route::group(['prefix'=>'admin','as'=>'admin.'],function (){

    Route::get('calendar', 'CalenderController@index')->name('calendar.index');
    Route::get('calendar/external', 'CalenderController@external')->name('calendar.external');
    Route::get('calendar/add-event', 'CalenderController@addEvent')->name('calendar.add_event');
    Route::post('calendar/store-event', 'CalenderController@storeEvent')->name('calendar.store_event');
    Route::post('calendar/update-event/{id}', 'CalenderController@updateEvent')->name('calendar.update_event');
    Route::get('calendar/delete-event/{id}', 'CalenderController@deleteEvent')->name('calendar.delete_event');
    ////////////////////////////// Clergy//////////////////////////
    Route::resource('associate-ministers', 'AssociateMinistersController');
    Route::resource('sermon-planners', 'SermonPlanners');
    Route::resource('confidential', 'ConfidentialController');
    ////////////////////////////// People //////////////////////////
    Route::get('people/{type}/index', 'PeoplesController@index')->name('people.index');
    Route::get('people/create/{family_member?}', 'PeoplesController@create')->name('people.create');
    Route::post('people/store/{family_member?}', 'PeoplesController@store')->name('people.store');
    Route::post('people/store-exist/{people_id}', 'PeoplesController@existFamilyStore')->name('people.family_store');
    Route::get('people/{id}/show', 'PeoplesController@show')->name('people.show');
    Route::get('people/{id}/edit', 'PeoplesController@edit')->name('people.edit');
    Route::patch('people/{id}/update', 'PeoplesController@update')->name('people.update');
    Route::delete('people/{id}/delete', 'PeoplesController@destroy')->name('people.destroy');
    Route::post('people/{id}/image-crop', 'PeoplesController@imageCropPost')->name('people.crop_image.store');

    ////////////////////////////// Service //////////////////////////

    Route::resource('service', 'ServicesController');
    Route::get('service-ongoing','ServicesController@ongoing')->name('service.ongoing');
    ////////////////////////////// Check In / Check Out //////////////////////////
    Route::resource('check-in', 'CheckActivityController');
    Route::get('check-out','CheckActivityController@checkOut')->name('check-out.index');
    Route::get('check-out/{id}','CheckActivityController@checkOutAction')->name('check-out.action');
    Route::resource('shepherd', 'ShepherdsController');
    Route::get('shepherd-setup/create', 'ShepherdsController@setupForm')->name('shepherd-setup.create');
    Route::post('shepherd-setup', 'ShepherdsController@setupStore')->name('shepherd-setup.store');
    ////////////////////////////// Contributions //////////////////////////
    Route::resource('contribution', 'ContributionsController');
    Route::get('contribution-giving/create', 'ContributionsController@givingCreate')->name('contribution_giving.create');
    Route::post('contribution-giving/store', 'ContributionsController@givingStore')->name('contribution_giving.store');
    Route::get('contribution-giving/{id}/show', 'ContributionsController@givingShow')->name('contribution_giving.show');
    Route::get('contribution-giving/{id}/edit', 'ContributionsController@givingEdit')->name('contribution_giving.edit');
    Route::PATCH('contribution-giving/{id}/update', 'ContributionsController@givingUpdate')->name('contribution_giving.update');
    Route::delete('contribution-giving/{id}/destroy', 'ContributionsController@givingDelete')->name('contribution_giving.destroy');
    Route::resource('pledge', 'PledgesController');



    Route::resource('asset-contribution', 'AssetcontributionsController');
    /**       import_export    */
    Route::get('contribution-import-export', 'ContributionsController@importExport')->name('contribution-import-export.index');
    /**       report_generation    */
    Route::get('contribution-report-generation', 'ContributionsController@reportGenerate')->name('contribution-report-generation.index');

    ////////////////////////////// Ministries //////////////////////////
    Route::resource('ministries', 'MinistriesController');
    Route::post('ministries-add-member','MinistriesController@addMember')->name('ministries-add-member');
    Route::get('ministries-select-member','MinistriesController@selectMember')->name('ministries-select-member');
    Route::post('ministries-delete-member/{ministry_id}/{id}','MinistriesController@deleteMember')->name('ministries-delete-member');
    /**note*/
    Route::get('ministries-add-note','MinistriesController@note')->name('ministries-note');
    Route::post('ministries-add-note/{ministry_id}','MinistriesController@addNote')->name('ministries-add-note');
    Route::get('ministries-view-note/{ministry_id}','MinistriesController@viewNote')->name('ministries-view-note');
    Route::post('ministries-delete-note/{id}','MinistriesController@deleteNote')->name('ministries-delete-note');

    /**event*/
    Route::get('ministries-add-event','MinistriesController@event')->name('ministries-event');
    Route::get('ministries-add-event/create/{id?}','MinistriesController@createEvent')->name('ministries-create-event');
    Route::post('ministries-add-event/{id}','MinistriesController@addEvent')->name('ministries-add-event');
    Route::get('ministries-view-event/{ministry_id}','MinistriesController@viewEvent')->name('ministries-view-event');
    Route::post('ministries-delete-event/{id}','MinistriesController@deleteEvent')->name('ministries-delete-event');

    ////////////////////////////// Attendances //////////////////////////
    Route::resource('attendance', 'AttendancesController');
    Route::get('attendance-get-data','AttendancesController@getData')->name('attendance.get_data');
});
Route::get('/admin/pledges/individual', function () {
    return view('admin.pledges.individual');
});
// Event Planner
Route::get('/admin/event_planner', function () {
    return view('admin.pages.clergy.event_planner.event_planner');
});

Route::get('/admin/event_speakers', function () {
    return view('admin.pages.clergy.event_planner.index');
});

Route::get('/admin/event_speakers/add', function () {
    return view('admin.pages.clergy.event_planner.add');
});

Route::get('/admin/event_speakers/edit', function () {
    return view('admin.pages.clergy.event_planner.edit');
});

Route::get('/admin/event_speakers/delete', function () {

});

// Ministry Planner
Route::get('/admin/ministry_planner', function () {
    return view('admin.pages.clergy.ministry.index');
});






Route::get('/admin/email', function () {
    return view('admin.pages.email.index');
});

Route::get('/admin/email/add', function () {
    return view('admin.pages.email.add');
});

Route::get('/admin/email/edit', function () {
    return view('admin.pages.email.edit');
});

Route::get('/admin/email/view', function () {
    return view('admin.pages.email.view');
});

Route::get('/admin/email/delete', function () {

});

//--- report
Route::get('/admin/report/member_list', function () {
    return view('admin.pages.report.member_list');
});
Route::get('/admin/report/birthday_list', function () {
    return view('admin.pages.report.birthday_list');
});
Route::get('/admin/report/individual_giving', function () {
    return view('admin.pages.report.individual_giving');
});
Route::get('/admin/report/family_giving', function () {
    return view('admin.pages.report.family_giving');
});
Route::get('/admin/report/group', function () {
    return view('admin.pages.report.group');
});
Route::get('/admin/report/ministry_report', function () {
    return view('admin.pages.report.ministry_report');
});
Route::get('/admin/report/checkin_report', function () {
    return view('admin.pages.report.checkin_report');
});
Route::get('/admin/report/checkout_report', function () {
    return view('admin.pages.report.checkout_report');
});
Route::get('/admin/report/pledge_report', function () {
    return view('admin.pages.report.pledge_report');
});


//---- Accounting
Route::get('/admin/accounting','AccountingController@index');
Route::get('/admin/accounting/dashboard','AccountingController@index');
Route::get('/admin/budget/downlod/{id}','AccountingController@downlod_budget');

Route::get('/admin/accounting/income','BankTransactionController@index')->name('income');
Route::post('/admin/accounting/transaction-save','BankTransactionController@store');
Route::get('/admin/accounting/transaction/edit/{id}','BankTransactionController@edit');
Route::post('/admin/accounting/transaction/update/{id}','BankTransactionController@update');

Route::post('/admin/accounting/deposit-save','DepositController@store');
Route::get('/admin/accounting/deposit-edit/{id}','DepositController@edit');
Route::post('/admin/accounting/deposit-update/{id}','DepositController@update');
Route::get('/admin/accounting/deposit/delete/{id}','DepositController@destroy');

Route::get('/admin/accounting/depreciation','DepreciationController@index')->name('depreciation');
Route::post('/admin/accounting/asset-save','DepreciationController@store');
Route::get('/admin/depreciation/delete/{id}','DepreciationController@destroy');
Route::get('/admin/depreciation/edit/{id}','DepreciationController@edit');
Route::post('/admin/depreciation/update/{id}','DepreciationController@update');

Route::get('/admin/accounting/purchase','PurchaseController@index')->name('purchase');
Route::get('/admin/accounting/purchase/add','PurchaseController@create');
Route::get('/admin/accounting/purchase/edit/{id}','PurchaseController@edit');
Route::post('/admin/accounting/purchase/update/{id}','PurchaseController@update');
Route::get('/admin/accounting/purchase/delete/{id}','PurchaseController@destroy');
Route::post('/admin/accounting/purchase/save','PurchaseController@store');

Route::get('/admin/accounting/expenditure','ExpenditureController@index')->name('expenditure');
Route::get('/admin/accounting/expenditure/add','ExpenditureController@create');
Route::post('/admin/accounting/expenditure/save','ExpenditureController@store');
Route::get('/admin/accounting/expenditure/edit/{id}','ExpenditureController@edit');
Route::post('/admin/accounting/expenditure/update/{id}','ExpenditureController@update');
Route::get('/admin/accounting/expenditure/delete/{id}','ExpenditureController@destroy');

Route::get('/admin/accounting/banking','AccountController@index')->name('banking');
Route::post('/admin/accounting/save-account','AccountController@store');
Route::get('/admin/accounting/edit-account/{id}','AccountController@edit');
Route::post('/admin/accounting/update-account/{id}','AccountController@update');
Route::get('/admin/accounting/banking_balance','AccountController@show');
Route::get('/admin/accounting/delete/{id}','AccountController@destroy');

Route::get('/admin/accounting/sales','ReportController@sales_report')->name('salse');

Route::get('/admin/accounting/customer_invoice','CustomerInvoiceController@index')
->name('customer_invoice');
Route::get('/set-tax','CustomerInvoiceController@set_tex')->name('set_tex');
Route::get('/item-delete','CustomerInvoiceController@item_delete')->name('item_delete');
Route::get('/admin/accounting/customer_invoice/add','CustomerInvoiceController@create');
Route::post('/admin/accounting/customer_invoice/save','CustomerInvoiceController@store');
Route::get('/admin/accounting/customer_invoice/edit/{id}','CustomerInvoiceController@edit');
Route::get('/admin/accounting/customer_invoice/delete/{id}','CustomerInvoiceController@destroy');
Route::post('/admin/accounting/customer_invoice/update/{id}','CustomerInvoiceController@update');
Route::get('/admin/accounting/direct_invoice','DirectInvoiceController@index')->name('direct_invoice');
Route::get('/admin/accounting/direct_invoice/add', 'DirectInvoiceController@create');
Route::post('/admin/accounting/direct_invoice/save', 'DirectInvoiceController@store');
Route::get('/admin/accounting/direct_invoice/edit/{id}', 'DirectInvoiceController@edit');
Route::post('/admin/accounting/direct_invoice/update/{id}', 'DirectInvoiceController@update');
Route::get('/admin/accounting/direct_invoice/delete/{id}', 'DirectInvoiceController@destroy');

Route::get('/admin/accounting/quotes','QuoteController@index')->name('quots');
Route::get('/admin/accounting/quotes/add','QuoteController@create');
Route::get('/admin/accounting/quotes/edit/{id}','QuoteController@edit');
Route::get('/admin/accounting/quotes/delete/{id}','QuoteController@destroy');
Route::post('/admin/accounting/quotes/save','QuoteController@store');
Route::post('/admin/accounting/quotes/update/{id}','QuoteController@update');

Route::get('/admin/accounting/report','ReportController@index');
Route::get('/admin/accounting/get-report/','ReportController@show');
Route::get('/downloadRreport','ReportController@report_download');
Route::get('/reports','ReportController@show_ajax');

////////////////////////////// Budget //////////////////////////
Route::get('/admin/accounting/budget','BudgetController@index')->name('budget');
Route::get('/admin/accounting/budget/add','BudgetController@create');
Route::post('/admin/accounting/budget/save','BudgetController@store');
Route::get('/admin/accounting/budget/edit/{id}','BudgetController@edit');
Route::post('/admin/accounting/budget/update/{id}','BudgetController@update');
Route::get('/admin/accounting/budget/delete/{id}','BudgetController@destroy');
Route::get('/admin/accounting/budget/details/{id}','BudgetController@show');
Route::get('/admin/accounting/budget/pdf/{id}','BudgetController@pdf');
Route::get('/admin/accounting/budget/expand/{id}','BudgetController@expand');
Route::post('/admin/accounting/budget/expand-save/{id}','BudgetController@save_expand');
Route::get('/admin/accounting/transaction/add','BudgetController@add_transaction');
Route::post('/admin/accounting/transaction/save','BudgetController@save_transaction');

