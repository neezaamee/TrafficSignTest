<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CompController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

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
    return view('index', ['pageHeading' => 'CTPF.. With You, For You, Always']);
});

Route::get('/kamran', function () {
    return view('kamran', ['pageHeading' => 'CTPF.. With You, For You, Always']);
});

//Sub Routes About Us
Route::get('/Profile', function(){
    return view('Profile', ['pageHeading' => 'Profile']);
});
Route::get('/CTOsHistory', [AboutUsController::class, 'historyCTO']);
/* Route::get('/CTOsHistory', function(){
    return view('ctoHistory', ['pageHeading' => 'CTOs History']);
}); */
Route::get('/Messages', function(){
    return view('Messages', ['pageHeading' => 'Massages']);
});
Route::get('/OrganogramCTPF', function(){
    return view('Organogram', ['pageHeading' => 'Organogram CTPF']);
});
Route::get('/AboutFaisalabad', function(){
    return view('aboutFaisalabad', ['pageHeading' => 'About Faisalabad']);
});
Route::get('/ContactUs', function(){
    return view('contactUs', ['pageHeading' => 'Contact Us']);
});


//Sub Routes Public Services
Route::get('/SafetyTips', function(){
    return view('safetyTips', ['pageHeading' => 'Safety Tips']);
});
Route::get('/FinePaymentProcess', function(){
    return view('Fine', ['pageHeading' => 'Fine Payment Process']);
});
Route::get('/TrafficSigns', function(){
    return view('trafficSigns', ['pageHeading' => 'Traffic Signs']);
});
Route::get('/TestModules', function(){
    return view('testModules', ['pageHeading' => 'TestModules']);
});
Route::get('/DrivingTicketsCalculator', function(){
    return view('ticketCalculator', ['pageHeading' => 'Driving Tickets Calculator']);
});
Route::get('/FAQS', function(){
    return view('Faq', ['pageHeading' => 'Frequently Ask Questions']);
});
Route::get('/DrivingSchoolsCTPF', function(){
    return view('drivingSchool', ['pageHeading' => 'Driving Schools <br> City Traffic Police Faisalabad']);
});

//Sub Routes Driving License
Route::get('/VerifyLicense', function(){
    return view('verifyLicense', ['pageHeading' => 'License Verification']);
});
Route::get('/TrackLicense', function(){
    return view('trackLicense', ['pageHeading' => 'License Tracking']);
});
Route::get('/LearnerPermit', function(){
    return view('Learner', ['pageHeading' => 'Learner Driving Permit']);
});
Route::get('/RegularLicense', function(){
    return view('regularLicense', ['pageHeading' => 'Regular License']);
});
Route::get('/RenewLicense', function(){
    return view('renewLicense', ['pageHeading' => 'Renew License']);
});
Route::get('/DuplicateLicense', function(){
    return view('duplicateLicense', ['pageHeading' => 'Duplicate License']);
});
Route::get('/EndorsementLicense', function(){
    return view('endorsementLicense', ['pageHeading' => 'License Endorsement']);
});
Route::get('/InternationalDrivingPermit', function(){
    return view('internationalDrivingPermit', ['pageHeading' => 'International Driving Permit']);
});
Route::get('/InvalidCarriage', function(){
    return view('invalidCarriage', ['pageHeading' => 'Invalid Carriage <br> License for Persons with Disabilities']);
});
//Sub Routes E-Police
Route::get('/ComplaintBox', function(){
    return view('complaintBox', ['pageHeading' => 'Complaint Box']);
});
Route::post('/ComplaintBox', [ComplaintController::class, 'new']);

Route::get('/ComplaintStatus', function(){
    return view('trackComplaint', ['pageHeading' => 'Track Complaint']);
});
Route::post('/ComplaintStatus', [ComplaintController::class, 'status']);
Route::get('/ComplaintsAll', [ComplaintController::class, 'all']);
Route::resource('feedbacks', FeedbackController::class);