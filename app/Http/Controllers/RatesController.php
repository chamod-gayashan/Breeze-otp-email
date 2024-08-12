<?php

namespace App\Http\Controllers;

use App\Models\rates;
use App\Http\Requests\StoreratesRequest;
use App\Http\Requests\UpdateratesRequest;
use App\Models\Quotation_Summary;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RatesController extends Controller
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
    public function store(StoreratesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(rates $rates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rates $rates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateratesRequest $request, rates $rates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rates $rates)
    {
        //
    }


    public function calculate(Request $request)
    {

        // $validator = Validator::make($request->all(), [
        //     'MMB1_name' => 'required|max:255',
        //     'MMB1_bday' => 'required',
        //     'cover' => '',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['message' => $validator->errors()], 422);
        // }

        $Cover = $request->input('cover');
        $deductible = $request->input('deductible');

        $totalMember = 0;
        // Member 01
        $member1_ID = 'M1';
        $member1_NM = $request->input('MMB1_name');
        $member1_BD = $request->input('MMB1_bday');
        $member1_AG = Carbon::parse($member1_BD)->age;

        // Member 02
        $member2_ID = 'S1';
        $member2_NM = $request->input('MMB2_name');
        $member2_BD = $request->input('MMB2_bday');
        $member2_AG = Carbon::parse($member2_BD)->age;

        // Member 03
        $member3_ID = 'C1';
        $member3_NM = $request->input('MMB3_name');
        $member3_BD = $request->input('MMB3_bday');
        $member3_AG = Carbon::parse($member3_BD)->age;

        // Member 04
        $member4_ID = 'C2';
        $member4_NM = $request->input('MMB4_name');
        $member4_BD = $request->input('MMB4_bday');
        $member4_AG = Carbon::parse($member4_BD)->age;

        // Member 05
        $member5_ID = 'C3';
        $member5_NM = $request->input('MMB5_name');
        $member5_BD = $request->input('MMB5_bday');
        $member5_AG = Carbon::parse($member5_BD)->age;

        // Member 06
        $member6_ID = 'C4';
        $member6_NM = $request->input('MMB6_name');
        $member6_BD = $request->input('MMB6_bday');
        $member6_AG = Carbon::parse($member6_BD)->age;

        // Member 07
        $member7_ID = 'C5';
        $member7_NM = $request->input('MMB7_name');
        $member7_BD = $request->input('MMB7_bday');
        $member7_AG = Carbon::parse($member7_BD)->age;

        $totalMember = 0;
        if ($member1_NM != "" && $member1_AG > 0 && $member1_AG < 64) {
            $totalMember = $totalMember + 1;
        }
        if ($member2_NM != "" && $member2_AG > 0 && $member2_AG > 64) {
            $totalMember = $totalMember + 1;
        }
        if ($member3_NM != "" && $member3_AG > 0 && $member3_AG < 24) {
            $totalMember = $totalMember + 1;
        }
        if ($member4_NM != "" && $member4_AG > 0 && $member4_AG < 24) {
            $totalMember = $totalMember + 1;
        }
        if ($member5_NM != "" && $member5_AG > 0 && $member5_AG < 24) {
            $totalMember = $totalMember + 1;
        }
        if ($member6_NM != "" && $member6_AG > 0 && $member6_AG < 24) {
            $totalMember = $totalMember + 1;
        }
        if ($member7_NM != "" && $member7_AG > 0 && $member7_AG < 24) {
            $totalMember = $totalMember + 1;
        }

        $FN = [];
        $FN_Z2 = [];
        if (!empty($member1_NM) && ($member1_AG > 0) && ($member1_AG < 64)) {
            $MB1 = $this->getZone1($totalMember, $deductible, $Cover, $member1_NM, $member1_AG, $member1_ID);
            $MB1_Z2 = $this->getZone2($totalMember, $deductible, $Cover, $member1_NM, $member1_AG, $member1_ID);
            $FN = Arr::add($FN, '1', $MB1);
            $FN_Z2 = Arr::add($FN_Z2, '1', $MB1_Z2);
            // $FN = Arr::add($MB1);
        }
        if (!empty($member2_NM) && ($member2_AG > 0) && ($member1_AG < 64)) {
            $MB2 = $this->getZone1($totalMember, $deductible, $Cover, $member2_NM, $member2_AG, $member2_ID);
            $MB2_Z2 = $this->getZone2($totalMember, $deductible, $Cover, $member2_NM, $member2_AG, $member2_ID);
            $FN = Arr::add($FN, '2', $MB2);
            $FN_Z2 = Arr::add($FN_Z2, '2', $MB2_Z2);
        }
        if (!empty($member3_NM) && ($member3_AG > 0) && ($member1_AG < 24)) {
            $MB3 = $this->getZone1($totalMember, $deductible, $Cover, $member3_NM, $member3_AG, $member3_ID);
            $MB3_Z2 = $this->getZone2($totalMember, $deductible, $Cover, $member3_NM, $member3_AG, $member3_ID);
            $FN = Arr::add($FN, '3', $MB3);
            $FN_Z2 = Arr::add($FN_Z2, '3', $MB3_Z2);
        }
        if (!empty($member4_NM) && ($member4_AG > 0) && ($member1_AG < 24)) {
            $MB4 = $this->getZone1($totalMember, $deductible, $Cover, $member4_NM, $member4_AG, $member4_ID);
            $MB4_Z2 = $this->getZone2($totalMember, $deductible, $Cover, $member4_NM, $member4_AG, $member4_ID);
            $FN = Arr::add($FN, '4', $MB4);
            $FN_Z2 = Arr::add($FN_Z2, '4', $MB4_Z2);
        }
        if (!empty($member5_NM) && ($member5_AG > 0) && ($member1_AG < 24)) {
            $MB5 = $this->getZone1($totalMember, $deductible, $Cover, $member5_NM, $member5_AG, $member5_ID);
            $MB5_Z2 = $this->getZone2($totalMember, $deductible, $Cover, $member5_NM, $member5_AG, $member5_ID);
            $FN = Arr::add($FN, '5', $MB5);
            $FN_Z2 = Arr::add($FN_Z2, '5', $MB5_Z2);
        }
        if (!empty($member6_NM) && ($member6_AG > 0) && ($member1_AG < 24)) {
            $MB6 = $this->getZone1($totalMember, $deductible, $Cover, $member6_NM, $member6_AG, $member6_ID);
            $MB6_Z2 = $this->getZone2($totalMember, $deductible, $Cover, $member6_NM, $member6_AG, $member6_ID);
            $FN = Arr::add($FN, '6', $MB6);
            $FN_Z2 = Arr::add($FN_Z2, '6', $MB6_Z2);
        }
        if (!empty($member7_NM) && ($member7_AG > 0) && ($member1_AG < 24)) {
            $MB7 = $this->getZone1($totalMember, $deductible, $Cover, $member7_NM, $member7_AG, $member7_ID);
            $MB7_Z2 = $this->getZone2($totalMember, $deductible, $Cover, $member7_NM, $member7_AG, $member7_ID);
            $FN = Arr::add($FN, '7', $MB7);
            $FN_Z2 = Arr::add($FN_Z2, '7', $MB7_Z2);
        }

        $qt = new QuotationController;
        $quoteId = $qt->store($FN, $FN_Z2);

        $zone1 = $FN;
        $zone2 = $FN_Z2;
        $deductible_FN = $this->deductible($deductible);

        $QTDetails = ['insuredNM' => $member1_NM, 'Diductable' => $deductible_FN, 'Diductable_amount' => $deductible, 'quoteId' => $quoteId, 'Cover' => $Cover];

        $user = auth()->user();
        $date = Carbon::now()->format('Y-m-d');

        $pdf = App::make('dompdf.wrapper');
        $pdf = Pdf::loadView('pdf.create.pdf-generator', compact('zone1', 'zone2', 'QTDetails', 'user'))->setPaper('a4', 'portrait');

        $content = $pdf->download()->getOriginalContent();
        Storage::disk('local')->put("public/pdf/$quoteId.pdf", $content);
        $userId = Auth::id();


        $affected = DB::table('quotations')
            ->where('quotation_number', $quoteId)
            ->update(['file' => "pdf/$quoteId.pdf"]);


        return $pdf->stream($quoteId . ".pdf");

        // return redirect('generatePDF')->with('zone1', $FN)->with('zone2', $FN_Z2)->with('qtID', $quoteId);
    }

    private function getZone1($totalMember, $deductible, $Cover, $member_NM, $member_AG, $member_ID)
    {


        $rates = rates::where('zone', '1')
            ->where('cover', $Cover)
            ->where('age', $member_AG)
            ->first(['Plan1', 'Plan2', 'Plan3', 'Plan4']);
        if ($rates) {
            $plan1 = $rates->Plan1;
            $plan2 = $rates->Plan2;
            $plan3 = $rates->Plan3;
            $plan4 = $rates->Plan4;
        }

        $plan_1 = $this->calculate_final($plan1, $totalMember, $deductible, $member_AG, $Cover);
        $plan_2 = $this->calculate_final($plan2, $totalMember, $deductible, $member_AG, $Cover);
        $plan_3 = $this->calculate_final($plan3, $totalMember, $deductible, $member_AG, $Cover);
        $plan_4 = $this->calculate_final($plan4, $totalMember, $deductible, $member_AG, $Cover);


        $zone1 = ['NM' => $member_NM, 'AG' => $member_AG, 'PL1' => $plan_1, 'PL2' => $plan_2, 'PL3' => $plan_3, 'PL4' => $plan_4, 'ID' => $member_ID];
        return $zone1;
    }

    private function getZone2($totalMember, $deductible, $Cover, $member_NM, $member_AG, $member_ID)
    {


        $rates = rates::where('zone', '2')
            ->where('cover', $Cover)
            ->where('age', $member_AG)
            ->first(['Plan1', 'Plan2', 'Plan3', 'Plan4']);

        if ($rates) {
            $plan1 = $rates->Plan1;
            $plan2 = $rates->Plan2;
            $plan3 = $rates->Plan3;
            $plan4 = $rates->Plan4;
        }

        $plan_1 = (float) $this->calculate_final($plan1, $totalMember, $deductible, $member_AG, $Cover);
        $plan_2 = (float) $this->calculate_final($plan2, $totalMember, $deductible, $member_AG, $Cover);
        $plan_3 = (float) $this->calculate_final($plan3, $totalMember, $deductible, $member_AG, $Cover);
        $plan_4 = (float) $this->calculate_final($plan4, $totalMember, $deductible, $member_AG, $Cover);


        $zone1 = ['NM' => $member_NM, 'AG' => $member_AG, 'PL1' => $plan_1, 'PL2' => $plan_2, 'PL3' => $plan_3, 'PL4' => $plan_4, 'ID' => $member_ID];
        return $zone1;
    }

    private function calculate_final($planAmount, $totMembers, $deductible_id, $member_AG, $Cover)
    {
        $amount = 0;

        $individual_disc = (float) $this->individual($totMembers);
        $diductable = (float) $this->deductible($deductible_id);
        $admin_Fee = (float) $this->getAdminFee();
        $loading = (float) $this->get_loading();
        $scc = (float) $this->get_ssc();
        $vat = (float) $this->get_vat();

        // $individual_disc_rt = (100.0 - $individual_disc);


        if ($member_AG >= 64) {
            return 0;
        } else if ($member_AG > 59) {
            $individual_disc = 0;
            $diductable = 0;
        }

        $individual_a = $planAmount * ((100.0 - $individual_disc) / 100.0);
        $diductable_a = $individual_a * ((100 - $diductable) / 100);
        $admin_Fee_a = $diductable_a * $admin_Fee;
        $loading_a = $admin_Fee_a + $loading;
        $scc_a = $loading_a * $scc;
        $vat_a = $scc_a * $vat;
        if ($planAmount == 0 && $Cover == 3) {
            return 0;
        } else {
            return $vat_a;
        }
    }

    private function get_loading()
    {
        return 10;
    }

    private function getAdminFee()
    {
        return 1.003;
    }

    private function get_ssc()
    {
        return 1.0256;
    }

    private function get_vat()
    {
        return 1.18;
    }

    private function deductible($id)
    {
        if ($id == '0') {
            return 0;
        } else if ($id == '500') {
            return 10;
        } else if ($id == '750') {
            return 12.5;
        } else if ($id == '1000') {
            return 15;
        } else if ($id == '2000') {
            return 20;
        } else if ($id == '2500') {
            return 22.5;
        } else {
            return 0;
        }
    }

    private function individual($totMembers)
    {
        if ($totMembers == 1) {
            return 5;
        } else if ($totMembers == 2) {
            return 8;
        } else if ($totMembers == 3) {
            return 15;
        } else if ($totMembers == 4) {
            return 15;
        } else if ($totMembers == 5) {
            return 15;
        } else if ($totMembers == 6) {
            return 15;
        } else if ($totMembers == 7) {
            return 15;
        } else {
            return 0;
        }
    }
}
