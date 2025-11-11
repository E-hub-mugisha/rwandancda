<?php

namespace App\Http\Controllers;

use App\Engagement;
use App\Models\Assessment;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    /**
     * Show the form to create a new assessment.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $engagements = Engagement::all();
        return view('assessment.form', compact('engagements'));
    }

    /**
     * Store the assessment and calculate the risk score.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'age' => 'required|integer|min:1',
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:50',
            'family_history' => 'required|boolean',
            'physical_activity' => 'required|boolean',
            'smoking' => 'required|boolean',
            'hypertension' => 'required|boolean',
            'high_cholesterol' => 'required|boolean',
        ]);

        // Calculate BMI
        $heightInMeters = $validated['height'] / 100;
        $bmi = round($validated['weight'] / ($heightInMeters * $heightInMeters), 1);

        // Calculate risk score
        $riskScore = 0;
        if ($validated['age'] > 45) $riskScore += 5;
        if ($bmi >= 25 && $bmi < 30) $riskScore += 3;
        if ($bmi >= 30) $riskScore += 5;
        if ($validated['family_history']) $riskScore += 4;
        if ($validated['hypertension']) $riskScore += 3;
        if ($validated['smoking']) $riskScore += 2;
        if ($validated['high_cholesterol']) $riskScore += 3;
        if ($validated['physical_activity']) $riskScore -= 2;

        // Save Assessment
        $assessment = Assessment::create([
            ...$validated,
            'bmi' => $bmi,
            'risk_score' => $riskScore,
        ]);

        return redirect()->route('assessments.show', $assessment->id)
                         ->with('success', 'Assessment completed successfully.');
    }

    public function show(Assessment $assessment)
    {
        $engagements = Engagement::all();
        return view('assessment.result', compact('assessment', 'engagements'));
    }
}
