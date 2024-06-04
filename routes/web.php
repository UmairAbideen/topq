<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\qa\QaController;
use League\CommonMark\Node\Block\Document;
use App\Http\Controllers\dir\DirController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\qa\mrm\MrmController;
use App\Http\Controllers\qa\pdf\PdfController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\qa\mrm\MailController;
use App\Http\Controllers\qa\risk\RiskController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\qa\excel\ExcelController;
use App\Http\Controllers\qa\users\UsersController;
use App\Http\Controllers\manager\ManagerController;
use App\Http\Controllers\officer\OfficerController;
use App\Http\Controllers\qa\recall\RecallController;
use App\Http\Controllers\director\DirectorController;
use App\Http\Controllers\qa\users\ApprovalController;
use App\Http\Controllers\guest\GuestFeedbackController;
use App\Http\Controllers\qa\ia\InternalAuditController;
use App\Http\Controllers\qa\users\Activationcontroller;
use App\Http\Controllers\qa\ccm\ChangeControlController;
use App\Http\Controllers\qa\feedback\FeedbackController;
use App\Http\Controllers\qa\documents\DocumentController;
use App\Http\Controllers\qa\complaint\ComplaintController;
use App\Http\Controllers\qa\deviation\DeviationController;
use App\Http\Controllers\qa\recall\RecallClosureController;
use App\Http\Controllers\director\mrm\DirectorMrmController;
use App\Http\Controllers\manager\risk\ManagerRiskController;
use App\Http\Controllers\officer\risk\OfficerRiskController;
use App\Http\Controllers\director\risk\DirectorRiskController;
use App\Http\Controllers\manager\feedback\ManagerFeedbackController;
use App\Http\Controllers\officer\feedback\OfficerFeedbackController;
use App\Http\Controllers\director\feedback\DirectorFeedbackController;
use App\Http\Controllers\manager\complaint\ManagerComplaintController;
use App\Http\Controllers\officer\complaint\OfficerComplaintController;
use App\Http\Controllers\director\complaint\DirectorComplaintController;


//=============login======================================================================================

Route::get('/', [LoginController::class, 'index'])->name('index');
Route::post('/login', [LoginController::class, 'login'])->name('login');

//=============registration===============================================================================

Route::get('/register', [RegisterController::class, 'view'])->name('register')->middleware('redirect.authenticated');
Route::post('/register', [RegisterController::class, 'register'])->name('register')->middleware('redirect.authenticated');

// //=============logout=====================================================================================

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');




//============= QA Routes =========================================================================


//============= Dashboard =========================================================================

Route::get('/qa/dashboard', [QaController::class, 'dashboard'])->name('qa.dashboard')->middleware(['web', 'Qa']);


//============= Users =========================================================================

Route::get('/qa/users/view', [UsersController::class, 'users'])->name('qa.users.view')->middleware(['web', 'Qa']);

Route::get('/qa/users/form', [UsersController::class, 'usersform'])->name('qa.users.usersform')->middleware(['web', 'Qa']);

Route::post('/qa/users/form/create', [UsersController::class, 'create'])->name('qa.users.usersform.create')->middleware(['web', 'Qa']);

Route::get('/qa/users/singleView/{id}', [UsersController::class, 'single'])->name('qa.users.single')->middleware(['web', 'Qa']);

Route::get('/qa/users/edit/{id}', [UsersController::class, 'edit'])->name('qa.users.edit')->middleware(['web', 'Qa']);

Route::post('/qa/users/upate/{id}', [UsersController::class, 'update'])->name('qa.users.update')->middleware(['web', 'Qa']);

Route::get('/qa/users/delete/{id}', [UsersController::class, 'delete'])->name('qa.users.delete')->middleware(['web', 'Qa']);

// ========= Active, Deactive, Approve, Dis-approve ===========================================

Route::post('/qa/users/approve/{id}', [ApprovalController::class, 'approve'])->name('qa.users.approve')->middleware(['web', 'Qa']);

Route::post('/qa/users/disapprove/{id}', [ApprovalController::class, 'disapprove'])->name('qa.users.disapprove')->middleware(['web', 'Qa']);

Route::post('/qa/users/active/{id}', [Activationcontroller::class, 'active'])->name('qa.users.active')->middleware(['web', 'Qa']);

Route::post('/qa/users/deactive/{id}', [Activationcontroller::class, 'deactive'])->name('qa.users.deactive')->middleware(['web', 'Qa']);


//  ========= import and  export  excell sheets ===========================================

Route::get('/qa/users/export-excel', [ExcelController::class, 'export'])->name('qa.users.export.excel')->middleware(['web', 'Qa']);

