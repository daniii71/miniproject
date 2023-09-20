<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style> 
    body {
            background-image: url(https://smkbinusademak.sch.id/wp-content/uploads/2023/03/20230222_161021-scaled.jpg);
            background-size: cover; 
            background-repeat: no-repeat;
            background-attachment: fixed; 
        }
        .card-title {
            color: #fff;
        }
        .card {
            background-color: rgba(0, 0, 0, 0.2); 
            padding: 20px;
        }
        .logo {
            max-width: 200px;
            height: auto; 
            display: block; 
            margin: 0 auto 40px; 
        }
        .custom-button {
            font-size: 10px; 
            width: 150px
        }
        .footer {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            color: #fff; 
        }
        .ddd{
            text-align: center;
        }
    </style> 

<body class="flex min-h-screen justify-center items-center bg-black/50">
    <div class="flex flex-col w-1/3 p-6 h-1/2 rounded-md sm:p-10  dark:text-gray-100">
        <div class="mb-8 text-center">
            <h1 class="my-3 text-4xl font-bold"> REGISTER</h1>
        </div>
        <form action="<?php echo base_url(); ?>Auth/aksi_register" method="post" class="space-y-12">
            <div class="mb-3">
            <div class="ddd">
                <br>
                    <label for="email" class="block mb-2 text-sm" style="color:green">EMAIL</label>
                    <input type="email" name="email" id="email" placeholder="email" autocomplete="off"
                        class="w-full px-3 py-2 border rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100"
                        fdprocessedid="kq4yx">
                </div>
                <div class="ddd">
                    <br>
                    <label for="username" class="block mb-2 text-sm" style="color:orange">USERNAME </label>
                    <input type="username" name="username" id="username" placeholder=" username" autocomplete="off"
                        class="w-full px-3 py-2 border rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100"
                        fdprocessedid="kq4yx">
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <br>
                        <label for="password" class="text-sm">Password</label>
                        <a rel="noopener noreferrer" href="#" class="text-xs hover:underline dark:text-gray-400">Forgot</a>
                    </div>
                    <input type="password" name="password" id="password" placeholder=" password"
                        autocomplete="off"
                        class="w-full px-3 py-2 border rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100"
                        fdprocessedid="3gj54k">
                </div>
                <div>
                    <div class="flex justify-between mb-2">
                        <br>
                        <label for="role" class="text-sm" style="color:red">ROLE</label>
                        <a rel="noopener noreferrer" href="#" class="text-xs hover:underline dark:text-gray-400"></a>
                    </div>
                    <input type="role" name="role" id="role" placeholder=" role"
                        autocomplete="off"
                        class="w-full px-3 py-2 border rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100"
                        fdprocessedid="3gj54k">
                </div>
            </div>
            <div class="space-y-2">
                <div>
                    <br>
                    <button type="submit"
                        class="w-full px-8 py-3 font-semibold rounded-md dark:bg-violet-400 dark:text-gray-900"
                        fdprocessedid="r78vz9">register</button>
                </div>
                <br>
                <p class="px-6 text-sm text-center dark:text-gray-400">apakah sampean sudah ada akun 
                    <a rel="noopener noreferrer" href="./" class="hover:underline dark:text-violet-400">daftar</a>.
                </p>
            </div>
        </form>
    </div>
</body>

</html>