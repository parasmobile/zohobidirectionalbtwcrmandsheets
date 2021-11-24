<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Zoho CRM') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="grid gap-4 grid-cols-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg col-span-3">
          <div class="p-6 bg-white space-y-2">
            <a href="{{ route('oauth.google.sheets') }}" class="border-l-4 border-gray-900 block p-2.5 bg-gray-50 hover:bg-gray-100">Google Sheets</a>
            <a href="{{ route('oauth.zoho.crm') }}" class="border-l-4 border-gray-900 block p-2.5 bg-gray-50 hover:bg-gray-100">Zoho CRM</a>
          </div>
        </div>
        <div class="bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg col-span-9">
          <form action="{{ route('oauth.zoho.crm') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="client_id">Client Id</label>
              <input value="1000.PO2T1HWRXKROR3Z6BGJVQ09OT3YFTD" type="text" name="client_id" id="client_id" class="block border-gray-300 rounded-md w-full focus:ring-gray-400 focus:border-gray-400">
            </div>
            <div class="mb-3">
              <label for="client_secret">Client Secret</label>
              <input value="7682bf3745870294a1687ae057c3899fc8ff1a2ec6" type="text" name="client_secret" id="client_secret" class="block border-gray-300 rounded-md w-full focus:ring-gray-400 focus:border-gray-400">
            </div>
            <button class="py-2 px-6 bg-gray-900 text-white rounded-md">Authorize</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
