<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Add Employee</title>
</head>
<body>
<form method="POST" action="{{ route('list') }}" enctype="multipart/form-data" class="w-full max-w-lg mx-auto">
    @csrf

    <!-- First Name -->
    <div class="mb-4">
        <label for="firstname" class="block text-gray-700 text-sm font-bold mb-2">First Name:</label>
        <input type="text" name="firstname" id="firstname" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- Last Name -->
    <div class="mb-4">
        <label for="lastname" class="block text-gray-700 text-sm font-bold mb-2">Last Name:</label>
        <input type="text" name="lastname" id="lastname" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- Date of Birth -->
    <div class="mb-4">
        <label for="date_of_birth" class="block text-gray-700 text-sm font-bold mb-2">Date of Birth:</label>
        <input type="date" name="date_of_birth" id="date_of_birth" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- Education Qualification -->
    <div class="mb-4">
        <label for="education_qualification" class="block text-gray-700 text-sm font-bold mb-2">Education Qualification:</label>
        <input type="text" name="education_qualification" id="education_qualification" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- Address -->
    <div class="mb-4">
        <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
        <textarea name="address" id="address" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
    </div>

    <!-- Email -->
    <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
        <input type="email" name="email" id="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- Phone -->
    <div class="mb-4">
        <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone:</label>
        <input type="text" name="phone" id="phone" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- Photo -->
    <div class="mb-4">
        <label for="photo" class="block text-gray-700 text-sm font-bold mb-2">Photo:</label>
        <input type="file" name="photo" id="photo" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- Resume -->
    <div class="mb-6">
        <label for="resume" class="block text-gray-700 text-sm font-bold mb-2">Resume:</label>
        <input type="file" name="resume" id="resume" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- Submit Button -->
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Submit
        </button>
    </div>
</form>

    
</body>
</html>