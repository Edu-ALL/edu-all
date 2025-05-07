{{-- Registration Component  --}}
@if (isset($isButton) && $isButton == true)
    <div class="md:hidden flex justify-center mt-2 md:z-[50] z-[10]">
        <button class="bg-newprimary py-2 px-4 text-white rounded-lg" onclick="open_registration()">Register Now</button>
    </div>
@else
    @if($isPartner) 
        <div class="w-full h-full md:max-w-screen-xl mx-auto top-0 left-0 right-0">
            <div class=""
                id="registerForm">
                    <x-form-partner title="Program" program-id="{{ $programId }}" lead-id="{{ $leadId }}"
                        is-partner="{{ $isPartner }}" />
            </div>
        </div>
        <div class="hidden top-0 left-0 w-full h-full bg-black/60 md:z-[1] z-[99998] ease-in-out duration-700"
            id="formOverlay" onclick="close_registration()"></div>
    @else
        <div class="absolute w-full h-full md:max-w-screen-xl mx-auto top-0 left-0 right-0">
            <div class="md:absolute fixed  {{ $isHome ? 'md:top-[45%] lg:right-[5rem] xl:right-[8rem]' : 'md:top-[55%] lg:right-[2.5rem] xl:right-[5rem]' }} md:-translate-y-[60%] md:right-20 -top-[100vh] right-4 md:z-[40] z-[99999] ease-in-out duration-700"
                id="registerForm">
                @if (isset($isPartner) && $isPartner == true)
                    <x-form-partner title="Program" program-id="{{ $programId }}" lead-id="{{ $leadId }}"
                        is-partner="{{ $isPartner }}" />
                @else
                    <x-form title="Program" program-id="{{ $programId }}" lead-id="{{ $leadId }}"
                        is-partner="{{ $isPartner }}" />
                @endif
            </div>
        </div>
        <div class="md:absolute hidden top-0 left-0 w-full h-full bg-black/60 md:z-[1] z-[99998] ease-in-out duration-700"
            id="formOverlay" onclick="close_registration()"></div>
    @endif

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
