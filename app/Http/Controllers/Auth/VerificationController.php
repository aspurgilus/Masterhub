<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Auth\Access\AuthorizationException;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/email/verifysuccess';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

	public function show(Request $request)
	{
//		session()->flash('status','Перейдите по ссылке для подтверждения вашего Email');
		return $request->user()->hasVerifiedEmail()
			? redirect($this->redirectPath())
			: view('auth.verify');
	}

	public function resend(Request $request)
	{
		if ($request->user()->hasVerifiedEmail()) {
			session()->flash('status','Ваш Email уже подтвержден');
			return redirect($this->redirectPath());
		}

		$request->user()->sendEmailVerificationNotification();
		session()->flash('status','Письмо подтверждения Email было выслано повторно');

		return back()->with('resent', true);
	}

	public function verify(Request $request)
	{


		if ($request->route('id') != $request->user()->getKey()) {
			throw new AuthorizationException;
		}

		if ($request->user()->hasVerifiedEmail()) {
			session()->flash('info','Ваш Email уже подтвержден');
			return redirect($this->redirectPath());
		}

		if ($request->user()->markEmailAsVerified()) {
			event(new Verified($request->user()));
		}

		return redirect($this->redirectPath())->with('verified', true);
	}

	public function redirectPath()
	{
		if (method_exists($this, 'redirectTo')) {
			return $this->redirectTo();
		}

		return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
	}
}
