<?php

    namespace App\Http\Controllers;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Http;
    use App\Models\DataFeed;
    use Carbon\Carbon;

    class DashboardController extends Controller
    {

        /**
         * Displays the dashboard screen
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         */
        public function index()
        {
            $dataFeed = new DataFeed();
            if (Auth::user()->hasRole('administrator')){
                return view('admin/dashboard', compact('dataFeed'));
            }elseif(Auth::user()->hasRole('patient_user')){
                return view('user/dashboard', compact('dataFeed'));
            }

            //return view('pages/dashboard/dashboard', compact('dataFeed'));
        }

        public function new_employee(){
            $dataFeed = new DataFeed();
            return view('admin/new_employee', compact('dataFeed'));
        }

        public function about_us(){
            $dataFeed = new DataFeed();
            return view('admin/about_us', compact('dataFeed'));
        }
    }
