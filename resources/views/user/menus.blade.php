<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Menus</title>
  <!-- Include Tailwind CSS -->
  <link href="https://cdn.tailwindcss.com/2.2.16/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <div class="bg-white py-12 sm:py-8">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="text-center max-w-7xl lg:mx-0 mb-8">
        <h2 class="text-3xl font-bold tracking-center text-gray-900 sm:text-4xl">Restaurant Menus</h2>
      </div>
      <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <!-- Restaurant 1 -->
        <div class="bg-gray-100 rounded-lg shadow-lg p-6">
          <h3 class="text-lg font-semibold mb-4">Restaurant 1</h3>
          <ul class="menu-list">
            <li class="menu-item">Menu Item 1</li>
            <li class="menu-item">Menu Item 2</li>
            <li class="menu-item">Menu Item 3</li>
            <!-- Add more menu items here -->
          </ul>
        </div>

        <!-- Restaurant 2 -->
        <div class="bg-gray-100 rounded-lg shadow-lg p-6">
          <h3 class="text-lg font-semibold mb-4">Restaurant 2</h3>
          <ul class="menu-list">
            <li class="menu-item">Menu Item 1</li>
            <li class="menu-item">Menu Item 2</li>
            <li class="menu-item">Menu Item 3</li>
            <!-- Add more menu items here -->
          </ul>
        </div>

        <!-- Add more restaurants here -->

      </div>
    </div>
  </div>
</body>

</html>