Route::post('/qa/users/import-excel', [ExcelController::class, 'import'])->name('qa.users.import.excel')->middleware(['web', 'Qa']);



// ========= Policy Documents ===========================================

Route::get('/qa/document/policy/view', [DocumentController::class, 'policyview'])->name('qa.document.policy.view')->middleware(['web', 'Qa']);

Route::get('/qa/document/policy/form', [DocumentController::class, 'policyform'])->name('qa.document.policy.form')->middleware(['web', 'Qa']);

Route::post('/qa/document/policy/create', [DocumentController::class, 'policycreate'])->name('qa.document.policy.create')->middleware(['web', 'Qa']);

Route::get('/qa/document/policy/edit/{id}', [DocumentController::class, 'policyedit'])->name('qa.document.policy.edit')->middleware(['web', 'Qa']);

Route::post('/qa/document/policy/update/{id}', [DocumentController::class, 'policyupdate'])->name('qa.document.policy.update')->middleware(['web', 'Qa']);

Route::get('/qa/document/policy/delete/{id}', [DocumentController::class, 'policydelete'])->name('qa.document.policy.delete')->middleware(['web', 'Qa']);


// ==================  SOPs  ===========================================

Route::get('/qa/sop/policy/view', [DocumentController::class, 'sopview'])->name('qa.document.sop.view')->middleware(['web', 'Qa']);

Route::get('/qa/sop/policy/form', [DocumentController::class, 'sopform'])->name('qa.document.sop.form')->middleware(['web', 'Qa']);

Route::post('/qa/sop/policy/create', [DocumentController::class, 'sopcreate'])->name('qa.document.sop.create')->middleware(['web', 'Qa']);

Route::get('/qa/sop/policy/edit/{id}', [DocumentController::class, 'sopedit'])->name('qa.document.sop.edit')->middleware(['web', 'Qa']);

Route::post('/qa/sop/policy/update/{id}', [DocumentController::class, 'sopupdate'])->name('qa.document.sop.update')->middleware(['web', 'Qa']);

Route::get('/qa/sop/policy/delete/{id}', [DocumentController::class, 'sopdelete'])->name('qa.document.sop.delete')->middleware(['web', 'Qa']);


// ========= Product Complaint ===========================================

Route::get('/qa/complaint/view', [ComplaintController::class, 'complaint'])->name('qa.complaint.view')->middleware(['web', 'Qa']);

Route::get('/qa/complaint/form', [ComplaintController::class, 'complaintform'])->name('qa.complaint.form')->middleware(['web', 'Qa']);

Route::post('/qa/complaint/create', [ComplaintController::class, 'create'])->name('qa.complaint.create')->middleware(['web', 'Qa']);

Route::get('/qa/complaint/edit/{id}', [ComplaintController::class, 'edit'])->name('qa.complaint.edit')->middleware(['web', 'Qa']);

Route::post('/qa/complaint/update/{id}', [ComplaintController::class, 'update'])->name('qa.complaint.update')->middleware(['web', 'Qa']);

Route::get('/qa/complaint/delete/{id}', [ComplaintController::class, 'delete'])->name('qa.complaint.delete')->middleware(['web', 'Qa']);

Route::get('/qa/complaint/read/{id}', [ComplaintController::class, 'markasread'])->name('qa.complaint.read')->middleware(['web', 'Qa']);


// ========= PDF Print and Download ===========================================

Route::get('/qa/complaint/print{id}', [PdfController::class, 'printComplaint'])->name('qa.complaint.print')->middleware(['web', 'Qa']);

Route::get('/qa/complaint/download/{id}', [PdfController::class, 'downloadComplaint'])->name('qa.complaint.download')->middleware(['web', 'Qa']);


// ========= Risk Assessment ===========================================

Route::get('/qa/risk/view', [RiskController::class, 'risk'])->name('qa.risk.view')->middleware(['web', 'Qa']);

Route::get('/qa/risk/form', [RiskController::class, 'riskform'])->name('qa.risk.form')->middleware(['web', 'Qa']);

Route::post('/qa/risk/create', [RiskController::class, 'create'])->name('qa.risk.create')->middleware(['web', 'Qa']);

Route::get('/qa/risk/edit/{id}', [RiskController::class, 'edit'])->name('qa.risk.edit')->middleware(['web', 'Qa']);

Route::post('/qa/risk/update/{id}', [RiskController::class, 'update'])->name('qa.risk.update')->middleware(['web', 'Qa']);

Route::get('/qa/risk/delete/{id}', [RiskController::class, 'delete'])->name('qa.risk.delete')->middleware(['web', 'Qa']);

Route::get('/qa/risk/verify/{id}', [RiskController::class,'riskverify'])->name('qa.risk.verify')->middleware(['web', 'Qa']);

