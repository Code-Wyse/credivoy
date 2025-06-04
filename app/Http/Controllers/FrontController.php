<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tour;
use App\Models\Hotel;
use App\Models\ContactUs;
use App\Models\Destination;
use App\Models\Testimonial;
use App\Models\VideoReview;
use Illuminate\Http\Request;
use App\Jobs\QueueContactEmailJob;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function home(){
        $toursOfFestival = Tour::getFestivalTours();
        $trandingTours = Tour::getTrandingTours();
        
        $data['hotels'] = Hotel::withCount('hotelBookings')
        ->limit(5)
        ->get();
   $data['testimonials'] = Testimonial::with('picture')->limit(10)->get();
   $data['recentBlogs'] = Blog::orderBy('created_at','desc')->limit(5)->get();
   $data['allDestinations'] = Destination::get();

        $testimonials = Testimonial::with('picture')->limit(10)->get();

        $data['festivalTours'] = $toursOfFestival;
        $data['trandingTours'] = $trandingTours;
        $data['allDestinations'] = Destination::get();
        $data['destinations'] = Destination::where(['domestic' => 1])->get();
        $data['internationalDestinations'] = Destination::where(['domestic' => 0])->get();
        $data['domesticTours'] = Tour::where(['domestic' => 1])->byRating('high')->limit(5)->get();
        $data['internationalTours'] = Tour::where(['domestic' => 0])->byRating('high')->limit(5)->get();
        $data['videoReviews'] = VideoReview::get();
        $data['recentBlogs'] = Blog::orderBy('created_at','desc')->limit(5)->get();
        $data['testimonials'] = $testimonials;
     
    
        return view('home',$data);
    }

    public function about(){
        $testimonials = Testimonial::with('picture')->limit(10)->get();
        $data['testimonials'] = $testimonials;

        return view('about-us', $data);
    }

    public function contact(){
        return view('contact-us');
    }


    public function doContact(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'phone' => 'required'
        ]);
        $data = $request->except(["_token",'first_name','last_name']);
        $data['ip_address'] = $request->ip();
        $data['type'] = $request->type ?? "contact_u";
        $data['user_agent'] = $request->userAgent();
        $data['name'] = $request->first_name.' '.$request->last_name;
        $data['no_of_days'] = $request->no_of_days;
        $data['destination_id'] = $request->destination_id;
        $contactUs = ContactUs::create($data);
        try{
            QueueContactEmailJob::dispatch($contactUs);
        }catch(\Exception $e){}
        toastr()->success('Tour Booking in process!');
        return redirect()->back();
    }
}
