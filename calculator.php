<!DOCTYPE html>
<html lang="en-US">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Calculator | BigDeal Supermarket Franchise | Know More About Us </title>
  <meta name="description"
    content="Discover BigDeal's success story and Supermarket Franchise Model. Join India’s leading Supermart franchise for growth opportunities. Learn about us!">
  <meta name="keywords"
    content="Supermarket Franchise, BigDeal Franchise, Growth in Supermarket Franchise,  Supermart franchise in India, Big Deal Supermart, Supermarket Franchise Model">

  <meta property="og:site_name" content="Bigdeal Supermart Franchise">
  <meta property="og:locale" content="en_US">
  <meta property="og:title" content="BigDeal Supermarket Franchise | Know More About Us ">
  <meta property="og:url" content="https://www.bigdealsupermart.com/about">
  <meta property="og:description"
    content="Discover BigDeal's success story and Supermarket Franchise Model. Join India’s leading Supermart franchise for growth opportunities. Learn about us!">
  <meta property="og:image" content="https://www.bigdealsupermart.com/assets/img/big-deal-supermart.webp">
  <meta property="og:image:alt" content="Supermarket Franchise">
  <meta property="og:type" content="service">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:domain" content="www.bigdealsupermart.com">
  <!-- <meta name="twitter:site" content="@om_sai_group"> -->
  <meta name="twitter:title" content="BigDeal Supermarket Franchise | Know More About Us ">
  <meta name="twitter:url" content="https://www.bigdealsupermart.com/about">
  <meta name="twitter:description"
    content="Discover BigDeal's success story and Supermarket Franchise Model. Join India’s leading Supermart franchise for growth opportunities. Learn about us!">
  <meta name="twitter:image" content="https://www.bigdealsupermart.com/assets/img/big-deal-supermart.webp">
  <meta itemprop="name" content="BigDeal Supermarket Franchise | Know More About Us ">
  <meta itemprop="url" content="https://www.bigdealsupermart.com/about">
  <meta itemprop="description"
    content="Discover BigDeal's success story and Supermarket Franchise Model. Join India’s leading Supermart franchise for growth opportunities. Learn about us!">
  <meta itemprop="image" content="https://www.bigdealsupermart.com/assets/img/big-deal-supermart.webp">
  <link rel="canonical" href="https://www.bigdealsupermart.com/about">

  <link rel="icon" href="assets/img/big-deal-favicon.png" sizes="16x16" type="image/png">
  <meta name="robots" content="index, follow">
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="pragma" content="no-cache" />

  <!-- Stylesheets -->
  <?php include 'common/stylesheet.php'; ?>
  <!-- Stylesheets -->


</head>

