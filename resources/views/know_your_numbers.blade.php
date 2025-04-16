@extends('layouts.base')
@section('title','know your Number')
@section('content')

<style>
    .progress-bar-underweight {
        background-color: #17a2b8;
        /* Cyan */
    }

    .progress-bar-normal {
        background-color: #28a745;
        /* Green */
    }

    .progress-bar-overweight {
        background-color: #ffc107;
        /* Yellow */
    }

    .progress-bar-obesity {
        background-color: #dc3545;
        /* Red */
    }
</style>

<section>
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="row cs_gap_y_40">
            <div class="col-lg-6">
                <div class="cs_section_heading cs_style_1">
                    <p class="cs_section_subtitle cs_accent_color">BMI Calculator</p>
                    <h2 class="cs_section_title cs_fs_48 mb-0">
                        Get to know your Body Mass Index (BMI)
                    </h2>
                </div>
                <div class="cs_height_50 cs_height_lg_40"></div>
                <div class="row cs_gap_y_40">
                    <div class="col-12">
                        <div class="cs_iconbox cs_style_3 cs_type_1">
                            <div class="cs_iconbox_icon cs_center">
                                <img src="assets/img/icons/security_icon.svg" alt="Icon">
                            </div>
                            <div class="cs_iconbox_text">
                                <p class="cs_iconbox_subtitle mb-0">Body Mass Index (BMI) is a simple index of weight-for-height that is commonly used to classify underweight, overweight and obesity in adults.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="cs_iconbox cs_style_3 cs_type_1">
                            <div class="cs_iconbox_icon cs_center">
                                <img src="assets/img/icons/surgery_icon.svg" alt="Icon">
                            </div>
                            <div class="cs_iconbox_text">
                                <p class="cs_iconbox_subtitle mb-0">BMI values are age-independent and the same for both sexes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cs_appointment_form_wrapper cs_type_3 cs_radius_10">
                    <h3 class="cs_appointment_heading cs_white_color">Calculate Your BMI</h3>
                    <form class="cs_appointment_form row cs_gap_y_30" id="bmiForm">
                        <div class="col-md-12">
                            <div class="cs_form_field_wrapper cs_radius_10">
                                <input type="text" name="fitness-form-age" class="cs_form_field cs_fs_14" placeholder="Your Age">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="cs_form_field_wrapper cs_radius_10">
                                <input type="text" name="weight" class="cs_form_field cs_fs_14" id="weight" placeholder="Enter your Weight">
                                <span class="cs_input_icon position-absolute">kgs</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="cs_form_field_wrapper cs_radius_10">
                                <input type="text" name="height" class="cs_form_field cs_fs_14" id="height" placeholder="Enter your Height">
                                <span class="cs_input_icon position-absolute">CM</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_white_bg cs_radius_100">
                                <span class="cs_btn_text">Calculate</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>

<!-- Modal -->
<div class="modal fade" id="bmiModal" tabindex="-1" aria-labelledby="bmiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bmiModalLabel">BMI Result</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="bmiResult"></div>
                <div class="progress mt-3">
                    <div id="bmiProgressBar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="40"></div>
                </div>
                <p>Know how you can bring your BMI to normal, <a href="https://www.youtube.com/watch?v=l7vGq4UNDqE" class="butn-style01 border-0">click here</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById('bmiForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Get weight and height values from the form inputs
        let weight = parseFloat(document.getElementById('weight').value);
        let height = parseFloat(document.getElementById('height').value) / 100; // Convert height from cm to meters

        // Calculate BMI using the formula: BMI = weight (kg) / (height (m) * height (m))
        let bmi = (weight / (height * height)).toFixed(2); // Round to 2 decimal places

        // Determine the BMI category and progress bar color
        let category = '';
        let progressBarClass = '';
        let progressBarValue = (bmi / 40) * 100; // Normalize BMI to a 0-100 scale for the progress bar

        if (bmi < 18.5) {
            category = 'Underweight';
            progressBarClass = 'progress-bar-underweight';
        } else if (bmi >= 18.5 && bmi < 24.9) {
            category = 'Normal weight';
            progressBarClass = 'progress-bar-normal';
        } else if (bmi >= 25 && bmi < 29.9) {
            category = 'Overweight';
            progressBarClass = 'progress-bar-overweight';
        } else {
            category = 'Obesity';
            progressBarClass = 'progress-bar-obesity';
        }

        // Display result in the modal
        document.getElementById('bmiResult').innerHTML = `Your BMI is <strong>${bmi}</strong>, which falls into the <strong>${category}</strong> category.`;

        // Update the progress bar
        let progressBar = document.getElementById('bmiProgressBar');
        progressBar.className = 'progress-bar ' + progressBarClass;
        progressBar.style.width = progressBarValue + '%';
        progressBar.setAttribute('aria-valuenow', bmi);

        // Show the modal
        let bmiModal = new bootstrap.Modal(document.getElementById('bmiModal'));
        bmiModal.show();
    });
</script>

@endsection