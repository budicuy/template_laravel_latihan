<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-slate-200">
    <div class="container mx-autoo">
        <div class="flex justify-center h-screen items-center">
            <div class="bg-white p-10 rounded-lg shadow-lg border-2">

                <img class="rounded-full w-40 mx-auto" src="https://via.placeholder.com/300x300" alt="logo">

                <form class="text-xl" action="/login_proses" method="POST">
                    @csrf

                    <div class="mt-3">
                        <label>Email</label>
                        <input class="block bg-slate-200 rounded-lg border border-blue-400 p-2" type="text"
                            name="email" placeholder="Masukkan email">

                        @error('email')
                            <span class="mt-2 text-red-500 block">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label>Password</label>
                        <input class="block bg-slate-200 rounded-lg border border-blue-400 p-2" type="password"
                            name="password" placeholder="Masukkan password">

                        @error('password')
                            <span class="mt-2 text-red-500 block">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="bg-blue-500 px-10 py-2 rounded-lg text-white">
                            Login
                        </button>
                    </div>

                    <div class="mt-5 text-right">
                        Belum punya akun? <a href="/register" class="text-blue-500">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