Route::get('/qa/risk/review/{id}', [RiskController::class,'riskreview'])->name('qa.risk.review')->middleware(['web', 'Qa']);

Route::get('/qa/risk/approve/{id}', [RiskController::class,'riskapprove'])->name('qa.risk.approve')->middleware(['web', 'Qa']);

// ========= PDF Print and Download ===========================================

Route::get('/qa/risk/print{id}', [PdfController::class, 'printRisk'])->name('qa.risk.print')->middleware(['web', 'Qa']);

Route::get('/qa/risk/download/{id}', [PdfController::class, 'downloadRisk'])->name('qa.risk.download')->middleware(['web', 'Qa']);



// ========= Customer Feedback ===========================================

Route::get('/qa/feedback/view', [FeedbackController::class, 'feedback'])->name('qa.feedback.view')->middleware(['web', 'Qa']);

Route::get('/qa/feedback/form', [FeedbackController::class, 'feedbackform'])->name('qa.feedback.form')->middleware(['web', 'Qa']);

Route::post('/qa/feedback/create', [FeedbackController::class, 'create'])->name('qa.feedback.create')->middleware(['web', 'Qa']);

Route::get('/qa/feedback/delete/{id}', [FeedbackController::class, 'delete'])->name('qa.feedback.delete')->middleware(['web', 'Qa']);

// ========= PDF Print and Download ===========================================

Route::get('/qa/feedback/print{id}', [PdfController::class, 'printFeedback'])->name('qa.feedback.print')->middleware(['web', 'Qa']);

Route::get('/qa/feedback/download/{id}', [PdfController::class, 'downloadFeedback'])->name('qa.feedback.download')->middleware(['web', 'Qa']);


// ========= Management Review Agenda ===========================================

Route::get('/qa/mrm/agenda/view', [MrmController::class, 'agendaview'])->name('qa.mrm.agenda.view')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/agenda/form', [MrmController::class, 'agendaform'])->name('qa.mrm.agenda.form')->middleware(['web', 'Qa']);

Route::post('/qa/mrm/agenda/create', [MrmController::class, 'agendacreate'])->name('qa.mrm.agenda.create')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/agenda/edit/{id}', [MrmController::class, 'agendaedit'])->name('qa.mrm.agenda.edit')->middleware(['web', 'Qa']);

Route::post('/qa/mrm/agenda/update/{id}', [MrmController::class, 'agendaupdate'])->name('qa.mrm.agenda.update')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/agenda/delete/{id}', [MrmController::class, 'agendadelete'])->name('qa.mrm.agenda.delete')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/agenda/prepare/{id}', [MrmController::class,'agendaprepare'])->name('qa.mrm.agenda.prepare')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/agenda/approve/{id}', [MrmController::class,'agendaapprove'])->name('qa.mrm.agenda.approve')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/agenda/mail/{id}', [MailController::class,'agendamail'])->name('qa.mrm.agenda.mail')->middleware(['web', 'Qa']);


// ========= PDF Print and Download ==============================================

Route::get('/qa/mrm/agenda/print{id}', [PdfController::class, 'printAgenda'])->name('qa.mrm.agenda.print')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/agenda/download/{id}', [PdfController::class, 'downloadAgenda'])->name('qa.mrm.agenda.download')->middleware(['web', 'Qa']);


// ========= Management Review Minutes ===========================================

Route::get('/qa/mrm/minutes/view', [MrmController::class, 'minutesview'])->name('qa.mrm.minutes.view')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/minutes/form', [MrmController::class, 'minutesform'])->name('qa.mrm.minutes.form')->middleware(['web', 'Qa']);

Route::post('/qa/mrm/minutes/create', [MrmController::class, 'minutescreate'])->name('qa.mrm.minutes.create')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/minutes/edit/{id}', [MrmController::class, 'minutesedit'])->name('qa.mrm.minutes.edit')->middleware(['web', 'Qa']);

Route::post('/qa/mrm/minutes/update/{id}', [MrmController::class, 'minutesupdate'])->name('qa.mrm.minutes.update')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/minutes/delete/{id}', [MrmController::class, 'minutesdelete'])->name('qa.mrm.minutes.delete')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/minutes/prepare/{id}', [MrmController::class,'minutesprepare'])->name('qa.mrm.minutes.prepare')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/minutes/approve/{id}', [MrmController::class,'minutesapprove'])->name('qa.mrm.minutes.approve')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/minutes/mail/{id}', [MailController::class,'minutesmail'])->name('qa.mrm.minutes.mail')->middleware(['web', 'Qa']);

// ========= PDF Print and Download ==============================================

