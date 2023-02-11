<?php

    namespace App\Http\Controllers;

    use App\Models\Funds;
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

        public function about_usUs(){
            $dataFeed = new DataFeed();
            $Data=\App\Models\AboutUs::all()->first();
            $imageurl='storage/'.$Data->image_path;
            return view('user/about_us', compact('dataFeed','Data','imageurl'));
        }

        public function view_funds(){
            $Funds=Funds::where('status','approved')->get();
            //dd($Fund);
            $totalOP_req=0;
            $totalOP_res=0;
            $totalMed_req=0;
            $totalMed_res=0;
            $totalMeq_req=0;
            $totalMeq_res=0;
            $totalOt_req=0;
            $totalOt_res=0;
            foreach ($Funds as $Fund){
                if ($Fund->type=='Operation'){
                    $totalOP_req+=$Fund->amount;
                }elseif ($Fund->type='Medical_Equipment'){
                    $totalMeq_req+=$Fund->amount;
                }elseif ($Fund->type='Medicine'){
                    $totalMed_req+=$Fund->amount;
                }elseif ($Fund->type='Other'){
                    $totalOt_req+=$Fund->amount;
                }
                //$total_req=+$Fund->amount;
            }
            //dd($total_req);

            $dataFeed = new DataFeed();
            return view('admin/view_funds', compact('dataFeed','totalOP_req','totalOP_res',
                'totalMed_req','totalMed_res','totalMeq_req','totalMeq_res','totalOt_req','totalOt_res'));
            //->with('total_req',$total_req)->with('total_res',$total_res)
        }
    }
