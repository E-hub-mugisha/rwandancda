<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

use TCG\Voyager\Models\Post as VoyagerPost;
use App\Http\Controllers\MailController;

use App\Resource;
use App\Gallery;
use App\Story;
use App\Member;
use App\Engagement;
use App\Post;
use App\Worker;
use App\Partner;
use App\Subscriber;
use App\Program;
use App\Comment;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\HomeController;
use App\Models\Banner;
use App\Models\CarouselItem;
use App\Models\User;
use App\Newsletters;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Category;

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
    $stories = Story::latest()->take(3)->get();
    $partners = Partner::all();
    $groupFocus = Engagement::all();
    $engagements = Engagement::all();
    $data = VoyagerPost::where('category_id', 1)->orderBy('created_at', 'desc')->take(6)->get();
    $featured = VoyagerPost::where('category_id', 1)
        ->latest()
        ->take(1)->first();
    $resourcedata = Resource::all()->take(3);
    $banners = CarouselItem::latest()->take(3)->get();
    $images = Gallery::latest()->take(10)->get();
    return view('home', ['featured' => $featured, 'banners' => $banners, 'images' => $images, 'stories' => $stories, 'groupFocus' => $groupFocus, 'engagements' => $engagements, 'partners' => $partners, 'posts' => $data, 'resources_data' => $resourcedata]);
})->name('home');

Route::get('/about_us', function () {
    $engagements = Engagement::all();
    $members = Member::all();
    $workers = Worker::orderBy('created_at', 'desc')->get();
    return view('about', ['workers' => $workers, 'members' => $members, 'engagements' => $engagements]);
})->name('about_us');

Route::get('/Mission_Vision_Objectives', function () {
    $engagements = Engagement::all();
    return view('Mission_Vision_Objectives', ['engagements' => $engagements]);
})->name('Mission.Vision.Objectives');

Route::get('/partnerships-members', function () {
    $engagements = Engagement::all();
    $members = Member::all();
    $partners = Partner::all();
    return view('partnerships', ['partners' => $partners, 'members' => $members, 'engagements' => $engagements]);
})->name('partnerships');

Route::get('/team_members', function () {
    $engagements = Engagement::all();
    $members = Member::all();
    $workers = Worker::orderBy('created_at', 'desc')->get();
    return view('team_member', ['workers' => $workers, 'members' => $members, 'engagements' => $engagements]);
})->name('team');

Route::get('/know_your_numbers', function () {
    $engagements = Engagement::all();
    $members = Member::all();
    $workers = Worker::orderBy('created_at', 'desc')->get();
    return view('know_your_numbers', ['workers' => $workers, 'members' => $members, 'engagements' => $engagements]);
})->name('know_your_numbers');

Route::get('/gallery', function () {
    $engagements = Engagement::all();
    $year = request('year');
    $eventType = request('event_type');

    $query = Gallery::query();

    if ($year) {
        $query->whereYear('updated_at', $year);
    }

    if ($eventType) {
        $query->where('event_type', $eventType);
    }

    $images = $query->latest()->paginate(15);

    $years = Gallery::selectRaw('YEAR(updated_at) as year')
        ->distinct()
        ->orderByDesc('year')
        ->pluck('year');

    $eventTypes = Gallery::select('event_type')
        ->distinct()
        ->orderBy('event_type')
        ->pluck('event_type');

    return view('gallery', compact('images', 'years', 'eventTypes', 'engagements'));
})->name('gallery');


Route::get('/video-gallery', function () {
    $engagements = Engagement::all();
    return view('video-gallery', ['engagements' => $engagements]);
});

Route::get('/story/{name}', function ($name) {
    $engagements = Engagement::all();
    $data = Story::where('name', $name)->first();
    return view('story_details', ['data' => $data, 'engagements' => $engagements]);
});

Route::get('/ncd_engagements/{title}', function ($title) {
    $engagements = Engagement::all();
    $data = Engagement::where('title', $title)->first();
    $programs = Program::where('engagement', $data->id)->get();
    return view('engagements', ['programs' => $programs, 'eng_title' => $title, 'data' => $data, 'engagements' => $engagements]);
})->name('ncd_engagements');

Route::get('/program/{id}', function ($id) {
    $engagements = Engagement::all();
    $data = Program::where('id', $id)->first();
    $relatedProgram = Program::where('engagement', $data->engagement)->get();
    return view('detail', ['engagements' => $engagements, 'data' => $data, 'relatedProgram' => $relatedProgram]);
})->name('detail');