Route::get('/qa/mrm/minutes/print{id}', [PdfController::class, 'printMinutes'])->name('qa.mrm.minutes.print')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/minutes/download/{id}', [PdfController::class, 'downloadMinutes'])->name('qa.mrm.minutes.download')->middleware(['web', 'Qa']);


// ========= Management Review Attendance ===========================================

Route::get('/qa/mrm/attendance/view', [MrmController::class, 'attendanceview'])->name('qa.mrm.attendance.view')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/attendance/form', [MrmController::class, 'attendanceform'])->name('qa.mrm.attendance.form')->middleware(['web', 'Qa']);

Route::post('/qa/mrm/attendance/create', [MrmController::class, 'attendancecreate'])->name('qa.mrm.attendance.create')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/attendance/edit/{id}', [MrmController::class, 'attendanceedit'])->name('qa.mrm.attendance.edit')->middleware(['web', 'Qa']);

Route::post('/qa/mrm/attendance/update/{id}', [MrmController::class, 'attendanceupdate'])->name('qa.mrm.attendance.update')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/attendance/delete/{id}', [MrmController::class, 'attendancedelete'])->name('qa.mrm.attendance.delete')->middleware(['web', 'Qa']);

// ========= PDF Print and Download ==============================================

Route::get('/qa/mrm/attendance/print{id}', [PdfController::class, 'printAttendance'])->name('qa.mrm.attendance.print')->middleware(['web', 'Qa']);

Route::get('/qa/mrm/attendance/download/{id}', [PdfController::class, 'downloadAttendance'])->name('qa.mrm.attendance.download')->middleware(['web', 'Qa']);



// ========= Internal Audit Schedule ===========================================

Route::get('/qa/internalaudit/schedule/view', [InternalAuditController::class, 'scheduleview'])->name('qa.ia.schedule.view')->middleware(['web', 'Qa']);

Route::get('/qa/internalaudit/schedule/form', [InternalAuditController::class, 'scheduleform'])->name('qa.ia.schedule.form')->middleware(['web', 'Qa']);

Route::post('/qa/internalaudit/schedule/create', [InternalAuditController::class, 'schedulecreate'])->name('qa.ia.schedule.create')->middleware(['web', 'Qa']);

Route::get('/qa/internalaudit/schedule/prepare/{id}', [InternalAuditController::class,'scheduleprepare'])->name('qa.ia.schedule.prepare')->middleware(['web', 'Qa']);

Route::get('/qa/internalaudit/schedule/approve/{id}', [InternalAuditController::class,'scheduleapprove'])->name('qa.ia.schedule.approve')->middleware(['web', 'Qa']);

Route::get('/qa/internalaudit/schedule/edit/{id}', [InternalAuditController::class, 'scheduleedit'])->name('qa.ia.schedule.edit')->middleware(['web', 'Qa']);

Route::post('/qa/internalaudit/schedule/update/{id}', [InternalAuditController::class, 'scheduleupdate'])->name('qa.ia.schedule.update')->middleware(['web', 'Qa']);

Route::get('/qa/internalaudit/schedule/delete/{id}', [InternalAuditController::class, 'scheduledelete'])->name('qa.ia.schedule.delete')->middleware(['web', 'Qa']);

// ========= PDF Print and Download ==============================================

Route::get('/qa/internalaudit/schedule/print{id}', [PdfController::class, 'printIaSchedule'])->name('qa.ia.schedule.print')->middleware(['web', 'Qa']);

Route::get('/qa/internalaudit/schedule/download/{id}', [PdfController::class, 'downloadIaSchedule'])->name('qa.ia.schedule.download')->middleware(['web', 'Qa']);


// ========= Internal Audit Report ===========================================

Route::get('/qa/internalaudit/report/view', [InternalAuditController::class, 'reportview'])->name('qa.ia.report.view')->middleware(['web', 'Qa']);

Route::get('/qa/internalaudit/report/form', [InternalAuditController::class, 'reportform'])->name('qa.ia.report.form')->middleware(['web', 'Qa']);

Route::post('/qa/internalaudit/report/create', [InternalAuditController::class, 'reportcreate'])->name('qa.ia.report.create')->middleware(['web', 'Qa']);

Route::get('/qa/internalaudit/report/prepare/{id}', [InternalAuditController::class,'reportprepare'])->name('qa.ia.report.prepare')->middleware(['web', 'Qa']);

Route::get('/qa/internalaudit/report/approve/{id}', [InternalAuditController::class,'reportapprove'])->name('qa.ia.report.approve')->middleware(['web', 'Qa']);

Route::get('/qa/internalaudit/report/edit/{id}', [InternalAuditController::class, 'reportedit'])->name('qa.ia.report.edit')->middleware(['web', 'Qa']);

