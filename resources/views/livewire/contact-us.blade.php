<div class="w-4/12 mx-auto">
    <div class="mt-24">
        <h1 class="text-center text-4xl font-extrabold">Contact Us</h1>
        <div class="text-gray-600 flex justify-center mt-4">
            <p class="w-[600px] text-center text-lg">Got a technical issue? Want to send feedback abouta beta feature? Need details about our Business plan? Let us know.</p>
        </div>
    </div>



    <!-- CREATE FROM BACKEND CREATE FUNCTION -->
    <form wire:submit="create">
        <div class="mt-16">
            <div>
                <label for="email" class="block font-semibold">Your email</label>
                <input wire:model='email' type="text" class="border border-gray-300 block w-full rounded-md">
                @error('email')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
            </div>
            <div class="mt-5">
                <label for="subject" class="block font-semibold">Subject</label>
                <input wire:model='subject' type="text" class="border border-gray-300 block w-full rounded-md">
                @error('subject')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
            </div>
            <div class="mt-5">
                <label for="your_message" class="block font-semibold">Your message</label>
                <textarea wire:model='your_message' id="your_message" name="your_message" rows="6" cols="50" class="border border-gray-300 block w-full rounded-md"></textarea>
                @error('your_message')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
            </div>

            <div class="flex">
                <button 
                    wire:loading.class="bg-blue-500"
                    type="submit"
                class="block mt-3 px-4  py-2 bg-emerald-900 text-white font-semibold rounded hover:bg-emerald-800">Send Message
                </button>
                
                <!-- IF SUCCESS CREATE THEN FLASH A MESSAGE FROM BACKEND -->
                @if (session('success'))
                    <span class="text-green-500 mt-3 px-4  py-2">{{session('success')}}</span>
                @endif
            </div>
            

            
        </div>
    </form>

</div>
