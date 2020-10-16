<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){

//        $users = \DB::table('pages')->get();
//        $users = Page::where('id', '=', 1)->get();

//        $users = Page::orderBy('created_at', 'DESC')->get();
        $users = Page::orderBy('created_at', 'DESC')->paginate(10);

        return view('Users.all_users', [
            'users' => $users
        ]);

    }

    public function create(){

        return view('test', [
            'route' => '/pages'
        ]);

    }

    public function edit(Page $page){

        return view('test', [
            'route' => "/pages/$page->id",
            'user' => $page
        ]);

    }


    public function store(Request $request){

//        $username = request('username');
//        $password = request('password');
//
//        Page::create([
//            'username' => $username,
//            'password' => $password,
//        ]);

        $img_path = $request->file('photo') ? $request->file('photo')->store('public/slike') : '';

        $validated = $request->validate([
            'username' => ['required', 'max:15', 'min:3'],
            'password' => ['required', 'max:20', 'min:5']
        ]);

        $validated['photo'] = str_replace('public', 'storage', $img_path);

//        dd(str_replace('public', 'storage', $validated['photo']));

        Page::create($validated);

        return redirect('/pages');

    }


    public function show(Page $page){

//        dd($page);

        return view('Users.single_user', [
            'user' => $page
        ]);

    }

    public function update(Request $request, Page $page){

//        $username = request('username');
//        $password = request('password');

        $page->update($request->validate([
            'username' => ['required', 'max:15', 'min:3'],
            'password' => ['required', 'max:20', 'min:5']
        ]));

        return redirect("/pages/$page->id");

    }


    public function destroy(Page $page){

        $page->delete();

        return redirect('pages');

    }
}
