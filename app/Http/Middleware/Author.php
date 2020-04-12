<?php

namespace App\Http\Middleware;

use App\Login\UserModel;
use Closure;

class Author
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->has('user')){
            $author=session('user');

            $info=UserModel::where('tel',$author)->first()->toArray();
            $status=$info['status'];
            if($status==1){
                return $next($request);
            }else{
                return redirect('author/apply');
            }
        }else{
            return redirect('scan');
        }
    }
}