Route::post('/qa/internalaudit/report/update/{id}', [InternalAuditController::class, 'reportupdate'])->name('qa.ia.report.update')->middleware(['web', 'Qa']);

Route::get('/qa/internalaudit/report/delete/{id}', [InternalAuditController::class, 'reportdelete'])->name('qa.ia.report.delete')->middleware(['web', 'Qa']);

// ========= PDF Print and Download ==============================================

Route::get('/qa/internalaudit/report/print{id}', [PdfController::class, 'printIaReport'])->name('qa.ia.report.print')->middleware(['web', 'Qa']);

Route::get('/qa/internalaudit/report/download/{id}', [PdfController::class, 'downloadIaReport'])->name('qa.ia.report.download')->middleware(['web', 'Qa']);


// ========= Change Contorl Management ===========================================

Route::get('/qa/changecontrol/view', [ChangeControlController::class, 'changeview'])->name('qa.ccm.view')->middleware(['web', 'Qa']);

Route::get('/qa/changecontrol/form', [ChangeControlController::class, 'changeform'])->name('qa.ccm.form')->middleware(['web', 'Qa']);

Route::post('/qa/changecontrol/create', [ChangeControlController::class, 'changecreate'])->name('qa.ccm.create')->middleware(['web', 'Qa']);

Route::get('/qa/changecontrol/initiate/{id}', [ChangeControlController::class,'changeinitiate'])->name('qa.ccm.initiate')->middleware(['web', 'Qa']);

Route::get('/qa/changecontrol/review/{id}', [ChangeControlController::class, 'changereview'])->name('qa.ccm.review')->middleware(['web', 'Qa']);

Route::get('/qa/changecontrol/approve/{id}', [ChangeControlController::class,'changeapprove'])->name('qa.ccm.approve')->middleware(['web', 'Qa']);

Route::get('/qa/changecontrol/verify/{id}', [ChangeControlController::class,'changeverify'])->name('qa.ccm.verify')->middleware(['web', 'Qa']);

Route::get('/qa/changecontrol/close/{id}', [ChangeControlController::class,'changeclose'])->name('qa.ccm.close')->middleware(['web', 'Qa']);

Route::get('/qa/changecontrol/edit/{id}', [ChangeControlController::class, 'changeedit'])->name('qa.ccm.edit')->middleware(['web', 'Qa']);

Route::post('/qa/changecontrol/update/{id}', [ChangeControlController::class, 'changeupdate'])->name('qa.ccm.update')->middleware(['web', 'Qa']);

Route::get('/qa/changecontrol/delete/{id}', [ChangeControlController::class, 'changedelete'])->name('qa.ccm.delete')->middleware(['web', 'Qa']);

// ========= PDF Print and Download ==============================================

// Route::get('/qa/internalaudit/schedule/print{id}', [PdfController::class, 'printIaSchedule'])->name('qa.ia.schedule.print')->middleware(['web', 'Qa']);

// Route::get('/qa/internalaudit/schedule/download/{id}', [PdfController::class, 'downloadIaSchedule'])->name('qa.ia.schedule.download')->middleware(['web', 'Qa']);



// ========= Recall Information ===========================================

Route::get('/qa/recall/view', [RecallController::class, 'recallview'])->name('qa.recall.view')->middleware(['web', 'Qa']);

Route::get('/qa/recall/form', [RecallController::class, 'recallform'])->name('qa.recall.form')->middleware(['web', 'Qa']);

Route::post('/qa/recall/create', [RecallController::class, 'recallcreate'])->name('qa.recall.create')->middleware(['web', 'Qa']);

Route::get('/qa/recall/review/{id}', [RecallController::class, 'recallreview'])->name('qa.recall.review')->middleware(['web', 'Qa']);

Route::get('/qa/recall/approve/{id}', [RecallController::class,'recallapprove'])->name('qa.recall.approve')->middleware(['web', 'Qa']);

Route::get('/qa/recall/edit/{id}', [RecallController::class, 'recalledit'])->name('qa.recall.edit')->middleware(['web', 'Qa']);

Route::post('/qa/recall/update/{id}', [RecallController::class, 'recallupdate'])->name('qa.recall.update')->middleware(['web', 'Qa']);

Route::get('/qa/recall/delete/{id}', [RecallController::class, 'recalldelete'])->name('qa.recall.delete')->middleware(['web', 'Qa']);

// ========= PDF Print and Download ==============================================

// Route::get('/qa/internalaudit/schedule/print{id}', [PdfController::class, 'printIaSchedule'])->name('qa.ia.schedule.print')->middleware(['web', 'Qa']);

// Route::get('/qa/internalaudit/schedule/download/{id}', [PdfController::class, 'downloadIaSchedule'])->name('qa.ia.schedule.download')->middleware(['web', 'Qa']);


