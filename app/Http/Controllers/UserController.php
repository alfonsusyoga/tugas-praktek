<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    public function data()
    {
        return DataTables::of(User::query())->toJson();
    }


    public function index()
    {
        Alert::warning('Selamat', 'Anda masuk di route User');
        return view('user.index');
    }

    public function export_excel()
	{
		return Excel::download(new UserExport, 'user.xlsx');
	}

}
