$ElementalArea
<section class="container space-y-10 text-center">
    <h2>
        Through our cold case investigations, we have provided relatives and loved ones of murdered journalists with a way to be heard; (re)open domestic criminal proceedings; and emboldened advocacy efforts.
    </h2>

    <h2>
        Our investigations and court hearings continue.
        Sign up to our <a class="link-purple" href="#">email list</a> to be periodically updated on our impact and investigations.
    </h2>
</section>
<section class="container">
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