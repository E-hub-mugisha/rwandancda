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
            'family_history' => 'boolean',
            'physical_activity' => 'boolean',
            'smoking' => 'boolean',
            'hypertension' => 'boolean',
            'high_cholesterol' => 'boolean',
        ]);

        // Calculate BMI based on weight and height from the form
        $bmi = $this->calculateBMI($validated['weight'], $validated['height']);

        // Calculate the risk score, incorporating BMI
        $riskScore = $this->calculateRiskScore($validated, $bmi);

        // Save the assessment with the calculated risk score
        $assessment = Assessment::create([
            ...$validated,
            'bmi' => $bmi,
            'risk_score' => $riskScore,
        ]);

        return redirect()->route('assessments.show', $assessment->id)
                         ->with('success', 'Assessment completed successfully.');
    }

    /**
     * Display the assessment result.
     *
     * @param  \App\Models\Assessment  $assessment
     * @return \Illuminate\View\View
     */
    public function show(Assessment $assessment)
    {
        $engagements = Engagement::all();
        return view('assessment.result', compact('assessment', 'engagements'));
    }

    /**
     * Calculate BMI based on weight and height.
     *
     * @param  float  $weight
     * @param  float  $height
     * @return float
     */
    private function calculateBMI($weight, $height)
    {
        // Convert height from cm to meters
        $heightInMeters = $height / 100;
        return round($weight / ($heightInMeters * $heightInMeters), 1);
    }

    /**
     * Calculate the risk score based on health factors and BMI.
     *
     * @param  array  $validated
     * @param  float  $bmi
     * @return int
     */
    private function calculateRiskScore($validated, $bmi)
    {
        $riskScore = 0;

        // Age factor
        if ($validated['age'] > 45) {
            $riskScore += 5;
        }

        // BMI factor (increase risk if BMI is above 25)
        if ($bmi >= 25 && $bmi < 30) {
            $riskScore += 3; // Overweight
        } elseif ($bmi >= 30) {
            $riskScore += 5; // Obese
        }

        // Health factors
        if ($validated['family_history']) {
            $riskScore += 4;
        }

        if ($validated['hypertension']) {
            $riskScore += 3;
        }

        if ($validated['smoking']) {
            $riskScore += 2;
        }

        if ($validated['high_cholesterol']) {
            $riskScore += 3;
        }

        // Physical activity (lower risk if active)
        if ($validated['physical_activity']) {
            $riskScore -= 2;
        }

        return $riskScore;
    }
}
