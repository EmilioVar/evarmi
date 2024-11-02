<form wire:submit.prevent='sendEmail' method="POST" class="space-y-8">
    <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tu email</label>
        <input wire:model='email' type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-800 focus:border-gray-800 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-800 dark:focus:border-gray-800 dark:shadow-sm-light" placeholder="bill_el_gates@gmail.com" required>
    </div>
    <div class="sm:col-span-2">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tu mensaje</label>
        <textarea wire:model='message' id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-gray-800 focus:border-gray-800 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-800 dark:focus:border-gray-800" placeholder="Hola, soy Bill Gates, y me gustaría oferecerte el puesto de black ops..."></textarea>
    </div>
    <!-- button area -->
    <div class="flex items-center flex-col md:flex-row">
        <div wire:loading>
            <button class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-gray-800 sm:w-fit hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-800 dark:bg-gray-800 dark:hover:bg-gray-600 dark:focus:ring-gray-800 transition-all flex items-center"><span class="mr-2">Enviando...</span> <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="#6b7280" d="M2.01 21L23 12L2.01 3L2 10l15 2l-15 2z"/></svg></button>
        </div>
        <div wire:loading.remove>
            <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-gray-800 sm:w-fit hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-800 dark:bg-gray-800 dark:hover:bg-gray-600 dark:focus:ring-gray-800 transition-all flex items-center"><span class="mr-2">Enviar mensaje</span> <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="#6b7280" d="M2.01 21L23 12L2.01 3L2 10l15 2l-15 2z"/></svg></button>
        </div>
        <div class="{{ $emailSended ? 'block' : 'hidden' }} ml-5 p-2">
        ¡Email enviado correctamente! <span class="text-[.8em]">(para el envío de este mail se ha usado livewire, nada de js 🚀)</span>
        </div>
    </div>
</form>