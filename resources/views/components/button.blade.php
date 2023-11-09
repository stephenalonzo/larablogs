<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-purple-700 border-2 border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-transparent hover:border-purple-700 hover:border-2 hover:text-purple-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