Route::get('/ncd_news', function () {
    $data = VoyagerPost::where('category_id', 1)->simplePaginate(6);
    $engagements = Engagement::all();
    return view('posts', ['posts' => $data, 'engagements' => $engagements]);
})->name('ncd_posts');

Route::get('/ncd_covid_19', function () {
    $data = VoyagerPost::where('category_id', 2)->paginate(15);
    $engagements = Engagement::all();
    return view('posts', ['posts' => $data, 'engagements' => $engagements, 'header' => 'NCDs and COVID-19']);
})->name('ncd_covid_posts');

Route::get('/ncd_news/{slug}', function ($slug) {
    $comments = Comment::where('post', $slug)->get();
    $engagements = Engagement::all();
    $data = VoyagerPost::where('slug', $slug)->first();
    $related_data = VoyagerPost::where('category_id', 1)->orderBy('created_at', 'desc')->take(6)->get();
    return view('post_details', ['related_data' => $related_data, 'data' => $data, 'engagements' => $engagements, 'comments_data' => $comments]);
});

Route::get('/ncd_resources', function () {
    // return redirect()->action([PdfResourcesController::class, 'index']);
    $engagements = Engagement::all();
    $data = Resource::simplePaginate(6);
    return view('resources', ['resources_data' => $data, 'engagements' => $engagements]);
})->name('ncd_resources');

Route::post('/subscribe', function (Request $request) {
    $subscriber = new Subscriber();
    $subscriber->email = $request->email;
    $subscriber->save();

    return redirect()->back();
})->name('subscribe');

Route::post('/comment/post/{title}', function (Request $request, $title) {
    $comment = new Comment();
    $comment->name = $request->name;
    $comment->email = $request->email;
    $comment->message = $request->message;
    $comment->post = $title;
    $comment->save();

    return redirect()->back();
})->name('post_comment');

Route::post('/newsletter/add/send', [MailController::class, 'attached_mail'])->name('send_newsletter');

Route::post('/contact/send', [MailController::class, 'html_mail'])->name('send_contact');
Route::post('/sendContact', [App\Http\Controllers\MailController::class, 'sendContact'])->name('sendContact');

Route::post('/contact/send', [App\Http\Controllers\MailController::class, 'send'])->name('contact.send');

Route::get('/test-email', function () {
    $details = [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'subject' => 'Test Subject',
        'message' => 'This is a test message.',
    ];

    Mail::to('kabosierik@gmail.com')->send(new \App\Mail\ContactMail($details));

    return 'Email sent!';
});

Route::get('/contact', function () {
    $engagements = Engagement::all();
    return view('contact', ['engagements' => $engagements]);
})->name('message');

Route::get('/newsletters', function () {
    $engagements = Engagement::all();
    $newsletter = Newsletters::orderBy('created_at', 'desc')->get();
    return view('newsletters', ['newsletters' => $newsletter, 'engagements' => $engagements]);
})->name('newsletters');

Route::get('/newsletter/add', function () {
    $engagements = Engagement::all();
    $newsletters = Newsletters::all();
    return view('newsletter', ['newsletters' => $newsletters, 'engagements' => $engagements]);
})->name('add_newsletter');

Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::get('/foo', function () {
    Artisan::call('make:controller MailController');
});

Route::get('/diabetes/assessments', [AssessmentController::class, 'create'])->name('assessments.create');
Route::post('/assessments', [AssessmentController::class, 'store'])->name('assessments.store');
Route::get('/assessments/{assessment}', [AssessmentController::class, 'show'])->name('assessments.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/conference-2022', function () {
    $engagements = Engagement::all();
    $members = Member::all();
    $partners = Partner::all();
    $workers = Worker::orderBy('created_at', 'desc')->get();
    return view('conference-2022', ['workers' => $workers, 'members' => $members, 'partners' => $partners, 'engagements' => $engagements]);
})->name('conference-2022');

Route::get('/conference-2021', function () {
    $engagements = Engagement::all();
    $members = Member::all();
    $partners = Partner::all();
    $workers = Worker::orderBy('created_at', 'desc')->get();
    return view('conference-2021', ['workers' => $workers, 'members' => $members, 'partners' => $partners, 'engagements' => $engagements]);
})->name('conference-2021');

Route::get('/ncd_stories', function () {
    $engagements = Engagement::all();
    $stories = Story::latest()->get();
    return view('ncd_stories', ['engagements' => $engagements, 'stories' => $stories]);
})->name('ncd_stories');

Route::get('/our-impact', function () {
    $engagements = Engagement::all();
    return view('our_impact', ['engagements' => $engagements]);
})->name('our_impact');

// ********************************Dashboard ROUTES********************************* //

