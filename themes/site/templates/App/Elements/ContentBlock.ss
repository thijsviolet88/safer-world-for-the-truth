<section class="{$BackgroundColor} space-y-6 px-6 lg:px-0">
    <header>
        <% if $ShowTitle %>
            <h2>{$Title}</h2>
        <% end_if %>
    </header>
    <div class="flex flex-col gap-y-5 lg:gap-x-5 lg:flex-row">
        <p class="leading-12 my-auto w-full">
            {$Text}
        </p>
        <% if $Image %>
            <img class="w-full h-96 object-fit" src="$Image.URL" loading="lazy" />
        <% end_if %>
    </div>
</section>