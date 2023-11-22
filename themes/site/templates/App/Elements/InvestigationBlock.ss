<section class="container space-y-20 px-6 lg:px-24 py-5 lg:py-8">
    <% if $ShowTitle %>
        <header>
            <h2 class="font-light text-center">{$Title}</h2>
        </header>
    <% end_if %>
    <% if InvestigationList %>
        <ul class="flex flex-col gap-y-4 lg:grid grid-cols-3 gap-x-5">
            <% loop $InvestigationList %>
                <li>
                    <a href="$Link" class="bg-white-dark shadow-xl py-10 px-5 flex flex-col items-center space-y-4 cursour-pointer text-center hover:bg-purple hover:-translate-y-1 hover:shadow-2xl transistion-all duration-100">
                        <img src="{$Image.URL}" alt="{$Title}" alt="Investigation cover">
                        <header class="text-xl">
                            {$Title}
                            <time class="block italic" datetime="{$Date}">{$Date.Format('MMMM dd, yyyy')}</time>
                        </header>
                        <button class="btn">Read more</button>
                    </a>
                </li>
            <% end_loop %>
        </ul>
    <% end_if %>
</section>