Route::get('/dashboard', [App\Http\Controllers\admin\DashoardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/admin/users', function () {
    $users = User::all();
    return view('admin.users', compact('users'));
})->middleware(['auth'])->name('users');

// ******************************** Posts ROUTES ***********************************

Route::get('/admin/posts', [App\Http\Controllers\admin\PostsController::class, "index"])
    ->middleware(['auth'])->name('posts');

Route::get('/admin/post/create', [App\Http\Controllers\admin\PostsController::class, "create"])
    ->middleware(['auth'])->name('posts.create');

Route::get('/admin/post/{id}', [App\Http\Controllers\admin\PostsController::class, "show"])
    ->middleware(['auth'])->name('posts.show');

Route::get('/admin/post/edit/{id}', [App\Http\Controllers\admin\PostsController::class, "edit"])
    ->middleware(['auth'])->name('posts.edit');

Route::post('/admin/createPost', [App\Http\Controllers\admin\PostsController::class, "store"])
    ->middleware(['auth'])->name('posts.store');

Route::put('/admin/post/update/{id}', [App\Http\Controllers\admin\PostsController::class, "update"])
    ->middleware(['auth'])->name('posts.update');

Route::delete('/admin/post/delete/{id}', [App\Http\Controllers\admin\PostsController::class, "destroy"])
    ->middleware(['auth'])->name('posts.destroy');

Route::delete('/admin/comment/delete/{id}', [App\Http\Controllers\admin\PostsController::class, "destroyComment"])
    ->middleware(['auth'])->name('comments.destroy');

//*************/ workers ******************

Route::get('/admin/workers', [App\Http\Controllers\admin\workersController::class, "index"])
    ->middleware(['auth'])->name('workers');

Route::get('/admin/worker/{id}', [App\Http\Controllers\admin\workersController::class, "show"])
    ->middleware(['auth'])->name('workers.show');

Route::get('/admin/worker/edit/{id}', [App\Http\Controllers\admin\workersController::class, "edit"])
    ->middleware(['auth'])->name('workers.edit');

Route::post('/workerStore', [App\Http\Controllers\admin\workersController::class, "store"])
    ->middleware(['auth'])->name('workers.store');

Route::put('/admin/worker/update/{id}', [App\Http\Controllers\admin\workersController::class, "update"])
    ->middleware(['auth'])->name('workers.update');

Route::delete('/admin/worker/delete/{id}', [App\Http\Controllers\admin\workersController::class, "destroy"])
    ->middleware(['auth'])->name('workers.destroy');

//*************/ members ******************

Route::get('/admin/members', [App\Http\Controllers\admin\MembersController::class, "index"])
    ->middleware(['auth'])->name('members');

Route::get('/admin/member/{id}', [App\Http\Controllers\admin\MembersController::class, "show"])
    ->middleware(['auth'])->name('members.show');

Route::get('/admin/member/edit/{id}', [App\Http\Controllers\admin\MembersController::class, "edit"])
    ->middleware(['auth'])->name('members.edit');

Route::post('/memberStore', [App\Http\Controllers\admin\MembersController::class, "store"])
    ->middleware(['auth'])->name('members.store');

Route::put('/admin/member/update/{id}', [App\Http\Controllers\admin\MembersController::class, "update"])
    ->middleware(['auth'])->name('members.update');

Route::delete('/admin/member/delete/{id}', [App\Http\Controllers\admin\MembersController::class, "destroy"])
    ->middleware(['auth'])->name('members.destroy');

//*************/ engagement ******************

Route::get('/admin/engagements', [App\Http\Controllers\admin\adminController::class, "Engagements"])
    ->middleware(['auth'])->name('engagements');

Route::get('/admin/engagement/{id}', [App\Http\Controllers\admin\adminController::class, "showEngagement"])
    ->middleware(['auth'])->name('engagements.show');

Route::post('/engagementAdd', [App\Http\Controllers\admin\adminController::class, "EngagementAdd"])
    ->middleware(['auth'])->name('engagements.store');

Route::put('/admin/engagement/update/{id}', [App\Http\Controllers\admin\adminController::class, "editEngagement"])
    ->middleware(['auth'])->name('engagements.update');

Route::delete('/admin/engagement/delete/{id}', [App\Http\Controllers\admin\adminController::class, "deleteEngagement"])
    ->middleware(['auth'])->name('engagements.destroy');

//*************/ subscribers ******************

Route::get('/admin/subscribers', [App\Http\Controllers\admin\adminController::class, "Subscribers"])
    ->middleware(['auth'])->name('subscribers');

Route::get('/admin/subscriber/{id}', [App\Http\Controllers\admin\adminController::class, "showSubscriber"])
    ->middleware(['auth'])->name('subscribers.show');

