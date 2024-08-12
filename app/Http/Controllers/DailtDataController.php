<?php

namespace App\Http\Controllers;

use App\Models\dailtData;
use App\Models\monthlyPlan;
use App\Http\Requests\StoredailtDataRequest;
use App\Http\Requests\UpdatedailtDataRequest;
use Illuminate\Http\Request;

class DailtDataController extends Controller
{
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
    public function store(StoredailtDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dailtData $dailtData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dailtData $dailtData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedailtDataRequest $request, dailtData $dailtData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dailtData $dailtData)
    {
        //
    }


    public function getDataBetweenDates(Request $request)
    {
        $startDate = $request->input('from');
        $endDate = $request->input('to'); 
        $ftype = $request->input('ftype'); 

        // Convert the data to a JSON array
        // $jsonData = json_encode($data);
        //CL =  CORPORATE LINES 
        //PL =  PERSONAL LINES 
        //TL = THIRD PARTY ONLY LINES
        //PL = PLAN
        //AC = ACTUAL
        //NW = NEW
        //RW = RENEWAL
        //BTH = BOTH

        if($ftype =='1'){
            $startDate = date('Y-01-01', strtotime($endDate));
        }else if($ftype == '2'){
            // $month = date('m', strtotime($endDate));
            $startDate = date('Y-m-01', strtotime($endDate));
        }else if($ftype == '3'){
            $firstDayOfWeekTimestamp = strtotime('last sunday', strtotime($endDate));
            // If the given date is a Sunday, it will return the same date, not the previous Sunday
            // To account for this, check if the given date is not a Sunday, then get the previous Sunday
            if (date('l', strtotime($endDate)) != 'Sunday') {
                $firstDayOfWeekTimestamp = strtotime('-1 week', $firstDayOfWeekTimestamp);
            }
            $startDate = date('Y-m-d', $firstDayOfWeekTimestamp);
        }

        //Chart 01 - GWP YTD Cumulative
        $sumGwpNew = dailtData::whereBetween('gwpDate', [$startDate, $endDate])
                              ->sum('gwpNew');

        $sumGwpRenewal = dailtData::whereBetween('gwpDate', [$startDate, $endDate])
                                  ->sum('GWPRenewal');

        //Chart 02 - CORPORATE
        $month = date('m', strtotime($endDate));
        $CL_BTH_PL = monthlyPlan::whereBetween('gwpDate', [$startDate, $endDate])
                                ->where('lineID', '1')
                                ->sum(monthlyPlan::raw('gwpNew + GWPRenewal'));
        
        $CL_BTH_AC = dailtData::whereBetween('gwpDate', [$startDate, $endDate])
                            ->where('lineID','1')
                            ->sum(dailtData::raw('gwpNew + GWPRenewal'));

        //Chart 03 - THIRD PARTY
        $PL_BTH_PL = monthlyPlan::whereBetween('gwpDate', [$startDate, $endDate])
                                ->where('lineID', '1')
                                ->sum(monthlyPlan::raw('gwpNew + GWPRenewal'));
        // $PL_PL = dailtData::whereBetween('gwpDate', [$startDate, $endDate])
        //                     ->where('lineID','1')
        //                     ->sum('GWPRenewal');
        $PL_NW = dailtData::whereBetween('gwpDate', [$startDate, $endDate])
                            ->where('lineID','10')
                            ->sum('gwpNew');
        $PL_RW = dailtData::whereBetween('gwpDate', [$startDate, $endDate])
                            ->where('lineID','10')
                            ->sum('GWPRenewal');
        $PL_AC = $PL_NW + $PL_RW;

        //Chart 04 - PERSONAL
        $TL_PL = 100000;
        // $PL_PL = dailtData::whereBetween('gwpDate', [$startDate, $endDate])
        //                     ->where('lineID','1')
        //                     ->sum('GWPRenewal');
        $TL_NW = dailtData::whereBetween('gwpDate', [$startDate, $endDate])
                            ->where('lineID','11')
                            ->sum('gwpNew');
        $TL_RW = dailtData::whereBetween('gwpDate', [$startDate, $endDate])
                            ->where('lineID','11')
                            ->sum('GWPRenewal');
        $TL_AC = $TL_NW + $TL_RW;


        //Chart 05 - New & Renewal GWP Mix
        $NW_PL = "100000";
        // $NW_PL =  monthplan::whereBetween('gwpDate', [$startDate, $endDate])
        //                     ->whereIn('lineID','11')
        //                     ->sum('gwpNew');
        $NW_AC = dailtData::whereBetween('gwpDate', [$startDate, $endDate])
                            ->whereIn('lineID',[1, 10, 11])
                            ->sum('gwpNew');
        //Chart 06 - New & Renewal GWP Mix
        $RW_PL = '100000';
        // $NW_PL = dailtData::whereBetween('gwpDate', [$startDate, $endDate])
        //                     ->where('lineID','11')
        //                     ->sum('gwpNew');
        $RW_AC = dailtData::whereBetween('gwpDate', [$startDate, $endDate])
                            ->where('lineID',[1, 10, 11])
                            ->sum('GWPRenewal');

        


        $barData = [$sumGwpNew,$sumGwpRenewal];
        $donutData_1 = [(int)$CL_BTH_PL,(int)$CL_BTH_AC];
        $donutData_2 = [$PL_PL,$PL_AC];
        $donutData_3 = [$TL_PL,$TL_AC];
        $pie1 = [(int)$NW_PL,(int)$NW_AC];
        $pie2 = [(int)$RW_PL,(int)$RW_AC];

        return response()->json([
            'bar' => $barData,
            'donutData_1' => $donutData_1,
            'donutData_2' => $donutData_2,
            'donutData_3' => $donutData_3,
            'pie1' => $pie1,
            'pie2' => $pie2,
            'pie2' => $pie2
        ]);
    }
}
