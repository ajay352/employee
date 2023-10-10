<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display_Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<div class="container mx-auto">
<h1 class="text-2xl font-semibold mb-4">{{ $employ->firstname }} {{ $employ->lastname }} Details</h1>
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
                

            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $employ->firstname }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $employ->lastname }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $employ->date_of_birth }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $employ->education_qualification }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $employ->address }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $employ->email }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $employ->phone }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <img src="{{ asset('storage/' . $employ->photo) }}" alt="Employee Photo" class="w-16 h-16 object-cover">
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <a href="{{ asset('storage/' . $employ->resume) }}" download>Download Resume</a>
                    </td>
                    
                </tr>
            
        </tbody>
    </table>
</div>
    
</body>
</html>