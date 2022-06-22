<?php

namespace App\Http\Controllers\Admin;

use App\Models\Auth\Role\Role;
use App\Models\Auth\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Access\User\EloquentUserRepository;
use Illuminate\Support\Facades\Hash;
use Validator;
use Session;
use DB;
use Hashids\Hashids;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    /**
     * Repository
     *
     * @var object
     */
    protected $repository;

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->repository = new EloquentUserRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $hash=new Hashids();
        $users = User::with('roles')->orderByDesc('email', 'asc')->paginate(20);
        // $users = DB::table('users')->with('roles')->orderByDesc('id')->paginate(10);
        //return view('admin.users.index', ['users' => User::with('roles')->sortable(['email' => 'asc'])->paginate()]);
        return view('admin.users.index', compact('users','hash'));
    }

    public function profileUser(){
        $id = Auth::id();
        $user_id = User::findOrFail($id);
        return view('page.sections.usuario.profile', compact('user_id'));
    }

    public function getUsers(){
        $user = User::all();
        return response()->json($user, 200);
        // return view('admin.users.index', ['users' => User::with('roles')->sortable(['email' => 'asc'])->paginate()]);
    }

    /**
     * Restore Users
     *
     * @return \Illuminate\Http\Response
     */
    public function restore(Request $request){
        return view('admin.users.restore', ['users' => User::onlyTrashed()->with('roles')->sortable(['email' => 'asc'])->paginate()]);
    }

    /**
     * Restore Users
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function restoreUser($id)
    {
        $status = $this->repository->restore($id);

        if($status)
        {
            return redirect()->route('admin.users')->withFlashSuccess('User Restored Successfully!');
        }

        return redirect()->route('admin.users')->withFlashDanger('Unable to Restore User!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $user, $id){
        $hash = new Hashids();
        $hash_id = $hash->decode($id);

        $users = User::all();
        $user = $users->find($hash_id);

        return view('admin.users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', ['user' => $user, 'roles' => Role::get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param User $user
     * @return mixed
     */
    public function update(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password'=> 'required',
            'active' => 'sometimes|boolean',
            'confirmed' => 'sometimes|boolean',
        ]);

        $user = User::find(auth()->user()->id)->update(['password'=> bcrypt($request->password)]);
       
        $validator->sometimes('password', 'min:6|confirmed', function ($input) {
            return Hash::make($input->password);
        });

        if ($validator->fails()) return redirect()->back()->withErrors($validator->errors());
        
        Session::flash('message','Perfil Actualizado Exisitosamente!');
        return back()->withInput();
    }


    public function confirmedUsuario(Request $request, $id){
        $user = User::findOrFail($id);
        $confirmed = $request->get('confirmed');

        $user->confirmed = $confirmed;
        $user->update();

        Session::flash('confirmed','Usuario Confirmado Exisitosamente!');
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $status = $this->repository->destroy($id);

        if($status){
            return redirect()->route('admin.users')->withFlashSuccess('Usuario Eliminado Satisfactoriamente =)!');
        }

        return redirect()->route('admin.users')->withFlashDanger('No se pudo eliminar al usuario seleccionado  =(!');
    }
}