// ========= Recall Closure ===========================================

Route::get('/qa/closure/view', [RecallClosureController::class, 'closureview'])->name('qa.closure.view')->middleware(['web', 'Qa']);

Route::get('/qa/closure/form', [RecallClosureController::class, 'closureform'])->name('qa.closure.form')->middleware(['web', 'Qa']);

Route::post('/qa/closure/create', [RecallClosureController::class, 'closurecreate'])->name('qa.closure.create')->middleware(['web', 'Qa']);

Route::get('/qa/closure/review/{id}', [RecallClosureController::class, 'closurereview'])->name('qa.closure.review')->middleware(['web', 'Qa']);

Route::get('/qa/closure/approve/{id}', [RecallClosureController::class,'closureapprove'])->name('qa.closure.approve')->middleware(['web', 'Qa']);

Route::get('/qa/closure/edit/{id}', [RecallClosureController::class, 'closureedit'])->name('qa.closure.edit')->middleware(['web', 'Qa']);

Route::post('/qa/closure/update/{id}', [RecallClosureController::class, 'closureupdate'])->name('qa.closure.update')->middleware(['web', 'Qa']);

Route::get('/qa/closure/delete/{id}', [RecallClosureController::class, 'closuredelete'])->name('qa.closure.delete')->middleware(['web', 'Qa']);

// ========= PDF Print and Download ==============================================

// Route::get('/qa/internalaudit/schedule/print{id}', [PdfController::class, 'printIaSchedule'])->name('qa.ia.schedule.print')->middleware(['web', 'Qa']);

// Route::get('/qa/internalaudit/schedule/download/{id}', [PdfController::class, 'downloadIaSchedule'])->name('qa.ia.schedule.download')->middleware(['web', 'Qa']);


// ========= Deviation Management ===========================================

Route::get('/qa/deviation/view', [DeviationController::class, 'view'])->name('qa.deviation.view')->middleware(['web', 'Qa']);

Route::get('/qa/deviation/form', [DeviationController::class, 'form'])->name('qa.deviation.form')->middleware(['web', 'Qa']);

Route::post('/qa/deviation/create', [DeviationController::class, 'create'])->name('qa.deviation.create')->middleware(['web', 'Qa']);

Route::get('/qa/deviation/initialreview/{id}', [DeviationController::class,'initialreview'])->name('qa.deviaiton.ini.review')->middleware(['web', 'Qa']);

Route::get('/qa/deviation/initialapprove/{id}', [DeviationController::class,'initialapprove'])->name('qa.deviaiton.ini.approve')->middleware(['web', 'Qa']);

Route::get('/qa/deviation/verify/{id}', [DeviationController::class,'verify'])->name('qa.deviaiton.verify')->middleware(['web', 'Qa']);

Route::get('/qa/deviation/closingreview/{id}', [DeviationController::class,'closingreview'])->name('qa.deviaiton.closing.review')->middleware(['web', 'Qa']);

Route::get('/qa/deviation/closingapprove/{id}', [DeviationController::class,'closingapprove'])->name('qa.deviaiton.closing.approve')->middleware(['web', 'Qa']);

Route::get('/qa/deviation/edit/{id}', [DeviationController::class, 'edit'])->name('qa.deviation.edit')->middleware(['web', 'Qa']);

Route::post('/qa/deviation/update/{id}', [DeviationController::class, 'update'])->name('qa.deviation.update')->middleware(['web', 'Qa']);

Route::get('/qa/deviation/delete/{id}', [DeviationController::class, 'delete'])->name('qa.deviation.delete')->middleware(['web', 'Qa']);

// ========= PDF Print and Download ==============================================

// Route::get('/qa/internalaudit/schedule/print{id}', [PdfController::class, 'printIaSchedule'])->name('qa.ia.schedule.print')->middleware(['web', 'Qa']);

// Route::get('/qa/internalaudit/schedule/download/{id}', [PdfController::class, 'downloadIaSchedule'])->name('qa.ia.schedule.download')->middleware(['web', 'Qa']);





















//==================================================== Director =========================================================================

Route::get('/director/dashboard', [DirectorController::class, 'dashboard'])->name('director.dashboard')->middleware(['web', 'Director']);


// ========= Product Complaint ===========================================

Route::get('/director/complaint/view', [DirectorComplaintController::class, 'complaint'])->name('director.complaint.view')->middleware(['web', 'Director']);

// Route::get('/qa/complaint/read/{id}', [ComplaintController::class, 'markasread'])->name('qa.complaint.read')->middleware(['web', 'Qa']);

// ========= PDF Print and Download ===========================================

