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

<section id="content">
  <div class="content-wrap">
    <div class="container">

      <div class="form-widget">

        <div class="form-result"></div>

        <div class="row shadow bg-light border">

          <div class="col-lg-4 dark" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)), url('new/img/content/about-02.jpg') center center / cover; min-height: 400px;" data-bs-theme="dark">
            <h3 class="text-center mt-5">BMI Calculator</h3>
            <div class="calories-wrap text-center w-100 px-2">
              <span class="text-uppercase mb-0 ls-2">Know Your Number</span>
              <h2 id="calories-count" class="calories display-3 mb-2 heading-block border-bottom-0 fw-semibold font-body py-2">0.0</h2>
              <span class="text-uppercase h6 ls-3">Estimated Calories</span>
            </div>
            <small class="text-center m-0 position-absolute" style="bottom: 12px;">Metric Units</small>
          </div>

          <div class="col-lg-8 p-5">
            <h3 class="text-center">Calculate Your BMI</h3>
            <p class="text-center">Body Mass Index (BMI) is a simple index of weight-for-height that is commonly used to classify underweight, overweight and obesity in adults. BMI values are age-independent and the same for both sexes.</p>
            <form class="row mb-0" id="bmiForm">

              <div class="col-12 form-group">
                <div class="row">
                  <div class="col-sm-2 col-form-label">
                    <label for="fitness-form-age">Age:</label>
                  </div>
                  <div class="col-sm-5">
                    <input type="number" name="fitness-form-age" id="fitness-form-age" class="form-control required" value="" placeholder="Enter your Age">
                  </div>
                </div>
              </div>
              <div class="col-12 form-group">
                <div class="row">
                  <div class="col-sm-2 col-form-label">
                    <label for="fitness-form-weight">Weight:</label>
                  </div>
                  <div class="col-sm-5">
                    <div class="input-group">
                      <input type="number" name="weight" id="weight" class="form-control required" value="" placeholder="Enter your Weight">
                      <span class="input-group-text bg-white">kgs</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 form-group">
                <div class="row">
                  <div class="col-sm-2 col-form-label">
                    <label for="height">Height:</label>
                  </div>
                  <div class="col-sm-5">
                    <div class="input-group">
                      <input type="number" maxlength="3" name="height" id="height" class="form-control required" value="" placeholder="Enter your height">
                      <span class="input-group-text bg-white">cm</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 d-flex justify-content-end align-items-center">
                <button type="submit" id="calories-trigger" class="btn btn-secondary">Calculate</button>
              </div>

            </form>
          </div>

        </div>

      </div>

    </div>
  </div>
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