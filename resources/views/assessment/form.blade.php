@extends('layouts.base')
@section('title','Diabetes Risk Assessment')
@section('content')

<!-- Start Service Section -->
<section class="cs_service_area cs_type_3">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Get To Know</p>
                <h2 class="cs_section_title cs_accent_color mb-0">Our Mission, Vision &amp; <br> Objectives</h2>
            </div>
            <div class="cs_section_heading_right cs_accent_color text-end">the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized</div>
        </div>
        <div class="cs_height_100 cs_height_lg_40"></div>
        <div class="container">
            <div class="row cs_gap_y_40">
                <form class="cs_appointment_form row cs_gap_y_30" id="diabetesAssessmentForm" method="POST" action="{{ route('assessments.store') }}" onsubmit="return checkSubmit()">
                    @csrf
                    <div class="col-lg-10">
                        <div class="cs_appointment_form_wrapper cs_type_3 cs_radius_10">
                            <h4 class="cs_white_color">Personal Information</h4>
                            <div class="row justify-item-center">
                                <div class="col-md-4 mb-3">
                                    <div class="cs_form_field_wrapper cs_radius_10">
                                        <input type="text" name="fitness-form-age" class="cs_form_field cs_fs_14" placeholder="Your Age">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="cs_form_field_wrapper cs_radius_10">
                                        <input type="text" name="weight" class="cs_form_field cs_fs_14" id="weight" placeholder="Enter your Weight">
                                        <span class="cs_input_icon position-absolute">kgs</span>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="cs_form_field_wrapper cs_radius_10">
                                        <input type="text" name="height" class="cs_form_field cs_fs_14" id="height" placeholder="Enter your Height">
                                        <span class="cs_input_icon position-absolute">CM</span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="family_history" class="form-label cs_white_color">Family History of Diabetes</label>
                                    <div class="cs_form_field_wrapper cs_radius_10">
                                        <select class="cs_form_field cs_fs_14" id="family_history" name="family_history" required>
                                            <option value="1" {{ old('family_history') == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ old('family_history') == 0 ? 'selected' : '' }}>No</option>
                                        </select>
                                        @error('family_history')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="physical_activity" class="form-label cs_white_color">Do you engage in physical activity?</label>
                                    <div class="cs_form_field_wrapper cs_radius_10">
                                        <select class="cs_form_field cs_fs_14" id="physical_activity" name="physical_activity" required>
                                            <option value="1" {{ old('physical_activity') == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ old('physical_activity') == 0 ? 'selected' : '' }}>No</option>
                                        </select>
                                        @error('physical_activity')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="smoking" class="form-label cs_white_color">Do you smoke?</label>
                                    <div class="cs_form_field_wrapper cs_radius_10">
                                        <select class="cs_form_field cs_fs_14" id="smoking" name="smoking" required>
                                            <option value="1" {{ old('smoking') == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ old('smoking') == 0 ? 'selected' : '' }}>No</option>
                                        </select>
                                        @error('smoking')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="hypertension" class="form-label cs_white_color">Do you have hypertension?</label>
                                    <div class="cs_form_field_wrapper cs_radius_10">
                                        <select class="cs_form_field cs_fs_14" id="hypertension" name="hypertension" required>
                                            <option value="1" {{ old('hypertension') == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ old('hypertension') == 0 ? 'selected' : '' }}>No</option>
                                        </select>
                                        @error('hypertension')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="high_cholesterol" class="form-label cs_white_color">Do you have high cholesterol?</label>
                                    <div class="cs_form_field_wrapper cs_radius_10">
                                        <select class="cs_form_field cs_fs_14" id="high_cholesterol" name="high_cholesterol" required>
                                            <option value="1" {{ old('high_cholesterol') == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ old('high_cholesterol') == 0 ? 'selected' : '' }}>No</option>
                                        </select>
                                        @error('high_cholesterol')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 mt-5">
                                    <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_white_bg cs_radius_100">
                                        <span class="cs_btn_text">Calculate</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>

@endsection