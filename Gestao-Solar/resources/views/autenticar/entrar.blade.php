@extends('modelo')
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<section class="h-full">
    <div class="flex justify-center items-center h-5/6">
        <div class=" flex justify-center items-center h-4/5 border-solid border-2 border-transparent p-20 shadow-xl rounded-lg  bg-green-200">
            <div class="w-80 p-0">
                <div class="text-center">
                    <h1 class="text-4xl mb-9 mt-6 sm:hidden">Vistoria Solar <i class="fa-solid fa-sun"></i></h1>
                    <h3 class="text-xl">Informe seus dados</h3>
                </div>
                <form>
                    <div class="mb-6">
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                      <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Insira seu e-mail" required>
                    </div>
                    <div class="mb-6">
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Senha</label>
                      <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required placeholder="Insira sua senha">
                    </div>
                    <div class="flex justify-between mb-6">
                      <div class="flex items-center h-5">
                          <div>
                            <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                          </div>
                          <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lembrar-me</label>
                      </div>
                      <a href="" class="text-sm underline underline-offset-1 text-blue-700 font-medium">Esqueci a senha</a>
                    </div>
                    <button type="submit" class="w-full bg-green-500 h-10 rounded-lg hover:bg-green-400 text-lg">Entrar</button>
                    <div class="text-sm font-medium text-gray-900 dark:text-gray-300 mt-2">
                        Não registrado? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Crie sua conta</a>
                    </div>
                  </form>
            </div>
            <div class="text-center">
                <h1 class="text-4xl mb-9">Vistoria Solar<i class="fa-solid fa-sun"></i></h1>
                <img src="/pessoas.png" alt="energia" class="h-80 ml-20">
            </div>
        </div>
    </div>
    <footer class="p-4  bg-green-200 h-1/6">
        <div class="sm:flex sm:items-center sm:justify-center">
            <a href="#" class="flex items-center mb-4 sm:mb-0">
                <img src="/luz.png" class="mr-3 h-8" alt="Lumen Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-black">Lumen™</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400 ml-5">
                <li>
                    <a href="#" class="mr-4 text-2xl md:mr-6 "><i class="fa-brands fa-instagram hover:text-pink-500"></i></a>
                </li>
                <li>
                    <a href="#" class="mr-4 text-2xl md:mr-6 "><i class="fa-brands fa-facebook hover:text-sky-600"></i></a>
                </li>
                <li>
                    <a href="#" class="text-2xl"><i class="fa-brands fa-whatsapp hover:text-green-500"></i></a>
                </li>
                <li>
                    <a href="#" class="ml-4 hover:underline md:mr-6">Política de privacidade</a>
                </li>
            </ul>
        </div>
    
    </footer>
</section>
