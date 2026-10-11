<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
Route::middleware('guest')->group(function(){
 Route::get('/register',fn()=>view('auth.register'))->name('register');
 Route::post('/register',function(Request $request){$data=$request->validate(['name'=>'required|string|max:255','email'=>'required|string|lowercase|email|max:255|unique:'.User::class,'password'=>['required','confirmed',Rules\Password::defaults()]]);$data['role']='user';$user=User::create($data);event(new Registered($user));Auth::login($user);return redirect()->route('dashboard');});
 Route::get('/login',fn()=>view('auth.login'))->name('login');
 Route::post('/login',function(Request $request){$credentials=$request->validate(['email'=>'required|email','password'=>'required|string']);if(!Auth::attempt($credentials,$request->boolean('remember'))){return back()->withErrors(['email'=>'Email atau password salah.'])->onlyInput('email');}$request->session()->regenerate();return redirect()->intended(route('dashboard'));});
});
Route::post('/logout',function(Request $request){Auth::logout();$request->session()->invalidate();$request->session()->regenerateToken();return redirect('/');})->middleware('auth')->name('logout');
Route::middleware('auth')->group(function(){Route::get('/profile',[ProfileController::class,'edit'])->name('profile.edit');Route::patch('/profile',[ProfileController::class,'update'])->name('profile.update');Route::delete('/profile',[ProfileController::class,'destroy'])->name('profile.destroy');});
