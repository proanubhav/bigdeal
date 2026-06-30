const form = document.getElementById('desktopContactForm');
if (form) {
form.addEventListener('submit', async (e) => {
    e.preventDefault();

    // Clear previous errors
    document.querySelectorAll('.prettyprint').forEach(el => el.innerText = '');

    // Validate form
    let isValid = true;
    const isFranchiseLanding = document.body.classList.contains('franchise-workshop-page');

    const name = document.getElementById('name')?.value.trim() || '';
    const contact = document.getElementById('contact')?.value.trim() || '';
    const email = document.getElementById('email')?.value.trim() || '';
    const pincode = document.getElementById('pincode')?.value.trim() || '';
    const area = document.getElementById('area')?.value || '';
    const propType = document.getElementById('propType')?.value || '';
    const plan = document.getElementById('plan')?.value || '';
    const investmentBudget = document.getElementById('investmentBudget')?.value || '';

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
    if ((!isFranchiseLanding && !email) || (email && !/^\S+@\S+\.\S+$/.test(email))) {
        document.getElementById('email_error').innerText += 'Please enter a valid email address.';
        isValid = false;
    }

    // Pincode validation (numeric and 6 digits)
    if (!pincode || !/^\d{6}$/.test(pincode)) {
        document.getElementById('pincode_error').innerText += 'Please enter a valid 6-digit pin code.';
        isValid = false;
    }

    // Investment budget validation for the franchise landing page
    if (isFranchiseLanding && !investmentBudget) {
        document.getElementById('investmentBudget_error').innerText += 'Please select an investment budget.';
        isValid = false;
    }

    // Area validation
    if (!isFranchiseLanding && !area) {
        document.getElementById('area_error').innerText += 'Please select an area.';
        isValid = false;
    }

    // Property type validation
    if (!isFranchiseLanding && !propType) {
        document.getElementById('propType_error').innerText += 'Please select a property type.';
        isValid = false;
    }

    // Plan validation
    if (!isFranchiseLanding && !plan) {
        document.getElementById('plan_error').innerText += 'Please select a plan.';
        isValid = false;
    }

    if (!isValid) {
        return; // Stop submission if the form is invalid
    }

    // Disable the button and update its text
    const submitBtn = document.getElementById("submitBtn");
    const defaultButtonText = submitBtn.dataset.defaultText || submitBtn.querySelector("span").innerText || "Apply Now";
    submitBtn.disabled = true;
    submitBtn.querySelector("span").innerText = "Requesting...";

    const formData = new FormData(form);
    const data = Object.fromEntries(formData.entries());

    data.pageUrl = window.location.href;
    data.sourceUrl = data.pageUrl;

    const customIntegrationPromise = (typeof window.sendCustomIntegration === 'function')
        ? window.sendCustomIntegration(data)
        : Promise.resolve(true);


    try {
        await fetch('https://script.google.com/macros/s/AKfycbwgGg415dEWuDGjoCnsRbfO2owem8gFD7CpAXJshH9t4vpFypO0hM8bo0aiUgt3b3z3/exec', {
            method: 'POST',
            mode: 'no-cors',
            headers: {
                'Content-Type': 'text/plain',
            },
            body: JSON.stringify(data),
        });

        document.getElementById("thank_you_msg_desktop").innerHTML = "Thanks for Connecting with us";
        form.reset();
    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred while submitting the form.');
    } finally {
        // Re-enable the button
        submitBtn.disabled = false;
        submitBtn.querySelector("span").innerText = defaultButtonText;
        await customIntegrationPromise;
        const redirectURL = `${window.location.protocol}//${window.location.host}/thank-you`;
        window.location.href = redirectURL;
    }
});
}
