<a {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-blue-600 border border-black rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</a>
