<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Quotation_Summary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class QuotationController extends Controller
{
    public function index(){

        $quotations = DB::table('quotations')->get();
        return view('broker.myquotes', compact('quotations'));
    }


    public function get(){
        return view('broker.pdfView');
    }

    public function getNextOrderNumber()
    {
        // Get the last created order
        $lastOrder = Quotation::orderBy('created_at', 'desc')->first();

        if ( ! $lastOrder )
            // We get here if there is no order at all
            // If there is no number set it to 0, which will be 1 at the end.

            $number = 0;
        else
            // $number = $lastOrder->quote_id;
            $number = substr($lastOrder->quote_id, 3);

        return 'AHH' . sprintf('%04d', intval($number) + 1);
    }


    public function store($zone1,$zone2){

        // $zone2 = $request->input('zone2');
        // $zone1 = $request->input('zone1');

        $id =  Auth::id();
        $quoteId = $this->getNextOrderNumber();

        foreach ($zone1 as $key => $zone) {

            $memberId = $zone['ID'];
            $name = $zone['NM'];
            $age = $zone['AG'];
            $pl1 = $zone['PL1'];
            $pl2 = $zone['PL2'];
            $pl3 = $zone['PL3'];
            $pl4 = $zone['PL4'];

            foreach ($zone2 as $key => $zone_2) {
                $pl21 = $zone_2['PL1'];
                $pl22 = $zone_2['PL2'];
                $pl23 = $zone_2['PL3'];
                $pl24 = $zone_2['PL4'];
            }


            Quotation::create([
                'quote_id' => $quoteId,
                'member_id' => $memberId,
                'name' => $name,
                'age' => $age,
                'z1plan1' => $pl1,
                'z1plan2' => $pl2,
                'z1plan3' => $pl3,
                'z1plan4' => $pl4,
                'z2plan1' => $pl21,
                'z2plan2' => $pl22,
                'z2plan3' => $pl23,
                'z2plan4' => $pl24,
            ]);


        }

        Quotation_Summary::create([
            'quotation_number' => $quoteId,
            'name' => $zone1[1]['NM'],
            'broker_id' => $id,
        ]);

        // $pdf = App::make('dompdf.wrapper');
        // $pdf = Pdf::loadView('pdf.create.pdf-generator', compact('zone1', 'zone2'))->setPaper('a4', 'portrait');
        // $pdf->stream($quoteId.".pdf");
        // $content = $pdf->download()->getOriginalContent();
        // $time = Carbon::now();
        // Storage::put('public/pdf/'.$quoteId.'.pdf', $content);
        // // return $quoteId;
        // // return $pdf->stream();
        // // return redirect('/new')->with('status', 'PDF Generated Successfully..!');

        // $pdf = App::make('dompdf.wrapper');
        // $pdf = Pdf::loadView('pdf.create.pdf-generator', compact('zone1', 'zone2'))->setPaper('a4', 'portrait');
        // // $pdf->stream($quoteId.".pdf");
        // $content = $pdf->download()->getOriginalContent();
        // Storage::put('public/pdf/'.$quoteId.'.pdf', $content);
        return $quoteId;
    }




    public function home(){
        $quotations = DB::table('quotations')
                        ->latest('id')
                        ->take(5)
                        ->get();

        $totalQuotations = DB::table('quotations')->count();

        $ThisMonthQt = DB::table('quotations')
                                ->whereMonth('created_at', date('m'))
                                ->whereYear('created_at', date('Y'))
                                ->count();

        $lastMonthQt = DB::table('quotations')
                                ->whereMonth('created_at', date('m', strtotime('-1 month')))
                                ->whereYear('created_at', date('Y', strtotime('-1 month')))
                                ->count();

        return view('broker.index', compact('quotations', 'totalQuotations', 'ThisMonthQt', 'lastMonthQt'));
    }
    
}
