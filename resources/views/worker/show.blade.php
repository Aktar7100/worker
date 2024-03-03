<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <div class="max-w-2xl mx-auto bg-white p-8 rounded-md shadow-md">
                
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-200 text-left">Field</th>
                    <th class="px-4 py-2 bg-gray-200 text-left">Information</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-4 py-2">Name</td>
                    <td class="px-4 py-2">{{ $worker->name }}</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">Email</td>
                    <td class="px-4 py-2">{{ $worker->email }}</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">Location</td>
                    <td class="px-4 py-2">{{ $worker->location }}</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">Number</td>
                    <td class="px-4 py-2">{{ $worker->number }}</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">Father Name</td>
                    <td class="px-4 py-2">{{ $worker->father_name }}</td>
                </tr>
                <tr>
                    <td class="px-4 py-2">Mother Name</td>
                    <td class="px-4 py-2">{{ $worker->mother_name }}</td>
                </tr>
            </tbody>
        </table>
        
    </div>
            </div>
        </div>
    </div>
</x-app-layout>
