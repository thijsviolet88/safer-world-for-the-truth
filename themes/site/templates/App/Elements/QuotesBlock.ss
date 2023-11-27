<section class="container text-center text-purple border-y divide-y-2 divide-y-black transistion-all duration-500 animate-fade animate-once animate-duration-500 animate-delay-500 animate-ease-in px-6">
    <% loop $Quotes %>
        <blockquote class="as-h2 font-light py-8 lg:py-12 ">
            "{$Quote}"
            <footer class="text-lg font-light mt-3">— {$Author}</footer>
        </blockquote>
    <% end_loop %>
</section>