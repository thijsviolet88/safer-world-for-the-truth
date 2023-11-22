<section class="<% if $BackgroundColor == "bg-black" %> bg-black text-white <% end_if %> animate-fade animate-once animate-duration-500 animate-delay-500 animate-ease-in">
    <div class="container space-y-6 lg:px-6 py-5 lg:py-8 <% if $Border%> border-y <% end_if %>">
        <header>
        <% if $ShowTitle %>
            <h2>{$Title}</h2>
        <% end_if %>
        </header>
        <div class="flex flex-col gap-y-5 lg:gap-x-2 lg:flex-row lg:jusitfy-between <% if $TextPosition %> lg:flex-row-reverse <% end_if %>">
            <div class="prose-headings:leading-relaxed my-auto space-y-4 lg:w-1/2">
                {$Text}
            </div>
            <% if $Image %>
                <img class="w-full h-96 object-fit" src="$Image.URL" loading="lazy" />
            <% end_if %>
        </div>
    </div>
</section>