Route::post('/SubscriberAdd', [App\Http\Controllers\admin\adminController::class, "SubscriberAdd"])
    ->middleware(['auth'])->name('subscribers.store');

Route::put('/admin/subscriber/update/{id}', [App\Http\Controllers\admin\adminController::class, "editSubscriber"])
    ->middleware(['auth'])->name('subscribers.update');

Route::delete('/admin/subscriber/delete/{id}', [App\Http\Controllers\admin\adminController::class, "deleteSubscriber"])
    ->middleware(['auth'])->name('subscribers.destroy');

// ** partners route *** 

Route::get('/admin/partners', [App\Http\Controllers\admin\PartnerController::class, "index"])
    ->middleware(['auth'])->name('partners');

Route::get('/admin/partner/{id}', [App\Http\Controllers\admin\PartnerController::class, "show"])
    ->middleware(['auth'])->name('partners.show');

Route::get('/admin/partner/edit/{id}', [App\Http\Controllers\admin\PartnerController::class, "edit"])
    ->middleware(['auth'])->name('partners.edit');

Route::post('/partnerStore', [App\Http\Controllers\admin\PartnerController::class, "store"])
    ->middleware(['auth'])->name('partners.store');

Route::put('/admin/partner/update/{id}', [App\Http\Controllers\admin\PartnerController::class, "update"])
    ->middleware(['auth'])->name('partners.update');

Route::delete('/admin/partner/delete/{id}', [App\Http\Controllers\admin\PartnerController::class, "destroy"])
    ->middleware(['auth'])->name('partners.destroy');

// ********* resources *************

Route::get('/admin/resources', [App\Http\Controllers\admin\ResourcesController::class, "index"])
    ->middleware(['auth'])->name('resources');

Route::get('/admin/resource/{id}', [App\Http\Controllers\admin\ResourcesController::class, "show"])
    ->middleware(['auth'])->name('resources.show');

Route::get('/admin/resource/edit/{id}', [App\Http\Controllers\admin\ResourcesController::class, "edit"])
    ->middleware(['auth'])->name('resources.edit');

Route::post('/resourceStore', [App\Http\Controllers\admin\ResourcesController::class, "store"])
    ->middleware(['auth'])->name('resources.store');

Route::put('/admin/resource/update/{id}', [App\Http\Controllers\admin\ResourcesController::class, "update"])
    ->middleware(['auth'])->name('resources.update');

Route::delete('/admin/resource/delete/{id}', [App\Http\Controllers\admin\ResourcesController::class, "destroy"])
    ->middleware(['auth'])->name('resources.destroy');

// ************** Stories **************

Route::get('/admin/stories', [App\Http\Controllers\admin\StoriesController::class, "index"])
    ->middleware(['auth'])->name('stories');

Route::get('/admin/story/create', [App\Http\Controllers\admin\StoriesController::class, "create"])
    ->middleware(['auth'])->name('stories.create');

Route::get('/admin/story/{id}', [App\Http\Controllers\admin\StoriesController::class, "show"])
    ->middleware(['auth'])->name('stories.show');

Route::get('/admin/story/edit/{id}', [App\Http\Controllers\admin\StoriesController::class, "edit"])
    ->middleware(['auth'])->name('stories.edit');

Route::post('/storyStore', [App\Http\Controllers\admin\StoriesController::class, "store"])
    ->middleware(['auth'])->name('stories.store');

Route::put('/admin/story/update/{id}', [App\Http\Controllers\admin\StoriesController::class, "update"])
    ->middleware(['auth'])->name('stories.update');

Route::delete('/admin/story/delete/{id}', [App\Http\Controllers\admin\StoriesController::class, "destroy"])
    ->middleware(['auth'])->name('stories.destroy');

//  ************** gallery **************

Route::get('/admin/galleries', [App\Http\Controllers\admin\AdminController::class, "Gallery"])
    ->middleware(['auth'])->name('galleries');

Route::get('/admin/gallery/{id}', [App\Http\Controllers\admin\AdminController::class, "showGallery"])
    ->middleware(['auth'])->name('galleries.show');

Route::get('/admin/gallery/edit/{id}', [App\Http\Controllers\admin\AdminController::class, "editGallery"])
    ->middleware(['auth'])->name('galleries.edit');

Route::post('/galleryStore', [App\Http\Controllers\admin\AdminController::class, "storeGallery"])
    ->middleware(['auth'])->name('galleries.store');

Route::put('/admin/gallery/update/{id}', [App\Http\Controllers\admin\AdminController::class, "updateGallery"])
    ->middleware(['auth'])->name('galleries.update');

