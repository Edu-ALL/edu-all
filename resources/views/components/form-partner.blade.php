<div class="mx-auto md:max-w-lg max-w-[22rem] ease-in-out duration-500 z-[999999]" id="formRegist">
    <div class="bg-[#EAEAEA] p-4 rounded-lg shadow-2xl">
        <div id="myForm">
            <div class="flex flex-col px-2">
                <div class="mb-3">
                    <label for="primary_name" class="text-dark text-sm py-2">Full Name</label>
                    <input type="text"
                    class="py-2 {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-sm' }} md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                    placeholder="Full Name *" id="primary_name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="text-dark text-sm py-2">Email</label>
                    <input type="email"
                    class="py-2 {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-sm' }} md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                    placeholder="Email *" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone_number" class="text-dark text-sm py-2">Phone Numbe</label>
                    <input type="text"
                    class="py-2 {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-sm' }} md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                    placeholder="Phone Number *" id="phone_number" required>
                </div>
                <div class="mb-3">
                    <label for="school_name" class="text-dark text-sm py-2">School Name</label>
                    <input type="text"
                        class="py-2 {{ !empty($fontSize) ? 'text-[' . $fontSize . 'px]' : 'text-sm' }} md:py-2 text-dark rounded-sm border-none shadow-sm py-4 my-1 w-full"
                        placeholder="School Name *" id="school_name" required>
                </div>
                <div class="mb-4">
                    <div class="g-recaptcha" id="rcaptcha" class="w-full"></div>
                    <span id="captcha" class="text-red" />
                </div>
                <div class="mb-3">
                    <button type="button" class="w-full bg-red text-white text-center py-2"
                        onclick="submit()">
                        <span id="send">
                            <i class="fas fa-paper-plane mr-4"></i>
                        </span>
                        <span id="loading" class="hidden">
                            <i class="fas fa-spinner fa-spin mr-4"></i>
                        </span>
                        Collaborate Now </button>
                </div>
            </div>
        </div>

        <div id="thanksForm" class="hidden">
            <div class="flex flex-col justify-center">
                <h4 class="mb-4 mt-4 text-white text-center text-lg">
                    <span>
                        Thank You <br />
                        For Submitting Your Form!
                    </span>
                </h4>
                <p class="text-white text-center">
                    You will receive a confirmation email and our team will contact you
                    shortly.
                </p>
            </div>
        </div>
    </div>
</div>
@push('style')
    <script script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>
    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('rcaptcha', {
                'sitekey': '6LeKwI8qAAAAAGA8ypgp-u0gDloCz27jeVQmniif',
                'callback': checkCaptcha
            });
        };
    </script>
@endpush
@push('script')
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1067393485185284');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1067393485185284&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <script>

        const checkCaptcha = () => {
            var v = grecaptcha.getResponse();

            if (v.length == 0) {
                document.getElementById('captcha').innerHTML = "Please verify you are not a robot.";
                return false;
            } else {
                return true;
                // Here you can perform an actual form submission if needed, e.g., using an AJAX request or form.submit().
            }
        }


        const submit = () => {
            // Get value
            const primaryName = document.getElementById('primary_name');
            const primaryEmail = document.getElementById('email');
            const phoneNumber = document.getElementById('phone_number');
            const schoolName = document.getElementById('school_name');
            const loadingIcon = document.getElementById('loading')
            const sendIcon = document.getElementById('send')
            const formPage = document.getElementById('myForm')
            const thanksPage = document.getElementById('thanksForm')
            const formRegistPage = document.getElementById('formRegist')


            loadingIcon.classList.remove('hidden')
            sendIcon.classList.add('hidden')

            const formData = {
                'role': 'teacher/counsellor',
                'fullname': primaryName.value,
                'mail': primaryEmail.value,
                'phone': phoneNumber.value,
                'secondary_name': null,
                'secondary_mail': null,
                'secondary_phone': null,
                'school_id': 'new',
                'other_school': schoolName.value,
                'graduation_year': null,
                'interest_prog': null,
                'destination_country': [],
                'lead_id': "{{ $leadId }}",
            }

            const inputs = document.querySelectorAll('#myForm input, #myForm select');
            let isValid = true;

            // Loop through inputs and check for validation
            inputs.forEach(function(input) {
                if (input.required && !input.value && input.value != ' ' && !input.classList.contains(
                        'hidden')) {
                    isValid = false;
                    input.setCustomValidity('Please fill in required fields');
                    input.classList.add('border-red'); // Add red border to invalid inputs (optional)
                    input.classList.remove('border-green-500'); // Remove green border if any
                } else {
                    input.setCustomValidity('');
                    input.classList.remove('border-red');
                    input.classList.add('border-green-500');
                }
            });

            // If the form is valid, proceed with submission
            if (isValid) {
                const captcha = checkCaptcha();
                if (captcha) {

                    $.ajax({
                        url: 'https://crm.edu-all.com/api/v1/register/public', // Replace with the API endpoint
                        type: 'POST', // Specify the request type (POST)
                        contentType: 'application/json', // Set content type to JSON
                        data: JSON.stringify(formData), // Convert formData to a JSON string
                        success: function(response) {
                            // Handle the response on success
                            loadingIcon.classList.add('hidden')
                            sendIcon.classList.remove('hidden')

                            // Move to Success Response 
                            // formPage.classList.add('hidden')
                            // thanksPage.classList.remove('hidden')

                            location.href = "https://edu-all.com/id-en/sign-me/thank-partnership";
                        },
                        error: function(xhr, status, error) {
                            // Handle errors here
                            console.error(error);
                            loadingIcon.classList.add('hidden')
                            sendIcon.classList.remove('hidden')
                        }
                    });


                } else {
                    loadingIcon.classList.add('hidden')
                    sendIcon.classList.remove('hidden')
                }
            } else {
                loadingIcon.classList.add('hidden')
                sendIcon.classList.remove('hidden')
            }

            return true;
        }
    </script>
@endpush
