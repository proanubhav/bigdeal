const form = document.getElementById('desktopContactForm');
if (form) {
form.addEventListener('submit', async (e) => {
    e.preventDefault();

    // Clear previous errors
    document.querySelectorAll('.prettyprint').forEach(el => el.innerText = '');

    // Validate form
    let isValid = true;
    const getValue = (id) => document.getElementById(id)?.value.trim() || '';
    const setError = (id, message) => {
        const errorElement = document.getElementById(id);
        if (errorElement) {
            errorElement.innerText = message;
        }
    };

    const name = getValue('name');
    const contact = getValue('contact');
    const email = getValue('email');
    const pincode = getValue('pincode');
    const area = getValue('area');
    const propType = getValue('propType');
    const plan = getValue('plan');
    const investmentBudget = getValue('investmentBudget');

    // Name validation
    if (!name) {
        setError('name_error', 'Name is required.');
        isValid = false;
    }

    // Contact validation (numeric and 10 digits)
    if (!contact || !/^\d{10}$/.test(contact)) {
        setError('contact_error', 'Please enter a valid 10-digit number.');
        isValid = false;
    }

    // Email validation
    if (!email || !/^\S+@\S+\.\S+$/.test(email)) {
        setError('email_error', 'Please enter a valid email address.');
        isValid = false;
    }

    // Pincode validation (numeric and 6 digits)
    if (!pincode || !/^\d{6}$/.test(pincode)) {
        setError('pincode_error', 'Please enter a valid 6-digit pin code.');
        isValid = false;
    }

    // Shared select validation used by both apply-now.php and franchise.php
    if (!area) {
        setError('area_error', 'Please select an area.');
        isValid = false;
    }

    if (!propType) {
        setError('propType_error', 'Please select a property type.');
        isValid = false;
    }

    if (!plan) {
        setError('plan_error', 'Please select a plan.');
        isValid = false;
    }

    // Franchise-specific field stays required when present on the page
    if (document.getElementById('investmentBudget') && !investmentBudget) {
        setError('investmentBudget_error', 'Please select an investment budget.');
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
