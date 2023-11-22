<section class="container text-center space-y-8 px-6 lg:px-0 py-5 lg:space-y-10">
    <header class="space-y-2 animate-fade-down animate-duration-500 animate-delay-300 animate-ease-linear">
        <% if $ShowTitle %>
            <h2>{$Title}</h2>
        <% end_if %>
        <% if $DisplayName %>
            <a class="link-purple">His name was Golam Rabbani Nadim from Bangladesh</a>
        <% end_if %>
    </header>
    <div class="animate-fade-up animate-duration-300 animate-delay-300 animate-ease-linear font-light prose-a:text-purple prose-a:p-1 prose-a:underline hover:prose-a:bg-purple hover:prose-a:text-white prose-a:transistion-all prose-a:duration-300 xl:px-20">
        {$Subtext}
    </div>
</section>

