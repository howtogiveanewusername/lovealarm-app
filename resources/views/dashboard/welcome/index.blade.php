<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Show Your Love</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-600 via-indigo-600 to-blue-500 min-h-screen flex items-center justify-center text-white font-sans">

  <div class="max-w-5xl w-full px-6 py-12 text-center bg-white/10 backdrop-blur-md rounded-2xl shadow-lg">
    <h1 class="text-4xl font-bold mb-4">Welcome to Connect ❤️</h1>
    <p class="text-lg mb-8">The most genuine way to meet someone real</p>

    <div class="flex justify-center gap-4 flex-wrap mb-10">
      <div class="bg-white rounded-xl shadow-xl overflow-hidden w-64">
        <img src="" alt="profile" class="w-full h-80 object-cover" />
        <div class="p-4 text-black">
          <h2 class="text-xl font-bold">Find Your Friends</h2>
          <p class="text-sm text-gray-600">Genuine profiles, no fake vibes.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-xl overflow-hidden w-64">
        <img src="" alt="profile" class="w-full h-80 object-cover" />
        <div class="p-4 text-black">
          <h2 class="text-xl font-bold">Meet People</h2>
          <p class="text-sm text-gray-600">Thousands waiting to connect.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-xl overflow-hidden w-64">
        <img src="" alt="profile" class="w-full h-80 object-cover" />
        <div class="p-4 text-black">
          <h2 class="text-xl font-bold">Made With Love</h2>
          <p class="text-sm text-gray-600">Built for real relationships.</p>
        </div>
      </div>
    </div>

    <a href="{{ route('register')}}" class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-full text-lg shadow-md transition">
      Start
    </a>
  </div>

</body>
</html>
