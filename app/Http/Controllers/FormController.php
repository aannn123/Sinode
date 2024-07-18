<?php

namespace App\Http\Controllers;

// use App\Exports\UsersExport;
use App\Models\Church;
// use App\Models\Gereja;
use App\Models\Registrants;
use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;
// use Box\Spout\Writer\Style\StyleBuilder;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.form.index');
    }

    public function exportSuccess()
    {
        // $data = DB::select('SELECT fullname as Nama_lengkap, gender as Jenis_kelamin, age as Umur,  address as Alamat , region as Wilayah, phone_number as Nomor_telepon, church_name as Tempat_ibadah FROM t_registrants');
        // return (new FastExcel($data))->download('file.csv');
        $date = \Carbon\Carbon::createFromTimestamp(strtotime(date('Y-m-d')))->isoFormat('dddd-D-MMMM-Y');
        return (new FastExcel(Registrants::where('status','Success')->get()))->download('Data-Survey-Berhasil-'.$date.'.xlsx', function ($user) {
            return [
                'Nama Lengkap' => $user->fullname,
                'Jenis Kelamin' => $user->gender,
                'Umur' => $user->age. ' Tahun',
                'Nomor Telepon' => $user->phone_number,
                'Alamat' => $user->address,
                'Tempat Ibadah' => $user->church_name,
                'Wilayah' => $user->region,
            ];
        });
    }

    public function exportFailed()
    {
        // $data = DB::select('SELECT fullname as Nama_lengkap, gender as Jenis_kelamin, age as Umur,  address as Alamat , region as Wilayah, phone_number as Nomor_telepon, church_name as Tempat_ibadah FROM t_registrants');
        // return (new FastExcel($data))->download('file.csv');
        $date = \Carbon\Carbon::createFromTimestamp(strtotime(date('Y-m-d')))->isoFormat('dddd-D-MMMM-Y');
        return (new FastExcel(Registrants::where('status','Failed')->get()))->download('Data-Survey-Gagal-'.$date.'.xlsx', function ($user) {
            return [
                'Nama Lengkap' => $user->fullname,
                'Jenis Kelamin' => $user->gender,
                'Umur' => $user->age. ' Tahun',
                'Nomor Telepon' => $user->phone_number,
                'Alamat' => $user->address,
                'Tempat Ibadah' => $user->church_name,
                'Wilayah' => $user->region,
            ];
        });
    }

    public function exportAll()
    {

        // $style = (new StyleBuilder())
        // ->setFontBold()
        // ->setBackgroundColor('black')
        // ->build();

        $date = \Carbon\Carbon::createFromTimestamp(strtotime(date('Y-m-d')))->isoFormat('dddd-D-MMMM-Y');
        return (new FastExcel(Registrants::all()))->download('Data-Survey-Semua-'.$date.'.xlsx', function ($user) {
            return [
                'Nama Lengkap' => $user->fullname,
                'Jenis Kelamin' => $user->gender,
                'Umur' => $user->age. ' Tahun',
                'Nomor Telepon' => $user->phone_number,
                'Alamat' => $user->address,
                'Tempat Ibadah' => $user->church_name,
                'Wilayah' => $user->region,
            ];
        });
    }

    public function memenuhiSyarat(Request $request)
    {
        $from = $request->query('from');
        $to = $request->query('to');
        $dataGereja = Church::all();
        $gereja = $request->query('gereja');

        if ($gereja && $from && $to) {
            $items = Registrants::whereBetween('created_at', [$from, $to])->where('church_id', $gereja)->where('status', 'Success')->paginate(25);
        } elseif ($gereja) {
            $items = Registrants::where('church_id', $gereja)->where('status', 'Success')->paginate(25);
        } elseif ($from && $to) {
            $items = Registrants::whereBetween('created_at', [$from, $to])->where('status', 'Success')->paginate(25);
        } else {
            $items = Registrants::where('status', 'Success')->paginate(25);
            // var_dump($items);die();
        }
        return view('pages.form.memenuhiSyarat')->with([
            'items' => $items,
            'gereja' => $dataGereja
        ]);
    }

    public function tidakMemenuhiSyarat(Request $request)
    {
        $from = $request->query('from');
        $to = $request->query('to');
        $dataGereja = Church::all();
        $gereja = $request->query('gereja');

        if ($gereja && $from && $to) {
            $items = Registrants::whereBetween('created_at', [$from, $to])->where('church_id', $gereja)->where('status', 'Failed')->paginate(25);
        } elseif ($gereja) {
            $items = Registrants::where('church_id', $gereja)->where('status', 'Failed')->paginate(25);
        } elseif ($from && $to) {
            $items = Registrants::whereBetween('created_at', [$from, $to])->where('status', 'Failed')->paginate(25);
        } else {
            $items = Registrants::where('status', 'Failed')->paginate(25);
            // var_dump($items);die();
        }
        return view('pages.form.tidakMemenuhiSyarat')->with([
            'items' => $items,
            'gereja' => $dataGereja
        ]);
    }

    public function listMemenuhiSyarat()
    {
        return view('pages.form.listMemenuhiSyarat');
    }

    public function listTidakMemenuhiSyarat()
    {
        return view('pages.form.listTidakMemenuhiSyarat');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    // MEMENUHI SYARAT
    function exportCsv1(Request $request)
    {
        $fileName = 'memenuhi_syarat.csv';
        $tasks = Registrants::where('status', 'Success')->get();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Title', 'Assign', 'Description', 'Start Date', 'Due Date');

        $callback = function () use ($tasks, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($tasks as $task) {
                $row['Title']  = $task->title;
                $row['Assign']    = $task->assign->name;
                $row['Description']    = $task->description;
                $row['Start Date']  = $task->start_at;
                $row['Due Date']  = $task->end_at;

                fputcsv($file, array($row['Title'], $row['Assign'], $row['Description'], $row['Start Date'], $row['Due Date']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    // TIDAK MEMENUHI SYARAT
    function exportCsv2(Request $request)
    {
        $fileName = 'tidak_memenuhi_syarat.csv';
        $tasks = Registrants::where('status', 'Failed')->get();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Title', 'Assign', 'Description', 'Start Date', 'Due Date');

        $callback = function () use ($tasks, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($tasks as $task) {
                $row['Title']  = $task->title;
                $row['Assign']    = $task->assign->name;
                $row['Description']    = $task->description;
                $row['Start Date']  = $task->start_at;
                $row['Due Date']  = $task->end_at;

                fputcsv($file, array($row['Title'], $row['Assign'], $row['Description'], $row['Start Date'], $row['Due Date']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