Route::get('/director/complaint/print{id}', [PdfController::class, 'printComplaint'])->name('director.complaint.print')->middleware(['web', 'Director']);

Route::get('/director/complaint/download/{id}', [PdfController::class, 'downloadComplaint'])->name('director.complaint.download')->middleware(['web', 'Director']);


// ========= Risk Assessment ===========================================

Route::get('/director/risk/view', [DirectorRiskController::class, 'risk'])->name('director.risk.view')->middleware(['web', 'Director']);

Route::get('/director/risk/approve/{id}', [DirectorRiskController::class,'riskapprove'])->name('director.risk.approve')->middleware(['web', 'Director']);

// ========= PDF Print and Download ===========================================

Route::get('/director/risk/print{id}', [PdfController::class, 'printRisk'])->name('director.risk.print')->middleware(['web', 'Director']);

Route::get('/director/risk/download/{id}', [PdfController::class, 'downloadRisk'])->name('director.risk.download')->middleware(['web', 'Director']);


// ========= Customer Feedback ===========================================

Route::get('/director/feedback/view', [DirectorFeedbackController::class, 'feedback'])->name('director.feedback.view')->middleware(['web', 'Director']);

// ========= PDF Print and Download ===========================================

Route::get('/director/feedback/print{id}', [PdfController::class, 'printFeedback'])->name('director.feedback.print')->middleware(['web', 'Director']);

Route::get('/director/feedback/download/{id}', [PdfController::class, 'downloadFeedback'])->name('director.feedback.download')->middleware(['web', 'Director']);


// ========= Management Review Agenda ===========================================

Route::get('/director/mrm/agenda/view', [DirectorMrmController::class, 'agendaview'])->name('director.mrm.agenda.view')->middleware(['web', 'Director']);

Route::get('/director/mrm/agenda/approve/{id}', [DirectorMrmController::class,'agendaapprove'])->name('director.mrm.agenda.approve')->middleware(['web', 'Director']);

// ========= PDF Print and Download ==============================================

Route::get('/director/mrm/agenda/print{id}', [PdfController::class, 'printAgenda'])->name('director.mrm.agenda.print')->middleware(['web', 'Director']);

Route::get('/director/mrm/agenda/download/{id}', [PdfController::class, 'downloadAgenda'])->name('director.mrm.agenda.download')->middleware(['web', 'Director']);


// ========= Management Review Minutes ===========================================

Route::get('/director/mrm/minutes/view', [DirectorMrmController::class, 'minutesview'])->name('director.mrm.minutes.view')->middleware(['web', 'Director']);

Route::get('/director/mrm/minutes/approve/{id}', [DirectorMrmController::class,'minutesapprove'])->name('director.mrm.minutes.approve')->middleware(['web', 'Director']);


// ========= PDF Print and Download ==============================================

Route::get('/director/mrm/minutes/print{id}', [PdfController::class, 'printMinutes'])->name('director.mrm.minutes.print')->middleware(['web', 'Director']);

Route::get('/director/mrm/minutes/download/{id}', [PdfController::class, 'downloadMinutes'])->name('director.mrm.minutes.download')->middleware(['web', 'Director']);


// ========= Management Review Attendance ===========================================

Route::get('/director/mrm/attendance/view', [DirectorMrmController::class, 'attendanceview'])->name('director.mrm.attendance.view')->middleware(['web', 'Director']);

// ========= PDF Print and Download ==============================================

Route::get('/director/mrm/attendance/print{id}', [PdfController::class, 'printAttendance'])->name('director.mrm.attendance.print')->middleware(['web', 'Director']);

Route::get('/director/mrm/attendance/download/{id}', [PdfController::class, 'downloadAttendance'])->name('director.mrm.attendance.download')->middleware(['web', 'Director']);










//==================================================== Manager =========================================================================

Route::get('/manager/dashboard', [ManagerController::class, 'dashboard'])->name('manager.dashboard')->middleware(['web', 'Manager']);


// ========= Product Complaint ===========================================

Route::get('/manager/complaint/view', [ManagerComplaintController::class, 'complaint'])->name('manager.complaint.view')->middleware(['web', 'Manager']);

Route::get('/manager/complaint/form', [ManagerComplaintController::class, 'complaintform'])->name('manager.complaint.form')->middleware(['web', 'Manager']);

Route::post('/manager/complaint/create', [ManagerComplaintController::class, 'create'])->name('manager.complaint.create')->middleware(['web', 'Manager']);

// Route::get('/qa/complaint/read/{id}', [ComplaintController::class, 'markasread'])->name('qa.complaint.read')->middleware(['web', 'Qa']);

// ========= PDF Print and Download ===========================================

Route::get('/manager/complaint/print{id}', [PdfController::class, 'printComplaint'])->name('manager.complaint.print')->middleware(['web', 'Manager']);