Route::delete('/admin/gallery/delete/{id}', [App\Http\Controllers\admin\AdminController::class, "destroyGallery"])
    ->middleware(['auth'])->name('galleries.destroy');

// ******************** Program Routes *******************

Route::get('/admin/programs', [App\Http\Controllers\admin\ProgramController::class, "index"])
    ->middleware(['auth'])->name('programs');

Route::get('/admin/program/create', [App\Http\Controllers\admin\ProgramController::class, "create"])
    ->middleware(['auth'])->name('programs.create');

Route::get('/admin/program/{id}', [App\Http\Controllers\admin\ProgramController::class, "show"])
    ->middleware(['auth'])->name('programs.show');

Route::get('/admin/program/edit/{id}', [App\Http\Controllers\admin\ProgramController::class, "edit"])
    ->middleware(['auth'])->name('programs.edit');

Route::post('/admin/createProgram', [App\Http\Controllers\admin\ProgramController::class, "store"])
    ->middleware(['auth'])->name('programs.store');

Route::put('/admin/program/update/{id}', [App\Http\Controllers\admin\ProgramController::class, "update"])
    ->middleware(['auth'])->name('programs.update');

Route::delete('/admin/program/delete/{id}', [App\Http\Controllers\admin\ProgramController::class, "destroy"])
    ->middleware(['auth'])->name('programs.destroy');

//*************/ categories route ******************

Route::get('/admin/categories', [App\Http\Controllers\admin\adminController::class, "Category"])
    ->middleware(['auth'])->name('categories');

Route::get('/admin/category/{id}', [App\Http\Controllers\admin\adminController::class, "showCategory"])
    ->middleware(['auth'])->name('categories.show');

Route::post('/categoryAdd', [App\Http\Controllers\admin\adminController::class, "CategoryAdd"])
    ->middleware(['auth'])->name('categories.store');

Route::put('/admin/category/update/{id}', [App\Http\Controllers\admin\adminController::class, "editCategory"])
    ->middleware(['auth'])->name('categories.update');

Route::delete('/admin/category/delete/{id}', [App\Http\Controllers\admin\adminController::class, "deleteCategory"])
    ->middleware(['auth'])->name('categories.destroy');

//*************/ calendars ******************

Route::get('/admin/calendars', [App\Http\Controllers\admin\adminController::class, "calendars"])
    ->middleware(['auth'])->name('calendars');

Route::get('/admin/calendar/{id}', [App\Http\Controllers\admin\adminController::class, "showCalendar"])
    ->middleware(['auth'])->name('calendars.show');

Route::post('/CalendarAdd', [App\Http\Controllers\admin\adminController::class, "CalendarAdd"])
    ->middleware(['auth'])->name('calendars.store');

Route::put('/admin/calendar/update/{id}', [App\Http\Controllers\admin\adminController::class, "editCalendar"])
    ->middleware(['auth'])->name('calendars.update');

Route::delete('/admin/calendar/delete/{id}', [App\Http\Controllers\admin\adminController::class, "deleteCalendar"])
    ->middleware(['auth'])->name('calendars.destroy');

// ************** Stories **************

Route::get('/admin/banners', [App\Http\Controllers\admin\BannerController::class, "index"])
    ->middleware(['auth'])->name('banners.index');

Route::get('/admin/banner/create', [App\Http\Controllers\admin\BannerController::class, "create"])
    ->middleware(['auth'])->name('banners.create');

Route::get('/admin/banner/{id}', [App\Http\Controllers\admin\BannerController::class, "show"])
    ->middleware(['auth'])->name('banners.show');

Route::get('/admin/banner/edit/{id}', [App\Http\Controllers\admin\BannerController::class, "edit"])
    ->middleware(['auth'])->name('banners.edit');

Route::post('/bannerStore', [App\Http\Controllers\admin\BannerController::class, "store"])
    ->middleware(['auth'])->name('banners.store');

Route::put('/admin/banner/update/{id}', [App\Http\Controllers\admin\BannerController::class, "update"])
    ->middleware(['auth'])->name('banners.update');

Route::delete('/admin/banner/delete/{id}', [App\Http\Controllers\admin\BannerController::class, "destroy"])
    ->middleware(['auth'])->name('banners.destroy');



Route::get('/deploy/composer', function () {

    // Run composer install
    $output = null;
    $returnVar = null;

    // Change directory to your project
    chdir(base_path());

    // Run composer install
    exec('composer install --no-dev --optimize-autoloader 2>&1', $output, $returnVar);

    return response()->json([
        'output' => $output,
        'status' => $returnVar
    ]);
});


require __DIR__ . '/auth.php';
