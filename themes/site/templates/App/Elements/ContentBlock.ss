<section class="<% if $BackgroundColor == "bg-black" %> bg-black text-white <% end_if %> animate-fade animate-once animate-duration-500 animate-delay-500 animate-ease-in">
    <div class="container space-y-6 lg:px-6 py-5 lg:py-8 <% if $Border%> border-y <% end_if %>">
        <header>
        <% if $ShowTitle %>
            <h2>{$Title}</h2>
        <% end_if %>
        </header>
        <div class="flex flex-col gap-y-5 lg:gap-x-10 lg:flex-row lg:jusitfy-between <% if $TextPosition %> lg:flex-row-reverse <% end_if %>">
            <div class="prose-h1:text-5xl prose-h1:leading-[4rem] prose-p:font-light prose-headings:leading-relaxed prose-p:text-2xl my-auto space-y-4 <% if $Image %> lg:w-1/2 <% else %> lg:w-3/4 <% end_if %>">
                {$Text}
            </div>
            <% if $Image %>
                <img class="w-1/2 h-96 object-fit" src="$Image.URL" loading="lazy" />
            <% end_if %>
        </div>
    </div>
</section>