<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee_Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<div class="container mx-auto">
    <h1 class="text-2xl font-semibold mb-4">Employee List</h1>
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date of Birth</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Education Qualification</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Address</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Photo</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Resume</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</th>

            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($employees as $employee)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $employee->firstname }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $employee->lastname }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $employee->date_of_birth }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $employee->education_qualification }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $employee->address }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $employee->email }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $employee->phone }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <img src="{{ asset('storage/' . $employee->photo) }}" alt="Employee Photo" class="w-16 h-16 object-cover">
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <a href="{{ asset('storage/' . $employee->resume) }}" download>Resume</a>
                    </td>
                    <td>
                        <a href="{{ route('display', ['id' => $employee->id]) }}"  class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-3 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 my-button" >View</a>
                        <a href="{{ route('edit', ['id' => $employee->id]) }}" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-3 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
                        <a href="{{ route('delete', ['id' => $employee->id]) }}" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-3 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<a href="{{ route('add') }}"  class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 my-button" >Add Employee</a>
<a href="{{ route('export') }}" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-3 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">export to excel</a>

    
</body>
</html>