<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>VERO - SEE YOU!</title>
  <script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
      darkMode: "",
    }
  </script><link rel="stylesheet" href="./assets/seeu.css">

</head>
<body>
<!-- partial:index.partial.html -->
<main>
    <div class="relative flex flex-col h-[100vh] items-center justify-center bg-white dark:bg-black transition-bg">
        <div class="absolute inset-0 overflow-hidden">
            <div class="jumbo absolute -inset-[10px] opacity-50"></div>
        </div>
        <h1 class="relative flex items-center text-5xl font-bold text-gray-800 dark:text-white dark:opacity-80 transition-colors">
            Auf
            <span class="ml-1 rounded-xl bg-current p-2 text-[0.7em] leading-none">
                <span class="text-white dark:text-black">Wiedersehen!</span>
            </span>
        </h1>
		<div class="mt-4">
		
		<button onclick="goToLoginPage()" class="px-3 py-1 border border-stone-200 rounded-full drop-shadow-sm text-sm text-stone-800">Go to Login Page</button>

<script>
    function goToLoginPage() {
        window.location.href = "auth/login.php";
    }
</script>
</div>
       
    </div>
</main>
<!-- partial -->
  <script  src="./js/script.js"></script>

</body>
</html>
