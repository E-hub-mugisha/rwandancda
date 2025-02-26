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
<!-- CONTACT
        ================================================== -->
<section class="bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-xl-4 mb-1-9 mb-lg-0">
        <div>
          <div class="section-heading-02 mb-1-9 mb-lg-2-9">
            <div class="sub-title mb-3">
              <span class="text-secondary">Know Your Number</span>
              <div class="title-img">
                <img src="{{ asset('new/img/icons/habitro-icon.png')}}" alt="...">
              </div>
            </div>
            <h2 class="h1 fw-bolder mb-0">BMI Calculator</h2>
          </div>
          <div class="p-1-9 p-sm-2-9 bg-secondary contact-form border-radius-10">
            <div class="d-flex align-items-center mb-4">
              <div class="flex-shrink-0">
                <i class="fas fa-map-marker-alt contact-icon"></i>
              </div>
              <div class="flex-grow-1 ms-3 ms-sm-4">
                <address class="text-white d-block mb-0">Calculate your Body Mass Index (BMI) to find out if you have a healthy weight for your height.</address>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="bg-white shadow p-1-9 p-sm-2-9 ps-lg-7 border-radius-10">
          <form class="quform" id="bmiForm">
            <div class="quform-elements">
              <div class="row">

                <!-- Begin Text input element -->
                <div class="col-md-12">
                  <div class="quform-element form-group">
                    <label for="weight">Your Weight (kg)<span class="quform-required">*</span></label>
                    <div class="quform-input">
                      <input class="form-control" id="weight" type="text"  placeholder="Please enter your weight in kilograms.">
                    </div>
                  </div>
                </div>
                <!-- End Text input element -->

                <!-- Begin Text input element -->
                <div class="col-md-12">
                  <div class="quform-element form-group">
                    <label for="height">Your height <span class="quform-required">*</span></label>
                    <div class="quform-input">
                      <input class="form-control" id="height" type="text" placeholder="Please enter your height in centimeters.">
                    </div>
                  </div>
                </div>
                <!-- End Text input element -->

                <!-- Begin Submit button -->
                <div class="col-md-12">
                  <div class="quform-submit-inner">
                    <button class="butn-style01 border-0" type="submit"><span>Calculate BMI</span></button>
                  </div>
                </div>
                <!-- End Submit button -->

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <img src="{{ asset('new/img/content/animation8.png')}}" class="position-absolute bottom-0 right-5 ani-left-right d-none d-md-block" alt="...">
  <img src="{{ asset('new/img/content/animation10.png')}}" class="position-absolute top-30 left d-none d-md-block" alt="...">
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
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