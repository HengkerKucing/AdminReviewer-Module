<?php

namespace App\Http\Controllers;

use App\Models\PlottingReviewer;
use App\Models\Dosen;
use App\Models\Usulan;
use Illuminate\Http\Request;

class PlottingReviewerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('permission:update_menu')->only('edit', 'update');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $plotting_reviewer = Usulan::with("skema",'tahapreview.status','usulananggotamhs.mahasiswa')->get();
        return view('plotting_reviewer.index', compact("plotting_reviewer"));
    }

    public function show($id)
    {
        $show_plotting_reviewer = Usulan::with("skema",'tahapreview.status','usulananggotamhs.mahasiswa','plottingreviewer')
        ->where("usulan_id", "=", $id)->get();
        
        $dosen = Dosen::all();
        
        $existingReviewers = [
            'reviewer_1' => [],
            'reviewer_2' => []
        ];
        
        // Define the stages
        $stages = [
            'Review Tahap Proposal' => 1,
            'Review Tahap Laporan Kemajuan' => 2,
            'Review Tahap Laporan Akhir' => 3
        ];
        
        // Populate existing reviewers arrays
        foreach ($show_plotting_reviewer[0]->plottingreviewer as $reviewer) {
            $stageName = array_search($reviewer->tahap_review_id, $stages);
            if ($stageName !== false) {
                if ($reviewer->reviewer_urutan == 1) {
                    $existingReviewers['reviewer_1'][$stageName] = $reviewer->dosen_id;
                } elseif ($reviewer->reviewer_urutan == 2) {
                    $existingReviewers['reviewer_2'][$stageName] = $reviewer->dosen_id;
                }
            }
        }
        return view('plotting_reviewer.show', compact("show_plotting_reviewer", "dosen", 'existingReviewers'));         
        }

        public function update(Request $request, $id)
        {
            try {
                $request->validate([
                    'reviewer_1' => 'nullable|array',
                    'reviewer_1.*.*' => 'required', // Validation for reviewer_1
                    'reviewer_2' => 'nullable|array',
                    'reviewer_2.*.*' => 'required', // Validation for reviewer_2
                ]);
            
                $reviewer1Data = $request->input('reviewer_1', []); // Default to an empty array if not present
                $reviewer2Data = $request->input('reviewer_2', []); // Default to an empty array if not present

                $stages = [
                    'Review Tahap Proposal' => 1,
                    'Review Tahap Laporan Kemajuan' => 2,
                    'Review Tahap Laporan Akhir' => 3
                ];
            
                if (!empty($reviewer1Data)) {
                    foreach ($reviewer1Data as $index => $reviewer) {
                        foreach ($reviewer as $stage => $dosenId) {
                            PlottingReviewer::updateOrCreate(
                                [
                                    'tahap_review_id' => $stages[$stage],
                                    'usulan_id' => $id,
                                    'reviewer_urutan' => 1,
                                ],
                                [
                                    'dosen_id' => $dosenId,
                                    'reviewer_komentar' => null
                                ]
                            );
                        }
                    }
                }
                if (!empty($reviewer2Data)) {
                    foreach ($reviewer2Data as $index => $reviewer) {
                        foreach ($reviewer as $stage => $dosenId) {
                            PlottingReviewer::updateOrCreate(
                                [
                                    'tahap_review_id' => $stages[$stage],
                                    'usulan_id' => $id,
                                    'reviewer_urutan' => 2,
                                ],
                                [
                                    'dosen_id' => $dosenId,
                                    'reviewer_komentar' => null
                                ]
                            );
                        }
                    }
                }
            
                PlottingReviewer::where('usulan_id', $id)
                    ->whereNotIn('tahap_review_id', array_values($stages))
                    ->delete();
            
                toastr()->success('Plotting berhasil disimpan');
                return redirect()->route('plotting-reviewer.show', ['plotting_reviewer' => $id]);
            } catch (\Throwable $th) {
                toastr()->warning('Terdapat masalah di server');
                return redirect()->route('plotting-reviewer.show', ['plotting_reviewer' => $id]);
            }        
        }
}
