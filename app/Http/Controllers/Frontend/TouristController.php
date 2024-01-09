<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Library\SslCommerz\SslCommerzNotification;

class TouristController extends Controller
{
    public function registration()
    {
        return view('frontend.pages.registration');
    }

    public function profile()
    {   
        // return view('frontend.pages.profile');
        
        $bookings= Booking::where('user_id',auth()->user()->id)->get();
        // dd($bookings->toarray());
        $users=User::all();
        // dd($users);
        $booking=Booking::where('status','Approved')->count();
        $Booking=Booking::where('status','pending')->count();
        return view('frontend.pages.profile.viewprofile',compact('bookings','users','booking','Booking'));
    }
    
    public function profileEdit($userId)
    {
        $users=User::find($userId);
        return view('frontend.pages.profile.profileEdit',compact('users'));
    }

    public function profileUpdate(Request $request, $userId)
    {
        $users=User::find($userId);
        // dd($request->all());

        if($users)
        {
            $fileName=$users->image;

            if($request->hasFile('image'))
            {
              $file=$request->file('image');
              $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
              $file->storeAs('/uploads',$fileName);

            }
        }
        $users->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'contactInfo'=>$request->contactInfo,
            'password'=>bcrypt($request->password),
            'image'=>$fileName,
        ]);

     notify()->success('Updated successfully.');
    return redirect()->route('profile.view');

    }


    public function store(Request $request)
    {

    // dd($request->all());
    User::Create([
        'name'=>$request->name,
        'email'=>$request->email,
        'role'=>'tourist',
        'contactInfo'=>$request->contactInfo,
        'password'=>bcrypt($request->password),
    ]);

    notify()->success('Tourist Registration successful.');
    return redirect()->route('tourist.login');
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function loginpost(Request $request)
    {
        $val=Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required|min:6'
        ]);
        if($val->fails())
        {
            notify()->error($val->getMessageBag());
            return redirect()->back();
        }

        $credentials=$request->except('_token');
        // dd($credentials);

        if(auth()->attempt($credentials))
        {
            notify()->success('Login Successfull');
            return redirect()->route('frontend.home');
        }
        
        notify()->error('Invalid Credentials.');
            return redirect()->back();
    }

    public function makePayment($id)
    {
        
        $booking=Booking::find($id);
        $this->payment($booking);
        return redirect()->route('profile.view');
    }


    public function payment($payment)
    {
        //dd($payment);
        $post_data = array();
        $post_data['total_amount'] = (int)$payment->amount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $payment->transanction_id; // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] =$payment->user_id ;
        $post_data['cus_email'] = 'customer@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";
        //dd($post_data);
        #Before  going to initiate the payment order status need to insert or update as Pending.
       

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }
    

    public function logout()
    {
        auth()->logout();
        notify()->success('Logout Successful');    
        return redirect()->route('frontend.home');
    }

}