Route::get('/manager/complaint/download/{id}', [PdfController::class, 'downloadComplaint'])->name('manager.complaint.download')->middleware(['web', 'Manager']);


// ========= Risk Assessment ===========================================

Route::get('/manager/risk/view', [ManagerRiskController::class, 'risk'])->name('manager.risk.view')->middleware(['web', 'Manager']);

Route::get('/manager/risk/form', [ManagerRiskController::class, 'riskform'])->name('manager.risk.form')->middleware(['web', 'Manager']);

Route::post('/manager/risk/create', [ManagerRiskController::class, 'create'])->name('manager.risk.create')->middleware(['web', 'Manager']);

Route::get('/manager/risk/edit/{id}', [ManagerRiskController::class, 'edit'])->name('manager.risk.edit')->middleware(['web', 'Manager']);

Route::post('/manager/risk/update/{id}', [ManagerRiskController::class, 'update'])->name('manager.risk.update')->middleware(['web', 'Manager']);

Route::get('/manager/risk/verify/{id}', [ManagerRiskController::class,'riskverify'])->name('manager.risk.verify')->middleware(['web', 'Manager']);

// ========= PDF Print and Download ===========================================

Route::get('/manager/risk/print{id}', [PdfController::class, 'printRisk'])->name('manager.risk.print')->middleware(['web', 'Manager']);

Route::get('/manager/risk/download/{id}', [PdfController::class, 'downloadRisk'])->name('manager.risk.download')->middleware(['web', 'Manager']);


// ========= Customer Feedback ===========================================

Route::get('/manager/feedback/view', [ManagerFeedbackController::class, 'feedback'])->name('manager.feedback.view')->middleware(['web', 'Manager']);

Route::get('/manager/feedback/form', [ManagerFeedbackController::class, 'feedbackform'])->name('manager.feedback.form')->middleware(['web', 'Manager']);


// ========= PDF Print and Download ===========================================

Route::get('/manager/feedback/print{id}', [PdfController::class, 'printFeedback'])->name('manager.feedback.print')->middleware(['web', 'Manager']);

Route::get('/manager/feedback/download/{id}', [PdfController::class, 'downloadFeedback'])->name('manager.feedback.download')->middleware(['web', 'Manager']);




//==================================================== Officer =========================================================================

Route::get('/officer/dashboard', [OfficerController::class, 'dashboard'])->name('officer.dashboard')->middleware(['web', 'Officer']);


// ========= Product Complaint ===========================================

Route::get('/officer/complaint/form', [OfficerComplaintController::class, 'complaintform'])->name('officer.complaint.form')->middleware(['web', 'Officer']);

Route::post('/officer/complaint/create', [OfficerComplaintController::class, 'create'])->name('officer.complaint.create')->middleware(['web', 'Officer']);

// Route::get('/qa/complaint/read/{id}', [ComplaintController::class, 'markasread'])->name('qa.complaint.read')->middleware(['web', 'Qa']);


// ========= Risk Assessment ===========================================

Route::get('/officer/risk/view', [OfficerRiskController::class, 'risk'])->name('officer.risk.view')->middleware(['web', 'Officer']);

Route::get('/officer/risk/form', [OfficerRiskController::class, 'riskform'])->name('officer.risk.form')->middleware(['web', 'Officer']);

Route::post('/officer/risk/create', [OfficerRiskController::class, 'create'])->name('officer.risk.create')->middleware(['web', 'Officer']);

Route::get('/officer/risk/edit/{id}', [OfficerRiskController::class, 'edit'])->name('officer.risk.edit')->middleware(['web', 'Officer']);

Route::post('/officer/risk/update/{id}', [OfficerRiskController::class, 'update'])->name('officer.risk.update')->middleware(['web', 'Officer']);

// ========= PDF Print and Download ===========================================

Route::get('/officer/risk/print{id}', [PdfController::class, 'printRisk'])->name('officer.risk.print')->middleware(['web', 'Officer']);

Route::get('/officer/risk/download/{id}', [PdfController::class, 'downloadRisk'])->name('officer.risk.download')->middleware(['web', 'Officer']);


// ========= Customer Feedback ===========================================

Route::get('/officer/feedback/form', [OfficerFeedbackController::class, 'feedbackform'])->name('officer.feedback.add')->middleware(['web', 'Officer']);








//==================================================== Guest =========================================================================

// ========= Customer Feedback ===========================================

Route::get('/guest/feedback/form', [GuestFeedbackController::class, 'feedbackform'])->name('guest.feedback.add');

Route::post('/guest/feedback/create', [GuestFeedbackController::class, 'create'])->name('guest.feedback.create')->middleware(['web']);

