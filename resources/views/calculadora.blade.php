<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Moderno - Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen">

    <div class="bg-gray-800 p-8 rounded-2xl shadow-2xl w-full max-w-md border border-gray-700">
        <h1 class="text-2xl font-bold text-white mb-6 text-center">Calculadora <span class="text-indigo-500">PHP</span></h1>

        <form action="/calcular" method="POST" class="space-y-4">
            @csrf
            
            <div class="grid grid-cols-1 gap-4">
                <input type="number" name="num1" placeholder="Primeiro número" required
                    class="w-full bg-gray-700 border-none rounded-lg p-3 text-white placeholder-gray-400 focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                
                <select name="operacao" 
                    class="w-full bg-gray-700 border-none rounded-lg p-3 text-white focus:ring-2 focus:ring-indigo-500 outline-none transition-all cursor-pointer">
                    <option value="soma">Somar (+)</option>
                    <option value="sub">Subtrair (-)</option>
                    <option value="mult">Multiplicar (*)</option>
                    <option value="div">Dividir (/)</option>
                </select>

                <input type="number" name="num2" placeholder="Segundo número" required
                    class="w-full bg-gray-700 border-none rounded-lg p-3 text-white placeholder-gray-400 focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
            </div>

            <button type="submit" 
                class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-3 rounded-lg shadow-lg hover:shadow-indigo-500/20 transition-all duration-300">
                Calcular Resultado
            </button>
        </form>

        @isset($resultado)
            <div class="mt-8 p-4 bg-gray-700/50 border-l-4 border-indigo-500 rounded-r-lg animate-fade-in">
                <p class="text-gray-400 text-sm uppercase tracking-wider font-semibold">Resultado</p>
                <h2 class="text-3xl font-bold text-white mt-1">{{ $resultado }}</h2>
            </div>
        @endisset
    </div>

</body>
</html>