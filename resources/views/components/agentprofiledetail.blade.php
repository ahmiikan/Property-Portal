 <div class="mb-4">
     <span class="ml-1 font-bold "> Company Address: </span>
     <input for="name" value="{{ Auth::user()->agent->address }}" type="text" name="name" :value="old('name')"
         required
         class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
         placeholder="Adress" />
 </div>

 <div class="mb-4">
     <span class="ml-1 font-bold "> Status: </span>
     <input for="name" value="{{ Auth::user()->agent->status }}" type="text" name="name"
         :value="old('name')" required
         class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
         placeholder="Status" />
     @if (Auth::user()->agent->status == 'unverified')
         Apply For Account Verification.<br><u><a href="{{ route('agent.create') }}">Upload Documents</a><u><br>
     @endif
 </div>
 <div class="mb-4">
     <span class="ml-1 font-bold "> Comapny name: </span>
     <input for="name" value="{{ Auth::user()->agent->name }}" type="text" name="name" :value="old('name')"
         required
         class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
         placeholder="Comapny name" />
 </div>
 <div class="mb-4">
     <span class="ml-1 font-bold "> Company adress: </span>
     <input for="name" value="{{ Auth::user()->agent->address }}" type="text" name="name"
         :value="old('name')" required
         class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
         placeholder="Company adress" />
 </div>
 <div class="mb-4">
     <span class="ml-1 font-bold "> Company Phone: </span>
     <input for="name" value="{{ Auth::user()->agent->cell }}" type="text" name="name" :value="old('name')"
         required
         class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
         placeholder="Phone" />
 </div>
 <div class="mb-4">
     <span class="ml-1 font-bold "> Company email: </span>
     <input for="name" value="{{ Auth::user()->agent->email }}" type="text" name="name" :value="old('name')"
         required
         class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
         placeholder="email" />
 </div>
