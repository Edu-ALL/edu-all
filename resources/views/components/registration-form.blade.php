{{-- Registration Component  --}}
@if (isset($isButton) && $isButton == true)
    <div class="md:hidden flex justify-center mt-2">
        <button class="bg-newprimary py-2 px-4 text-white" onclick="open_registration()">Register Now</button>
    </div>
@else
    <div class="md:absolute fixed md:top-1/2 md:-translate-y-[60%] md:right-20 -top-[100vh] right-4 z-40 ease-in-out duration-700"
        id="registerForm">
        <x-form title="Program" program-id="AAUP" lead-id="LS001" />
    </div>
    <div class="md:absolute hidden top-0 left-0 w-full h-full bg-black/60 z-40 ease-in-out duration-700"
        id="formOverlay" onclick="close_registration()"></div>

    <script>
        // Register Form 
        const registerForm = document.getElementById('registerForm')
        const formOverlay = document.getElementById('formOverlay')

        const open_registration = () => {
            formOverlay.classList.remove('hidden')
            registerForm.classList.remove('-top-[100vh]')
            formOverlay.classList.add('fixed')
            registerForm.classList.add('top-20')
        }

        const close_registration = () => {
            formOverlay.classList.add('hidden')
            formOverlay.classList.remove('fixed')
            registerForm.classList.add('-top-[100vh]')
            registerForm.classList.remove('top-20')
        }
    </script>
@endif