<body>
  <!-- Header Section HTML -->
  <?php include 'common/header.php'; ?>
  <!-- Header Section HTML -->


  <!-- about us banner -->

  <section class="banner-about banner-calc overflow-hidden pt-lg-100 pt-md-90 pt-sm-80 pt-xs-70">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="text-left pb-sm-3 pb-xs-1">
            <h2 class="about-title">Calculate Your Franchise Startup Costs</h2>
            <p>Calculate the total investment needed to start your franchise, including fees, setup costs, and working
              capital, with our easy-to-use Franchise Opening Cost Calculator.</p>
          </div>
        </div>
        <div class="col-lg-6 mx auto">
          <div class="text-center right_bottom_border1">

            <div class="w-100 m-0">
              <div class="search-bar">
                <form class="form_group" role="form">
                  <p class="text-left mb-2">Choose your franchise size</p>
                  <ul class="radio-list">
                    <li>
                      <input type="radio" name="test" id="cb1" data-min="500" data-max="1500" checked
                        onchange="updateRangeFromRadio(this)" />
                      <label for="cb1">
                        <img src="./assets/img/mart-1.png" alt="Minimart" />
                        <p>Mini Mart</p>
                      </label>
                    </li>
                    <li>
                      <input type="radio" name="test" id="cb2" data-min="1500" data-max="4000"
                        onchange="updateRangeFromRadio(this)" />
                      <label for="cb2">
                        <img src="./assets/img/mart-2.png" alt="Supermart" />
                        <p>Super Mart</p>
                      </label>
                    </li>
                    <li>
                      <input type="radio" name="test" id="cb3" data-min="4000" data-max="10000"
                        onchange="updateRangeFromRadio(this)" />
                      <label for="cb3">
                        <img src="./assets/img/mart-3.png" alt="Hypermart" />
                        <p>Hyper Mart</p>
                      </label>
                    </li>
                  </ul>

                  <div class="form-group px-1 mb-0 mb-xs-3">
                    <div class="d-block text-left text-end">
                      <div class="d-flex align-items-center justify-content-between">
                        <label for="inputVal" class="form-label mt-3 sqft-range">Area Range: 500 - 1500</label>
                        <div class="d-flex align-items-center justify-content-between" style="min-width: 150px;">                          
                        <label for="customRange2" class="form-label mt-3 float-right sqft-label">sqft</label>
                        <input type="number" id="inputVal" class="form-control ms-3 col-4 float-right" step="50"
                          value="500" oninput="syncRangeValue(this)"/>
                        </div>
                      </div>
                      <input type="range" id="customRange2" class="form-control form-range" step="50" value="500"
                        oninput="syncInputValue(this)" />
                    </div>
                  </div>
                  <p class="mt-sm-5 mt-xs-0 mb-2 text-left">Plan Type</p>
                  <ul class="radio-list radio-list-simple text-left">
                    <li>
                      <input type="radio" name="cbplan" id="cbplan1" value="1000" onchange="updatePlanFromRadio(this)"
                        checked />
                      <label for="cbplan1">
                        Basic Plan
                        <span>1000 ₹/Sqft</span>
                      </label>
                    </li>
                    <li>
                      <input type="radio" name="cbplan" id="cbplan2" value="1200"
                        onchange="updatePlanFromRadio(this)" />
                      <label for="cbplan2">
                        Optimized Plan
                        <span>1200 ₹/Sqft</span>
                      </label>
                    </li>
                    <li>
                      <input type="radio" name="cbplan" id="cbplan3" value="1500"
                        onchange="updatePlanFromRadio(this)" />
                      <label for="cbplan3">
                        Premium Plan <span>1500 ₹/Sqft</span>
                      </label>
                    </li>
                  </ul>

                  <span id="error" class="glyphicon glyphicon-usd form-control-feedback"
                    style="display: block; color: red; width: 100%;"></span>
                </form>
              </div>
            </div>
            <div class="theme-btn__wrapper d-flex justify-content-end mt-3 mb-1 mr-4">

            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="right-sec mt-sm-3 mt-0">
            <p class="budget-cost">
              <label for="">Approx. Cost:</label>
              <span class="d-flex align-items-center"><em class="rupee-icon">₹</em> <span
                  id="totalValue">0</span></span>
            </p>
            <div class="budget-figures">
              <div class="fig-card">
                <span>Franchise Fee</span>
                <p class="d-flex align-items-center"><em class="rupee-icon">₹</em> <span id="franchise"
                    class="amt">0</span></p>
              </div>
              <div class="fig-card">
                <span>Software Fee</span>
                <p class="d-flex align-items-center"><em class="rupee-icon">₹</em> <span id="software"
                    class="amt">0</span></p>
              </div>
            </div>
            <div class="budget-figures mb-0 mb-sm-5">
              <div class="fig-card">
                <span>Purchasing Cost</span>
                <p class="d-flex align-items-center"><em class="rupee-icon">₹</em> <span id="purchasingCost"
                    class="amt">0</span></p>
              </div>
              <div class="fig-card">
                <span>Interior Cost</span>
                <p class="d-flex align-items-center"><em class="rupee-icon">₹</em> <span id="interiorCost"
                    class="amt">0</span></p>
              </div>
            </div>
            <div class="btn-box plan-bgt-btn border-none ml-4 mb-4">
              <button class="btn btn-border border-none br-1" onclick="calculator()">
                <span>Plan my Budget</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>







  <!-- Blog Section HTML -->
  <!-- Blog Section HTML -->

  <!-- Footer HTML -->
  <?php include 'common/footer.php'; ?>
  <!-- Footer HTML -->

  <!-- Floating Mobile Footer -->

  <!-- Floating Mobile Footer -->

  <!-- Scripts -->
  <?php include 'common/scripts.php'; ?>
  <!-- Scripts -->
  <script>
    const inputField = document.getElementById("inputVal");
    const rangeSlider = document.getElementById("customRange2");
    document.querySelector(".sqft-range").textContent = `Area: ${inputField.min - inputField.max}`;
    // Constants for calculations
    const FRANCHISE_COST = 247800;
    const SOFTWARE_COST = 50000;
    const PURCHASING_UNIT_COST = 1000;

    // Variables for dynamic input
    let interiorCostPerUnit = 1000;
    let minValue = 500;
    let maxValue = 1500;

    // Initialize input and range values
    function initializeValues() {
      inputField.min = minValue;
      inputField.max = maxValue;
      inputField.value = minValue;

      rangeSlider.min = minValue;
      rangeSlider.max = maxValue;
      rangeSlider.value = minValue;
      document.querySelector(".sqft-range").textContent = `Area: ${minValue} - ${maxValue}`;
      updateRangeBackground(rangeSlider.value);      
    }

    // Update the interior cost based on selected plan
    function updatePlanFromRadio(planCostElement) {
      interiorCostPerUnit = parseInt(planCostElement.value, 10);
    }

    // Calculator logic
    function calculator() {
      const inputValue = parseInt(inputField.value, 10);
      const errorElement = document.getElementById("error");

      // Validate input
      if (!isNaN(inputValue) && inputValue > 0) {
        inputField.style.removeProperty("border");
        errorElement.textContent = "";

        // Calculate costs
        const purchasingCost = PURCHASING_UNIT_COST * inputValue;
        const interiorCost = interiorCostPerUnit * inputValue;
        const totalCost = FRANCHISE_COST + SOFTWARE_COST + purchasingCost + interiorCost;

        // Update UI with calculated values
        document.getElementById("franchise").textContent = `${FRANCHISE_COST}`;
        document.getElementById("software").textContent = `${SOFTWARE_COST}`;
        document.getElementById("purchasingCost").textContent = `${purchasingCost}`;
        document.getElementById("interiorCost").textContent = `${interiorCost}`;
        document.getElementById("totalValue").textContent = `${totalCost}`;
      } else {
        // Display error
        inputField.style.border = "1px solid red";
        errorElement.textContent = isNaN(inputValue)
          ? "Please enter a valid numeric value."
          : "Please enter a value.";
      }
    }

    // Update input and range attributes dynamically based on selected radio
    function updateRangeFromRadio(radioElement) {
      minValue = parseInt(radioElement.dataset.min, 10);
      maxValue = parseInt(radioElement.dataset.max, 10);
      document.querySelector(".sqft-range").textContent = `Area: ${minValue} - ${maxValue}`;
      inputField.min = minValue;
      inputField.max = maxValue;
      inputField.value = minValue;

      rangeSlider.min = minValue;
      rangeSlider.max = maxValue;
      rangeSlider.value = minValue;

      updateRangeBackground(rangeSlider.value); // Update slider background
    }

    // Synchronize range slider value with number input
    function syncRangeValue(inputElement) {
      let value = parseInt(inputElement.value, 10);
      value = Math.min(Math.max(value, minValue), maxValue); // Clamp value

      inputField.value = value;
      rangeSlider.value = value;

      updateRangeBackground(value); // Update slider background
    }

    // Synchronize number input value with range slider
    function syncInputValue(rangeElement) {
      const value = rangeElement.value;
      inputField.value = value;

      updateRangeBackground(value); // Update slider background
    }

    // Update the slider's background to reflect the selected range
    function updateRangeBackground(value) {
      const percentage = ((value - minValue) / (maxValue - minValue));
      rangeSlider.style.background = `linear-gradient(to right, #ee4f25 ${percentage}%, #e0e0e0 ${percentage}%)`;      
    }
    

    // Initialize on page load
    document.addEventListener("DOMContentLoaded", initializeValues);

    // Add event listeners for dynamic updates
    inputField.addEventListener("input", () => syncRangeValue(inputField));
    rangeSlider.addEventListener("input", () => syncInputValue(rangeSlider));
  </script>

</body>

</html>