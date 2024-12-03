const form = document.getElementById('desktopContactForm');
    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Clear previous errors
        document.querySelectorAll('.prettyprint').forEach(el => el.innerText = '');

        // Validate form
        let isValid = true;

        const name = document.getElementById('name').value.trim();
        const contact = document.getElementById('contact').value.trim();
        const email = document.getElementById('email').value.trim();
        const pincode = document.getElementById('pincode').value.trim();
        const area = document.getElementById('area').value;
        const propType = document.getElementById('propType').value;
        const plan = document.getElementById('plan').value;

        // Name validation
        if (!name) {
            document.getElementById('name_error').innerText = 'Name is required.';
            isValid = false;
        }

        // Contact validation (numeric and 10 digits)
        if (!contact || !/^\d{10}$/.test(contact)) {
            document.getElementById('contact_error').innerText = 'Please enter a valid 10-digit number.';
            isValid = false;
        }

        // Email validation
        if (!email || !/^\S+@\S+\.\S+$/.test(email)) {
            document.getElementById('email_error').innerText += 'Please enter a valid email address.';
            isValid = false;
        }

        // Pincode validation (numeric and 6 digits)
        if (!pincode || !/^\d{6}$/.test(pincode)) {
            document.getElementById('pincode_error').innerText += 'Please enter a valid 6-digit pin code.';
            isValid = false;
        }

        // Area validation
        if (!area) {
            document.getElementById('area_error').innerText += 'Please select an area.';
            isValid = false;
        }

        // Property type validation
        if (!propType) {
            document.getElementById('propType_error').innerText += 'Please select a property type.';
            isValid = false;
        }

        // Plan validation
        if (!plan) {
            document.getElementById('plan_error').innerText += 'Please select a plan.';
            isValid = false;
        }

        if (!isValid) {
            return; // Stop submission if the form is invalid
        }

        // Disable the button and update its text
        document.getElementById("submitBtn").disabled = true;
        document.getElementById("submitBtn").querySelector("span").innerText = "Requesting...";

        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());

        try {
            const response = await fetch('https://script.google.com/macros/s/AKfycbzcCl12vQI8Ql5mRCMx4LIW7ETCnQna1KigiWHqyAdYv9OX_HYAIfhREtkPLjCzxyfujg/exec', {
                method: 'POST',
                headers: {
                    'Content-Type': 'text/plain',
                },
                body: JSON.stringify(data),
            });

            const result = await response.json();

            if (result.result === 'success') {
                document.getElementById("thank_you_msg_desktop").innerHTML = "Thanks for Connecting with us";
                form.reset();
            } else {
                alert(`Form submission failed: ${result.message || 'Unknown error'}`);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('An error occurred while submitting the form.');
        } finally {
            // Re-enable the button
            document.getElementById("submitBtn").disabled = false;
            document.getElementById("submitBtn").querySelector("span").innerText = "Request Callback";
            const redirectURL = `${window.location.protocol}//${window.location.host}/bigdeal/thankyou.php`;
            window.location.href = redirectURL;
        }
    });