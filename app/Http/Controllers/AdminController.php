<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Artiste;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin_dashboard()
    {
        $admins = Admin::all();
        $users = User::all();
        //dd($admins[0]->user);
        //$users = DB::select('SELECT * FROM users MINUS (SELECT u.* FROM users u, admins a WHERE a.user_id=u.id UNION SELECT u.* FROM users u,artistes t WHERE t.user_id=u.id)');
        $artistes = Artiste::all();
        return view('admin/admin_dashboard', compact('users', 'artistes', 'admins'));
    }

    public function admin_gestion_users()
    {
        $users = User::all();
        return view('admin/gestion_users', compact('users'));
    }

    public function admin_gestion_artistes()
    {
        $artistes = Artiste::all();
        return view('admin/gestion_artistes', compact('artistes'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * desactive or active the specified resource from storage.
     */
    public function desactiverActiver(Request $req)
    {
        $id= $req->id;
        $user = User::find($id);
        $admin= Admin::where('user_id', $id)->get();

        // vérifier afin qu'un admin ne soit désactivé
        if(count($admin)==0){
            if ($user->status == 1) {
                $user->status = 0;
            } else $user->status = 1;
            $user->save();
        }
        else{
            $notification = "Erreur lors de cette action";
            return redirect()->back();
        } 
       
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
